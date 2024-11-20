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
    public function listProduct(){
        $sql = "SELECT
        products.product_id as product_id,
        products.name as product_name,
        products.price as product_price,
        products.sale_price as product_sale_price,
        products.image as product_image,
        categorys.category_id as category_id,
        categorys.name as category_name,
        product_variants.product_variant_id as product_variant_id,
        colors.color_name as color_name,
        sizes.size_name as size_name
        
        FROM products
        left join categorys on products.category_id = categorys.category_id 
        left join product_variants on products.product_id = product_variants.product_id
        left join colors on product_variants.color_id = colors.color_id 
        left join sizes on product_variants.size_id = sizes.size_id 
        ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $listProduct= $stmt->fetchAll(PDO::FETCH_ASSOC);

        $groupedProducts = [];
        // Lặp qua từng sản phẩm trong danh sách list product
        foreach ($listProduct as $product) {
            if(!isset($groupedProducts[$product['product_id']])){
                $groupedProducts[$product['product_id']] = $product ;           
                $groupedProducts[$product['product_id']]['variants'] = [];
            }
            //Thêm các biến thể color size ... variant[]
            $groupedProducts[$product['product_id']]['variants'][] = [
                'product_id' => $product['product_id'],
                'product_variant_color' => $product['color_name'],
                'product_variant_size' => $product['size_name']

            ];
        }
        return $groupedProducts;
    }
}