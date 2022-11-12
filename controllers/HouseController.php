<?php
require_once(ROOT . '../models/House.php');
session_start();
class HouseController extends Controller
{

    public function actionList()
    {
        $house = new House;
        $listHouse = $house->getListHouse();
        // return print_r($listHouse);
        return $this->view->render('/views/house.php', $listHouse);
    }

    public function actionConstr()
    {
        
        if (!$_SESSION['user']) {
            return header('Location: ../auth.php');
        }
        if (!empty($_POST) && !empty($_POST['floor']) && !empty($_POST['matery']) && !empty($_POST['square']) && !empty($_POST['room'])) {
            $idUser = $_SESSION['user']['id'];
            $img = 'https://stroim-dom33.ru/wp-content/uploads/2013/07/Untitled-6.jpg';
            $text = 'Кол-во этажей: '.$_POST['floor'].'. Материал дома: '.$_POST['matery'].'. Площадь дома: '.$_POST['square'].'. Кол-во комнат: '. $_POST['room'];
            $house = new House;
            $house->addNewHouse($idUser,$img,$text);
            // return print($text);
        }
        return $this->view->render('../views/constrHouse.php');
    }

    public function actionOrder()
    {
        
        if (!$_SESSION['user']) {
            return header('Location: ../auth.php');
        }
        $idUser = $_SESSION['user']['id'];
        $house = new House;
        $house->addHouseOrder($idUser, $_POST['id']);
        return true;
    }
}
