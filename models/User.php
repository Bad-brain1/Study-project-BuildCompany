<?php
session_start();
class User extends Model
{

    public function regUser($email,$pass){
        $checkemail = $this->db->query("SELECT * FROM users WHERE email = '$email'");
        if(mysqli_num_rows($checkemail) > 0){
            return $_SESSION['message'] = 'Такая почта уже используетсяю';
        }
        $query = "INSERT INTO users (email,password) VALUES('$email','$pass')";
        $this->db->query($query);
        $this->db->close();
        $_SESSION['message'] = 'Вы успешно зарегистрировались.';
        header('Location: /auth');
    }

    public function loginUser($email,$pass){
        $passw = md5($pass);
        $checkuser = $this->db->query("SELECT * FROM users WHERE email = '$email' AND password = '$passw'");
        if(mysqli_num_rows($checkuser) > 0){
            $user = mysqli_fetch_assoc($checkuser);
            $_SESSION['user'] = [
                "id" => $user['id'],
                "email" => $user['email']
            ];
            $this->db->close();
            header('Location: /profile');
        }else{
            return $_SESSION['message'] = 'Не верный логин или пароль';
        }
    }
}
