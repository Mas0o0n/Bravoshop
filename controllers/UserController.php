<?php

class UserController
{
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


            if (!User::checkLName($lastname)) {
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

    public function actionLogin()
    {
        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $email  = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            //fields validation

          /**  if (!User::checkEmail($email)) {
                $errors[] = 'E-mail is not correct';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Password must be longer than 6 symbols';
            }*/

            //User exists checking
            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                //if data is not correct - show the error
                $errors[] = 'Invalid E-mail or password';
            } else {
                //else starting the session
                User::auth($userId);
                //go to locked part - cabinet: 'Location:/cabinet'
                header("Location: /cabinet");

            }

        }
        require_once(ROOT . '/views/user/login.php');
        return true;
    }

    //Deleting data from user's session
    public function actionLogout()
    {
        session_unset();
      //unset($_SESSION['user']); //why doesnt work???

       header("Location: /");
    }



}




