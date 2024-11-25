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
} 