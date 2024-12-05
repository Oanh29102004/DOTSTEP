<?php
session_start();
require_once('../controllers/admin/CategoryAdminController.php');
require_once('../controllers/admin/ProductAdminController.php');
require_once('../controllers/admin/CouponAdminController.php');

require_once('../controllers/admin/AuthAdminController.php');

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

$authAdmin = new AuthAdminController();
=======
$orderAdmin = new OrderAdminController();


$wishList = new WishListController();
$cart = new CartController();
$home = new HomeController();
$auth = new AuthController();
$profile = new ProfileController();
$order = new OrderController();


switch ($action) {
    case 'admin':
        $authAdmin-> middleware();
        include '../views/admin/index.php';
        break;
    case 'auth':
        $authAdmin-> signin();
        break;
    case 'logout-admin':
        $authAdmin-> logout();
        break;
    case 'product':
        $authAdmin-> middleware();
        $productAdmin->index();
        break;
    case 'product-create':
        $authAdmin-> middleware();
        $productAdmin->create();
        break;
    case 'product-store':
        $authAdmin-> middleware();
        $productAdmin->store();
        break;
    case 'product-edit':
        $authAdmin-> middleware();
        $productAdmin->edit();
        break;
    case 'product-update':
        $authAdmin-> middleware();
        $productAdmin->update();
        break;
    case 'gallery-delete':
        $authAdmin-> middleware();
        $productAdmin->deleteGallery();
        break;
    case 'product-variant-delete':
        $authAdmin-> middleware();
        $productAdmin->deleteProductVariant();
        break;
    case 'product-delete':
        $authAdmin-> middleware();
        $productAdmin->deleteProduct();
        break;
    case 'category-list':
        $authAdmin-> middleware();
        $categoryAdmin->index();
        break;
    case 'category-create':
        $authAdmin-> middleware();
        $categoryAdmin->addCategory();
        break;
    case 'category-edit':
        $authAdmin-> middleware();
        $categoryAdmin->updateCategory();
        break;
    case 'category-delete':
        $authAdmin-> middleware();
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
    case 'change-password':
        $auth->changePassword();
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
        $authAdmin-> middleware();
        $couponAdmin->index();
        break;
    case 'coupon-create':
        $authAdmin-> middleware();
        $couponAdmin->create();
        break;
    case 'coupon-edit':
        $authAdmin-> middleware();
        $couponAdmin->edit();
        break;
    case 'coupon-update':
        $authAdmin-> middleware();
        $couponAdmin->update();
        break;
    case 'coupon-delete':
        $authAdmin-> middleware();
        $couponAdmin->delete();
        break;
    case 'checkout':
        $order->index();
        break;
    case 'order':
        $authAdmin-> middleware();
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
