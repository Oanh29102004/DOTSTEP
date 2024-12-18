<?php include '../views/admin/layout/header.php' ?>
<div class="body d-flex py-3">
    <div class="container-xxl">

        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <h3 class="fw-bold mb-0">Thêm danh mục</h3>


            </div>
        </div> <!-- Row end  -->
        <div class="">
            <form action="index.php?act=category-create" method="POST" enctype="multipart/form-data">
                <div class="col-lg-4">

                </div>
                <div class="col-lg-12">
                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="row g-3 align-items-center">
                                <div class="col-md-12">
                                    <label class="form-label">Tên danh mục</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <?php if (isset($_SESSION['errors']['name'])) : ?>
                                    <p class="text-danger"><?= $_SESSION['errors']['name']  ?></p>
                                <?php endif; ?>
                                <div class="card-body">
                                    <input type="file" name="image" id="" class="form-control">
                                    <?php if (isset($_SESSION['errors']['image'])) : ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['image']  ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-lg-6">
                                        <label for="crater" class="form-label">Trạng thái</label>

                                        <select id="crater" name="status">
                                            <option value="">Chọn trạng thái </option>
                                            <option value="Active">Ẩn </option>
                                            <option value="Hidden">Hiện</option>
                                        </select>
                                    </div>
                                    <?php if (isset($_SESSION['errors']['status'])) : ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['status']  ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-0">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control bg-light-subtle" rows="4 " name="description" id="description" placeholder="Mô tả"></textarea>
                                    </div>
                                    <?php if (isset($_SESSION['errors']['description'])) : ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['description']  ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="p-3 bg -light mb-3 rounded">
                                <div class="row justify-content-end g-2">
                                    <div class="col-lg-2">
                                        <button type="submit" name="createCategory" class="btn btn-primary me-1">Thêm mới</button>
                                    </div>
                                    <div class="col-lg-2">
                                        <a href="index.php?act=category-list" class="btn btn-secondary ">Quay lại</a>
                                    </div>
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