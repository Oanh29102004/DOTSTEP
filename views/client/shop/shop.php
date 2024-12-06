<?php include '../views/client/layout/header.php' ?>
<main>

    <div class="mb-4 pb-4"></div>
    <div class="mb-4 pb-4"></div>
    <section class="full-width_padding">
        <div class="full-width_border border-2" style="border-color: #eeeeee;">
            <div class="shop-banner position-relative ">
                <div class="background-img" style="background-color: #eeeeee;">
                    <img loading="lazy" src="../images/shop/shop_banner_character1.png" width="1759" height="420" alt="Pattern" class="slideshow-bg__img object-fit-cover">
                </div>
                <div class="shop-banner__content container position-absolute start-50 top-50 translate-middle">
                    <h2 class="stroke-text h1 smooth-16 text-uppercase fw-bold mb-3 mb-xl-4 mb-xl-5">Snaker</h2>

                    <ul class="d-flex flex-wrap list-unstyled text-uppercase h6" style="gap: 15px; padding: 0; margin: 0;">
                        <?php foreach ($category as $cate): ?>
                            <li>
                                <a href="#" class="menu-link menu-link_us-s menu-link_active"><?= $cate['name'] ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div><!-- /.shop-banner__content -->
            </div><!-- /.shop-banner position-relative -->
        </div><!-- /.full-width_border -->
    </section><!-- /.full-width_padding-->

    <div class="mb-4 pb-lg-3"></div>

    <section class="shop-main container">
        <div class="d-flex justify-content-between mb-4 pb-md-2">
            <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
                <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">Home</a>
                <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
                <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium">The Shop</a>
            </div><!-- /.breadcrumb -->

        </div><!-- /.d-flex justify-content-between -->
        <?php if(isset($result)) :?>
                <p>Kết quả tìm kiếm với từ khóa <?= $_SESSION['keyword'] ?> </p>
            <?php endif;?>
        <div class="products-grid row row-cols-2 row-cols-md-3 row-cols-lg-4" id="products-grid">
           
            <?php foreach ($product as $pro): ?>
                <div class="product-card-wrapper">
                    <div class="product-card mb-3 mb-md-4 mb-xxl-5">

                        <div class="pc__img-wrapper">
                            <div class="swiper-container background-img " data-settings='{"resizeObserver": true}'>
                                <div>
                                    <a href="?act=product-detail&slug=<?= $pro['product_slug'] ?>"><img loading="lazy" src="./images/product/<?= $pro['product_image'] ?>" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img"></a>
                                </div><!-- /.pc__img-wrapper -->
                            </div>
                            <button  class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium " title="Add To Cart">Add To Cart</button>
                        </div>

                        <div class="pc__info position-relative">
                            <p class="pc__category"><?= $pro['category_name'] ?></p>
                            <h6 class="pc__title"><a href="?act=product-detail&slug=<?= $pro['product_slug'] ?>"><?= $pro['product_name'] ?></a></h6>
                            <div class="product-card__price d-flex">
                                <span class="money price price-old"><?= number_format($pro['product_price'] * 1000, 0, ',', '.')  ?> đ </span>
                                <span class="money price price-sale"><?= number_format($pro['product_sale_price'] * 1000, 0, ',', '.')  ?> đ</span>
                            </div>
                            <!-- <div class="product-card__review d-flex align-items-center">
                <div class="reviews-group d-flex">
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                  <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg"><use href="#icon_star" /></svg>
                </div>
                <span class="reviews-note text-lowercase text-secondary ms-1">8k+ reviews</span>
              </div> -->

                            <a href="?act=wishlist-add&product_id=<?= $pro['product_id'] ?>" class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_heart" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>

            <?php endforeach; ?>
            
        </div><!-- /.products-grid row -->



        <div class="text-center">
            <a class="btn-link btn-link_lg text-uppercase fw-medium" href="#">Show More</a>
        </div>
    </section><!-- /.shop-main container -->
</main>
<?php include '../views/client/layout/footer.php' ?>
//search ne