<?php
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

/**
 * @author    Janis Osenieks
 */
if(!class_exists("OkSdk")){
class OkSdk
    {

        const API_AUTH_URL  = 'https://api.odnoklassniki.ru/oauth/token.do';
        const API_LOGIN_URL = 'https://www.odnoklassniki.ru/oauth/authorize';
        const API_BASE_URL  = 'https://api.odnoklassniki.ru/fb.do';

        private $host = "https://api.odnoklassniki.ru/fb.do";

        /**
         * @var string
         */
        private $clientId;

        /**
         * @var string
         */
        private $applicationKey;

        /**
         * @var string
         */
        private $clientSecret;

        /**
         * @var string
         */
        private $accessToken;

        /**
         * @var string
         */
        private $refreshToken;

        /**
         * @var Client
         */
        private $client;

        /**
         * @var array
         */
        private $scope;

        /**
         * @var string
         */
        private $redirectUri;

        /**
         * @param string $clientId
         * @param string $applicationKey
         * @param string $clientSecret
         * @param array  $scope
         * @param string $accessToken
         * @param string $refreshToken
         * @param array  $httpParams
         */
        public function __construct( $clientId, $applicationKey, $clientSecret, $scope, $accessToken = null, $refreshToken = null, $httpParams = [] )
        {
            $this->clientId       = $clientId;
            $this->applicationKey = $applicationKey;
            $this->clientSecret   = $clientSecret;
            $this->scope          = $scope;
            $this->accessToken    = $accessToken;
            $this->refreshToken   = $refreshToken;

            $this->client = new Client( array_merge( $httpParams, [
                'headers' => [
                    'Accept' => 'application/json',
                ]
            ] ) );
        }

        /**
         * @return string The URL for the login flow
         */
        public function getLoginUrl()
        {
            $params = [
                'client_id'     => $this->clientId,
                'response_type' => 'code',
                'redirect_uri'  => $this->redirectUri,
            ];

            if( $this->scope )
            {
                $params[ 'scope' ] = implode( ',', $this->scope );
            }

            return self::API_LOGIN_URL . '?' . http_build_query( $params );
        }


        /**
         * Set the URL to which the user will be redirected
         *
         * @param string $redirectUri
         *
         * @return $this
         */
        public function setRedirectUri( $redirectUri )
        {
            $this->redirectUri = $redirectUri;
            return $this;
        }

        public function authenticate( $code = null )
        {
            if( null === $code )
            {
                if( isset( $_GET[ 'code' ] ) )
                {
                    $code = $_GET[ 'code' ];
                }
            }

            $params = [
                'code'          => $code,
                'redirect_uri'  => $this->redirectUri,
                'grant_type'    => 'authorization_code',
                'client_id'     => $this->clientId,
                'client_secret' => $this->clientSecret
            ];

            $response          = $this->call( self::API_AUTH_URL, $params );

            if(isset($response[ 'access_token' ])){
                $this->accessToken = $response[ 'access_token' ];
                return $response;
            }else{
                return $response;
            }
        }

        public function renewAccessToken( $refresh_token = null )
        {
            $params = [
                'code'          => $refresh_token,
                'grant_type'    => 'refresh_token',
                'client_id'     => $this->clientId,
                'client_secret' => $this->clientSecret
            ];

            $response          = $this->call( self::API_AUTH_URL, $params );

            if(isset($response[ 'access_token' ])){
                $this->accessToken = $response[ 'access_token' ];
                return $response;
            }else{
                return $response;
            }
        }

        private function call( $url, array $params )
        {
            try
            {
                $response = $this->client->post( $url, [
                    'query' => $params,
                    'form'  => $params,
                ] )->getBody();
                if( !$response = json_decode( $response, true ) )
                {
                    throw new Exception( 'ResponseParseError' );
                }
                if( !empty( $response[ 'error_code' ] ) && !empty( $response[ 'error_msg' ] ) )
                {
                    throw new Exception( $response[ 'error_msg' ],
                        $response[ 'error_code' ] );
                }
                return $response;
            } catch( RequestException $e )
            {
                throw new Exception( $e->getMessage() );
            }
        }

        public function getUser()
        {
            $params = [
                'access_token'    => $this->accessToken,
                'application_key' => $this->applicationKey,
                'method'          => 'users.getCurrentUser',
                'sig'             => md5( 'application_key=' . $this->applicationKey . 'method=users.getCurrentUser' . md5( $this->accessToken . $this->clientSecret ) )
            ];

            return $this->call( self::API_BASE_URL, $params );
        }

        public function get_groups(){
            $params = [
                'access_token'    => $this->accessToken,
                'application_key' => $this->applicationKey,
                'count'           => 100,
                'method'          => 'group.getUserGroupsV2',
                'sig'             => md5( 'application_key=' . $this->applicationKey . 'count=100' . 'method=group.getUserGroupsV2' . md5( $this->accessToken . $this->clientSecret ) ),
            ];


            return $this->call( self::API_BASE_URL, $params );
        }

        public function get_group_info($gids = array()){
            $gids = implode(",", $gids);
            $method = 'group.getInfo';
            $params = [
                'uids'            => $gids,
                'fields'          => 'UID,NAME,PIC_AVATAR'
            ];

            return $this->makeRequest($method, $params);
        }

        public function buildUrl($method, $params)
        {
            $builtParams = $this->buildParams($method, $params);
            unset($builtParams['attachment']);
            $sig = $this->buildSig($builtParams);
            $url = $this->host .
                '?' . implode('&', $builtParams) .
                '&access_token=' . $this->accessToken .
                '&sig=' . $sig;

            return $url;
        }

        public function buildParams($method, $params)
        {
            $newParams = array_merge($params, [
                'application_key' => $this->applicationKey,
                'method' => $method,
            ]);
            ksort($newParams);
            return array_map(function ($key, $value) {
                return $key . '=' . $value;
            }, array_keys($newParams), array_values($newParams));
        }

        public function buildSig($params)
        {
            $suffix = md5($this->accessToken . $this->clientSecret);
            $sig = md5(implode('', $params) . $suffix);
            return $sig;
        }

        public function makeRequest($method, $params = [])
        {
            $url = $this->buildUrl($method, $params);
            $request = curl_init($url);
            curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec($request);
            $data = json_decode($response, true);
            curl_close($request);
            if (isset($data['error_code'])) {
                throw new Exception($data['error_msg']);
            }
            return $data;
        }

        // Массив аргументов в строку
        public function arInStr($array)
        {
            ksort($array);

            $string = "";

            foreach($array as $key => $val) {
                if (is_array($val)) {
                    $string .= $key."=".arInStr($val);
                } else {
                    $string .= $key."=".$val;
                }
            }

            return $string;
        }

        // Запрос
        public function getUrl($url, $type = "GET", $params = array(), $timeout = 30, $image = false, $decode = true){
            if ($ch = curl_init())
            {
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_HEADER, false);

                if ($type == "POST")
                {
                    curl_setopt($ch, CURLOPT_POST, true);

                    // Картинка
                    if ($image) {
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
                    }
                    // Обычный запрос       
                    elseif($decode) {
                        curl_setopt($ch, CURLOPT_POSTFIELDS, urldecode(http_build_query($params)));
                    }
                    // Текст
                    else {
                        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
                    }
                }

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
                curl_setopt($ch, CURLOPT_USERAGENT, 'PHP Bot');
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

                $data = curl_exec($ch);

                curl_close($ch);

                // Еще разок, если API завис
                if (isset($data['error_code']) && $data['error_code'] == 5000) {
                    $data = getUrl($url, $type, $params, $timeout, $image, $decode);
                }

                return $data;

            }
            else {
                return "{}";
            }
        }

        public function getAccessToken()
        {
            return $this->accessToken;
        }

        public function get_error($code){
            $codes = array(
                1 => "Unknown error",
                2 => "Service temporarily unavailable",
                3 => "Method does not exist",
                4 => "Failed to process the request, as it is incorrect",
                7 => "Requested action is temporarily blocked for the current user",
                8 => "Method execution is blocked due to flood",
                9 => "Method execution is blocked by IP address due to suspicious activity of the current user or due to other restrictions extending on this method",
                10 => "Permission is denied. A possible cause – the user did not authorize the application for the execution of the operation",
                11 => "Request call limit is reached",
                12 => "Operation is canceled by the user",
                21 => "Non multi-part request when adding photos",
                22 => "The user must activate their account",
                23 => "The user is not involved in the application",
                24 => "The user is not the owner of the object",
                25 => "Notification delivery error. The user is inactive in the application",
                26 => "Notification delivery error. Notification limit is reached",
                50 => "The user does not have administrative rights to execute this method",
                100 => "Missing or incorrect parameter",
                101 => "The application_key parameter is not indicated or indicated incorrectly",
                102 => "Session key has expired",
                103 => "Invalid session key",
                104 => "Invalid signature",
                105 => "Invalid resignature",
                106 => "Invalid discussion identifier",
                110 => "Invalid user identifier",
                120 => "Invalid album identifier",
                121 => "Invalid photo identifier",
                130 => "Invalid widget identifier",
                140 => "Invalid message identifier",
                141 => "Invalid comment identifier",
                150 => "Invalid event identifier",
                151 => "Invalid event photo identifier",
                160 => "Invalid group identifier",
                200 => "Application cannot execute this operation. In most cases, the cause is the attempt to access the operation without the user’s authorization",
                210 => "Application is disabled",
                211 => "Invalid choice identifier",
                212 => "Invalid badge identifier",
                213 => "Invalid present identifier",
                214 => "Invalid relation type identifier",
                300 => "Request information is not found",
                324 => "Error when processing a multi-part request",
                401 => "Authentication failure. Invalid username/password or authentication marker or the user is deleted/blocked",
                402 => "Authentication failure. Captcha must be entered to verify the user.",
                403 => "Authentication failure",
                451 => "Session key is indicated, but the method must be called outside the session",
                453 => "Session key is not indicated for a method that requires a session",
                454 => "Text is rejected by a censor",
                455 => "Operation cannot be executed, as a friend has set a restriction on it (put it on the black list or made their account private)",
                456 => "Operation cannot be executed, as the group has set a restriction on it",
                457 => "Unauthorized access",
                458 => "Same as FRIEND_RESTRICTION",
                500 => "The size of binary content of the image in bytes exceeds the limit",
                501 => "Image size in pixels is too small",
                502 => "Image size in pixels is too big",
                503 => "Image format cannot be recognized",
                504 => "Image format is recognized, but the content is corrupted",
                505 => "No image found in the request",
                508 => "Too many pins on the photo",
                511 => "Anti-spam check error",
                512 => "An attempt to upload a photo to someone else’s album",
                513 => "An attempt to upload a photo to an album that does not belong to the indicated group",
                600 => "Too many “media” parameters",
                601 => "Text length limit is reached",
                602 => "Poll question text length limit is reached",
                603 => "Too many answers to the poll",
                604 => "Poll answer text length limit is reached",
                605 => "Limit of marked friends is reached",
                606 => "Limit of marked friends is reached (user-specific)",
                610 => "Group join request is already registered",
                700 => "Comment is not found",
                701 => "An attempt to edit a comment that does not belong to the user",
                702 => "An attempt to edit a deleted commentName Code Description",
                704 => "Editing timeout is exceeded",
                705 => "Chat is not found",
                706 => "An attempt to edit a deleted message",
                900 => "Returns when trying to get open information for a non-existing application",
                1001 => "Error is returned by the application server to notify about incorrect information on transaction",
                1002 => "Payment is required to use the service",
                1003 => "Invalid payment transaction",
                1004 => "Payment requests are too frequent",
                1005 => "The user account does not have enough money",
                1101 => "Video chat is disabled",
                1102 => "The user is unavailable for video-chat or video message",
                1103 => "The indicated user must be a friend",
                1200 => "Batch call error",
                1300 => "Platforms for the application are notset",
                1301 => "The indicated device is not available",
                1302 => "Device is not indicated",
                1400 => "Location search error",
                1401 => "Location search error",
                2001 => "Invalid POST-content type (Graph API). Content-Type: application/json;charset=utf-8 should be specified",
                9999 => "Critical system error. Notify the support service",

            );

            if(isset($codes[$code])){
                return $codes[$code];
            }else{
                return "Unknown error";
            }
        }
    }
}