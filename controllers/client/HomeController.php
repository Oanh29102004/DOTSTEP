<?php
require_once '../models/Category.php';
require_once '../models/Product.php';
require_once '../models/Wishlist.php';
require_once '../models/Review.php';

class HomeController
{

    protected $category;
    protected $product;
    protected $wishList;
    protected $review;
    public function __construct()
    {
        $this->category = new Category();
        $this->product = new Product();
        $this->wishList = new WishList();
        $this->review = new review();
    }
    public function index()
    {
        $category = $this->category->listCategory();
        $product = $this->product->listProduct();
        include '../views/client/index.php';
    }
    public function getProductDetail()
    {
        $productDetail = $this->product->getProductBySlug($_GET['slug']);
        $productDetail = reset($productDetail);

        $reviews = $this->review->getReviewByID($productDetail['product_id']);
        // echo '<pre>';
        // print_r($reviews);
        // echo '<pre>';
        include '../views/client/product/productDetail.php';
    }
}
