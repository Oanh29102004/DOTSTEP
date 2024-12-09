<?php include '../views/client/layout/header.php' ?>
<main>
<div class="mb-md-1 pb-md-3"></div>
<div class="mb-md-1 pb-md-3"></div>
<div class="mb-md-1 pb-md-3"></div>
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
      <h2 class="page-title">Wishlist</h2>
      <div class="row">
        <div class="col-lg-3">
          <ul class="account-nav">
            <li><a href="account_dashboard.html" class="menu-link menu-link_us-s">Dashboard</a></li>
            <li><a href="account_orders.html" class="menu-link menu-link_us-s">Orders</a></li>
            <li><a href="account_edit_address.html" class="menu-link menu-link_us-s">Addresses</a></li>
            <li><a href="account_edit.html" class="menu-link menu-link_us-s">Account Details</a></li>
            <li><a href="account_wishlist.html" class="menu-link menu-link_us-s menu-link_active">Wishlist</a></li>
            <li><a href="login_register.html" class="menu-link menu-link_us-s">Logout</a></li>
          </ul>
        </div>
        <div class="col-lg-9">
          <div class="page-content my-account__orders-list">
            <table class="orders-table">
            <thead>
              <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
                <th></th>
              </tr>
            </thead>
              <tbody>
                <?php foreach($listWishList as $favorite): ?>
              <tr>
                <td>
                  <div class="shopping-cart__product-item">
                    <a href="?act=product-detail&slug=<?= $favorite['slug'] ?>">
                      <img loading="lazy" src="./images/product/<?= $favorite['image'] ?>" width="120" height="120" alt="">
                      
                    </a>
                    <p><?= $favorite['name'] ?></p>
                  </div>
                </td>
                
                <td>
                  <span class="shopping-cart__product-price"><?=number_format($favorite['price'] *1000 , 0, ',' , '.') ?>đ</span>
                </td>
                <td>
                <div class="qty-control position-relative" style="width: 60px;" >
                    <p> <?= $favorite['quantity'] ?></p>
                    
                  </div><!-- .qty-control -->
                </td>
                <td>
                    <a href="?act=product-detail&slug=<?= $favorite['slug'] ?>" name="add_to_cart" class="btn btn-dark">Thêm</a>
                </td>
                <td>
                  <a href="?act=wishlist-delete&favorite_id=<?= $favorite['favorite_id']?>" onclick="return confirm('Bạn có chắc xóa sản phẩm khỏi giỏ hàng không?') " >
                    <span>x Remove</span>                
                  </a>
                </td>
              </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
    </section>
  </main>
  <div class="mb-md-1 pb-md-3"></div>
  <div class="mb-md-1 pb-md-3"></div>
  <div class="mb-md-1 pb-md-3"></div>
<?php include '../views/client/layout/footer.php' ?>