<?php
require_once '../connect/connect.php';
class Product extends connect{
    public function getAllColor(){
        $sql = 'SELECT * from colors';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllSize(){
        $sql = 'SELECT * from sizes';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllCategory(){
        $sql = 'SELECT * from categorys';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addProduct($category_id,$name,$image,$price,$sale_price,$slug,$description)
    {
        $sql = 'INSERT INTO products(category_id,name,image,price,sale_price,slug,description) values(?,?,?,?,?,?,?)';
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$category_id,$name,$image,$price,$sale_price,$slug,$description]);
    }
    public function addGallery($product_id,$image)
    {
        $sql = 'INSERT INTO product_galleries(product_id,image) values(?,?)';
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$product_id,$image]);
    }
    public function addProductVariant($price,$sale_price,$quantity,$product_id,$color_id,$size_id)
    {
        $sql = 'INSERT INTO product_variants(price,sale_price,quantity,product_id,color_id,size_id,created_at,updated_at) values(?,?,?,?,?,?,now(),now())';
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$price,$sale_price,$quantity,$product_id,$color_id,$size_id]);
    }
    public function getLastInsertId(){
        return $this->connect()->lastInsertId();
    }
}