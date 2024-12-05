<?php
require_once '../connect/connect.php';
class Wishlist extends connect{
    public function listWishlist(){
        $sql = 'SELECT 
        products.* ,
        favorites.*
        FROM favorites
        left join products on favorites.product_id = products.product_id';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();       
        return $stmt->fetchAll(PDO::FETCH_ASSOC);    
    }

    public function addWishList(){
        $sql = 'INSERT INTO favorites(user_id,product_id,quantity,created_at) values(?,?,1,now())';
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$_SESSION['user']['user_id'] ?? null,$_GET['product_id']]);
    }
    public function deleteWishList(){
        $sql = 'DELETE FROM favorites where favorite_id = ?';
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$_GET['favorite_id']]);
    }
    public function checkWishList(){  
        $sql = 'SELECT * FROM favorites where user_id = ? and product_id = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$_SESSION['user']['user_id'] ?? null,$_GET['product_id']]);
        return $stmt->fetch(); 
    }
}