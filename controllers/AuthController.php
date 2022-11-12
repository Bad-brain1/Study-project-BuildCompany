<?php
session_start();
require_once(ROOT.'../models/User.php');

class AuthController extends Controller
{

    public function __construct()
    {
        $this->view = new View();
    }

    public function actionLogin()
    {
        if (!empty($_POST)) {
            $this->login();
        }
        return $this->view->render("/views/auth.php");
    }

    public  function login(){
        if (!empty($_POST) && !empty($_POST['email']) && !empty($_POST['pass'])) {
                $Email = $_POST['email'];
                $Pass = $_POST['pass'];
                $user =  new User;
                $user->loginUser($Email, $Pass);
        } else {
            $_SESSION['message'] = 'Поля не заполнены';
        }
    }
}
