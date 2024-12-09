<?php  include '../views/client/layout/header.php' ?>
<main class="bg-grey-faf9f8">
    <section class="swiper-container js-swiper-slider slideshow h-xs-25rem bg-white"
      data-settings='{
        "autoplay": {
          "delay": 5000
        },
        "navigation": {
          "nextEl": ".slideshow__next",
          "prevEl": ".slideshow__prev"
        },
        "slidesPerView": 1,
        "effect": "fade",
        "loop": true
      }'>
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="overflow-hidden position-relative h-100">
            <div class="slideshow-character position-absolute bottom-0 pos_right-center">
              <div class="character_bg position-absolute position-center">
                <img loading="lazy" src="client/images/home/demo4/slider_mark.png" width="690" height="690" alt="" class="animate animate_fade animate_btt animate_delay-5 w-auto h-auto">
              </div>
              <img loading="lazy" src="client/images/home/demo4/slider1.png" width="493" height="693" alt="" class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 w-auto h-auto">
            </div>
            <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
              <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5">Cơ bản</h2>
              <p class="fs-6 mb-4 pb-2 animate animate_fade animate_btt animate_delay-5">Các mẫu giày đơn giản dễ phối đồ cho cả nam và nữ.</p>
              <a href="shop1.html" class="btn-link btn-link_lg default-underline text-uppercase fw-medium animate animate_fade animate_btt animate_delay-7">Xem ngay</a>
            </div>
          </div>
        </div><!-- /.slideshow-item -->

        <div class="swiper-slide">
          <div class="overflow-hidden position-relative h-100">
            <div class="slideshow-character position-absolute bottom-0 pos_right-center">
              <div class="character_bg position-absolute position-center">
                <img loading="lazy" src="client/images/home/demo4/slider_mark.png" width="560" height="560" alt="" class="animate animate_fade animate_btt animate_delay-5 w-auto h-auto">
              </div>
              <img loading="lazy" src="client/images/home/demo4/slider2.png" width="490" height="690" alt="" class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 w-auto h-auto">
            </div>
            <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
              <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5">Mẫu Nam</h2>
              <p class="fs-6 mb-4 pb-2 animate animate_fade animate_btt animate_delay-5">Những mẫu giày mạnh mẽ , nam tính cho nam.</p>
              <a href="shop1.html" class="btn-link btn-link_lg default-underline text-uppercase fw-medium animate animate_fade animate_btt animate_delay-7">Xem ngay</a>
            </div>
          </div>
        </div><!-- /.slideshow-item -->

        <div class="swiper-slide">
          <div class="overflow-hidden position-relative h-100">
            <div class="slideshow-character position-absolute bottom-0 pos_right-center">
              <div class="character_bg position-absolute position-center">
                <img loading="lazy" src="client/images/home/demo4/slider_mark.png" width="690" height="690" alt="" class="animate animate_fade animate_btt animate_delay-5 w-auto h-auto">
              </div>
              <img loading="lazy" src="client/images/home/demo4/slider3.png" alt="" width="675" height="733" class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 w-auto h-auto">
            </div>
            <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
              <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5">Mẫu nữ</h2>
              <p class="fs-6 mb-4 pb-2 animate animate_fade animate_btt animate_delay-5">Những mẫu giày bánh bèo , cá tính cho nữ .</p>
              <a href="shop1.html" class="btn-link btn-link_lg default-underline text-uppercase fw-medium animate animate_fade animate_btt animate_delay-7">Xem ngay</a>
            </div>
          </div>
        </div><!-- /.slideshow-item -->
      </div><!-- /.slideshow-wrapper js-swiper-slider -->

      <div class="container">
        <div class="slideshow-navigation d-flex align-items-center position-absolute bottom-0 mb-5">
          <div class="slideshow__prev border-0">
            PREV
          </div><!-- /.products-carousel__prev -->
          <div class="slideshow__next border-0">
            NEXT
          </div><!-- /.products-carousel__next -->
        </div>
        <!-- /.products-pagination -->
      </div><!-- /.container -->

      <div class="slideshow-social-follow d-none d-xxl-block position-absolute top-50 end-0 translate-middle-y text-center mx-4">
        <ul class="social-links list-unstyled mb-0 text-secondary">
          <li>
            <a href="#" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_facebook" width="9" height="15" viewBox="0 0 9 15" xmlns="http://www.w3.org/2000/svg"><use href="#icon_facebook" /></svg>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_twitter" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg"><use href="#icon_twitter" /></svg>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_instagram" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg"><use href="#icon_instagram" /></svg>
            </a>
          </li>
          <li>
            <a href="https://www.pinterest.com/" class="footer__social-link d-block">
              <svg class="svg-icon svg-icon_pinterest" width="14" height="15" viewBox="0 0 14 15" xmlns="http://www.w3.org/2000/svg"><use href="#icon_pinterest" /></svg>
            </a>
          </li>
        </ul><!-- /.social-links list-unstyled mb-0 text-secondary -->
        <span class="slideshow-social-follow__title d-block mt-5 text-uppercase fw-medium text-secondary">Follow Us</span>
      </div><!-- /.slideshow-social-follow -->
    </section><!-- /.slideshow -->

    <div class="mb-1 pb-4 mb-xl-5 pb-xl-5"></div>

    <section class="products-carousel container">
      <h2 class="section-title text-center fw-normal mb-1 mb-md-3 pb-xl-3 mb-xl-4">Sản phẩm nổi bật</h2>

      <ul class="nav nav-tabs mb-3 mb-xl-5 text-uppercase justify-content-center" id="collections-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore active" id="collections-tab-1-trigger" data-bs-toggle="tab" href="#collections-tab-1" role="tab" aria-controls="collections-tab-1" aria-selected="true">All</a>
        </li>
        <?php foreach($category as $cate): ?>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="collections-tab-2-trigger" data-bs-toggle="tab" href="#" role="tab" aria-controls="collections-tab-2" aria-selected="true"><?= $cate['name'] ?></a>
        </li>
        <?php endforeach;?>
      </ul>

      <div class="tab-content pt-2" id="collections-tab-content">
        <div class="tab-pane fade show active" id="collections-tab-1" role="tabpanel" aria-labelledby="collections-tab-1-trigger">
          <div class="row">
          <?php foreach($product as $pro): ?>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="?act=product-detail&slug=<?= $pro['product_slug'] ?>">
                    <img loading="lazy" src="./images/product/<?= $pro['product_image'] ?>" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                  </a>
                  <div class="product-label bg-red text-white right-0 top-0 left-auto mt-2 mx-2">-35%</div>
                  <div class="anim_appear-bottom position-absolute w-100 text-center mb-3">
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">
                      <svg class="d-inline-block" width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_cart" /></svg>
                    </button>
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                      <svg class="d-inline-block" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg>
                    </button>
                    
                    <a href="?act=wishlist-add&product_id=<?= $pro['product_id'] ?>" class="btn btn-round btn-hover-red border-0 text-uppercase js-add-wishlist" title="Add To Wishlist">
                      <svg width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                    </a>
                  </div>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category"><?= $pro['category_name'] ?></p>
                  <h6 class="pc__title"><a href="?act=product-detail&slug=<?= $pro['product_slug'] ?>"><?= $pro['product_name'] ?></a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price price-old"><?= number_format( $pro['product_price']*1000 , 0, ',' , '.')  ?> đ </span>
                    <span class="money price price-sale"><?= number_format( $pro['product_sale_price']*1000 , 0, ',' , '.')  ?> đ</span>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          </div><!-- /.row -->
          <div class="text-center mt-2">
            <a class="btn-link btn-link_lg default-underline text-uppercase fw-medium" href="?act=shop">See All Products</a>
          </div>
        </div><!-- /.tab-pane fade show-->

        <div class="tab-pane fade show" id="collections-tab-2" role="tabpanel" aria-labelledby="collections-tab-2-trigger">
          <div class="row">
            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="client/images/home/demo4/product-3-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="client/images/home/demo4/product-3-2.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
                  <div class="anim_appear-bottom position-absolute w-100 text-center mb-3">
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">
                      <svg class="d-inline-block" width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_cart" /></svg>
                    </button>
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                      <svg class="d-inline-block" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg>
                    </button>
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase js-add-wishlist" title="Add To Wishlist">
                      <svg width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                    </button>
                  </div>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Dresses</p>
                  <h6 class="pc__title"><a href="product1_simple.html">Kirby T-Shirt</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$17</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="client/images/home/demo4/product-4-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="client/images/home/demo4/product-4-2.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
                  <div class="product-label bg-red text-white right-0 top-0 left-auto mt-2 mx-2">-67%</div>
                  <div class="anim_appear-bottom position-absolute w-100 text-center mb-3">
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">
                      <svg class="d-inline-block" width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_cart" /></svg>
                    </button>
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                      <svg class="d-inline-block" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg>
                    </button>
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase js-add-wishlist" title="Add To Wishlist">
                      <svg width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                    </button>
                  </div>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Dresses</p>
                  <h6 class="pc__title"><a href="product1_simple.html">Cableknit Shawl</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price price-old">$129</span>
                    <span class="money price price-sale">$99</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="client/images/home/demo4/product-5-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="client/images/home/demo4/product-5-2.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
                  <div class="product-label text-uppercase bg-black text-white top-0 left-0 mt-2 mx-2">Sale</div>
                  <div class="anim_appear-bottom position-absolute w-100 text-center mb-3">
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">
                      <svg class="d-inline-block" width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_cart" /></svg>
                    </button>
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                      <svg class="d-inline-block" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg>
                    </button>
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase js-add-wishlist" title="Add To Wishlist">
                      <svg width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                    </button>
                  </div>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Dresses</p>
                  <h6 class="pc__title"><a href="product1_simple.html">Colorful Jacket</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$29</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="client/images/home/demo4/product-6-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="client/images/home/demo4/product-6-2.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
                  <div class="anim_appear-bottom position-absolute w-100 text-center mb-3">
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">
                      <svg class="d-inline-block" width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_cart" /></svg>
                    </button>
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                      <svg class="d-inline-block" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg>
                    </button>
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase js-add-wishlist" title="Add To Wishlist">
                      <svg width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                    </button>
                  </div>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Dresses</p>
                  <h6 class="pc__title"><a href="product1_simple.html">Shirt In Botanical Cheetah Print</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$62</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="client/images/home/demo4/product-7-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="client/images/home/demo4/product-7-2.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
                  <div class="anim_appear-bottom position-absolute w-100 text-center mb-3">
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">
                      <svg class="d-inline-block" width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_cart" /></svg>
                    </button>
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                      <svg class="d-inline-block" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg>
                    </button>
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase js-add-wishlist" title="Add To Wishlist">
                      <svg width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                    </button>
                  </div>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Dresses</p>
                  <h6 class="pc__title"><a href="product1_simple.html">Cotton Jersey T-Shirt</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$17</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="client/images/home/demo4/product-8-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="client/images/home/demo4/product-8-2.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
                  <div class="anim_appear-bottom position-absolute w-100 text-center mb-3">
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">
                      <svg class="d-inline-block" width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_cart" /></svg>
                    </button>
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                      <svg class="d-inline-block" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg>
                    </button>
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase js-add-wishlist" title="Add To Wishlist">
                      <svg width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                    </button>
                  </div>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Dresses</p>
                  <h6 class="pc__title"><a href="product1_simple.html">Zessi Dresses</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price price-old">$129</span>
                    <span class="money price price-sale">$99</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="client/images/home/demo4/product-1-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="client/images/home/demo4/product-1-2.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
                  <div class="anim_appear-bottom position-absolute w-100 text-center mb-3">
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">
                      <svg class="d-inline-block" width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_cart" /></svg>
                    </button>
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                      <svg class="d-inline-block" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg>
                    </button>
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase js-add-wishlist" title="Add To Wishlist">
                      <svg width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                    </button>
                  </div>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Dresses</p>
                  <h6 class="pc__title"><a href="product1_simple.html">Cropped Faux Leather Jacket</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$29</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="client/images/home/demo4/product-2-1.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                    <img loading="lazy" src="client/images/home/demo4/product-2-2.jpg" width="330" height="400" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                  </a>
                  <div class="product-label text-uppercase bg-white top-0 left-0 mt-2 mx-2">New</div>
                  <div class="anim_appear-bottom position-absolute w-100 text-center mb-3">
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">
                      <svg class="d-inline-block" width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_cart" /></svg>
                    </button>
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase me-1 me-md-2 js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                      <svg class="d-inline-block" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg>
                    </button>
                    <button class="btn btn-round btn-hover-red border-0 text-uppercase js-add-wishlist" title="Add To Wishlist">
                      <svg width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                    </button>
                  </div>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Dresses</p>
                  <h6 class="pc__title"><a href="product1_simple.html">Calvin Shorts</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$62</span>
                  </div>
                  <div class="d-flex align-items-center mt-1">
                    <a href="#" class="swatch-color pc__swatch-color" style="color: #222222"></a>
                    <a href="#" class="swatch-color swatch_active pc__swatch-color" style="color: #b9a16b"></a>
                    <a href="#" class="swatch-color pc__swatch-color" style="color: #f5e6e0"></a>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- /.row -->
          <div class="text-center mt-2">
            <a class="btn-link btn-link_lg default-underline text-uppercase fw-medium" href="shop1.html">See All Products</a>
          </div>
        </div><!-- /.tab-pane fade show-->



      
    </section><!-- /.products-grid -->

    <div class="mb-1 pb-4 mb-xl-5 pb-xl-5"></div>

    <section class="grid-banner container">
      <div class="row">
        <div class="col-md-6">
          <div class="grid-banner__item position-relative">
            <img loading="lazy" class="w-100 h-auto" src="client/images/home/demo4/grid-banner-1.jpg" width="690" height="450" alt="">
            <div class="content_abs content_bottom content_left content_bottom-lg content_left-lg">
              <p class="text-uppercase mb-0">Lựa chọn cơ bản</p>
              <h3 class="mb-2">Sản phẩm mới</h3>
              <a href="shop1.html" class="btn-link default-underline text-uppercase fw-medium">Mua ngay</a>
            </div><!-- /.content_abs content_bottom content_left content_bottom-md content_left-md -->
          </div>
          <div class="pb-4 pt-1"></div>
          <div class="grid-banner__item position-relative">
            <img loading="lazy" class="w-100 h-auto" src="client/images/home/demo4/grid-banner-2.jpg" width="690" height="285" alt="">
            <div class="content_abs content_bottom content_left content_bottom-lg content_left-lg">
              <p class="text-uppercase mb-0">Sản phẩm được hỗ trợ vận chuyển </p>
              <h3 class="mb-2">Free Shipping</h3>
              <a href="shop1.html" class="btn-link default-underline text-uppercase fw-medium">Mua ngay</a>
            </div><!-- /.content_abs content_bottom content_left content_bottom-md content_left-md -->
          </div>
          <div class="pb-4 pt-1"></div>
        </div><!-- /.col-md-6 -->

        <div class="col-md-6">
          <div class="grid-banner__item position-relative">
            <img loading="lazy" class="w-100 h-auto" src="client/images/home/demo4/grid-banner-3.jpg" width="690" height="285" alt="">
            <div class="content_abs content_bottom content_left content_bottom-lg content_left-lg">
              <p class="text-uppercase mb-0">Sản phẩm phù hợp với tất cả mọi người</p>
              <h3 class="mb-2">Cả NAM và NỮ</h3>
              <a href="shop1.html" class="btn-link default-underline text-uppercase fw-medium">Mua ngay</a>
            </div><!-- /.content_abs content_bottom content_left content_bottom-md content_left-md -->
          </div>
          <div class="pb-4 pt-1"></div>
          <div class="grid-banner__item position-relative">
            <img loading="lazy" class="w-100 h-auto" src="client/images/home/demo4/grid-banner-4.jpg" width="690" height="450" alt="">
            <div class="content_abs content_bottom content_left content_bottom-lg content_left-lg">
              <p class="text-uppercase mb-0">Sản phẩm bán chạy</p>
              <h3 class="mb-2">HOT</h3>
              <a href="shop1.html" class="btn-link default-underline text-uppercase fw-medium">Mua ngay</a>
            </div><!-- /.content_abs content_bottom content_left content_bottom-md content_left-md -->
          </div>
          <div class="pb-4 pt-1"></div>
        </div><!-- /.col-md-6 -->
      </div><!-- /.row -->
    </section>



</main>
<?php  include '../views/client/layout/footer.php' ?>