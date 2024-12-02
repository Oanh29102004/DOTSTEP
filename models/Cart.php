<?php
require_once '../connect/connect.php';

class Cart extends connect {
    public function getAllCart(){
        $sql = 'SELECT
        carts.cart_id as cart_id,
        products.name as product_name,
        products.image as product_image,
        products.slug as product_slug,
        product_variants.price as product_variant_price,
        product_variants.sale_price as product_variant_sale_price,
        colors.color_name as variant_color_name,
        sizes.size_name as variant_size_name,
        carts.quantity as quantity
        FROM carts
        LEFT JOIN products on carts.product_id = products.product_id
        LEFT JOIN product_variants on product_variants.product_variant_id = carts.variant_id
        LEFT JOIN colors on product_variants.color_id = colors.color_id
        LEFT JOIN sizes on product_variants.size_id = sizes.size_id
        
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
    public function updateCartById($cart_id,$quantity){
        $sql = 'UPDATE carts set quantity = ? where cart_id = ?';
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$quantity, $cart_id]);
    }
    public function deleteCart($cart_id){
        $sql = 'DELETE from carts where cart_id = ?';
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$cart_id]);
    }
    public function getCouponByCode($coupon_code)
    {
        $sql = 'SELECT * FROM coupons where coupon_code = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$coupon_code]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}