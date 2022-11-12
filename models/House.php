<?php

class House extends Model{

    public function getListHouse(){
        $listHouse = array();
        $result = $this->db->query('SELECT * FROM houses');
        $i = 0;
        while($row= $result->fetch_assoc()){
            $listHouse[$i]['id'] = $row['id'];
            $listHouse[$i]['img'] = $row['img'];
            $listHouse[$i]['text'] = $row['text'];
            $listHouse[$i]['title'] = $row['title'];
            $listHouse[$i]['price'] = $row['price'];
            $i++;
        }
        return $listHouse;
    }

    public function addNewHouse($idUser,$img,$text){
        try {
            $query = "INSERT INTO customhouse (id_user,img,text) VALUES($idUser,'$img','$text')";
            
            $this->db->query($query);
            
            $idCustHouse = $this->db->query("SELECT id FROM customhouse WHERE id_user = $idUser ORDER BY id DESC");
            $idCustHouse = $idCustHouse->fetch_array();
            
            $idCustHouse = $idCustHouse['id'];

            $addquery = "INSERT INTO usercusthouse (id_user,id_custhouse) VALUES($idUser,$idCustHouse)";

            $this->db->query($addquery);

            $this->db->close();
            header('Location: /house');
        } catch (Exception $th) {
            return printf('Ошибка'.$th);
        }
    }

    public function addHouseOrder($idUser, $idHouse){
        try{
            $query = "INSERT INTO userorder (id_user,id_house) VALUES($idUser,$idHouse)";
            $this->db->query($query);
            $this->db->close();
            header('Location: /house');
        }catch(Exception $e){
            return printf('Ошибка'.$e);
        }
    }

}