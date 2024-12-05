<?php 
require_once '../models/Wishlist.php';
class WishListController extends Wishlist {
    public function index() {

        $listWishList = $this->listWishlist();
        include '../views/client/wishlist/wishlist.php';
    }

    public function add() { 
        $checkWishList = $this->checkWishList();
        if ($checkWishList) {   
            $_SESSION['error'] = 'Sản phẩm này đã có trong danh sách yêu thích của bạn';
            header('location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        }
        $addWishList = $this-> addWishList();
        if ($addWishList) {
            $_SESSION['success'] = 'Thêm sản phẩm yêu thích thành công';
            header('location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        } else {
            $_SESSION['error'] = 'Thêm sản phẩm thất bại';
            header('location:'. $_SERVER['HTTP_REFERER']);
            exit();
        }
    }
    public function delete() {
        try {
            $this->deleteWishList();
            $_SESSION['success'] = 'Xóa sản phẩm yêu thích thành công';
            header('Location:' . $_SERVER['HTTP_REFERER']);
            exit();
        } catch (\Throwable $th) {
            $_SESSION['error'] = 'Xóa sản phẩm yêu thích thất bại';
            header('Location:' . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }
}