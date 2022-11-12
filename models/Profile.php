<?php

class Profile extends Model
{

    public function getHouse()
    {
        $userid =  $_SESSION['user']['id'];
        $arrOrder = array();
        $query = "SELECT houses.img,houses.title,houses.text FROM `userorder` INNER JOIN houses ON id_house = houses.id AND id_user = $userid";
        $result = $this->db->query($query);
        $i = 0;
        while ($row = $result->fetch_assoc()) {
            $arrOrder[$i]['img'] = $row['img'];
            $arrOrder[$i]['title'] = $row['title'];
            $arrOrder[$i]['text'] = $row['text'];
            $i++;
        }
        return $arrOrder;
    }
    public function getCustomHouse()
    {
        $userid =  $_SESSION['user']['id'];
        $arrCustHouse = array();
        $query = "SELECT customhouse.img,customhouse.text 
        FROM `usercusthouse` 
        INNER JOIN customhouse ON id_custhouse = customhouse.id and usercusthouse.id_user = $userid";
        $result = $this->db->query($query);
        $i = 0;
        while ($row = $result->fetch_assoc()) {
            $arrCustHouse[$i]['img'] = $row['img'];
            $arrCustHouse[$i]['title'] = 'Дом на заказ ' . $i + 1;
            $arrCustHouse[$i]['text'] = $row['text'];
            $i++;
        }
        return $arrCustHouse;
    }
    public function getDesigne()
    {
        $userid =  $_SESSION['user']['id'];
        $arrDesigne = array();
        $query = "SELECT designe.img,designe.title,designe.text 
        FROM `userdesigne` 
        INNER JOIN designe ON id_designe = designe.id AND id_user = $userid";
        $result = $this->db->query($query);
        $i = 0;
        while ($row = $result->fetch_assoc()) {
            $arrDesigne[$i]['img'] = $row['img'];
            $arrDesigne[$i]['title'] = $row['title'];
            $arrDesigne[$i]['text'] = $row['text'];
            $i++;
        }
        return $arrDesigne;
    }
    public function getCustomDesigne()
    {
        $userid =  $_SESSION['user']['id'];
        $arrCustDesigne = array();
        $query = "SELECT customdesigne.img,customdesigne.text 
        FROM `usercustdesigne` 
        INNER JOIN customdesigne ON id_custdesigne = customdesigne.id and usercustdesigne.id_user = $userid ";
        $result = $this->db->query($query);
        $i = 0;
        while ($row = $result->fetch_assoc()) {
            $arrCustDesigne[$i]['img'] = $row['img'];
            $arrCustDesigne[$i]['title'] = 'Ремонт на заказ ' . $i + 1;
            $arrCustDesigne[$i]['text'] = $row['text'];
            $i++;
        }
        return $arrCustDesigne;
    }
    public function getAdvice()
    {
        $userid =  $_SESSION['user']['id'];
        $arrAdvice = array();
        $query = "SELECT advice.title,advice.text 
        FROM `usersadvice` 
        INNER JOIN advice ON advice.id = usersadvice.id_advice AND id_user = $userid";
        $result = $this->db->query($query);
        $i = 0;
        while ($row = $result->fetch_assoc()) {
            $arrAdvice[$i]['title'] = $row['title'];
            $arrAdvice[$i]['text'] = $row['text'];
            $i++;
        }
        return $arrAdvice;
    }
}
