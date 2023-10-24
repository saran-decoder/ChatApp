<?php

include_once __DIR__ . "/../traits/SQLGetterSetter.trait.php";

class Discuss
{
    use SQLGetterSetter;

    public static function sendMessage($message)
    {
        $conn = Database::getConnection();
        $userid = Session::getUser()->getID();
        $insertQuery = "INSERT INTO `discuss_msg` (`discuss_id`, `sender_id`, `message`, `timestamp`, `status`, `chat_block`) VALUES (1, '$userid', '$message', now(), 1, 0)";
        try
        {
            return $conn->query($insertQuery);
        } catch (Exception $e)
        {
            echo "Error: {$e->getMessage()}";
            return false;
        }
    }

    public static function getMessages($lastMessageId) {
        $conn = Database::getConnection();
        $sql = "SELECT * FROM `discuss_msg` WHERE `id` > '$lastMessageId' ORDER BY `timestamp` DESC";
        $result = $conn->query($sql);
        $message = [];
        while ($row = $result->fetch_assoc()) {
            $message[] = $row;
        }
        return $message;
    }
}