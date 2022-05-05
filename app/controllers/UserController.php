<?php 

namespace Controllers;
use Models\UserModel;
require_once(__DIR__.'\..\models\UserModel.php');

if ($_POST) {
    if ($_POST['action']=="post_user") {
        UserController::register();
    }
}

class UserController {

    public static function register()
    {
        if (strcmp($_POST['password'], $_POST['pwdconf']) == 0) {
            $data = new UserModel();

            $data->__init($_POST['name'], $_POST['email'], $_POST['password'], $_POST['tel']);

            $data->new();

            return header("Location: /login.php");
        }

        header("Location: /signin.php");
    }
}