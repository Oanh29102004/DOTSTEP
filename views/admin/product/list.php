<?php include '../views/admin/layout/header.php' ?>
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Danh sách sản phẩm</h3>
                    <a href="index.php?act=product-create" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i> Thêm sản phẩm</a>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row g-3 mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                            <thead>
                                <tr>
                                    <!-- <th style="width: 20px;">
                                        <div class="form-check ms-1">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1"></label>
                                        </div>
                                    </th> -->
                                    <th>ID</th>
                                    <th>Tên sản phẩm và biến thể</th>
                                    <th>Danh mục</th>
                                    <th>Giá sản phẩm</th>
                                    <th>Giá khuyến mãi</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($listProduct as $product) : ?>
                                <tr>
                                    <!-- <td>
                                        <div class="form-check ms-1">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                        </div>
                                    </td> -->
                                    <td><?= $product['product_id'] ?></td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                <img src="./images/product/<?= $product['product_image'] ?>" alt="" class="w120 rounded img-fluid">
                                            </div>
                                            <div>
                                                <a href="#!" class="text-dark fw-medium fs-15"><?=$product['product_name']?></a>
                                                <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>
                                                    <?php foreach ($product['variants'] as $size) : ?>
                                                        <span><?= $size['product_variant_size']  ?></span>
                                                    <?php endforeach ?>                                        
                                                </p>
                                                <p class="text-muted mb-0 mt-1 fs-13"><span>Color : </span>
                                                    <?php foreach ($product['variants'] as $color) : ?>
                                                        <span><?= $color['product_variant_color'] ?></span>
                                                    <?php endforeach ?>                                        
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?= $product['category_name'] ?></td>
                                    <td><?= number_format($product['product_price'] *1000 , 0, ',' , '.')  ?> đ</td>
                                    <td><?= number_format($product['product_sale_price'] *1000 , 0, ',' , '.')?> đ</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <a href="?act=product-detail&id=<?= $product['product_id'] ?>" class="btn btn-outline-secondary"><i class="icofont-eye text-info"></i></a>
                                            <a href="?act=product-edit&id=<?= $product['product_id'] ?>" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                            <a onclick="return confirm('Bạn chắn chắn muốn xóa k?')" href="?act=product-delete&id=<?= $product['product_id'] ?>" class="btn btn-outline-secondary"><i class="icofont-trash text-danger"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>    
                                
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../views/admin/layout/footer.php' ?>