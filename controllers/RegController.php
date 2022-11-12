<?php
session_start();
require_once(ROOT.'../models/User.php');
class RegController extends Controller
{
    
    public function __construct()
    {
        $this->view = new View();
    }

    public function actionIndex()
    {
        if (!empty($_POST)) {
            $this->register();
        }
        $this->view->render("/views/registration.php");
        
    }

    public function register()
    {
        if (!empty($_POST) && !empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['contpass'])) {
            if ($_POST['pass'] === $_POST['contpass']) {
                $regEmail = $_POST['email'];
                $regPass = md5($_POST['pass']);
                $user =  new User;
                $user->regUser($regEmail, $regPass);
            } else {
                $_SESSION['message'] = 'повтор пароля не совпадает';
            }
        } else {
            $_SESSION['message'] = 'Поля не заполнены';
        }
    }
}
