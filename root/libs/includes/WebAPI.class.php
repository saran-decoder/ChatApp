<?php

class WebAPI {
    public function __construct()
    {
        global $site_config;
        $_site_config_path = __DIR__ . '/../../../config/discussionconfig.json';
        $site_config = file_get_contents($_site_config_path);
        Database::getConnection();
    }

    public function initiateSession() {
        Session::start();
    }
}