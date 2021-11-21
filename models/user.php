<?php

class User
{
    public static function register($firstname, $lastname, $email, $password) {

        $db = Db::getConnection();

        $sql = 'INSERT INTO user (first_name, last_name, email, password) '
            . 'VALUES (:firstname, :lastname, :email, :password)';

        $result = $db->prepare($sql);
        $result->bindParam(':firstname', $firstname, PDO::PARAM_STR );
        $result->bindParam(':lastname', $lastname, PDO::PARAM_STR );
        $result->bindParam(':email', $email, PDO::PARAM_STR );
        $result->bindParam(':password', $password, PDO::PARAM_STR );

        return $result->execute();

    }


// Name less than 2 symbols
    public static function checkFName($firstname) {
    if (strlen($firstname) >=2) {
        return true;
    }
    return false;
    }

    public static function checkLName($lastname) {
        if (strlen($lastname) >=2) {
            return true;
        }
        return false;
    }


    public static function checkPassword($password) {
        if (strlen($password) >=6) {
            return true;
        }
        return false;
    }

    public static function checkEmail ($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function checkEmailExists ($email) {

        $db = Db::getConnection();
        $sql = 'SELECT COUNT(*) FROM `user` WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email',$email, PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn())
            return true;
        return false;
    }


}
