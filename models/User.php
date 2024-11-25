<?php 
require_once  '../connect/connect.php';
    class User extends  connect {
      public function register ($name, $email, $password){
        $hash_password = password_hash($password, PASSWORD_DEFAULT); //Mã hóa mật khẩu
        $sql = 'INSERT INTO users (name, email, password, role_id) VALUE (?,?,?,1)';
        $stmt =$this->connect()->prepare($sql);
        return $stmt->execute([$name, 
        $email, $hash_password]);
      }

      public function login($email, $password){
        $sql = 'SELECT *FROM users WHERE email =? ';
        $stmt = $this -> connect() -> prepare($sql);
        $stmt -> execute([$email]);
        $user = $stmt -> fetch();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
      }
    }

?>  