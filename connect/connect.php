<?php

class connect{
    private $conn;
    public function connect(){
    if($this->conn === null) {
        $serverName = 'localhost';
        $userName = 'root';
        $password = '';
        $myDB = 'duan1_dotstep';
        try {
            $this->conn = new PDO("mysql:host=$serverName;dbname=$myDB",$userName,$password);
            $this->conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (\Throwable $th) {
            echo 'ket noi that bai' . $th->getMessage();
            return null;
        }
    }
    return $this->conn;
} 
}