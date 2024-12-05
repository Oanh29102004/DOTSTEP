<?php
require_once '../models/Category.php';
require_once '../models/Product.php';
require_once '../models/Wishlist.php';

class HomeController {

    protected $category;
    protected $product;

    protected $wishList;
    public function __construct()
    {
        $this -> category = new Category();
        $this -> product = new Product();
        $this ->wishList = new WishList();
    }
    public function index() 
    {
        $category = $this -> category -> listCategory();
        $product = $this -> product -> listProduct();
        include '../views/client/index.php';
    }
    public function getProductDetail() 
    {
        $productDetail = $this -> product -> getProductBySlug($_GET['slug']);
        $productDetail = reset($productDetail);
        // echo '<pre>';
        // print_r($productDetail);
        // echo '<pre>';
        include '../views/client/product/productDetail.php';
    }
}
?>