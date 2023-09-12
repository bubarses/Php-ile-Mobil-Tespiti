<?php 

function isMobileDevice() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    $mobileKeywords = array(
        'Android', 'iPhone', 'iPad', 'BlackBerry', 'Windows Phone', 'Opera Mini', 'Mobile'
    );

    foreach ($mobileKeywords as $keyword) {
        if (stripos($userAgent, $keyword) !== false) {
            return true;
        }
    }

    return false;
}

?>