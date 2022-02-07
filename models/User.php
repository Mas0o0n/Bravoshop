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

    public static function checkEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function checkEmailExists($email) {

        $db = Db::getConnection();
        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email',$email, PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn())
            return true;
        return false;
        }


         public static function checkUserData($email, $password) {

        $db = Db::getConnection();
        $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':email',$email, PDO::PARAM_STR);
        $result->bindParam(':password',$password, PDO::PARAM_STR);
        $result->execute();

        $user = $result->fetch();
        if($user) {
            return $user['id'];
        }

        return false;
    }

    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }

    public static function checkLogged()
    {
       //if sessions exist, return user id
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        header("Location:/user/login");
    }

    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

    public static function getUserById($id)
    {
        if ($id) {
            $db = Db::getConnection();

            $sql = 'SELECT * FROM user WHERE id = :id';
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);

            //set that we got data as an array
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
        }
    }

    public static function edit($id, $fname, $lname, $password) {

        $db = Db::getConnection();

        $sql = "UPDATE user SET first_name = :fname, last_name = :lname, password = :password WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam('id', $id, PDO::PARAM_INT);
        $result->bindParam(':fname', $fname, PDO::PARAM_STR);
        $result->bindParam(':lname', $lname, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        return $result->execute();

       }


}
