<?php

class CabinetController
{

    public function actionIndex()

    {

        $userId = User::checkLogged();

        $user = User::getUserById($userId);

         require_once(ROOT . '/views/cabinet/index.php');

      return true;

    }

    public function actionEdit()
    {
        //get user ID from session
        $userId = User::checkLogged();

        // get user info from database
        $user = User::getUserById($userId);

        $fname = $user['first_name'];
        $lname = $user['last_name'];
        $password = $user['password'];
        $result = false;

        if (isset($_POST['submit'])) {
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkFName($fname)) {
                $errors[] = 'First name must be longer than 2 symbols';
            }
            if (!User::checkLName($lname)) {
                $errors[] = 'Last name must be longer than 2 symbols';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Password must be longer than 6 symbols';
            }

            if ($errors == false) {
                $result = User::edit($userId, $fname, $lname, $password);
            }

        }
        require_once (ROOT . '/views/cabinet/edit.php');

        return true;

    }




}
