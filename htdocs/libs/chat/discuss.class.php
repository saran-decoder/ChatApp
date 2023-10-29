<?php

include_once __DIR__ . "/../traits/SQLGetterSetter.trait.php";

class Discuss
{
    use SQLGetterSetter;

    public static function sendMessage($message)
    {
        $conn = Database::getConnection();
        $userid = Session::getUser()->getID();
        $user = Session::getUser()->getUsername();
        $insertQuery = "INSERT INTO `discuss_msg` (`discuss_id`, `sender_id`, `message`, `timestamp`, `status`, `chat_block`, `msg_user`) VALUES (1, '$userid', '$message', now(), 0, 0, '$user')";
        try
        {
            return $conn->query($insertQuery);
        } catch (Exception $e)
        {
            echo "Error: {$e->getMessage()}";
            return false;
        }
    }

    public static function getMessages()
    {
        $conn = Database::getConnection();
        $MessageId = Session::getUser()->getID();
        $sql = "SELECT * FROM `discuss_msg` WHERE `id` = '$MessageId' ORDER BY `timestamp` DESC";
        $result = $conn->query($sql);
        $message = [];
        $row = $result->fetch_assoc();
        $message[] = $row;
        // die(var_dump($message));
        return $message;
        // return $message;
        // while ($row = $result->fetch_assoc()) {
        //     // $message[] = $row;
        //     return $message;
        // }
    }

    public static function getMsgInfo() {
        $owner = Session::getUser()->getUsername();
        $db = Database::getConnection();
        $sql = "SELECT * FROM `discuss_msg` WHERE `msg_user` = '$owner'";
        $result = $db->query($sql);
        return $result->fetch_assoc();
    }

    public static function getUserInfo() {
        $owner = Session::getUser()->getUsername();
        $db = Database::getConnection();
        $sql = "SELECT * FROM `users` WHERE `owner` = '$owner'";
        $result = $db->query($sql);
        return $result->fetch_assoc();
    }
}