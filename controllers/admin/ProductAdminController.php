<?php
require_once '../models/Product.php';
class ProductAdminController extends Product
{
    public function index()
    {
        include '../views/admin/product/list.php';
    }
    public function create()
    {
        $listColors = $this->getAllColor();
        $listSizes = $this->getAllSize();
        $listCategorys = $this->getAllCategory();
        include '../views/admin/product/create.php';
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_products'])) {
            $errors = [];
            if (empty($_POST['product_name'])) {
                $errors['product_name'] = 'Vui lòng nhập tên sản phẩm';
            }
            if (empty($_POST['product_price'])) {
                $errors['product_price'] = 'Vui lòng nhập giá sản phẩm';
            }
            if (empty($_POST['product_sale_price'])) {
                $errors['product_sale_price'] = 'Vui lòng nhập giá khuyến mãi';
            }
            if (!isset($_FILES['product_image']) || $_FILES['product_image']['error'] !== UPLOAD_ERR_OK) {
                $errors['product_image'] = 'Vui lòng chọn 1 file ảnh hợp lệ';
            }
            if (empty($_POST['variant_size'])) {
                $errors['variant_size'] = 'Vui lòng chọn kích thước';
            }
            if (empty($_POST['variant_color'])) {
                $errors['variant_color'] = 'Vui lòng chọn màu';
            }
            if (empty($_POST['product_description'])) {
                $errors['product_description'] = 'Vui lòng nhập mô tả';
            }
            foreach ($_POST['variant_quantity'] as $key => $variant_quantity) {
                if (empty($variant_quantity)) {
                    $errors['variant_quantity'][$key] = 'Vui lòng nhập số lượng biến thể ' . ($key + 1);
                }
            }
            foreach ($_POST['variant_price'] as $key => $variant_price) {
                if (empty($variant_price)) {
                    $errors['variant_price'][$key] = 'Vui lòng nhập giá biến thể ' . ($key + 1);
                }
            }
            foreach ($_POST['variant_sale_price'] as $key => $variant_sale_price) {
                if (empty($variant_sale_price)) {
                    $errors['variant_sale_price'][$key] = 'Vui lòng nhập giá khuyến mãi biến thể ' . ($key + 1);
                }
            }
            $_SESSION['errors'] = $errors;
            if ($errors) {
                header('Location:?act=product-create');
                exit;
            }


            $file = $_FILES['product_image'];
            $product_image = uniqid() . '-' . preg_replace('/[^A-Za-z0-9\-_\.]+/', '-', basename($file['name']));
            if (!move_uploaded_file($file['tmp_name'], './images/product/' . $product_image)) {
                $_SESSION['error'] = 'Không thể tải lên file ảnh sản phẩm.';
                header('Location:' . $_SERVER['HTTP_REFERER']);
                exit;
            }


            $addProduct = $this->addProduct(
                $_POST['category_id'],
                $_POST['product_name'],
                $product_image,
                $_POST['product_price'],
                $_POST['product_sale_price'],
                $_POST['product_slug'],
                $_POST['product_description']
            );


            if ($addProduct) {
                $product_id = $this->getLastInsertId();
                foreach ($_POST['variant_size'] as $key => $size) {
                    $this->addProductVariant(
                        $_POST['variant_price'][$key],
                        $_POST['variant_sale_price'][$key],
                        $_POST['variant_quantity'][$key],
                        $product_id,
                        $_POST['variant_color'][$key],
                        $size
                    );
                }

                if (!empty($_FILES['gallery_image']['name'][0])) {
                    $galleryFiles = $_FILES['gallery_image'];
                    for ($i = 0; $i < count($galleryFiles['name']); $i++) {
                        $fileName = basename($galleryFiles['name'][$i]);
                        $imageArray = uniqid() . '-' . preg_replace('/[^A-Za-z0-9\-_\.]+/', '-', $fileName);
                        if (move_uploaded_file($galleryFiles['tmp_name'][$i], "./images/product_gallery/" . $imageArray)) {
                            $this->addGallery($product_id, $imageArray);
                        }
                    }
                    // echo '<pre>';
                    // print_r()
                    // echo '<pre>';

                }
            }
            $_SESSION['success'] = 'Thêm sản phẩm thành công';
            header('Location:?act=product');
            exit();
        } else {
            $_SESSION['error'] = 'Thêm sản phẩm không thành công';
            header('Location:' . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }
}
