<?php
date_default_timezone_set("Europe/Luxembourg");
/* 30 minutes timeout(in seconds) */
$timeout_duration = 1800;

ini_set('session.cookie_lifetime', 30 * 60);
ini_set('session.gc_maxlifetime', 30 * 60);
session_start();


// compare two parsed arrays of language tags and find the matches
function findMatches($accepted, $available) {
    $matches = array();
    $any = false;
    foreach ($accepted as $acceptedQuality => $acceptedValues) {
        $acceptedQuality = floatval($acceptedQuality);
        if ($acceptedQuality === 0.0) continue;
        foreach ($available as $availableQuality => $availableValues) {
            $availableQuality = floatval($availableQuality);
            if ($availableQuality === 0.0) continue;
            foreach ($acceptedValues as $acceptedValue) {
                if ($acceptedValue === '*') {
                    $any = true;
                }
                foreach ($availableValues as $availableValue) {
                    $matchingGrade = matchLanguage($acceptedValue, $availableValue);
                    if ($matchingGrade > 0) {
                        $q = (string) ($acceptedQuality * $availableQuality * $matchingGrade);
                        if (!isset($matches[$q])) {
                            $matches[$q] = array();
                        }
                        if (!in_array($availableValue, $matches[$q])) {
                            $matches[$q][] = $availableValue;
                        }
                    }
                }
            }
        }
    }
    if (count($matches) === 0 && $any) {
        $matches = $available;
    }
    krsort($matches);
    return $matches;
}

// compare two language tags and distinguish the degree of matching
function matchLanguage($a, $b) {
    $a = explode('-', $a);
    $b = explode('-', $b);
    for ($i=0, $n=min(count($a), count($b)); $i<$n; $i++) {
        if ($a[$i] !== $b[$i]) break;
    }
    return $i === 0 ? 0 : (float) $i / count($a);
}

// parse list of comma separated language tags and sort it by the quality value
function parseLanguageList($languageList) {
    if (is_null($languageList)) {
        if (!isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            return array();
        }
        $languageList = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    }
    $languages = array();
    $languageRanges = explode(',', trim($languageList));
    foreach ($languageRanges as $languageRange) {
        if (preg_match('/(\*|[a-zA-Z0-9]{1,8}(?:-[a-zA-Z0-9]{1,8})*)(?:\s*;\s*q\s*=\s*(0(?:\.\d{0,3})|1(?:\.0{0,3})))?/', trim($languageRange), $match)) {
            if (!isset($match[2])) {
                $match[2] = '1.0';
            } else {
                $match[2] = (string) floatval($match[2]);
            }
            if (!isset($languages[$match[2]])) {
                $languages[$match[2]] = array();
            }
            $languages[$match[2]][] = strtolower($match[1]);
        }
    }
    krsort($languages);
    return $languages;
}
// set $lang as choosen language in cookies and resets cookie timeout
function initSession($lang){
    ini_set('session.cookie_lifetime', 30 * 60);
    ini_set('session.gc_maxlifetime', 30 * 60);
    session_start();
    $_SESSION['start'] = time();
    $_SESSION['lang'] = $lang;
}

// /* Session cookie for animal.php */
// if (isset($_SESSION['dog_id']) && isset($_SESSION['dog_name'])) {
// //    echo "<script>console.log('session id and name set: " . $_SESSION['dog_id'] . ", " . $_SESSION['dog_name'] . "' );</script>";
//     if (isset($_POST['dog_id']) && !empty($_POST['dog_id'])) {
//         $_SESSION['dog_id'] = filter_input(INPUT_POST, 'dog_id', FILTER_SANITIZE_NUMBER_INT);
//     }
//     if (isset($_POST['dog_name']) && !empty($_POST['dog_name'])) {
//         $_SESSION['dog_name'] = filter_input(INPUT_POST, 'dog_name', FILTER_SANITIZE_STRING);
//     }
// } else {
//     session_start();
//     $_SESSION['dog_id'] = filter_input(INPUT_POST, 'dog_id', FILTER_SANITIZE_NUMBER_INT);
//     $_SESSION['dog_name'] = filter_input(INPUT_POST, 'dog_name', FILTER_SANITIZE_STRING);
// }
// $dog_id = $_SESSION['dog_id'];
// $dog_name = $_SESSION['dog_name'];

