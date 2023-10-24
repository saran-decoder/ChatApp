<?php

require 'vendor/autoload.php';
include_once 'includes/Database.class.php';
include_once 'includes/Session.class.php';
include_once 'includes/WebAPI.class.php';
include_once 'includes/User.class.php';
include_once 'includes/UserSession.class.php';
include_once 'includes/API.class.php';
include_once 'includes/REST.class.php';
include_once 'chat/discuss.class.php';

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