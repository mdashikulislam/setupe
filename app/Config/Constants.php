<?php

/*
 | --------------------------------------------------------------------
 | App Namespace
 | --------------------------------------------------------------------
 |
 | This defines the default Namespace that is used throughout
 | CodeIgniter to refer to the Application directory. Change
 | this constant to change the namespace that all application
 | classes should use.
 |
 | NOTE: changing this will require manually modifying the
 | existing namespaces of App\* namespaced-classes.
 */
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
 | --------------------------------------------------------------------------
 | Composer Path
 | --------------------------------------------------------------------------
 |
 | The path that Composer's autoload file is expected to live. By default,
 | the vendor folder is in the Root directory, but you can customize that here.
 */
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
 |--------------------------------------------------------------------------
 | Timing Constants
 |--------------------------------------------------------------------------
 |
 | Provide simple ways to work with the myriad of PHP functions that
 | require information to be in seconds.
 */
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2592000);
defined('YEAR')   || define('YEAR', 31536000);
defined('DECADE') || define('DECADE', 315360000);

/*
 | --------------------------------------------------------------------------
 | Exit Status Codes
 | --------------------------------------------------------------------------
 |
 | Used to indicate the conditions under which the script is exit()ing.
 | While there is no universal standard for error codes, there are some
 | broad conventions.  Three such conventions are mentioned below, for
 | those who wish to make use of them.  The CodeIgniter defaults were
 | chosen for the least overlap with these conventions, while still
 | leaving room for others to be defined in future versions and user
 | applications.
 |
 | The three main conventions used for determining exit status codes
 | are as follows:
 |
 |    Standard C/C++ Library (stdlibc):
 |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
 |       (This link also contains other GNU-specific conventions)
 |    BSD sysexits.h:
 |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
 |    Bash scripting:
 |       http://tldp.org/LDP/abs/html/exitcodes.html
 |
 */
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

/**
 * --------------------------------------------------------------------
 * Include Modules Routes Files
 * --------------------------------------------------------------------
 */
if (file_exists(ROOTPATH.'inc/plugins')) {
    $modulesPath = ROOTPATH.'inc/plugins/';
    $modules = scandir($modulesPath);

    foreach ($modules as $module) {
        if ($module === '.' || $module === '..') continue;
        if (is_dir($modulesPath) . '/' . $module) {
            $constantPath = $modulesPath . $module . '/Config/Constants.php';
            if (file_exists($constantPath)) {
                require($constantPath);
            } else {
                continue;
            }
        }
    }
}

if (file_exists(ROOTPATH.'inc/core')) {
    $modulesPath = ROOTPATH.'inc/core/';
    $modules = scandir($modulesPath);

    foreach ($modules as $module) {
        if ($module === '.' || $module === '..') continue;
        if (is_dir($modulesPath) . '/' . $module) {
            $constantPath = $modulesPath . $module . '/Config/Constants.php';
            if (file_exists($constantPath)) {
                require($constantPath);
            } else {
                continue;
            }
        }
    }
}

if (file_exists(ROOTPATH.'inc/themes/backend')) {
    $modulesPath = ROOTPATH.'inc/themes/backend/';
    $modules = scandir($modulesPath);

    foreach ($modules as $module) {
        if ($module === '.' || $module === '..') continue;
        if (is_dir($modulesPath) . '/' . $module) {
            $constantPath = $modulesPath . $module . '/Config/Constants.php';
            if (file_exists($constantPath)) {
                require($constantPath);
            } else {
                continue;
            }
        }
    }
}

if (file_exists(ROOTPATH.'inc/themes/frontend')) {
    $modulesPath = ROOTPATH.'inc/themes/frontend/';
    $modules = scandir($modulesPath);

    foreach ($modules as $module) {
        if ($module === '.' || $module === '..') continue;
        if (is_dir($modulesPath) . '/' . $module) {
            $constantPath = $modulesPath . $module . '/Config/Constants.php';
            if (file_exists($constantPath)) {
                require($constantPath);
            } else {
                continue;
            }
        }
    }
}

