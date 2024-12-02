<?php include '../views/admin/layout/header.php' ?>

<!-- Body: Body -->
<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <form action="?act=coupon-update&coupon_id=<?= $coupon['coupon_id'] ?>" method="post">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Cập nhật phiếu giảm giá</h3>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row clearfix g-3">
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="m-0 fw-bold">Trạng thái phiếu giảm giá</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="hidden" <?= $coupon['status'] == 'Hidden' ? 'checked' : '' ?> checked>
                                <label class="form-check-label">
                                    Đã Hết Hạn
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="active" <?= $coupon['status'] == 'Active' ? 'checked' : '' ?>>
                                <label class="form-check-label">
                                    Đang Hoạt Động
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="future plan" <?= $coupon['status'] == 'Future Plan' ? 'checked' : '' ?>>
                                <label class="form-check-label">
                                    Kế hoạch tương lai
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="m-0 fw-bold">Lịch trình ngày</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-12">
                                    <label class="form-label">Start Date</label>
                                    <input type="date" class="form-control w-100" name="start_date" value="<?= $coupon['start_date'] ?>">
                                </div>
                                <?php if (isset($_SESSION['errors']['start_date'])) : ?>
                                    <p class="text-danger"><?= $_SESSION['errors']['start_date']  ?></p>
                                <?php endif; ?>
                                <div class="col-md-12">
                                    <label class="form-label">End Date</label>
                                    <input type="date" class="form-control w-100" name="end_date" value="<?= $coupon['end_date'] ?>">
                                </div>
                                <?php if (isset($_SESSION['errors']['end_date'])) : ?>
                                    <p class="text-danger"><?= $_SESSION['errors']['end_date']  ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="m-0 fw-bold">Thông tin phiếu giảm giá</h6>
                        </div>
                        <div class="card-body">

                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label class="form-label">Tên Mã giảm giá</label>
                                    <input type="text" class="form-control" name="name" value="<?= $coupon['name'] ?>" placeholder="Mời nhập tên mã giảm giá">
                                    <br>
                                    <?php if (isset($_SESSION['errors']['name'])) : ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['name']  ?></p>
                                    <?php endif; ?>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Mã giảm giá</label>
                                    <input type="text" class="form-control" name="coupon_code" value="<?= $coupon['coupon_code'] ?>" placeholder="Mời nhập mã giảm giá">
                                    <br>
                                    <?php if (isset($_SESSION['errors']['coupon_code'])) : ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['coupon_code']  ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <label class="form-label">Số lượng</label>
                                <input type="text" class="form-control" name="quantity" value="<?= $coupon['quantity'] ?>" placeholder="Mời nhập số lượng">
                            </div>
                            <br>
                            <?php if (isset($_SESSION['errors']['quantity'])) : ?>
                                <p class="text-danger"><?= $_SESSION['errors']['quantity']  ?></p>
                            <?php endif; ?>
                            <br>
                            <div class="col-md-12">
                                <label class="form-label">Các loại phiếu giảm giá</label>
                                <!-- <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type" value="Free Shipping">
                                    <label class="form-check-label">
                                        Miễn phí vận chuyển
                                    </label>
                                </div> -->
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type" value="Percentage" <?= $coupon['type'] == 'Percentage' ? 'checked' : '' ?> checked>
                                    <label class="form-check-label">
                                        Giảm phần trăm
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type" value="Fixed Amount" <?= $coupon['type'] == 'Fixed Amount' ? 'checked' : '' ?>>
                                    <label class="form-check-label">
                                        Giá giảm cố định
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <label class="form-label">Giá trị giảm giá</label>
                                <input type="text" class="form-control" name="coupon_value" value="<?= $coupon['coupon_value'] ?>" placeholder="Giá trị giảm">
                            </div>
                            <br>
                            <?php if (isset($_SESSION['errors']['coupon_value'])) : ?>
                                <p class="text-danger"><?= $_SESSION['errors']['coupon_value']  ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <button type="submit" name="coupon-update" class="btn btn-primary mt-4 text-uppercase px-5">Cập nhật</button>
            </div>
    </div><!-- Row End -->
    </form>
</div>
</div>


</div>

<?php
unset($_SESSION['errors']);
include '../views/admin/layout/footer.php' ?>