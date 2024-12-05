<?php include '../views/admin/layout/header.php' ?>

<div class="body d-flex py-3">
  <div class="container-xxl">
    <div class="row align-items-center">
      <div class="border-0 mb-4">
        <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
          <h3 class="fw-bold mb-0">Chi tiết đơn hàng: #Order-78414</h3>
          <div class="col-auto d-flex btn-set-task w-sm-100 align-items-center">
            <select class="form-select" aria-label="Default select example">
              <option selected="">Chọn Đơn Hàng</option>
              <option value="1">Order-78414</option>
            </select>
          </div>
        </div>
      </div>
    </div> <!-- Row end  -->
    <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
      <div class="col">
        <div class="alert-success alert mb-0">
          <div class="d-flex align-items-center">
            <div class="avatar rounded no-thumbnail bg-success text-light"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></div>
            <div class="flex-fill ms-3 text-truncate">
              <div class="h6 mb-0">Đơn hàng được tạo tại</div>
              <span class="small">16/03/2021 at 04:23 PM</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="alert-danger alert mb-0">
          <div class="d-flex align-items-center">
            <div class="avatar rounded no-thumbnail bg-danger text-light"><i class="fa fa-user fa-lg" aria-hidden="true"></i></div>
            <div class="flex-fill ms-3 text-truncate">
              <div class="h6 mb-0">Tên Khách Hàng</div>
              <span class="small">Gabrielle</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="alert-warning alert mb-0">
          <div class="d-flex align-items-center">
            <div class="avatar rounded no-thumbnail bg-warning text-light"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></div>
            <div class="flex-fill ms-3 text-truncate">
              <div class="h6 mb-0">Email</div>
              <span class="small">gabrielle.db@gmail.com</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="alert-info alert mb-0">
          <div class="d-flex align-items-center">
            <div class="avatar rounded no-thumbnail bg-info text-light"><i class="fa fa-phone-square fa-lg" aria-hidden="true"></i></div>
            <div class="flex-fill ms-3 text-truncate">
              <div class="h6 mb-0">Số điện thoại</div>
              <span class="small">202-906-12354</span>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- Row end  -->
    <div class="row g-3 mb-3 row-cols-1 row-cols-md-1 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-3 row-deck">
      <div class="col-xl-12 col-xxl-4">
        <div class="card auth-detailblock">
          <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
            <h6 class="mb-0 fw-bold ">Địa Chỉ nhận hàng</h6>
            <a href="#" class="text-muted">Edit</a>
          </div>
          <div class="card-body">
            <div class="row g-3">
              <div class="col-12">
                <label class="form-label col-6 col-sm-5">Block Number:</label>
                <span><strong>A-510</strong></span>
              </div>
              <div class="col-12">
                <label class="form-label col-6 col-sm-5">Address:</label>
                <span><strong>81 Fulton London</strong></span>
              </div>
              <div class="col-12">
                <label class="form-label col-6 col-sm-5">Pincode:</label>
                <span><strong>385467</strong></span>
              </div>
              <div class="col-12">
                <label class="form-label col-6 col-sm-5">Phone:</label>
                <span><strong>202-458-4568</strong></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-12 col-xxl-4">
        <div class="card">
          <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
            <h6 class="mb-0 fw-bold ">Tóm tắt đơn hàng</h6>
            <a href="#" class="text-muted">Edit</a>
          </div>
          <div class="card-body">
            <div class="row g-3">
              <div class="col-12">
                <label class="form-label col-6 col-sm-5">Giá:</label>
                <span><strong><?= number_format(($getOrderDetail['amount']) * 1000) ?>đ</strong></span>
              </div>
              <div class="col-12">
                <label class="form-label col-6 col-sm-5">Giảm giá:</label>
                <span><strong>-<?= number_format($handleCoupon * 1000) ?>đ</strong></span>
              </div>
              <div class="col-12-">
                <label class="form-label col-6 col-sm-5">Phí vận chuyển:</label>
                <span><strong><?= number_format(($ship['shipping_price']) * 1000) ?>đ</strong></span>
              </div>
              <div class="col-12 ">
                <label class="form-label col-6 col-sm-5">Tổng số tiền phải trả:</label>
                <span class="text-danger"><strong><?= number_format(($getOrderDetail['amount'] - $handleCoupon + $ship['shipping_price']) * 1000) ?>đ</strong></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- Row end  -->
    <div class="row g-3 mb-3">
      <div class="col-xl-12 col-xxl-8">
        <div class="card">
          <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
            <h6 class="mb-0 fw-bold ">Sản phẩm</h6>
          </div>
          <div class="card-body">
            <div class="product-cart">
              <div class="checkout-table table-responsive">
                <table id="myCartTable" class="table display dataTable table-hover align-middle" style="width:100%">
                  <thead>
                    <tr>
                      <th class="product">Tên Sản phẩm và kích thước</th>
                      <th>Số Lượng</th>
                      <th class="quantity">Giá</th>
                      <th class="price">Tổng tiền</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($getOrder as $order): ?>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-2">
                            <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                              <img src="./images/product/<?= $order['product_image'] ?>" alt="" class="w120 rounded img-fluid">
                            </div>
                            <div>
                              <a href="#!" class="text-dark fw-medium fs-15"><?= $order['product_name'] ?></a>
                              <p class="text-muted mb-0 mt-1 fs-13"><span>Size : <?= $order['size_name'] ?></span>

                              </p>
                              <p class="text-muted mb-0 mt-1 fs-13"><span>Color : <?= $order['color_name'] ?></span>

                              </p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <h6 class="title"><span class="d-block fs-6 text-primary"><?= $order['quantity'] ?></span></h6>
                        </td>
                        <td><?= number_format(($order['variant_sale_price']) * 1000) ?>đ</td>
                        <td>
                          <p class="price"><?= number_format(($order['variant_sale_price'] * $order['quantity']) * 1000) ?>đ</p>
                        </td>
                      <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-12 col-xxl-4" style="margin-top: -250px;">
        <div class="card mb-3">
          <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
            <h6 class="mb-0 fw-bold ">Trạng thái đơn hàng</h6>
          </div>
          <div class="card-body">
            <form action="?act=order-update&order_detail_id=<?= $getOrderDetail['order_detail_id'] ?>" method="post">
              <div class="row g-3 align-items-center">
                <div class="col-md-12">
                  <label class="form-label">Mã đơn hàng</label>
                  <input type="text" class="form-control" value="#<?= $getOrderDetail['order_detail_id'] ?>">
                </div>
                <div class="col-md-12">
                  <label class="form-label">Quantity</label>
                  <input type="text" class="form-control" value="4">
                </div>
                <div class="col-md-12">
                  <label class="form-label">Trạng thái đơn hàng</label>
                  <select class="form-select" name="status" aria-label="Transection">
                    <option value="Pending" <?= $getOrderDetail['status'] == 'Pending' ? 'selected' : '' ?> >Pending</option>
                    <option value="Confirmed" <?= $getOrderDetail['status'] == 'Confirmed' ? 'selected' : '' ?> >Confirmed</option>
                    <option value="Shipped" <?= $getOrderDetail['status'] == 'Shipped' ? 'selected' : '' ?> >Shipped</option>
                    <option value="Delivered" <?= $getOrderDetail['status'] == 'Delivered' ? 'selected' : '' ?> >Delivered</option>
                    <option value="Canceled" <?= $getOrderDetail['status'] == 'Canceled' ? 'selected' : '' ?> >Canceled</option>
                  </select>
                </div>
                <div class="col-md-12">
                  <label for="comment" class="form-label">Comment</label>
                  <textarea class="form-control" id="comment" rows="4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</textarea>
                </div>
              </div>
              <button type="submitz" class="btn btn-primary mt-4 text-uppercase" name="updateOrder">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div> <!-- Row end  -->
  </div>
</div>

<?php include '../views/admin/layout/footer.php' ?>