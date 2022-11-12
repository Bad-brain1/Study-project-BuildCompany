<?php
require_once(ROOT . '../models/Designe.php');
session_start();
class DesignController extends Controller
{


    public function actionList()
    {
        $designe = new Designe;
        $listDesigne = $designe->getListDesigne();
        return $this->view->render('../views/designe.php',$listDesigne);
    }

    public function actionConstr()
    {
        if (!$_SESSION['user']) {
            return header('Location: ../auth.php');
        }
        if (!empty($_POST) && !empty($_POST['style']) && !empty($_POST['square']) && !empty($_POST['room'])) {
            $idUser = $_SESSION['user']['id'];
            
            $img = 'https://w2studio.com.ua/wp-content/uploads/2016/01/blog-1.jpg';
            $text = 'Стиль ремонта: '.$_POST['style'].'. Площадь дома: '.$_POST['square'].'. Кол-во комнат: '. $_POST['room'];

            $designe = new Designe;
            $designe->addNewDesigne($idUser,$img,$text);
            
        }
        return $this->view->render('../views/constrDesigne.php');
    }

    public function actionOrder(){
        if (!$_SESSION['user']) {
            return header('Location: ../auth.php');
        }
        $idUser = $_SESSION['user']['id'];
        $designe = new Designe;
        $designe->addDesigneOrder($idUser, $_POST['id']);
        return true;
    }
}
