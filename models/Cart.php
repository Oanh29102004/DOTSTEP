<?php
require_once '../connect/connect.php';

class Cart extends connect {
    public function getAllCart(){
        $sql = 'SELECT
        carts.cart_id as cart_id,
        products.name as product_name,
        products.image as product_image,
        product_variants.price as product_variant_price,
        product_variants.sale_price as product_variant_sale_price,
        sizes.size_name as variant_size_name,
        colors.color_name as variant_color_name,
        carts.quantity as quantity
        FROM carts
        LEFT JOIN products on carts.product_id = products.product_id
        LEFT JOIN product_variants on product_variants.product_id = products.product_id
        LEFT JOIN colors on product_variants.color_id = colors.color_id
        LEFT JOIN sizes on product_variants.product_id = sizes.size_id
        
        where carts.user_id = ?
        ';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$_SESSION['user']['user_id']]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
    public function addToCart($user_id,$product_id,$variant_id,$quantity){
        $sql = 'INSERT INTO carts(user_id,product_id,variant_id,quantity) values(?,?,?,?)';
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$user_id,$product_id,$variant_id,$quantity]);
    }
    public function checkCart(){
        $sql = 'SELECT * FROM carts where user_id = ? and product_id = ? and variant_id = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$_SESSION['user']['user_id'], $_POST['product_id'], $_POST['variant_id']]);
        return $stmt->fetch();
    }
    public function updateCart($user_id, $product_id, $variant_id, $quantity){
        $sql = 'UPDATE carts set quantity = ? where user_id = ? and product_id = ? and variant_id = ?';
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$quantity,$user_id,$product_id,$variant_id]);
    }
}