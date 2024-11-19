<?php include '../views/admin/layout/header.php' ?>
<div class="body d-flex py-3">
    <div class="container-xxl">

        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <h3 class="fw-bold mb-0">Cập nhật danh mục</h3>


            </div>
        </div> <!-- Row end  -->
        <div class="">
            <form action="index.php?act=category-edit&id=<?= $getCategory['category_id'] ?>" method="POST" enctype="multipart/form-data">
                <div class="col-lg-4">

                </div>
                <div class="col-lg-12">
                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="row g-3 align-items-center">
                                <div class="col-md-12">
                                    <label class="form-label">Tên danh mục</label>
                                    <input type="text" class="form-control" name="name" value="<?= $getCategory['name']  ?> ">

                                </div>
                                <?php if (isset($_SESSION['errors']['name'])) : ?>
                                    <p class="text-danger"><?= $_SESSION['errors']['name']  ?></p>
                                <?php endif; ?>
                                <div class="card-body">
                                    <!-- Upload ảnh -->
                                    <img src="./images/category/<?= $getCategory['image'] ?>  " width="100px" alt="" class="mb-3">
                                    <input type="file" name="image" id="" class="form-control">
                                    <input type="hidden" name="old_image" value="<?= $getCategory['image'] ?>">


                                </div>
                                <div class="col-md-12">
                                    <div class="col-lg-6">
                                        <label for="crater" class="form-label">Trạng thái</label>

                                        <select id="crater" name="status" class="form-control">
                                            <option value="">Chọn trạng thái </option>
                                            <option value="Hidden" <?= $getCategory['status'] == 'Hidden' ? 'selected' : '' ?>>Ẩn </option>
                                            <option value="Active" <?= $getCategory['status'] == 'Active' ? 'selected' : '' ?>>Hiện</option>
                                        </select>
                                    </div>
                                    <?php if (isset($_SESSION['errors']['status'])) : ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['status']  ?></p>
                                    <?php endif; ?>

                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-0">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control bg-light-subtle" rows="4 " name="description" id="description" placeholder="Mô tả"><?= $getCategory['description']  ?> </textarea>
                                    </div>
                                    <?php if (isset($_SESSION['errors']['description'])) : ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['description']  ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="p-3 bg -light mb-3 rounded">
                                <div class="col-md-6">
                                    <button type="submit" name="updateCategory" class="btn btn-primary py-2 px-5 text-uppercase btn-set-task w-sm-100">Cập nhật</button>
                                    <a href="index.php?act=category-list" class="btn btn-dark py-2 px-5 text-uppercase btn-set-task w-sm-100">Quay lại</a>

                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div><!-- Row end  -->

    </div>
</div>

<?php include '../views/admin/layout/footer.php' ?>