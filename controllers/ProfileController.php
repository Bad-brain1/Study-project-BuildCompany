<?php
session_start();
require_once(ROOT . '../models/Profile.php');
class ProfileController extends Controller
{
    public function __construct()
    {
        $this->view = new View();
    }

    public function actionIndex()
    {
        if (!$_SESSION['user']) {
            return header('Location: ../auth.php');
        }
        $orders = new Profile();
        $listOrder = $orders->getHouse();
        $listDesigne = $orders->getDesigne();
        $listCustDesigne = $orders->getCustomDesigne();
        $listCustHouse = $orders->getCustomHouse();
        $listCAdvice = $orders->getAdvice();
        // $this->view->render('../views/profile.php');
        // return require_once(ROOT . '../views/profile.php');
        return $this->view->render('../views/profile.php',$listOrder,$listDesigne,$listCustDesigne,$listCustHouse,$listCAdvice);
    }

    public function actionLogout()
    {
        unset($_SESSION['user']);
        header('Location: ../index.html');
    }

}
