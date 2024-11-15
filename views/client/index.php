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
              <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5">The Classics</h2>
              <p class="fs-6 mb-4 pb-2 animate animate_fade animate_btt animate_delay-5">An exclusive selection of this season's trends.</p>
              <a href="shop1.html" class="btn-link btn-link_lg default-underline text-uppercase fw-medium animate animate_fade animate_btt animate_delay-7">Discover Now</a>
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
              <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5">Women Collection</h2>
              <p class="fs-6 mb-4 pb-2 animate animate_fade animate_btt animate_delay-5">An exclusive selection of this season's trends.</p>
              <a href="shop1.html" class="btn-link btn-link_lg default-underline text-uppercase fw-medium animate animate_fade animate_btt animate_delay-7">Discover Now</a>
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
              <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5">New Arrival</h2>
              <p class="fs-6 mb-4 pb-2 animate animate_fade animate_btt animate_delay-5">An exclusive selection of this season's trends.</p>
              <a href="shop1.html" class="btn-link btn-link_lg default-underline text-uppercase fw-medium animate animate_fade animate_btt animate_delay-7">Discover Now</a>
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
      <h2 class="section-title text-center fw-normal mb-1 mb-md-3 pb-xl-3 mb-xl-4">Trending</h2>

      <ul class="nav nav-tabs mb-3 mb-xl-5 text-uppercase justify-content-center" id="collections-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore active" id="collections-tab-1-trigger" data-bs-toggle="tab" href="#collections-tab-1" role="tab" aria-controls="collections-tab-1" aria-selected="true">All</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="collections-tab-2-trigger" data-bs-toggle="tab" href="#collections-tab-2" role="tab" aria-controls="collections-tab-2" aria-selected="true">Women</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="collections-tab-3-trigger" data-bs-toggle="tab" href="#collections-tab-3" role="tab" aria-controls="collections-tab-3" aria-selected="true">Men</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link nav-link_underscore" id="collections-tab-4-trigger" data-bs-toggle="tab" href="#collections-tab-4" role="tab" aria-controls="collections-tab-4" aria-selected="true">Kids</a>
        </li>
      </ul>

      <div class="tab-content pt-2" id="collections-tab-content">
        <div class="tab-pane fade show active" id="collections-tab-1" role="tabpanel" aria-labelledby="collections-tab-1-trigger">
          <div class="row">
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
          </div><!-- /.row -->
          <div class="text-center mt-2">
            <a class="btn-link btn-link_lg default-underline text-uppercase fw-medium" href="shop1.html">See All Products</a>
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

        <div class="tab-pane fade show" id="collections-tab-3" role="tabpanel" aria-labelledby="collections-tab-3-trigger">
          <div class="row">
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
          </div><!-- /.row -->
          <div class="text-center mt-2">
            <a class="btn-link btn-link_lg default-underline text-uppercase fw-medium" href="shop1.html">See All Products</a>
          </div>
        </div><!-- /.tab-pane fade show-->

        <div class="tab-pane fade show" id="collections-tab-4" role="tabpanel" aria-labelledby="collections-tab-4-trigger">
          <div class="row">
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
          </div><!-- /.row -->
          <div class="text-center mt-2">
            <a class="btn-link btn-link_lg default-underline text-uppercase fw-medium" href="shop1.html">See All Products</a>
          </div>
        </div><!-- /.tab-pane fade show-->
      </div><!-- /.tab-content pt-2 -->
    </section><!-- /.products-grid -->

    <div class="mb-1 pb-4 mb-xl-5 pb-xl-5"></div>

    <section class="grid-banner container">
      <div class="row">
        <div class="col-md-6">
          <div class="grid-banner__item position-relative">
            <img loading="lazy" class="w-100 h-auto" src="client/images/home/demo4/grid-banner-1.jpg" width="690" height="450" alt="">
            <div class="content_abs content_bottom content_left content_bottom-lg content_left-lg">
              <p class="text-uppercase mb-0">Basic Collection</p>
              <h3 class="mb-2">New Arrivals</h3>
              <a href="shop1.html" class="btn-link default-underline text-uppercase fw-medium">Shop Now</a>
            </div><!-- /.content_abs content_bottom content_left content_bottom-md content_left-md -->
          </div>
          <div class="pb-4 pt-1"></div>
          <div class="grid-banner__item position-relative">
            <img loading="lazy" class="w-100 h-auto" src="client/images/home/demo4/grid-banner-2.jpg" width="690" height="285" alt="">
            <div class="content_abs content_bottom content_left content_bottom-lg content_left-lg">
              <p class="text-uppercase mb-0">Shop Casual</p>
              <h3 class="mb-2">Free Shipping</h3>
              <a href="shop1.html" class="btn-link default-underline text-uppercase fw-medium">Shop Now</a>
            </div><!-- /.content_abs content_bottom content_left content_bottom-md content_left-md -->
          </div>
          <div class="pb-4 pt-1"></div>
        </div><!-- /.col-md-6 -->

        <div class="col-md-6">
          <div class="grid-banner__item position-relative">
            <img loading="lazy" class="w-100 h-auto" src="client/images/home/demo4/grid-banner-3.jpg" width="690" height="285" alt="">
            <div class="content_abs content_bottom content_left content_bottom-lg content_left-lg">
              <p class="text-uppercase mb-0">Want and Need</p>
              <h3 class="mb-2">The Everygirl Wears</h3>
              <a href="shop1.html" class="btn-link default-underline text-uppercase fw-medium">Shop Now</a>
            </div><!-- /.content_abs content_bottom content_left content_bottom-md content_left-md -->
          </div>
          <div class="pb-4 pt-1"></div>
          <div class="grid-banner__item position-relative">
            <img loading="lazy" class="w-100 h-auto" src="client/images/home/demo4/grid-banner-4.jpg" width="690" height="450" alt="">
            <div class="content_abs content_bottom content_left content_bottom-lg content_left-lg">
              <p class="text-uppercase mb-0">Sale off This week</p>
              <h3 class="mb-2">Running Shoes</h3>
              <a href="shop1.html" class="btn-link default-underline text-uppercase fw-medium">Shop Now</a>
            </div><!-- /.content_abs content_bottom content_left content_bottom-md content_left-md -->
          </div>
          <div class="pb-4 pt-1"></div>
        </div><!-- /.col-md-6 -->
      </div><!-- /.row -->
    </section>

    <div class="mb-1 pb-4 mb-xl-5 pb-xl-5"></div>

    <section class="testimonials bg-white">
      <div class="container">
        <div class="mb-1 pb-4 mb-xl-5 pb-xl-5"></div>
        <h2 class="section-title text-center fw-normal mb-1 mb-md-3 pb-xl-3 mb-xl-4">Testimonials</h2>

        <div class="position-relative">
          <div class="swiper-container js-swiper-slider"
            data-settings='{
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 1,
              "slidesPerGroup": 1,
              "effect": "none",
              "loop": true,
              "pagination": {
                "el": ".testimonial-pagination",
                "type": "bullets",
                "clickable": true
              },
              "navigation": {
                "nextEl": ".testimonial-carousel__next",
                "prevEl": ".testimonial-carousel__prev"
              }
            }'>
            <div class="swiper-wrapper testimonials__wrapper">
              <div class="swiper-slide testimonials__item mb-4 text-center">
                <div class="w-740 mx-auto">
                  <h5 class="fw-normal lh-2rem mb-4">“ Ipsum dolor sit amet, consectetur adipiscing elit. Fringilla vel tincidunt ipsum ac. Nam at et id leo pulvinar egestas mi lorem. Adipiscing felis, vel faucibus in. Hendrerit viverra elementum venenatis pellentesque pellentesque ornare “</h5>
                  <p class="text-secondary mb-3">Helena Gibbson, 06 April 2023</p>
                  <div class="border-circle overflow-hidden w-100px h-100px mx-auto">
                    <img loading="lazy" src="client/images/home/demo4/testimonial_avatar.png" width="100" height="100" alt="">
                  </div>
                </div>
              </div>
              <div class="swiper-slide testimonials__item mb-4 text-center">
                <div class="w-740 mx-auto">
                  <h5 class="fw-normal lh-2rem mb-4">“ Ipsum dolor sit amet, consectetur adipiscing elit. Fringilla vel tincidunt ipsum ac. Nam at et id leo pulvinar egestas mi lorem. Adipiscing felis, vel faucibus in. Hendrerit viverra elementum venenatis pellentesque pellentesque ornare “</h5>
                  <p class="text-secondary mb-3">Helena Gibbson, 06 April 2023</p>
                  <div class="border-circle overflow-hidden w-100px h-100px mx-auto">
                    <img loading="lazy" src="client/images/home/demo4/testimonial_avatar.png" width="100" height="100" alt="">
                  </div>
                </div>
              </div>
              <div class="swiper-slide testimonials__item mb-4 text-center">
                <div class="w-740 mx-auto">
                  <h5 class="fw-normal lh-2rem mb-4">“ Ipsum dolor sit amet, consectetur adipiscing elit. Fringilla vel tincidunt ipsum ac. Nam at et id leo pulvinar egestas mi lorem. Adipiscing felis, vel faucibus in. Hendrerit viverra elementum venenatis pellentesque pellentesque ornare “</h5>
                  <p class="text-secondary mb-3">Helena Gibbson, 06 April 2023</p>
                  <div class="border-circle overflow-hidden w-100px h-100px mx-auto">
                    <img loading="lazy" src="client/images/home/demo4/testimonial_avatar.png" width="100" height="100" alt="">
                  </div>
                </div>
              </div>
              <div class="swiper-slide testimonials__item mb-4 text-center">
                <div class="w-740 mx-auto">
                  <h5 class="fw-normal lh-2rem mb-4">“ Ipsum dolor sit amet, consectetur adipiscing elit. Fringilla vel tincidunt ipsum ac. Nam at et id leo pulvinar egestas mi lorem. Adipiscing felis, vel faucibus in. Hendrerit viverra elementum venenatis pellentesque pellentesque ornare “</h5>
                  <p class="text-secondary mb-3">Helena Gibbson, 06 April 2023</p>
                  <div class="border-circle overflow-hidden w-100px h-100px mx-auto">
                    <img loading="lazy" src="client/images/home/demo4/testimonial_avatar.png" width="100" height="100" alt="">
                  </div>
                </div>
              </div>
            </div><!-- /.swiper-wrapper -->
          </div><!-- /.swiper-container js-swiper-slider -->

          <div class="products-carousel__prev testimonial-carousel__prev position-absolute top-50 d-flex align-items-center justify-content-center">
            <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_md" /></svg>
          </div><!-- /.products-carousel__prev -->
          <div class="products-carousel__next testimonial-carousel__next position-absolute top-50 d-flex align-items-center justify-content-center">
            <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_md" /></svg>
          </div><!-- /.products-carousel__next -->
      
          <div class="testimonial-pagination type2 mt-4 d-flex align-items-center justify-content-center"></div>
          <!-- /.products-pagination -->
        </div><!-- /.position-relative -->

        <div class="mt-1 pt-4 mt-xl-5 pt-xl-5"></div>
      </div>
    </section>

    <div class="mb-1 pb-4 mb-xl-5 pb-xl-5"></div>

    <section class="products-carousel container">
      <h2 class="section-title text-center fw-normal mb-1 mb-md-3 pb-xl-3 mb-xl-4">The Inside Collection</h2>

      <div class="position-relative">
        <div class="swiper-container js-swiper-slider"
          data-settings='{
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": 4,
            "slidesPerGroup": 4,
            "effect": "none",
            "loop": false,
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "slidesPerGroup": 2,
                "spaceBetween": 14
              },
              "768": {
                "slidesPerView": 3,
                "slidesPerGroup": 3,
                "spaceBetween": 24
              },
              "992": {
                "slidesPerView": 4,
                "slidesPerGroup": 1,
                "spaceBetween": 30,
                "pagination": false
              }
            }
          }'>
          <div class="swiper-wrapper">
            <div class="swiper-slide product-card">
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

            <div class="swiper-slide product-card">
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

            <div class="swiper-slide product-card">
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

            <div class="swiper-slide product-card">
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

            <div class="swiper-slide product-card">
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

            <div class="swiper-slide product-card">
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

            <div class="swiper-slide product-card">
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

            <div class="swiper-slide product-card">
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
          </div><!-- /.swiper-wrapper -->
        </div><!-- /.swiper-container js-swiper-slider -->
      </div><!-- /.position-relative -->

    </section><!-- /.products-carousel container -->

    <div class="mb-1 pb-4 mb-xl-5 pb-xl-5"></div>

    <section class="products-carousel bg-black">
      <div class="container">
        <div class="mb-1 pb-4 mb-xl-5 pb-xl-5"></div>

        <h2 class="section-title text-center fw-normal text-white mb-1 mb-md-3 pb-xl-3 mb-xl-4">Limited Edition</h2>

        <div class="position-relative">
          <div class="swiper-container js-swiper-slider"
            data-settings='{
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 5,
              "slidesPerGroup": 1,
              "effect": "none",
              "loop": false,
              "pagination": {
                "el": ".products-pagination-1",
                "type": "bullets",
                "clickable": true
              },
              "navigation": {
                "nextEl": ".products-carousel__next-1",
                "prevEl": ".products-carousel__prev-1"
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "slidesPerGroup": 2,
                  "spaceBetween": 14
                },
                "768": {
                  "slidesPerView": 3,
                  "slidesPerGroup": 3,
                  "spaceBetween": 20
                },
                "992": {
                  "slidesPerView": 4,
                  "slidesPerGroup": 1,
                  "spaceBetween": 28
                },
                "1200": {
                  "slidesPerView": 5,
                  "slidesPerGroup": 1,
                  "spaceBetween": 28
                }
              }
            }'>
            <div class="swiper-wrapper">
              <div class="swiper-slide product-card" style="background-color: #E9E7E8;">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="client/images/home/demo4/product-9.jpg" width="260" height="315" alt="Cropped Faux leather Jacket" class="pc__img">
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

                <div class="pc__info position-relative mx-2 px-3 py-3 mt-0">
                  <h6 class="pc__title"><a href="product1_simple.html">Cropped Faux Leather Jacket</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$29</span>
                  </div>
                </div>
              </div>
              
              <div class="swiper-slide product-card" style="background-color: #E9E7E8;">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="client/images/home/demo4/product-10.jpg" width="260" height="315" alt="Cropped Faux leather Jacket" class="pc__img">
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

                <div class="pc__info position-relative mx-2 px-3 py-3 mt-0">
                  <h6 class="pc__title"><a href="product1_simple.html">Calvin Shorts</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$62</span>
                  </div>
                </div>
              </div>
              
              <div class="swiper-slide product-card" style="background-color: #EDECEA;">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="client/images/home/demo4/product-11.jpg" width="260" height="315" alt="Cropped Faux leather Jacket" class="pc__img">
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

                <div class="pc__info position-relative mx-2 px-3 py-3 mt-0">
                  <h6 class="pc__title"><a href="product1_simple.html">Kriby T-Shirt</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$17</span>
                  </div>
                </div>
              </div>
              
              <div class="swiper-slide product-card" style="background-color: #E8E8E8;">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="client/images/home/demo4/product-12.jpg" width="260" height="315" alt="Cropped Faux leather Jacket" class="pc__img">
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

                <div class="pc__info position-relative mx-2 px-3 py-3 mt-0">
                  <h6 class="pc__title"><a href="product1_simple.html">Cableknit Shawl</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$129</span>
                  </div>
                </div>
              </div>
              
              <div class="swiper-slide product-card" style="background-color: #F1F3E9;">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="client/images/home/demo4/product-13.jpg" width="260" height="315" alt="Cropped Faux leather Jacket" class="pc__img">
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

                <div class="pc__info position-relative mx-2 px-3 py-3 mt-0">
                  <h6 class="pc__title"><a href="product1_simple.html">Shirt In Botanical Cheetah</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$129</span>
                  </div>
                </div>
              </div>
              
              <div class="swiper-slide product-card" style="background-color: #E9E7E8;">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="client/images/home/demo4/product-9.jpg" width="260" height="315" alt="Cropped Faux leather Jacket" class="pc__img">
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

                <div class="pc__info position-relative mx-2 px-3 py-3 mt-0">
                  <h6 class="pc__title"><a href="product1_simple.html">Cropped Faux Leather Jacket</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$29</span>
                  </div>
                </div>
              </div>
              
              <div class="swiper-slide product-card" style="background-color: #E9E7E8;">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="client/images/home/demo4/product-10.jpg" width="260" height="315" alt="Cropped Faux leather Jacket" class="pc__img">
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

                <div class="pc__info position-relative mx-2 px-3 py-3 mt-0">
                  <h6 class="pc__title"><a href="product1_simple.html">Calvin Shorts</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$62</span>
                  </div>
                </div>
              </div>
              
              <div class="swiper-slide product-card" style="background-color: #EDECEA;">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="client/images/home/demo4/product-11.jpg" width="260" height="315" alt="Cropped Faux leather Jacket" class="pc__img">
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

                <div class="pc__info position-relative mx-2 px-3 py-3 mt-0">
                  <h6 class="pc__title"><a href="product1_simple.html">Kriby T-Shirt</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$17</span>
                  </div>
                </div>
              </div>
              
              <div class="swiper-slide product-card" style="background-color: #E8E8E8;">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="client/images/home/demo4/product-12.jpg" width="260" height="315" alt="Cropped Faux leather Jacket" class="pc__img">
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

                <div class="pc__info position-relative mx-2 px-3 py-3 mt-0">
                  <h6 class="pc__title"><a href="product1_simple.html">Cableknit Shawl</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$129</span>
                  </div>
                </div>
              </div>
              
              <div class="swiper-slide product-card" style="background-color: #F1F3E9;">
                <div class="pc__img-wrapper">
                  <a href="product1_simple.html">
                    <img loading="lazy" src="client/images/home/demo4/product-13.jpg" width="260" height="315" alt="Cropped Faux leather Jacket" class="pc__img">
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

                <div class="pc__info position-relative mx-2 px-3 py-3 mt-0">
                  <h6 class="pc__title"><a href="product1_simple.html">Shirt In Botanical Cheetah</a></h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$129</span>
                  </div>
                </div>
              </div>
            </div><!-- /.swiper-wrapper -->
            <!-- /.products-pagination -->
          </div><!-- /.swiper-container js-swiper-slider -->

          <div class="products-carousel__prev products-carousel__prev-1 bg-transparent position-absolute top-50 d-flex align-items-center justify-content-center">
            <svg class="color-white" width="20" height="20" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_prev_md" /></svg>
          </div><!-- /.products-carousel__prev -->
          <div class="products-carousel__next products-carousel__next-1 bg-transparent position-absolute top-50 d-flex align-items-center justify-content-center">
            <svg class="color-white" width="20" height="20" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_next_md" /></svg>
          </div><!-- /.products-carousel__next -->
  
          <div class="products-pagination products-pagination-1 type2 active-white mt-5 mb-3 d-flex align-items-center justify-content-center"></div>
        </div><!-- /.position-relative -->

        <div class="mt-1 pt-4 mt-xl-5 pt-xl-5"></div>
      </div>

    </section><!-- /.products-carousel container -->

    <section class="blog-carousel bg-yellow">
      <div class="container">
        <div class="mb-1 pb-4 mb-xl-5 pb-xl-5"></div>

        <h2 class="section-title text-center fw-normal mb-1 mb-md-3 pb-xl-3 mb-xl-4">Latest in Blog</h2>

        <div class="position-relative">
          <div class="swiper-container js-swiper-slider"
            data-settings='{
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 4,
              "slidesPerGroup": 1,
              "effect": "none",
              "loop": true,
              "pagination": {
                "el": ".blog-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "slidesPerGroup": 1,
                  "spaceBetween": 14
                },
                "768": {
                  "slidesPerView": 2,
                  "slidesPerGroup": 2,
                  "spaceBetween": 20
                },
                "992": {
                  "slidesPerView": 3,
                  "slidesPerGroup": 1,
                  "spaceBetween": 24
                },
                "1200": {
                  "slidesPerView": 4,
                  "slidesPerGroup": 1,
                  "spaceBetween": 30
                }
              }
            }'>
            <div class="swiper-wrapper blog-grid row-cols-xl-3">
              <div class="swiper-slide blog-grid__item bg-white">
                <div class="blog-grid__item-image">
                  <img loading="lazy" class="h-auto" src="client/images/home/demo4/post-1.jpg" width="330" height="220" alt="">
                </div>
                <div class="blog-grid__item-detail text-center px-3 px-xl-5 pb-4">
                  <div class="blog-grid__item-meta justify-content-center">
                    <span class="blog-grid__item-meta__author">By Admin</span>
                    <span class="blog-grid__item-meta__date">Aprial 05, 2023</span>
                  </div>
                  <div class="blog-grid__item-title mb-0">
                    <a href="blog_single.html">Woman with good shoes is never be ugly place</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide blog-grid__item bg-white">
                <div class="blog-grid__item-image">
                  <img loading="lazy" class="h-auto" src="client/images/home/demo4/post-2.jpg" width="330" height="220" alt="">
                </div>
                <div class="blog-grid__item-detail text-center px-3 px-xl-5 pb-4">
                  <div class="blog-grid__item-meta justify-content-center">
                    <span class="blog-grid__item-meta__author">By Admin</span>
                    <span class="blog-grid__item-meta__date">Aprial 05, 2023</span>
                  </div>
                  <div class="blog-grid__item-title mb-0">
                    <a href="blog_single.html">What Freud Can Teach Us About Furniture</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide blog-grid__item bg-white">
                <div class="blog-grid__item-image">
                  <img loading="lazy" class="h-auto" src="client/images/home/demo4/post-3.jpg" width="330" height="220" alt="">
                </div>
                <div class="blog-grid__item-detail text-center px-3 px-xl-5 pb-4">
                  <div class="blog-grid__item-meta justify-content-center">
                    <span class="blog-grid__item-meta__author">By Admin</span>
                    <span class="blog-grid__item-meta__date">Aprial 05, 2023</span>
                  </div>
                  <div class="blog-grid__item-title mb-0">
                    <a href="blog_single.html">Habitant morbi tristique senectus</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide blog-grid__item bg-white">
                <div class="blog-grid__item-image">
                  <img loading="lazy" class="h-auto" src="client/images/home/demo4/post-4.jpg" width="330" height="220" alt="">
                </div>
                <div class="blog-grid__item-detail text-center px-3 px-xl-5 pb-4">
                  <div class="blog-grid__item-meta justify-content-center">
                    <span class="blog-grid__item-meta__author">By Admin</span>
                    <span class="blog-grid__item-meta__date">Aprial 05, 2023</span>
                  </div>
                  <div class="blog-grid__item-title mb-0">
                    <a href="blog_single.html">Woman with good shoes is never be ugly place</a>
                  </div>
                </div>
              </div>
            </div><!-- /.swiper-wrapper -->
          </div><!-- /.swiper-container js-swiper-slider -->
      
          <div class="blog-pagination type2 mt-4 d-flex align-items-center justify-content-center"></div>
          <!-- /.products-pagination -->
        </div><!-- /.position-relative -->

        <div class="mt-1 pt-4 mt-xl-5 pt-xl-5"></div>
      </div>
    </section>
</main>
<?php  include '../views/client/layout/footer.php' ?>