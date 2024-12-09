<?php
require_once '../models/Review.php';

class ReviewController extends Review
{

    public function review()
    {
        if (isset($_SESSION['user'])) {
            // echo '<pre>';
            // print_r($_POST);
            // echo(gettype($_POST['review']));
            // echo '<pre>';
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['review'])) {
               
                if (empty($_POST['product_id']) || empty($_POST['content']) || empty($_POST['rating'])) {
                    $_SESSION['error'] = 'Vui lòng điền đầy đủ thông tin.';
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                    exit();
                }
                $review = $this->sendReview($_POST['product_id'], $_POST['content'], $_POST['rating']);
                
                if ($review) {
                    $_SESSION['success'] = 'Đánh giá sản phẩm thành công.';
                    header('Location:' . $_SERVER['HTTP_REFERER']);
                    exit();
                } else {
                    $_SESSION['error'] = 'Đánh giá sản phẩm thất bại ( Kiểm tra xem đã từng mua sản phẩm chưa).';
                    header('Location:' . $_SERVER['HTTP_REFERER']);
                    exit();
                }
            }
        } else {
            $_SESSION['error'] = 'Vui lòng đăng nhập để đanh giá sản phẩm.';
            header('Location:?act=login');
            exit();
        }
    }
    
}
