<?php

class Designe extends Model{

    public function getListDesigne(){
        $listDesigne = array();
        $result = $this->db->query('SELECT * FROM designe');
        $i = 0;
        while($row= $result->fetch_assoc()){
            $listDesigne[$i]['id'] = $row['id'];
            $listDesigne[$i]['img'] = $row['img'];
            $listDesigne[$i]['text'] = $row['text'];
            $listDesigne[$i]['title'] = $row['title'];
            $listDesigne[$i]['price'] = $row['price'];
            $i++;
        }
        return $listDesigne;
    }


    public function addNewDesigne($idUser,$img,$text){
        try {
            $query = "INSERT INTO customdesigne (id_user,img,text) VALUES($idUser,'$img','$text')";
            // return print($query);
            $this->db->query($query);
            
            $idCust = $this->db->query("SELECT id FROM customdesigne WHERE id_user = $idUser ORDER BY id DESC ");
            $idCust = $idCust->fetch_array();
            
            $idCust = $idCust['id'];

            $addquery = "INSERT INTO usercustdesigne (id_user,id_custdesigne) VALUES($idUser,$idCust)";

            $this->db->query($addquery);

            $this->db->close();
            header('Location: /design');
        } catch (Exception $th) {
            return printf('Ошибка'.$th);
        }
    }

    public function addDesigneOrder($idUser, $idDesigne){
        try{
            $query = "INSERT INTO userdesigne (id_user,id_design) VALUES($idUser,$idDesigne)";
            $this->db->query($query);
            $this->db->close();
            header('Location: /design');
        }catch(Exception $e){
            return printf('Ошибка'.$e);
        }
    }
}