<?php

require_once 'Database.class.php';
include_once __DIR__ . "/../traits/SQLGetterSetter.trait.php";

class User
{

    use SQLGetterSetter;
    
    private $conn;
    public $id;
    public $username;
    public $table;

    public static function signup($user, $email, $pass, $avatar)
    {
        if (is_file($avatar) and exif_imagetype($avatar) !== false)
        {
            $avatar_name = md5($user.time()) . image_type_to_extension(exif_imagetype($avatar));
            $avatar_part = getConfig('avatar_path') . $avatar_name;
            if (move_uploaded_file($avatar, $avatar_part))
            {
                $avatar_data = "/avatar/$avatar_name";
                $conn = Database::getConnection();
                $options = [
                    'cost' => 9,
                ];
                $pass = password_hash($pass, PASSWORD_BCRYPT, $options);
                $user_info = "INSERT INTO `auth` (`username`, `password`, `email`) VALUES ('$user', '$pass', '$email')";
                if ($conn->query($user_info))
                {
                    $userid = mysqli_insert_id($conn);
                    $user_avatar = "INSERT INTO `users` (`userid`, `avatar`, `owner`) VALUES ('$userid', '$avatar_data', '$user')";
                    try {
                        return $conn->query($user_avatar);
                    } catch (Exception $e) {
                        echo "Errot: " . $e->getMessage();
                        return false;
                    }
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            throw new Exception("Avatar not uploaded check image extension");
        }
    }


    public static function login($user, $pass)
    {
        $query = "SELECT * FROM `auth` WHERE `username` = '$user' OR `email` = '$user'";
        $conn = Database::getConnection();
        $result = $conn->query($query);
        if ($result->num_rows == 1)
        {
            $row = $result->fetch_assoc();
            if (password_verify($pass, $row['password']))
            {
                return $row['username'];
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    //User object can be constructed with both UserID and Username.
    public function __construct($username)
    {
        //TODO: Write the code to fetch user data from Database for the given username. If username is not present, throw Exception.
        $this->conn = Database::getConnection();
        //TODO: Change this if username param is an email
        $this->username = $username;
        $this->id = null;
        $this->table = 'auth';
        $sql = "SELECT `id` FROM `auth` WHERE `username`= '$username' OR `id` = '$username' OR `email` = '$username' LIMIT 1";
        $result = $this->conn->query($sql);
        if ($result->num_rows) {
            $row = $result->fetch_assoc();
            $this->id = $row['id']; //Updating this from database
        } else {
            throw new Exception("Username does't exist");
        }
    }
}