<?php
session_start();
require_once ('../controllers/admin/CategoryAdminController.php');
$action=isset($_GET['act']) ? $_GET['act'] : 'index';
$categoryAdmin = new CategoryAdminController();

switch($action){
    case 'admin':
    include '../views/admin/index.php';
    break;
    case 'product-list':
    include '../views/admin/product/list.php';
    break;
    case 'product-create':
    include '../views/admin/product/create.php';
    break;
    case 'product-edit':
    include '../views/admin/product/edit.php';
    break;
    case 'category-list':
        $categoryAdmin -> index();
    break;
    case 'category-create':
        $categoryAdmin -> addCategory();
    break;
    case 'category-edit':
        $categoryAdmin ->updateCategory();
    break;
    case 'category-delete':
        $categoryAdmin ->deleteCategory();
    break;
//================================================
    case 'index':
    include '../views/client/index.php';
    break;
    case 'login_register':
    include '../views/client/auth/login_register.php';
    break;
}
