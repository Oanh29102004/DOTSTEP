<?php 
require_once '../models/Cart.php';
class CartController extends Cart {
    public function addToCartOrBuyNow(){
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])){
            if(empty($_POST['variant_id'])){
                $_SESSION['error'] = 'Vui lòng chọn màu sắc và kích thước sản phẩm.';
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }
        //     echo '<pre>';
        // print_r($_POST);
        // echo '<pre>';
            $checkCart = $this->checkCart();
            if($checkCart){
                $quantity = $checkCart['quantity'] = $_POST['quantity'];
                $updateCart = $this->updateCart($_SESSION['user']['user_id'],
                $_POST['product_id'],
                $_POST['variant_id'],
                $quantity
            );
                $_SESSION['success'] = 'Cập nhật giỏ hàng thành công';
                header('Location' . $_SERVER['HTTP_REFERER']);
                exit();
            }else{
                $addToCart = $this->addToCart(
                    $_SESSION['user']['user_id'],
                    $_POST['product_id'],
                    $_POST['variant_id'],
                    $_POST['quantity']
                );
                $_SESSION['success'] = 'Cập nhật giỏ hàng thành công';
                header('Location' . $_SERVER['HTTP_REFERER']);
                exit();
            }
        }else if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['buy_now'])){ 
            if(empty($_POST['variant_id'])){
                $_SESSION['error'] = 'Vui lòng chọn màu sắc và kích thước sản phẩm.';
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }
            $checkCart = $this->checkCart();
            if($checkCart){
                $quantity = $checkCart['quantity'] = $_POST['quantity'];
                $updateCart = $this->updateCart($_SESSION['user']['user_id'],
                $_POST['product_id'],
                $_POST['variant_id'],
                $quantity
            );
                
                header('Location:?act=cart' );
                exit();
            }else{
                $addToCart = $this->addToCart(
                    $_SESSION['user']['user_id'],
                    $_POST['product_id'],
                    $_POST['variant_id'],
                    $_POST['quantity']
                );
                header('Location:?act=cart' );
                exit();
            }
        }
    }

}

