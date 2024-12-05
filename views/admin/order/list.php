<?php include '../views/admin/layout/header.php' ?>
<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Orders List</h3>
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
                                    <th>mã đơn hàng</th>
                                    <th>Ngày mua</th>
                                    <th>Khách hàng</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th>hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listOrder as $order): ?>
                                    <tr>
                                        <td><a href="order-details.html"><strong>#<?= $order['order_detail_id'] ?></strong></a></td>
                                        <td><?= date('M d,Y', strtotime($order['created_at'])) ?></td>
                                        <td><?= $order['name'] ?></td>
                                        <td><?= number_format($order['amount'] * 1000) ?>đ</td>
                                        <td>
                                            <span class="badge bg-warning"><?= $order['status'] ?></span>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                <a href="?act=coupon-detail&coupon_id=<?= $coupon['coupon_id'] ?>" class="btn btn-outline-secondary"><i class="icofont-eye text-primary"></i></a>
                                                <a href="?act=order-edit&order_detail_id=<?= $order['order_detail_id'] ?>" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                <?php if ($order['status'] == 'Delivered' || $order['status'] == 'Shipped'): ?>
                                                    <button type="button" onclick="return confirm('Không xóa được đâu!')" href="?act=order-delete&order_detail_id=<?= $order['order_detail_id'] ?>" class="btn btn-outline-secondary"><i class="icofont-ui-delete text-danger"></i></button>
                                                <?php else: ?>
                                                    <a onclick="return confirm('Xóa à ?')" href="?act=order-delete&order_detail_id=<?= $order['order_detail_id'] ?>" class="btn btn-outline-secondary"><i class="icofont-ui-delete text-danger"></i></a>
                                                <?php endif; ?>

                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
    </div>
</div>
<?php include '../views/admin/layout/footer.php' ?>