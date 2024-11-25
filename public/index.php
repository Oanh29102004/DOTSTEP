<?php
session_start();
require_once('../controllers/admin/CategoryAdminController.php');
require_once('../controllers/admin/ProductAdminController.php');
require_once('../controllers/client/AuthController.php');
require_once('../controllers/client/HomeController.php');

require_once '../controllers/client/AuthController.php';



$categoryAdmin = new CategoryAdminController();
$productAdmin = new ProductAdminController();

$home = new HomeController();
$auth = new AuthController();

$auth = new AuthController();

$action = isset($_GET['act']) ? $_GET['act'] : 'index';

switch ($action) {
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
    case 'gallery-delete':
        $productAdmin->deleteGallery();
        break;
    case 'product-variant-delete':
        $productAdmin->deleteProductVariant();
        break;
    case 'product-delete':
        $productAdmin->deleteProduct();
        break;
    case 'category-list':
        $categoryAdmin->index();
        break;
    case 'category-create':
        $categoryAdmin->addCategory();
        break;
    case 'category-edit':
        $categoryAdmin->updateCategory();
        break;
    case 'category-delete':
        $categoryAdmin->deleteCategory();
        break;
    case 'index':
        $home->index();
        break;
    case 'login_register':
        include '../views/client/auth/login_register.php';
        break;
    case 'register':
        $auth->registers();
        break;
    case 'login':
        $auth->signin();
        break;

    case 'product-detail':
        $home->getProductDetail();
        break;
    case 'register':
        $auth->registers();
        break;
    case 'login':
        $auth->signin();
        break;
}
