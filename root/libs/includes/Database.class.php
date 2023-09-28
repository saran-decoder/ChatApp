<?php

class Database
{

    public static $conn = null;

    public static function getConnection()
    {

        if (Database::$conn == null)
        {
            
            $DB_Server = getConfig('DBServer');
            $DB_Name = getConfig('DBName');
            $DB_Password = getConfig('DBPassword');
            $DB_Schema = getConfig('DBSchema');

            // Create connection
            $connection = new mysqli($DB_Server, $DB_Name, $DB_Password, $DB_Schema);

            // Check connection
            if ($connection->connect_error) {
                die("Connection Failed: " . $connection->connect_error);
            } else {
                Database::$conn = $connection;
                return Database::$conn;
            }

        } else {
            return Database::$conn;
        }
    }
}