const LANGUAGE_ARRAY = [
    'aa' => ['name' => 'Afar', 'iso' => 'Afar', 'rtl' => 0],
    'ab' => ['name' => 'Аҧсуа', 'iso' => 'Abkhazian', 'rtl' => 0],
    'af' => ['name' => 'Afrikaans', 'iso' => 'Afrikaans', 'rtl' => 0],
    'ak' => ['name' => 'Akana', 'iso' => 'Akan', 'rtl' => 0],
    'am' => ['name' => 'አማርኛ', 'iso' => 'Amharic', 'rtl' => 0],
    'an' => ['name' => 'Aragonés', 'iso' => 'Aragonese', 'rtl' => 0],
    'ar' => ['name' => 'العربية', 'iso' => 'Arabic', 'rtl' => 1],
    'as' => ['name' => 'অসমীয়া', 'iso' => 'Assamese', 'rtl' => 0],
    'av' => ['name' => 'Авар', 'iso' => 'Avar', 'rtl' => 0],
    'ay' => ['name' => 'Aymar', 'iso' => 'Aymara', 'rtl' => 0],
    'az' => ['name' => 'Azərbaycanca / آذربايجان', 'iso' => 'Azerbaijani', 'rtl' => 0],
    'ba' => ['name' => 'Башҡорт', 'iso' => 'Bashkir', 'rtl' => 0],
    'be' => ['name' => 'Беларуская', 'iso' => 'Belarusian', 'rtl' => 0],
    'bg' => ['name' => 'Български', 'iso' => 'Bulgarian', 'rtl' => 0],
    'bh' => ['name' => 'भोजपुरी', 'iso' => 'Bihari', 'rtl' => 0],
    'bi' => ['name' => 'Bislama', 'iso' => 'Bislama', 'rtl' => 0],
    'bm' => ['name' => 'Bamanankan', 'iso' => 'Bambara', 'rtl' => 0],
    'bn' => ['name' => 'বাংলা', 'iso' => 'Bengali', 'rtl' => 0],
    'bo' => ['name' => 'བོད་ཡིག / Bod skad', 'iso' => 'Tibetan', 'rtl' => 0],
    'br' => ['name' => 'Brezhoneg', 'iso' => 'Breton', 'rtl' => 0],
    'bs' => ['name' => 'Bosanski', 'iso' => 'Bosnian', 'rtl' => 0],
    'ca' => ['name' => 'Català', 'iso' => 'Catalan', 'rtl' => 0],
    'ce' => ['name' => 'Нохчийн', 'iso' => 'Chechen', 'rtl' => 0],
    'ch' => ['name' => 'Chamoru', 'iso' => 'Chamorro', 'rtl' => 0],
    'co' => ['name' => 'Corsu', 'iso' => 'Corsican', 'rtl' => 0],
    'cr' => ['name' => 'Nehiyaw', 'iso' => 'Cree', 'rtl' => 0],
    'cs' => ['name' => 'Česky', 'iso' => 'Czech', 'rtl' => 0],
    'cu' => ['name' => 'словѣньскъ / slověnĭskŭ', 'iso' => 'Old Church Slavonic / Old Bulgarian', 'rtl' => 0],
    'cv' => ['name' => 'Чăваш', 'iso' => 'Chuvash', 'rtl' => 0],
    'cy' => ['name' => 'Cymraeg', 'iso' => 'Welsh', 'rtl' => 0],
    'da' => ['name' => 'Dansk', 'iso' => 'Danish', 'rtl' => 0],
    'de' => ['name' => 'Deutsch', 'iso' => 'German', 'rtl' => 0],
    'dv' => ['name' => 'ދިވެހިބަސް', 'iso' => 'Divehi', 'rtl' => 1],
    'dz' => ['name' => 'ཇོང་ཁ', 'iso' => 'Dzongkha', 'rtl' => 0],
    'ee' => ['name' => 'Ɛʋɛ', 'iso' => 'Ewe', 'rtl' => 0],
    'el' => ['name' => 'Ελληνικά', 'iso' => 'Greek', 'rtl' => 0],
    'en' => ['name' => 'English', 'iso' => 'English', 'rtl' => 0],
    'eo' => ['name' => 'Esperanto', 'iso' => 'Esperanto', 'rtl' => 0],
    'es' => ['name' => 'Español', 'iso' => 'Spanish', 'rtl' => 0],
    'et' => ['name' => 'Eesti', 'iso' => 'Estonian', 'rtl' => 0],
    'eu' => ['name' => 'Euskara', 'iso' => 'Basque', 'rtl' => 0],
    'fa' => ['name' => 'فارسی', 'iso' => 'Persian', 'rtl' => 1],
    'ff' => ['name' => 'Fulfulde', 'iso' => 'Peul', 'rtl' => 0],
    'fi' => ['name' => 'Suomi', 'iso' => 'Finnish', 'rtl' => 0],
    'fj' => ['name' => 'Na Vosa Vakaviti', 'iso' => 'Fijian', 'rtl' => 0],
    'fo' => ['name' => 'Føroyskt', 'iso' => 'Faroese', 'rtl' => 0],
    'fr' => ['name' => 'Français', 'iso' => 'French', 'rtl' => 0],
    'fy' => ['name' => 'Frysk', 'iso' => 'West Frisian', 'rtl' => 0],
    'ga' => ['name' => 'Gaeilge', 'iso' => 'Irish', 'rtl' => 0],
    'gd' => ['name' => 'Gàidhlig', 'iso' => 'Scottish Gaelic', 'rtl' => 0],
    'gl' => ['name' => 'Galego', 'iso' => 'Galician', 'rtl' => 0],
    'gn' => ['name' => 'Avañe\'ẽ', 'iso' => 'Guarani', 'rtl' => 0],
    'gu' => ['name' => 'ગુજરાતી', 'iso' => 'Gujarati', 'rtl' => 0],
    'gv' => ['name' => 'Gaelg', 'iso' => 'Manx', 'rtl' => 0],
    'ha' => ['name' => 'هَوُسَ', 'iso' => 'Hausa', 'rtl' => 1],
    'he' => ['name' => 'עברית', 'iso' => 'Hebrew', 'rtl' => 1],
    'hi' => ['name' => 'हिन्दी', 'iso' => 'Hindi', 'rtl' => 0],
    'ho' => ['name' => 'Hiri Motu', 'iso' => 'Hiri Motu', 'rtl' => 0],
    'hr' => ['name' => 'Hrvatski', 'iso' => 'Croatian', 'rtl' => 0],
    'ht' => ['name' => 'Krèyol ayisyen', 'iso' => 'Haitian', 'rtl' => 0],
    'hu' => ['name' => 'Magyar', 'iso' => 'Hungarian', 'rtl' => 0],
    'hy' => ['name' => 'Հայերեն', 'iso' => 'Armenian', 'rtl' => 0],
    'hz' => ['name' => 'Otsiherero', 'iso' => 'Herero', 'rtl' => 0],
    'ia' => ['name' => 'Interlingua', 'iso' => 'Interlingua', 'rtl' => 0],
    'id' => ['name' => 'Bahasa Indonesia', 'iso' => 'Indonesian', 'rtl' => 0],
    'ie' => ['name' => 'Interlingue', 'iso' => 'Interlingue', 'rtl' => 0],
    'ig' => ['name' => 'Igbo', 'iso' => 'Igbo', 'rtl' => 0],
    'ii' => ['name' => 'ꆇꉙ / 四川彝语', 'iso' => 'Sichuan Yi', 'rtl' => 0],
    'ik' => ['name' => 'Iñupiak', 'iso' => 'Inupiak', 'rtl' => 0],
    'io' => ['name' => 'Ido', 'iso' => 'Ido', 'rtl' => 0],
    'is' => ['name' => 'Íslenska', 'iso' => 'Icelandic', 'rtl' => 0],
    'it' => ['name' => 'Italiano', 'iso' => 'Italian', 'rtl' => 0],
    'iu' => ['name' => 'ᐃᓄᒃᑎᑐᑦ', 'iso' => 'Inuktitut', 'rtl' => 0],
    'ja' => ['name' => '日本語', 'iso' => 'Japanese', 'rtl' => 0],
    'jv' => ['name' => 'Basa Jawa', 'iso' => 'Javanese', 'rtl' => 0],
    'ka' => ['name' => 'ქართული', 'iso' => 'Georgian', 'rtl' => 0],
    'kg' => ['name' => 'KiKongo', 'iso' => 'Kongo', 'rtl' => 0],
    'ki' => ['name' => 'Gĩkũyũ', 'iso' => 'Kikuyu', 'rtl' => 0],
    'kj' => ['name' => 'Kuanyama', 'iso' => 'Kuanyama', 'rtl' => 0],
    'kk' => ['name' => 'Қазақша', 'iso' => 'Kazakh', 'rtl' => 0],
    'kl' => ['name' => 'Kalaallisut', 'iso' => 'Greenlandic', 'rtl' => 0],
    'km' => ['name' => 'ភាសាខ្មែរ', 'iso' => 'Cambodian', 'rtl' => 0],
    'kn' => ['name' => 'ಕನ್ನಡ', 'iso' => 'Kannada', 'rtl' => 0],
    'ko' => ['name' => '한국어', 'iso' => 'Korean', 'rtl' => 0],
    'kr' => ['name' => 'Kanuri', 'iso' => 'Kanuri', 'rtl' => 0],
    'ks' => ['name' => 'कश्मीरी / كشميري', 'iso' => 'Kashmiri', 'rtl' => 1],
    'ku' => ['name' => 'Kurdî / كوردی', 'iso' => 'Kurdish', 'rtl' => 1],
    'kv' => ['name' => 'Коми', 'iso' => 'Komi', 'rtl' => 0],
    'kw' => ['name' => 'Kernewek', 'iso' => 'Cornish', 'rtl' => 0],
    'ky' => ['name' => 'Kırgızca / Кыргызча', 'iso' => 'Kirghiz', 'rtl' => 0],
    'la' => ['name' => 'Latina', 'iso' => 'Latin', 'rtl' => 0],
    'lb' => ['name' => 'Lëtzebuergesch', 'iso' => 'Luxembourgish', 'rtl' => 0],
    'lg' => ['name' => 'Luganda', 'iso' => 'Ganda', 'rtl' => 0],
    'li' => ['name' => 'Limburgs', 'iso' => 'Limburgian', 'rtl' => 0],
    'ln' => ['name' => 'Lingála', 'iso' => 'Lingala', 'rtl' => 0],
    'lo' => ['name' => 'ລາວ / Pha xa lao', 'iso' => 'Laotian', 'rtl' => 0],
    'lt' => ['name' => 'Lietuvių', 'iso' => 'Lithuanian', 'rtl' => 0],
    'lu' => ['name' => 'Tshiluba', 'iso' => 'Luba-Katanga', 'rtl' => 0],
    'lv' => ['name' => 'Latviešu', 'iso' => 'Latvian', 'rtl' => 0],
    'mg' => ['name' => 'Malagasy', 'iso' => 'Malagasy', 'rtl' => 0],
    'mh' => ['name' => 'Kajin Majel / Ebon', 'iso' => 'Marshallese', 'rtl' => 0],
    'mi' => ['name' => 'Māori', 'iso' => 'Maori', 'rtl' => 0],
    'mk' => ['name' => 'Македонски', 'iso' => 'Macedonian', 'rtl' => 0],
    'ml' => ['name' => 'മലയാളം', 'iso' => 'Malayalam', 'rtl' => 0],
    'mn' => ['name' => 'Монгол', 'iso' => 'Mongolian', 'rtl' => 0],
    'mo' => ['name' => 'Moldovenească', 'iso' => 'Moldovan', 'rtl' => 0],
    'mr' => ['name' => 'मराठी', 'iso' => 'Marathi', 'rtl' => 0],
    'ms' => ['name' => 'Bahasa Melayu', 'iso' => 'Malay', 'rtl' => 0],
    'mt' => ['name' => 'bil-Malti', 'iso' => 'Maltese', 'rtl' => 0],
    'my' => ['name' => 'မြန်မာစာ', 'iso' => 'Burmese', 'rtl' => 0],
    'na' => ['name' => 'Dorerin Naoero', 'iso' => 'Nauruan', 'rtl' => 0],
    'nb' => ['name' => 'Norsk bokmål', 'iso' => 'Norwegian Bokmål', 'rtl' => 0],
    'nd' => ['name' => 'Sindebele', 'iso' => 'North Ndebele', 'rtl' => 0],
    'ne' => ['name' => 'नेपाली', 'iso' => 'Nepali', 'rtl' => 0],
    'ng' => ['name' => 'Oshiwambo', 'iso' => 'Ndonga', 'rtl' => 0],
    'nl' => ['name' => 'Nederlands', 'iso' => 'Dutch', 'rtl' => 0],
    'nn' => ['name' => 'Norsk nynorsk', 'iso' => 'Norwegian Nynorsk', 'rtl' => 0],
    'no' => ['name' => 'Norsk', 'iso' => 'Norwegian', 'rtl' => 0],
    'nr' => ['name' => 'isiNdebele', 'iso' => 'South Ndebele', 'rtl' => 0],
    'nv' => ['name' => 'Diné bizaad', 'iso' => 'Navajo', 'rtl' => 0],
    'ny' => ['name' => 'Chi-Chewa', 'iso' => 'Chichewa', 'rtl' => 0],
    'oc' => ['name' => 'Occitan', 'iso' => 'Occitan', 'rtl' => 0],
    'oj' => ['name' => 'ᐊᓂᔑᓈᐯᒧᐎᓐ / Anishinaabemowin', 'iso' => 'Ojibwa', 'rtl' => 0],
    'om' => ['name' => 'Oromoo', 'iso' => 'Oromo', 'rtl' => 0],
    'or' => ['name' => 'ଓଡ଼ିଆ', 'iso' => 'Oriya', 'rtl' => 0],
    'os' => ['name' => 'Иронау', 'iso' => 'Ossetian / Ossetic', 'rtl' => 0],
    'pa' => ['name' => 'ਪੰਜਾਬੀ / पंजाबी / پنجابي', 'iso' => 'Panjabi / Punjabi', 'rtl' => 0],
    'pi' => ['name' => 'Pāli / पाऴि', 'iso' => 'Pali', 'rtl' => 0],
    'pl' => ['name' => 'Polski', 'iso' => 'Polish', 'rtl' => 0],
    'ps' => ['name' => 'پښتو', 'iso' => 'Pashto', 'rtl' => 1],
    'pt' => ['name' => 'Português', 'iso' => 'Portuguese', 'rtl' => 0],
    'qu' => ['name' => 'Runa Simi', 'iso' => 'Quechua', 'rtl' => 0],
    'rm' => ['name' => 'Rumantsch', 'iso' => 'Raeto Romance', 'rtl' => 0],
    'rn' => ['name' => 'Kirundi', 'iso' => 'Kirundi', 'rtl' => 0],
    'ro' => ['name' => 'Română', 'iso' => 'Romanian', 'rtl' => 0],
    'ru' => ['name' => 'Русский', 'iso' => 'Russian', 'rtl' => 0],
    'rw' => ['name' => 'Kinyarwandi', 'iso' => 'Rwandi', 'rtl' => 0],
    'sa' => ['name' => 'संस्कृतम्', 'iso' => 'Sanskrit', 'rtl' => 0],
    'sc' => ['name' => 'Sardu', 'iso' => 'Sardinian', 'rtl' => 0],
    'sd' => ['name' => 'सिनधि', 'iso' => 'Sindhi', 'rtl' => 0],
    'se' => ['name' => 'Sámegiella', 'iso' => 'Northern Sami', 'rtl' => 0],
    'sg' => ['name' => 'Sängö', 'iso' => 'Sango', 'rtl' => 0],
    'sh' => ['name' => 'Srpskohrvatski / Српскохрватски', 'iso' => 'Serbo-Croatian', 'rtl' => 0],
    'si' => ['name' => 'සිංහල', 'iso' => 'Sinhalese', 'rtl' => 0],
    'sk' => ['name' => 'Slovenčina', 'iso' => 'Slovak', 'rtl' => 0],
    'sl' => ['name' => 'Slovenščina', 'iso' => 'Slovenian', 'rtl' => 0],
    'sm' => ['name' => 'Gagana Samoa', 'iso' => 'Samoan', 'rtl' => 0],
    'sn' => ['name' => 'chiShona', 'iso' => 'Shona', 'rtl' => 0],
    'so' => ['name' => 'Soomaaliga', 'iso' => 'Somalia', 'rtl' => 0],
    'sq' => ['name' => 'Shqip', 'iso' => 'Albanian', 'rtl' => 0],
    'sr' => ['name' => 'Српски', 'iso' => 'Serbian', 'rtl' => 0],
    'ss' => ['name' => 'SiSwati', 'iso' => 'Swati', 'rtl' => 0],
    'st' => ['name' => 'Sesotho', 'iso' => 'Southern Sotho', 'rtl' => 0],
    'su' => ['name' => 'Basa Sunda', 'iso' => 'Sundanese', 'rtl' => 0],
    'sv' => ['name' => 'Svenska', 'iso' => 'Swedish', 'rtl' => 0],
    'sw' => ['name' => 'Kiswahili', 'iso' => 'Swahili', 'rtl' => 0],
    'ta' => ['name' => 'தமிழ்', 'iso' => 'Tamil', 'rtl' => 0],
    'te' => ['name' => 'తెలుగు', 'iso' => 'Telugu', 'rtl' => 0],
    'tg' => ['name' => 'Тоҷикӣ', 'iso' => 'Tajik', 'rtl' => 0],
    'th' => ['name' => 'ไทย / Phasa Thai', 'iso' => 'Thai', 'rtl' => 0],
    'ti' => ['name' => 'ትግርኛ', 'iso' => 'Tigrinya', 'rtl' => 0],
    'tk' => ['name' => 'Туркмен / تركمن', 'iso' => 'Turkmen', 'rtl' => 0],
    'tl' => ['name' => 'Tagalog', 'iso' => 'Tagalog / Filipino', 'rtl' => 0],
    'tn' => ['name' => 'Setswana', 'iso' => 'Tswana', 'rtl' => 0],
    'to' => ['name' => 'Lea Faka-Tonga', 'iso' => 'Tonga', 'rtl' => 0],
    'tr' => ['name' => 'Türkçe', 'iso' => 'Turkish', 'rtl' => 0],
    'ts' => ['name' => 'Xitsonga', 'iso' => 'Tsonga', 'rtl' => 0],
    'tt' => ['name' => 'Tatarça', 'iso' => 'Tatar', 'rtl' => 0],
    'tw' => ['name' => 'Twi', 'iso' => 'Twi', 'rtl' => 0],
    'ty' => ['name' => 'Reo Mā`ohi', 'iso' => 'Tahitian', 'rtl' => 0],
    'ug' => ['name' => 'Uyƣurqə / ئۇيغۇرچە', 'iso' => 'Uyghur', 'rtl' => 0],
    'uk' => ['name' => 'Українська', 'iso' => 'Ukrainian', 'rtl' => 0],
    'ur' => ['name' => 'اردو', 'iso' => 'Urdu', 'rtl' => 1],
    'uz' => ['name' => 'Ўзбек', 'iso' => 'Uzbek', 'rtl' => 0],
    've' => ['name' => 'Tshivenḓa', 'iso' => 'Venda', 'rtl' => 0],
    'vi' => ['name' => 'Tiếng Việt', 'iso' => 'Vietnamese', 'rtl' => 0],
    'vo' => ['name' => 'Volapük', 'iso' => 'Volapük', 'rtl' => 0],
    'wa' => ['name' => 'Walon', 'iso' => 'Walloon', 'rtl' => 0],
    'wo' => ['name' => 'Wollof', 'iso' => 'Wolof', 'rtl' => 0],
    'xh' => ['name' => 'isiXhosa', 'iso' => 'Xhosa', 'rtl' => 0],
    'yi' => ['name' => 'ייִדיש', 'iso' => 'Yiddish', 'rtl' => 1],
    'yo' => ['name' => 'Yorùbá', 'iso' => 'Yoruba', 'rtl' => 0],
    'za' => ['name' => 'Cuengh / Tôô / 壮语', 'iso' => 'Zhuang', 'rtl' => 0],
    'zh' => ['name' => '中文', 'iso' => 'Chinese', 'rtl' => 0],
    'zu' => ['name' => 'isiZulu', 'iso' => 'Zulu', 'rtl' => 0]
];
define('REQUEST_USER_AGENT',getenv('REQUEST_USER_AGENT') ? :  'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36');
define('OPEN_API_KEY',getenv('OPEN_API_KEY') ? :'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');
define('OPENAI_COMPLETIONS_MODEL',getenv('OPENAI_COMPLETIONS_MODEL') ? :'gpt-3.5-turbo');

const RATIOS = [
    [
        'scripts' => [
            'Hiragana',
            'Katakana',
            'Han'
        ],
        'value' => 0.75
    ], [
        'scripts' => [
            'Hangul'
        ],
        'value' => 0.50
    ], [
        'scripts' => [
            'Khmer',
            'Lao',
            'Thai'
        ],
        'value' => 0.25
    ]
];