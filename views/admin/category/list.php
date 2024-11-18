<?php include '../views/admin/layout/header.php' ?>
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Thêm danh mục</h3>
                    <a href="index.php?act=category-create" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i> Thêm danh mục</a>
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
                                    <th>Id</th>
                                    <th>Tên</th>
                                    <th>Hình ảnh</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listCategories as $cate) : ?>
                                    <tr>
                                        <td><strong><?= $cate['category_id'] ?></strong></td>
                                        <td><?= $cate['name'] ?></td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="rounded by-light avatar-md d-flex align-items-center justify-content-center">
                                                    <img src="./images/category/<?= $cate['image']   ?>" width="100px" alt="" class="avatar-md">
                                                </div>
                                            </div>
                                        </td>
                                        <td><?= $cate['status'] ?></td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="index.php?act=category-detail&id=<?= $cate['category_id'] ?>" class="btn btn-outline-secondary"><i class="icofont-eye text-success"></i></a>
                                                <a href="index.php?act=category-edit&id=<?= $cate['category_id'] ?>" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                <a onclick="return confirm('Bạn chắn chắn muốn xóa k?')" href="index.php?act=category-delete&id= <?= $cate['category_id'] ?>" class="btn btn-outline-secondary"><i class="icofont-trash text-success"></i></a>

                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../views/admin/layout/footer.php' ?>