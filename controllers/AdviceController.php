<?php
require_once(ROOT . '../models/Advice.php');
session_start();
class AdviceController extends Controller
{

    public function actionindex()
    {
        $advice = new Advice();
        $listAdvice = $advice->getListAdvice();
        return $this->view->render('../views/advice.php',$listAdvice);
    }

    public function actionOrder(){
        if (!$_SESSION['user']) {
            return header('Location: ../auth.php');
        }
        $idUser = $_SESSION['user']['id'];
        $advice = new Advice();
        $advice->addAdviceOrder($idUser, $_POST['id']);
        return true;
    }
}
