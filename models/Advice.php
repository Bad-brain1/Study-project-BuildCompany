<?
class Advice extends Model{


    public function getListAdvice(){
        $listAdvice = array();
        $result = $this->db->query('SELECT * FROM advice');
        $i = 0;
        while($row= $result->fetch_assoc()){
            $listAdvice[$i]['id'] = $row['id'];
            $listAdvice[$i]['title'] = $row['title'];
            $listAdvice[$i]['text'] = $row['text'];
            $listAdvice[$i]['img'] = $row['img'];
            $listAdvice[$i]['price'] = $row['price'];
            $i++;
        }
        return $listAdvice;
    }
    public function addAdviceOrder($idUser,$idAdvice){
        try{
            $query = "INSERT INTO usersadvice (id_user,id_advice) VALUES($idUser,$idAdvice)";
            // return print($query);
            $this->db->query($query);
            $this->db->close();
            header('Location: /advice');
        }catch(Exception $e){
            return printf('Ошибка'.$e);
        }
    }
}