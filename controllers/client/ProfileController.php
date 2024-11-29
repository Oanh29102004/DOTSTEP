<?php 
require_once '../models/User.php';
class ProfileController extends User {
    public function updateProfile() {
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update-profile'])){
            
            $errors = [];
            if (empty($_POST['name'])) { // empty check xem cái $_POST có trả về null hay k nếu đúng sẽ trả về các errpr
                $errors['name'] = 'Vui lòng nhập tên người dùng';
            }
            if (empty($_POST['email'])) {
                $errors['email'] = 'Vui lòng nhập email';
            }
            if (empty($_POST['phone'])) {
                $errors['phone'] = 'Vui lòng nhập số điện thoại';
            }
            if (empty($_POST['address'])) {
                $errors['address'] = 'Vui lòng nhập địa chỉ';
            }
            if (count($errors) > 0) {
                header('location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }
            $_SESSION['errors'] = $errors;
            $user = $this -> updateUser($_POST['name'],$_POST['phone'],$_POST['address'],$_POST['email']);
            // echo '<pre>';
            // print_r($user);
            // echo '<pre>';
            if($user){
                $_SESSION['user'] = $this -> getUserByID($_SESSION['user']['user_id']);
                $_SESSION['success'] = 'Cập nhật thông tin thành công';
                header('location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }else{
                $_SESSION['errors'] = 'Cập nhật thông tin không thành công. Vui lòng kiểm tra lại';
                header('location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }
        }
    }
}

?>