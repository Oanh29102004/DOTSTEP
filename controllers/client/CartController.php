<?php
require_once '../models/Cart.php';
class CartController extends Cart
{
    public function index()
    {
        $carts = $this->getAllCart();
        // echo '<pre>';
        // print_r($carts);
        // echo '<pre>';
        $sum = 0;
        foreach ($carts as $cart) {
            $sum += $cart['product_variant_sale_price'] * $cart['quantity'];
        }
        $_SESSION['total'] = $sum;
        include '../views/client/cart/cart.php';
    }
    public function addToCartOrBuyNow()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {

            if (empty($_POST['variant_id'])) {
                $_SESSION['error'] = 'Vui lòng chọn màu sắc và kích thước sản phẩm.';
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }
            //     echo '<pre>';
            // print_r($_POST);
            // echo '<pre>';
            // exit();
            $checkCart = $this->checkCart();
            if ($checkCart) {
                $quantity = $checkCart['quantity'] + $_POST['quantity'];
                $updateCart = $this->updateCart(
                    $_SESSION['user']['user_id'],
                    $_POST['product_id'],
                    $_POST['variant_id'],
                    $quantity
                );
                $_SESSION['success'] = 'Cập nhật giỏ hàng thành công';
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            } else {
                $addToCart = $this->addToCart(
                    $_SESSION['user']['user_id'],
                    $_POST['product_id'],
                    $_POST['variant_id'],
                    $_POST['quantity']
                );
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                $_SESSION['success'] = 'Cập nhật giỏ hàng thành công';
                exit();
            }
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['buy_now'])) {
            if (empty($_POST['variant_id'])) {
                $_SESSION['error'] = 'Vui lòng chọn màu sắc và kích thước sản phẩm.';
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }
            $checkCart = $this->checkCart();
            if ($checkCart) {
                $quantity = $checkCart['quantity'] = $_POST['quantity'];
                $updateCart = $this->updateCart(
                    $_SESSION['user']['user_id'],
                    $_POST['product_id'],
                    $_POST['variant_id'],
                    $quantity
                );

                header('Location:?act=cart');
                exit();
            } else {
                $addToCart = $this->addToCart(
                    $_SESSION['user']['user_id'],
                    $_POST['product_id'],
                    $_POST['variant_id'],
                    $_POST['quantity']
                );
                header('Location:?act=cart');
                exit();
            }
        }
    }
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_cart'])) {
            if (isset($_POST['quantity'])) {
                foreach ($_POST['quantity'] as $cart_id => $quantity) {
                    $this->updateCartById($cart_id, $quantity);
                }
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                $_SESSION['success'] = 'Cập nhật giỏ hàng thành công';
                exit();
            }
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['apply_coupon'])) {
            $coupon = $this->getCouponByCode($_POST['coupon_code']);
            if (!$coupon) {
                $_SESSION['error'] = 'Mã giảm giá không tồn tại.';
                header('Location:' . $_SERVER['HTTP_REFERER']);
                exit();
            }
            // if (isset($_SESSION['coupon'])) {
            //     $_SESSION['error'] = 'Chỉ được dùng một mã giảm giá cho 1 đơn hàng.';
            //     header('Location:' . $_SERVER['HTTP_REFERER']);
            //     exit();
            // }
            if ($coupon) {
                $_SESSION['coupon'] = $coupon;
                $totalCoupon = $this->handleCoupon($coupon,$_SESSION['total']);
                $_SESSION['totalCoupon'] = $totalCoupon;
                $_SESSION['success'] = 'Áp dúng mã giảm giá thành công';
                header('Location:' . $_SERVER['HTTP_REFERER']);
                exit();
            }
        }
    }
    public function delete()
    {
        try {
            $this->deleteCart($_GET['cart_id']);
            // echo '<pre>';
            // print_r($_GET);
            // echo '<pre>';
            // exit();
            $_SESSION['success'] = 'Xóa thành công';
            header('Location: index.php?act=cart');
            exit();
        } catch (\Throwable $th) {
            $_SESSION['error'] = 'Xóa thất bại.Vui lòng thử lại';
            header('Location:' . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }

    public function handleCoupon($coupon,$total) 
    {
        if ($coupon['type'] == 'Percentage')
        {
            $totalCoupon = $total * ($coupon['coupon_value']/100);
        }
        elseif ($coupon['type'] == 'Fixed Amount') 
        {
            $totalCoupon = $coupon['coupon_value'];
        }
        return $totalCoupon;
    }
}
