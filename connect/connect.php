<?php

class connect{
    public function connect(){
        $serverName = 'localhost';
        $userName = 'root';
        $password = '';
        $myDB = 'duan1_dotstep';
        try {
            $conn = new PDO("mysql:host=$serverName;dbname=$myDB",$userName,$password);
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (\Throwable $th) {
            echo 'ket noi that bai' . $th->getMessage();
            return null;
        }
    }
}