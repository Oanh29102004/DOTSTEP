<?php include '../views/client/layout/header.php' ?>
<main>
  <div class="mb-4 pb-4"></div>
  <div class="mb-4 pb-4"></div>
  <div class="mb-4 pb-4"></div>
  <section class="my-account container">
    <h2 class="page-title">Welcome <?= $_SESSION['user']['name'] ?>!</h2>
    <div class="row">
      <div class="col-lg-3">
        <ul class="account-nav">
          <li><a href="account_dashboard.html" class="menu-link menu-link_us-s">Dashboard</a></li>
          <li><a href="?act=order-cl" class="menu-link menu-link_us-s">Orders</a></li>
          <li><a href="account_edit_address.html" class="menu-link menu-link_us-s">Addresses</a></li>
          <li><a href="?act=profileDetail" class="menu-link menu-link_us-s menu-link_active">Account Details</a></li>
          <li><a href="account_wishlist.html" class="menu-link menu-link_us-s">Wishlist</a></li>
          <li><a href="?act=logout" class="menu-link menu-link_us-s">Logout</a></li>
        </ul>
      </div>
      <div class="col-lg-9">
        <div class="page-content my-account__edit">
          <div class="my-account__edit-form">
            <form action="?act=update-profile" method="post" name="account_edit_form" class="needs-validation" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" id="account_first_name" name="name" placeholder="First Name" value="<?= $_SESSION['user']['name'] ?>">
                    <label for="account_first_name">Tên tài khoản</label>
                  </div>
                  <?php if (isset($_SESSION['errors']['name'])) : ?>
                    <p class="text-danger"><?= $_SESSION['errors']['name']  ?></p>
                  <?php endif; ?>
                </div>
                <div class="col-md-6">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" id="account_last_name" name="phone" placeholder="phone" value="<?= $_SESSION['user']['phone'] ?>">
                    <label for="account_last_name">Số Điện Thoại</label>
                  </div>
                  <?php if (isset($_SESSION['errors']['phone'])) : ?>
                    <p class="text-danger"><?= $_SESSION['errors']['phone']  ?></p>
                  <?php endif; ?>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="text" class="form-control" id="account_display_name" name="address" placeholder="Display Name" value="<?= $_SESSION['user']['address'] ?>">
                    <label for="account_display_name">Địa chỉ</label>
                  </div>
                  <?php if (isset($_SESSION['errors']['address'])) : ?>
                    <p class="text-danger"><?= $_SESSION['errors']['address']  ?></p>
                  <?php endif; ?>
                </div>
                <div class="col-md-12">
                  <div class="form-floating my-3">
                    <input type="email" class="form-control" id="account_email" name="email" placeholder="Email Address" value="<?= $_SESSION['user']['email'] ?>">
                    <label for="account_email">Email</label>
                  </div>
                  <?php if (isset($_SESSION['errors']['email'])) : ?>
                    <p class="text-danger"><?= $_SESSION['errors']['email']  ?></p>
                  <?php endif; ?>
                </div>
                <div class="col-md-12">
                  <div class="my-3">
                    <button class="btn btn-primary" name="update-profile">Thay đổi Profile</button>
                  </div>
                </div>
            </form>
            <div class="col-md-12">
              <div class="my-3">
                <h5 class="text-uppercase mb-0">Thay đổi mật khẩu</h5>
              </div>
            </div>
            <form action="?act=change-password" method="POST">
              <div class="col-md-12">
                <div class="form-floating my-3">
                  <input type="password" class="form-control" name="old_pass" id="old_pass" placeholder="Current password">
                  <label for="old_pass">Mật khẩu cũ</label>
                </div>
                <?php if (isset($_SESSION['errors']['old_pass'])) : ?>
                  <p class="text-danger"><?= $_SESSION['errors']['old_pass']  ?></p>
                <?php endif; ?>
              </div>
              <div class="col-md-12">
                <div class="form-floating my-3">
                  <input type="password" class="form-control" name="new_password" id="new_password" placeholder="New password">
                  <label for="new_password">Mật khẩu mới</label>
                </div>
                <?php if (isset($_SESSION['errors']['new_password'])) : ?>
                  <p class="text-danger"><?= $_SESSION['errors']['new_password']  ?></p>
                <?php endif; ?>
              </div>
              <div class="col-md-12">
                <div class="form-floating my-3">
                  <input type="password" class="form-control" data-cf-pwd="#account_new_password" name="con_new_pass" id="con_new_pass" placeholder="Confirm new password">
                  <label for="con_new_password">Nhập lại Mật khẩu mới</label>
                  <div class="invalid-feedback">Passwords did not match!</div>
                </div>
                <?php if (isset($_SESSION['errors']['con_new_pass'])) : ?>
                  <p class="text-danger"><?= $_SESSION['errors']['con_new_pass']  ?></p>
                <?php endif; ?>
              </div>
              <div class="col-md-12">
                <div class="my-3">
                  <button class="btn btn-primary" name="change-password">Thay Đổi Mật Khẩu</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
</main>
<?php
unset($_SESSION['errors']);
include '../views/client/layout/footer.php' ?>