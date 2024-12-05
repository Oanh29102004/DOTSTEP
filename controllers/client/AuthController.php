<?php
require_once '../models/User.php';
class AuthController extends User
{
    public function registers()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
            $errors = [];
            if (empty($_POST['name']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['name'] = 'Vui lòng nhập name';
            }

            if (empty($_POST['email'])) {
                $errors['email'] = 'Vui lòng nhập email';
            }
            if (empty($_POST['password']) || strlen($_POST['password'])  < 6) {
                $errors['password'] = 'Vui lòng nhập Mật khẩu';
            }
            $_SESSION['errors'] = $errors;
            if (count($errors) > 0) {
                header('Location:?act=register');
                exit();
            }
            $register = $this->register($_POST['name'], $_POST['email'], $_POST['password']);
            if ($register) {
                
                $_SESSION['success'] = 'Tạo tài khoản thành công. Vui lòng đăng nhập';
                header('location: ?act=login');
                exit();
            } else {
                $_SESSION['error'] = 'Tạo tài khoản k thành công. Vui lòng đăng nhập ';
                header('Location:' . $_SERVER['HTTP_REFERER']);
                exit();
            }
        }
        include '../views/client/auth/login_register.php';
    }
    public function signin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
            $errors = [];

            if (empty($_POST['email'])) {
                $errors['email'] = 'Vui lòng nhập email';
            }
            if (empty($_POST['password']) && strlen($_POST['password'])  < 6) {
                $errors['password'] = 'Vui lòng nhập Mật khẩu';
            }
            $_SESSION['errors'] = $errors;
            if (count($errors) > 0) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }
            $login = $this->login($_POST['email'],  $_POST['password']);
            if ($login) {

                $_SESSION['user'] = $login; //lưu thông tin người dùng đăng nhập

                $_SESSION['success'] = 'Đăng nhập thành công';
                header('Location:index.php');
                exit();
            } else {
                $_SESSION['error'] = 'Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin ';
                header('Location:' . $_SERVER['HTTP_REFERER']);
                exit();
            }
        }
        include '../views/client/auth/login_register.php';
    }
    public function logout(){
        if(isset($_SESSION['user'])){
            session_destroy();
        }
        header("Location: ./");
    }

    public function changePassword(){
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['change-password'])){
         
            $oldPassword =$this->getPassword();

            $errors = [];
            if (empty($_POST['old_pass'])) {
                $errors['old_pass'] = 'Vui lòng nhập mật khẩu cũ';
            }
            if (empty($_POST['new_password'])) {
                $errors['new_password'] = 'Vui lòng nhập mật khẩu mới';
            }
            if (empty($_POST['con_new_pass'])) {
                $errors['con_new_pass'] = 'Vui lòng xác nhập mật khẩu mới';
            }
            if (!password_verify($_POST['old_pass'], $oldPassword)) {
                $errors['old_pass'] = 'Mật khẩu cũ không chính xác';
            }
            
            if ($_POST['new_password'] !==  $_POST['con_new_pass']) {
                $errors['con_new_pass'] = 'Mật khẩu mới và xác nhận mật khẩu không trùng khớp';
            }
            $_SESSION['errors'] =$errors;
            if (count($errors) > 0) {
                header('location:' .$_SERVER['HTTP_REFERER']);
                exit();
            }
            $changePass = $this->updatePassword($_POST['new_password']);
            if ($changePass) {
                $_SESSION['success'] = 'Cập nhật mật khẩu thành công';
                header('location:' . $_SERVER['HTTP_REFERER']);
                exit();
            }else{
                $_SESSION['error'] = 'Cập nhật mật khẩu không thành công. Vui lòng kiểm tra lại';
                header('location:' . $_SERVER['HTTP_REFERER']);
                exit();
            }
            
        }
    }
}
