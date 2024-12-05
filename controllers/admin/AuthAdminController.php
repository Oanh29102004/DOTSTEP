<?php
require_once '../models/User.php';
class AuthAdminController extends User
{
    public function isAdmin()
    {
        return isset($_SESSION['user_admin']) &&  $_SESSION['user_admin']['role_id'] == 2;
    }

    public function middleware()
    {
        if (!$this->isAdmin()) {
            $_SESSION['error'] = "Bạn không có quyền truy cập. Vui lòng dăng nhập";
            header('location: ?act=auth');
            exit();
        } else {
            return true;
        }
    }

    public function signin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['auth'])) {
            $errors = [];
            if (empty($_POST['email'])) { // empty check xem cái $_POST có trả về null hay k nếu đúng sẽ trả về các errpr
                $errors['email'] = 'Email không được để trống';
            }

            if (empty($_POST['password'])) {
                $errors['password'] = 'Password không được để trống';
            }

            $_SESSION['errors'] = $errors;
            if (count($errors) >0) {
                header('location: ?act=auth');
                exit();
            }
            $auth = $this->auth($_POST['email'], $_POST['password']);
            if ($auth) {
                $_SESSION['user_admin'] = $auth;
                $_SESSION['success'] = "Đăng nhập thành công!";
                header('location: ?act=admin');
                exit();
            } else {
                $_SESSION['error'] = "Bạn không có quyền truy cập!";
                header('location: ?act=index');
            }
        }
        include '../views/admin/auth/login.php';

    }
    public function logout(){
        unset($_SESSION['user_admin']);
        header('location: ?act=auth');
        exit();
    }
}
