<?php include '../views/admin/layout/header.php' ?>
<div class="body d-flex py-3">
    <div class="container-xxl">
        <form action="?act=product-store" method="post" enctype="multipart/form-data">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h1 type="text" class="fw-bold" name="add_products">Thêm mới sản phẩm</h1>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title fw-bold">Thêm ảnh sản phẩm</h4>
                </div>
                <div class="card-body">
                    <input type="file" name="gallery_image[]" id="" class="form-control" multiple>
                </div>
                <?php if (isset($_SESSION['errors']['gallery_image'])) : ?>
                    <p class="text-danger"><?= $_SESSION['errors']['gallery_image'] ?></p>
                <?php endif; ?>
            </div>
            <div class="row g-3 mb-3">

                <div class="col-xl-12 col-lg-12">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Thông tin cơ bản sản phẩm</h6>
                        </div>
                        <div class="card-body">

                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label for="product-name" class="form-label">Tên sản phẩm</label>
                                    <input id="product-name" placeholder="Nhập tên sản phẩm" type="text" name="product_name" class="form-control" onkeyup="ChangeToSlug()">
                                    <?php if (isset($_SESSION['errors']['product_name'])) : ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['product_name'] ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6">
                                    <label for="product-categories" class="form-label">Chọn danh mục</label>
                                    <select class="form-control" id="product-categories" name="category_id" data-choices data-choices-group data-placeholder="Chọn danh mục">
                                        <?php foreach ($listCategorys as $cate) :  ?>
                                            <option value="<?= $cate['category_id'] ?>"><?= $cate['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label for="product-image" class="form-label">Ảnh sản phẩm</label>
                                        <input type="file" name="product_image" id="" class="form-control">
                                    </div>
                                    <?php if (isset($_SESSION['errors']['product_image'])) : ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['product_image'] ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label for="product-slug" class="form-label">Đường dẫn</label>
                                        <input type="text" name="product_slug" id="slug" class="form-control">
                                    </div>
                                    <?php if (isset($_SESSION['errors']['product_slug'])) : ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['product_slug'] ?></p>
                                    <?php endif; ?>
                                </div>


                                <div class="col-md-6">
                                    <label for="product_price" class="form-label">Giá sản phẩm</label>
                                    <input id="product_price" name="product_price" placeholder="Nhập giá sản phẩm" type="text" class="form-control">
                                    <?php if (isset($_SESSION['errors']['product_price'])) : ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['product_price'] ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6">
                                    <label for="product_sale_price" class="form-label">Giá khuyến mại</label>
                                    <input id="product_sale_price" name="product_sale_price" placeholder="Nhập giá khuyến mãi" type="text" class="form-control">
                                    <?php if (isset($_SESSION['errors']['product_sale_price'])) : ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['product_sale_price'] ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div id="variants">
                                <div class="row mb-4 mt-3 border rounded px-2 ">
                                    <div class="col-lg-4">
                                        <div class="mt-3 mb-3">
                                            <label class="form-label">Kích thước :</label>
                                            <div class="d-flex flex-wrap gap-2">
                                                <?php foreach ($listSizes as $size) : ?>
                                                    <input class="btn-check" type="checkbox" id="size-<?= $size['size_id'] ?>" name="variant_size[]" value="<?= $size['size_id'] ?>">
                                                    <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-<?= $size['size_id'] ?>"><?= $size['size_name'] ?></label>
                                                <?php endforeach; ?>
                                            </div>
                                            <?php if (isset($_SESSION['errors']['variant_size'])) : ?>
                                                <p class="text-danger"><?= $_SESSION['errors']['variant_size'] ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="mt-3 mb-3">
                                            <label class="form-label">Màu sắc :</label>
                                            <div class="d-flex flex-wrap gap-2">
                                                <?php foreach ($listColors as $color) : ?>
                                                    <input type="checkbox" class="btn-check" id="color-<?= $color['color_id'] ?>" name="variant_color[]" value="<?= $color['color_id'] ?>">
                                                    <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-<?= $color['color_id'] ?>">
                                                        <i style="background-color: <?= $color['color_code'] ?>; color: <?= $color['color_code'] ?>">/////////|</i> </label>
                                                <?php endforeach; ?>
                                            </div>
                                            <?php if (isset($_SESSION['errors']['variant_color'])) : ?>
                                                <p class="text-danger"><?= $_SESSION['errors']['variant_color'] ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mt-3 mb-3">
                                            <label for="quantity" class="form-label">Số lượng</label>
                                            <input id="quantity" name="variant_quantity[]" placeholder="Nhập số lượng" type="text" class="form-control">
                                            <?php if (isset($_SESSION['errors']['variant_quantity'])) : ?>
                                                <?php foreach (($_SESSION['errors']['variant_quantity']) as $variant_quantity) : ?>
                                                    <p class="text-danger"><?= $variant_quantity ?></p>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label for="variant_price" class="form-label">Giá biến thể </label>
                                            <input id="variant_price" name="variant_price[]" placeholder="Nhập giá sản phẩm biến thể" type="text" class="form-control">
                                        </div>
                                        <?php if (isset($_SESSION['errors']['variant_price'])) : ?>
                                            <?php foreach (($_SESSION['errors']['variant_price']) as $variant_price) : ?>
                                                <p class="text-danger"><?= $variant_price ?></p>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label for="variant_sale_price" class="form-label">Giá khuyến mãi biến thể</label>
                                            <input id="variant_sale_price" name="variant_sale_price[]" placeholder="Nhập giá khuyến mãi sản phẩm biến thể" type="text" class="form-control">
                                        </div>
                                        <?php if (isset($_SESSION['errors']['variant_sale_price'])) : ?>
                                            <?php foreach (($_SESSION['errors']['variant_sale_price']) as $variant_sale_price) : ?>
                                                <p class="text-danger"><?= $variant_sale_price ?></p>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                            <div class="rounded">
                                <div class="row justify-content-end g-2">
                                    <div class="col-lg-2 ">
                                        <button type="button" id="add-variant" class="btn btn-primary w-100">Thêm biến thể</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Mô tả sản phẩm</label>
                                <textarea class="form-control bg-light-subtle" id="description" rows="7" placeholder="Nhập mô tả" name="product_description"></textarea>
                                <?php if (isset($_SESSION['errors']['product_description'])) : ?>
                                    <p class="text-danger"><?= $_SESSION['errors']['product_description'] ?></p>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="row justify-content-end g-2">
                            <div class="col-lg-2">
                                <button type="submit" name="add_products" class="btn btn-primary w-100">Thêm sản phẩm</button>
                            </div>
                            <div class="col-lg-2">
                                <a href="?act=product" class="btn btn-primary w-100">Quay lại</a>
                            </div>
                        </div>
                    </div> <!-- Row end  -->



                </div>
        </form>
    </div><!-- Row end  -->

</div>
<script>
    document.getElementById('add-variant').addEventListener('click', function() {
        const container = document.getElementById('variants');
        const newVariant = document.createElement('div');

        newVariant.innerHTML = `
                <div class="row mb-4 mt-3 border rounded px-2 ">

                                    <div class="col-lg-4">
                                        <div class="mt-3 mb-3">
                                            <label class="form-label">Kích thước :</label>
                                            <div class="d-flex flex-wrap gap-2">
                                            <?php foreach ($listSizes as $size) : ?>
                                                <input class="btn-check" type="checkbox" id="size-<?= $size['size_id'] ?>-${container.children.length}" value="<?= $size['size_id'] ?>" name="variant_size[]">
                                                <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-<?= $size['size_id'] ?>-${container.children.length}"> <?= $size['size_name'] ?> </label>
                                            <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="mt-3 mb-3">
                                            <label class="form-label">Màu sắc :</label>
                                            <div class="d-flex flex-wrap gap-2">
                                            <?php foreach ($listColors as $color) : ?>
                                                <input type="checkbox" class="btn-check" id="color-<?= $color['color_id'] ?>-${container.children.length}" value="<?= $color['color_id'] ?>" name="variant_color[]">
                                                <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-<?= $color['color_id'] ?>-${container.children.length}" > 
                                                <i style="background-color: <?= $color['color_code'] ?>; color: <?= $color['color_code'] ?>">/////////|</i></label>
                                            <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mt-3 mb-3">
                                            <label for="variant_quantity" class="form-label">Số lượng</label>
                                            <input id="variant_quantity" name="variant_quantity[]" placeholder="Nhập giá khuyến mãi" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label for="variant_price" class="form-label">Giá biến thể </label>
                                            <input id="variant_price" name="variant_price[]" placeholder="Nhập giá khuyến mãi" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label for="variant_sale_price" class="form-label">Giá khuyến mãi biến thể</label>
                                            <input id="variant_sale_price" name="variant_sale_price[]" placeholder="Nhập giá khuyến mãi" type="text" class="form-control">
                                        </div>
                                    </div>

                             </div>
            `;
        container.appendChild(newVariant);
    })
</script>
</div>
<?php
//Xóa lỗi khỏi session khi đã thông báo tranh lặp lại lỗi 
unset($_SESSION['errors']);
include '../views/admin/layout/footer.php' ?>