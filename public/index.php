<?php
session_start();
require_once ('../controllers/admin/CategoryAdminController.php');

require_once '../controllers/admin/ProductAdminController.php';

$categoryAdmin = new CategoryAdminController();
$productAdmin = new ProductAdminController();

$action=isset($_GET['act']) ? $_GET['act'] : 'index';


switch($action){
    case 'admin':
    include '../views/admin/index.php';
    break;
    case 'product':
    $productAdmin->index();
    break;
    case 'product-create':
    $productAdmin->create();
    break;
    case 'product-store':
    $productAdmin->store();
    break;
    case 'product-edit':
    $productAdmin->edit();
    break;
    case 'product-update':
    $productAdmin->update();
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