$url_lang = $_SERVER['REQUEST_URI'][0].$_SERVER['REQUEST_URI'][1].$_SERVER['REQUEST_URI'][2].$_SERVER['REQUEST_URI'][3];
/* Check if language is set in url */
if(strcmp($url_lang, '/en/') == 0 || strcmp($url_lang, '/de/') == 0 || strcmp($url_lang, '/lb/') == 0 || strcmp($url_lang, '/fr/') == 0 ){
    $lang = $url_lang[1].$url_lang[2];
    /* Check if language cookie is already set (session already running) */
    if (isset($_SESSION['lang'])) {
        /* Update lang cookie */
        $_SESSION['lang'] = $lang;
        /* Timeout (refresh session) */
        if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
            session_unset();
            session_destroy();
            initSession($lang);
        }
    } else {
        /* Session not running yet (init session)*/
        initSession($lang);
    }
} else {
    /* Language not specified in url */

    /* Check if language cookie is already set (session already running) */
    if (isset($_SESSION['lang'])) {
        $lang = $_SESSION['lang'];
        /* Timeout (refresh session) */
        if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
            session_unset();
            session_destroy();
            initSession($lang);
        }
    } else {
        /* Session not running yet (init session)*/
        /* Check for visitors accepted languages */
        $accepted = parseLanguageList($_SERVER['HTTP_ACCEPT_LANGUAGE']);
        $available = parseLanguageList('lb, fr, de, en');
        $matches = findMatches($accepted, $available);
        $preferedLanguage = reset($matches);
        if(!empty($preferedLanguage)) {
            $preferedLanguage = reset(reset($matches));
        } else {
            /* if no matching language found, use lb as default */
            $preferedLanguage = 'lb';
        }
        $lang = $preferedLanguage;
        initSession($lang);
    }
}
$lang = $_SESSION['lang'];
$_SESSION['LAST_ACTIVITY'] = time();

// /* Session already running */
// if (isset($_SESSION['lang'])) {
//     /* Updates language on current session if specified by user */
//     if (isset($_POST['lang']) && !empty($_POST['lang'])) {
//         if (filter_input(INPUT_POST, 'lang', FILTER_SANITIZE_STRING) == 'en' || filter_input(INPUT_POST, 'lang', FILTER_SANITIZE_STRING) == 'lb' || filter_input(INPUT_POST, 'lang', FILTER_SANITIZE_STRING) == 'de' || filter_input(INPUT_POST, 'lang', FILTER_SANITIZE_STRING) == 'fr') {
//             $_SESSION['lang'] = filter_input(INPUT_POST, 'lang', FILTER_SANITIZE_STRING);
//         }
//     }
//     /* Timeout */
//     if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
//         $lang = $_SESSION['lang'];
//         session_unset();
//         session_destroy();
//         ini_set('session.cookie_lifetime', 30 * 60);
//         ini_set('session.gc_maxlifetime', 30 * 60);
//         session_start();
//         $_SESSION['start'] = time();
//         $_SESSION['lang'] = $lang;
//         $lang = '';
//     }
// } else {
//     /* Session not running yet */
//     session_start();
//     $_SESSION['start'] = time();
//     /* Set specified or default language */
//     if (isset($_POST['lang']) && !empty($_POST['lang'])) {
//         $_SESSION['lang'] = filter_input(INPUT_POST, 'lang', FILTER_SANITIZE_STRING);
//     } else {
        
//         $accepted = parseLanguageList($_SERVER['HTTP_ACCEPT_LANGUAGE']);
//         $available = parseLanguageList('lb, fr, de, en');
//         $matches = findMatches($accepted, $available);
        
//         $preferedLanguage = reset($matches);
//         if(!empty($preferedLanguage)) {
//             $preferedLanguage = reset(reset($matches));
//         } else {
//             $preferedLanguage = 'lb';
//         }
//         $_SESSION['lang'] = $preferedLanguage;
//     }
// }
// $lang = $_SESSION['lang'];
// $_SESSION['LAST_ACTIVITY'] = time();
?>