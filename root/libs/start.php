<?php

include_once 'includes/Database.class.php';
include_once 'includes/Session.class.php';
include_once 'includes/WebAPI.class.php';

$WebAPI = new WebAPI();
$WebAPI->initiateSession();

function getConfig($key, $default = false) {
    global $site_config;
    $Array = json_decode($site_config, true);
    if (isset($Array[$key])) {
        return $Array[$key];
    } else {
        return $default;
    }
}

?>