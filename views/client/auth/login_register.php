<?php include '../views/client/layout/header.php' ?>
<main>
  <div class="mb-5 pb-xl-5"></div>
  <section class="login-register container">
    <h2 class="d-none">Login & Register</h2>
    <ul class="nav nav-tabs mb-5" id="login_register" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link nav-link_underscore active" id="login-tab" name="register-tab" data-bs-toggle="tab" href="#tab-item-login" role="tab" aria-controls="tab-item-login" aria-selected="true">Login</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link nav-link_underscore" id="register-tab" name="register-tab" data-bs-toggle="tab" href="#tab-item-register" role="tab" aria-controls="tab-item-register" aria-selected="false">Register</a>
      </li>
    </ul>
    <div class="tab-content pt-2" id="login_register_tab_content">
      <div class="tab-pane fade show active" id="tab-item-login" role="tabpanel" aria-labelledby="login-tab">
        <div class="login-form">
          <form action="?act=login" name="login-form" class="needs-validation" method="POST">
            <div class="form-floating mb-3">
              <input type="email" name="email" class="form-control form-control_gray" id="customerNameEmailInput1" placeholder="Email address *">
              <label for="login_email">Email address *</label>
            </div>
            <?php if (isset($_SESSION['errors']['email'])) : ?>
              <p class="text-danger"><?= $_SESSION['errors']['email']  ?></p>
            <?php endif; ?>


            <div class="pb-3"></div>

            <div class="form-floating mb-3">
              <input name="password" type="password" class="form-control form-control_gray" id="customerPasswodInput" placeholder="Password *">
              <label for="login_password">Password *</label>
            </div>
            <?php if (isset($_SESSION['errors']['password'])) : ?>
              <p class="text-danger"><?= $_SESSION['errors']['password']  ?></p>
            <?php endif; ?>

            <div class="d-flex align-items-center mb-3 pb-2">
              <div class="form-check mb-0">
                <input name="remember" class="form-check-input form-check-input_fill" type="checkbox" value="" id="flexCheckDefault1">
                <label class="form-check-label text-secondary" for="flexCheckDefault1">Remember me</label>
              </div>
              <a href="reset_password.html" class="btn-text ms-auto">Lost password?</a>
            </div>

            <button class="btn btn-primary w-100 text-uppercase" name="login" type="submit">Log In</button>


            <div class="customer-option mt-4 text-center">
              <span class="text-secondary">No account yet?</span>
              <a href="?act=register" class="btn-text js-show-register">Create Account</a>
            </div>
          </form>
        </div>
      </div>

      <!-- Register  -->
      <div class="tab-pane fade" id="tab-item-register" role="tabpanel" aria-labelledby="register-tab">
        <div class="register-form">
          <form action="?act=register" name="register-form" class="needs-validation" method="POST">
            <div class="form-floating mb-3">
              <input name="name" type="text" class="form-control form-control_gray" id="customerNameRegisterInput" placeholder="Username">
              <label for="name">Username</label>
            </div>
            <?php if (isset($_SESSION['errors']['name'])) : ?>
              <p class="text-danger"><?= $_SESSION['errors']['name']  ?></p>
            <?php endif; ?>
            <div class="pb-3"></div>
            <div class="form-floating mb-3">
              <input name="email" type="email" class="form-control form-control_gray" id="email" placeholder="Email address *">
              <label for="email">Email address *</label>
            </div>
            <?php if (isset($_SESSION['errors']['email'])) : ?>
              <p class="text-danger"><?= $_SESSION['errors']['email']  ?></p>
            <?php endif; ?>

            <div class="pb-3"></div>

            <div class="form-floating mb-3">
              <input name="password" type="password" class="form-control form-control_gray" id="password" placeholder="Password *">
              <label for="password">Password *</label>
            </div>
            <?php if (isset($_SESSION['errors']['password'])) : ?>
              <p class="text-danger"><?= $_SESSION['errors']['password']  ?></p>
            <?php endif; ?>

            <button class="btn btn-primary w-100 text-uppercase" name="register" type="submit">Register</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<div class="mb-5 pb-xl-5"></div>
<?php
unset($_SESSION['errors']);
include '../views/client/layout/footer.php' ?>