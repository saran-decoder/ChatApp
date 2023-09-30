<?php

use Session as GlobalSession;

class Session {

    public static $isError = false;
    public static $user = null;
    public static $usersession = null;

    public static function start()
    {
        session_start();
    }

    public static function destroy()
    {
        session_destroy();
    }

    public static function unset()
    {
        session_unset();
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function delete($key)
    {
        unset($_SESSION[$key]);
    }

    public static function isset($key)
    {
        return isset($_SESSION[$key]);
    }

    public static function getUser()
    {
        return Session::$user;
    }

    public static function getUserSession()
    {
        return Session::$usersession;
    }

    public static function currentScript()
    {
        return basename($_SERVER['SCRIPT_NAME'], '.php');
    }

    public static function get($key, $default = false)
    {
        if (Session::isset($key)) {
            return $_SESSION[$key];
        } else {
            return $default;
        }
    }

    public static function loadPage($name)
    {
        $script = $_SERVER['DOCUMENT_ROOT'] . getConfig('root_path') . "_templates/$name.php";
        if (is_file($script)) {
            include $script;
        } else {
            Session::loadPage('_error');
        }
    }

    public static function renderPage()
    {
        return Session::loadPage('_Global');
    }

    public static function isAuthenticated()
    {
        //TODO: Is it a correct implementation? Change with instanceof
        if (is_object(Session::getUserSession())) {
            return Session::getUserSession()->isValid();
        }
        return false;
    }

    public static function ensureLogin()
    {
        if (!Session::isAuthenticated()) {
            Session::set('_redirect', $_SERVER['REQUEST_URI']);
            header("Location: /");
            die();
        }
    }
}