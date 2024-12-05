<?php
session_start();
require_once('../controllers/admin/CategoryAdminController.php');
require_once('../controllers/admin/ProductAdminController.php');
require_once('../controllers/admin/CouponAdminController.php');
require_once('../controllers/admin/OrderAdminController.php');
require_once('../controllers/client/AuthController.php');
require_once('../controllers/client/HomeController.php');
require_once('../controllers/client/ProfileController.php');
require_once('../controllers/client/CartController.php');
require_once('../controllers/client/OrderController.php');
require_once('../controllers/client/WishListController.php');

$action = isset($_GET['act']) ? $_GET['act'] : 'index';

$categoryAdmin = new CategoryAdminController();
$productAdmin = new ProductAdminController();
$couponAdmin = new CouponAdminController();
$orderAdmin = new OrderAdminController();

$wishList = new WishListController();
$cart = new CartController();
$home = new HomeController();
$auth = new AuthController();
$profile = new ProfileController();
$order = new OrderController();


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
    case 'product-detail':
        $home->getProductDetail();
        break;
    case 'register':
        $auth->registers();
        break;
    case 'login':
        $auth->signin();
        break;
    case 'logout':
        $auth->logout();
        break;
    case 'profile':
        $profile->index();
        break;
    case 'cart':
        $cart->index();
        break;
    case 'addToCart-buyNow':
        $cart->addToCartOrBuyNow();
        break;
    case 'update-cart':
        $cart->update();
        break;
    case 'delete-cart':
        $cart->delete();
        break;

    case 'profileDetail':
        include '../views/client/profile/profileDetail.php';
        break;
    case 'update-profile':
        $profile->updateProfile();
        break;

    case 'coupon':
        $couponAdmin->index();
        break;
    case 'coupon-create':
        $couponAdmin->create();
        break;
    case 'coupon-edit':
        $couponAdmin->edit();
        break;
    case 'coupon-update':
        $couponAdmin->update();
        break;
    case 'coupon-delete':
        $couponAdmin->delete();
        break;
    case 'checkout':
        $order->index();
        break;
    case 'order':
        $order->checkout();
        break;

    case 'wishlist':
        $wishList->index();
        break;
    case 'wishlist-add':
        $wishList->add();
        break;
    case 'wishlist-delete':
        $wishList->delete();

    case 'order-list':
        $orderAdmin->list();
        break;
    case 'order-edit':
        $orderAdmin->edit();
        break;
    case 'order-update':
        $orderAdmin->update();
        break;
    case 'order-delete':
        $orderAdmin->delete();
        break;

    case 'order-cl':
        $profile->indexOderClient();
        break;
    case 'trash-order':
        $profile->trashOrder();
        break;
    case 'cancel-order':
        $profile->cancelOrder();

        break;
}
