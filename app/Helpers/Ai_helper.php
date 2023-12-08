<?php
if(!function_exists("wordsCount")){
    function wordsCount($text){
        $words = array_filter(explode(' ', preg_replace('/[^\w]/ui', ' ', mb_strtolower(trim($text)))));

        $wordsCount = 0;
        foreach ($words as $word) {
            $wordsCount += wordCount($word);
        }
        return round($wordsCount);
    }
}
if(!function_exists("wordCount")){
    function wordCount($word)
    {
        foreach (RATIOS as $ratio) {
            if (preg_match('/\p{' . implode('}|\p{', $ratio['scripts']) . '}/ui', $word)) {
                return mb_strlen($word) * $ratio['value'];
            }
        }

        return 1;
    }

}

if(!function_exists("documentModel")){
    function documentModel($post,$result,$count){
        if ($count) {
            $text = $result['message']['content'];
        } else {
            $text = $result['choices'][0]['message']['content'];
        }
        $wordsCount = wordsCount($text);
        $data = [
            'name'=>$post['name'].($count > 1 ? ' (' . $count .')' : ''),
            'user_id'=>get_user('id'),
            'template_id'=>$post['template_id'] ?? 1,
            'result'=>trim($text),
            'words'=>$wordsCount,
            'created_at'=>getCurrentTimeStamp(),
            'updated_at'=>getCurrentTimeStamp()
        ];

        $db = \Config\Database::connect();
        $insert = $db->table('documents')->insert($data);
        $insertedId = $db->insertID();
        $insertedRow = $db->table('documents')->where('id', $insertedId)->get()->getRow();
        return $insertedRow;
    }
}
if(!function_exists("fetchCompletions")){
    function fetchCompletions($post,$prompt){
        $url = 'https://api.openai.com/v1/chat/completions';
        $data = [
            'model' => OPENAI_COMPLETIONS_MODEL,
            'messages' => [
                [
                    'role' => 'user',
                    'content' => trim(preg_replace('/(?:\s{2,}+|[^\S ])/ui', ' ', $prompt))
                ]
            ],
            'temperature' => $post['creativity'] ? (float) $post['creativity'] : 0.5,
            'n' => $post['variations'] ? (float)$post['variations'] : 1,
            'frequency_penalty' => 0,
            'presence_penalty' => 0,
            'user' => 'user' . get_user('id')
        ];


        // Set cURL options
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
        curl_setopt($ch, CURLOPT_POST, true); // Set as POST request
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); // Set the JSON-encoded data as POST fields
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'User-Agent: ' . REQUEST_USER_AGENT,
            'Authorization: Bearer ' . OPEN_API_KEY,
            'Content-Type: application/json',
        ]);

        $response = curl_exec($ch);
        curl_close($ch);
        if (curl_errno($ch)) {
            return false;
        } else {
            return json_decode($response,true);
        }
    }
}

if(!function_exists("documentsStore")){
     function documentsStore($post,$prompt = null)
    {
        $response = fetchCompletions($post, $prompt);
        if (!empty($response)){
            $results = [];
            $i = 1;
            foreach ($response['choices'] as $result) {
                $results[] = documentModel($post, $result, $i);
                $i++;
            }
            return $results;
        }else{
            return false;
        }
    }
}