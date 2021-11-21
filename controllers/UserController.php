<?php

class UserController
{


    public function actionIndex()
    {
        require_once(ROOT . '/views/user/index.php');

        return true;


    }

    public function actionRegister()

    {
        $firstname = '';
        $lastname = '';
        $email = '';
        $password = '';
        $result = false;


        if (isset($_POST['submit'])) {

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkFName($firstname)) {
                $errors[] = 'First name must be longer than 2 symbols';
            }


            if (!User::checkFName($lastname)) {
                $errors[] = 'Last name must be longer than 2 symbols';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'E-mail is not correct';
            }


            if (!User::checkPassword($password)) {
                $errors[] = 'Password must be longer than 6 symbols';
            }

            if(User::checkEmailExists($email)) {
                $errors[] = 'That e-mail already exists';
            }


            if ($errors == false) {
                $result = User::register($firstname, $lastname, $email, $password);
                //SAVE USER
            }

        }


        require_once(ROOT . '/views/user/register.php');

        return true;

    }
}




