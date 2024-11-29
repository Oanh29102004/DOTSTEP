<?php include '../views/client/layout/header.php' ?>

<main>
    <div class="mb-md-1 pb-md-3"></div>
    <div class="mb-md-1 pb-md-3"></div>
    <div class="mb-md-1 pb-md-3"></div>
    <div class="mb-md-1 pb-md-3"></div>
    <section class="product-single container">
        <div class="row">
            <div class="col-lg-7">
                <div class="product-single__media" data-media-type="vertical-thumbnail">
                    <div class="product-single__image">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php foreach ($productDetail['galleries'] as $index => $gallery): ?>

                                    <div class="swiper-slide product-single__image-item">
                                        <img loading="lazy" class="h-auto" src="./images/product_gallery/<?= $gallery ?>" width="674" height="674" alt="">
                                        <a data-fancybox="gallery" href="./images/product_gallery/<?= $gallery ?>" data-bs-toggle="tooltip" data-bs-placement="left" title="Zoom">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_zoom" />
                                            </svg>
                                        </a>
                                    </div>

                                <?php endforeach; ?>
                            </div>
                            <div class="swiper-button-prev"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_prev_sm" />
                                </svg></div>
                            <div class="swiper-button-next"><svg width="7" height="11" viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_next_sm" />
                                </svg></div>
                        </div>
                    </div>
                    <div class="product-single__thumbnail">
                        <div class="swiper-container">
                            <?php foreach ($productDetail['galleries'] as $index => $gallery): ?>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide product-single__image-item"><img loading="lazy" class="h-auto" src="./images/product_gallery/<?= $gallery ?>" width="104" height="104" alt=""></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <form action="?act=addToCart-buyNow" method="post">
                    <div class="tp-product-details-wrapper">
                        <input type="hidden" name="product_id" value="<?= $productDetail['product_id'] ?>">
                        <div class="d-flex justify-content-between mb-4 pb-md-2">
                            <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
                                <a href="./" class="menu-link menu-link_us-s text-uppercase fw-medium">Home</a>
                                <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
                                <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium"><?= $productDetail['category_name'] ?></a>
                                <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1">/</span>
                                <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium"><?= $productDetail['product_name'] ?></a>
                            </div><!-- /.breadcrumb -->

                            <div class="product-single__prev-next d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1">
                                <a href="product1_simple.html" class="text-uppercase fw-medium"><svg class="mb-1px" width="10" height="10" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_prev_md" />
                                    </svg><span class="menu-link menu-link_us-s">Prev</span></a>
                                <a href="product3_external.html" class="text-uppercase fw-medium"><span class="menu-link menu-link_us-s">Next</span><svg class="mb-1px" width="10" height="10" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_next_md" />
                                    </svg></a>
                            </div><!-- /.shop-acs -->
                        </div>
                        <h1 class="product-single__name"><?= $productDetail['product_name'] ?></h1>
                        <div class="product-single__rating">
                            <div class="reviews-group d-flex">
                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_star" />
                                </svg>
                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_star" />
                                </svg>
                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_star" />
                                </svg>
                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_star" />
                                </svg>
                                <svg class="review-star" viewBox="0 0 9 9" xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_star" />
                                </svg>
                            </div>
                            <span class="reviews-note text-lowercase text-secondary ms-1">0 reviews</span>
                        </div>
                        <div class="product-single__price">
                            <span class="current-price price-variants"><?= number_format($productDetail['variant_sale_price'] * 1000, 0, ',', '.') ?></span>
                            <span class="money price price-old sale-price-variants"><?= number_format($productDetail['variant_price'] * 1000, 0, ',', '.') ?></span>
                            <input type="hidden" name="variant_id" id="variant_id">
                        </div>
                        <div class="product-single__short-desc">
                            <p><?= $productDetail['product_description'] ?></p>
                        </div>

                        <div class="product-single__swatches">
                            <div class="product-swatch text-swatches">
                                <label>Color</label>
                                <div class="swatch-list">
                                    <?php
                                    $addedColors = []; // Mảng lưu màu đã hiển thị
                                    foreach ($productDetail['variants'] as $index => $variant):
                                        if (!in_array($variant['product_variant_color_code'], $addedColors)):
                                            $addedColors[] = $variant['product_variant_color_code']; // Thêm màu vào danh sách
                                    ?>
                                            <button type="button" style="border: none;" class="tp-color-variation-btn btn-color" data-color="<?= $variant['product_variant_color_code'] ?>" data-size="<?= $variant['product_variant_size'] ?>">
                                                <span name="color" id="swatch-<?= $index; ?>" data-color="<?= $variant['product_variant_color_code'] ?>">
                                                    <span class="swatch swatch-color js-swatch" for="swatch-<?= $index; ?>" aria-label="<?= $variant['product_variant_color'] ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $variant['product_variant_color'] ?>" style="color: <?= $variant['product_variant_color_code'] ?>"></span>
                                                </span>
                                            </button>
                                    <?php
                                        endif;
                                    endforeach;
                                    ?>
                                </div>
                            </div>

                            <div class="product-swatch text-swatches">
                                <label>Size</label>
                                <div class="swatch-list">
                                    <?php foreach ($productDetail['variants'] as $index => $variant): ?>
                                        <button type="button" class="tp-size-variation-btn btn-size" data-size="<?= $variant['product_variant_size'] ?>">
                                            <span data-size="<?= $variant['product_variant_size'] ?>" class="border"></span>
                                            <span class="tp-size-variation-tootltip"><?= $variant['product_variant_size'] ?></span>
                                        </button>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                        </div>
                        <h3 class="tp-product-details-action-title quantity-variants">Quantity :</h3>
                        <div class="product-single__addtocart">

                            <div class="qty-control position-relative">
                                <input type="number" name="quantity" value="1" min="1" class="qty-control__number text-center">
                                <div class="qty-control__reduce">-</div>
                                <div class="qty-control__increase">+</div>
                            </div><!-- .qty-control -->
                            <button type="submit" name="add_to_cart" class="btn btn-primary btn-addtocart " data-aside="cartDrawer">Add to Cart</button>
                            <button type="submit" name="buy_now" class="btn btn-primary btn-addtocart " data-aside="cartDrawer">Buy Now</button>
                        </div>
                    </div>
                </form>
                <div class="product-single__addtolinks">
                    <a href="#" class="menu-link menu-link_us-s add-to-wishlist"><svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_heart" />
                        </svg><span>Add to Wishlist</span></a>
                    <share-button class="share-button">
                        <button class="menu-link menu-link_us-s to-share border-0 bg-transparent d-flex align-items-center">
                            <svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_sharing" />
                            </svg>
                            <span>Share</span>
                        </button>
                        <details id="Details-share-template__main" class="m-1 xl:m-1.5" hidden="">
                            <summary class="btn-solid m-1 xl:m-1.5 pt-3.5 pb-3 px-5">+</summary>
                            <div id="Article-share-template__main" class="share-button__fallback flex items-center absolute top-full left-0 w-full px-2 py-4 bg-container shadow-theme border-t z-10">
                                <div class="field grow mr-4">
                                    <label class="field__label sr-only" for="url">Link</label>
                                    <input type="text" class="field__input w-full" id="url" value="https://uomo-crystal.myshopify.com/blogs/news/go-to-wellness-tips-for-mental-health" placeholder="Link" onclick="this.select();" readonly="">
                                </div>
                                <button class="share-button__copy no-js-hidden">
                                    <svg class="icon icon-clipboard inline-block mr-1" width="11" height="13" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" viewBox="0 0 11 13">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z" fill="currentColor"></path>
                                    </svg>
                                    <span class="sr-only">Copy link</span>
                                </button>
                            </div>
                        </details>
                    </share-button>
                    <script src="js/details-disclosure.js" defer="defer"></script>
                    <script src="js/share.js" defer="defer"></script>
                </div>
                <div class="product-single__meta-info">
                    <div class="meta-item">
                        <label>SKU:</label>
                        <span>N/A</span>
                    </div>
                    <div class="meta-item">
                        <label>Categories:</label>
                        <span>Casual & Urban Wear, Jackets, Men</span>
                    </div>
                    <div class="meta-item">
                        <label>Tags:</label>
                        <span>biker, black, bomber, leather</span>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="mb-md-1 pb-md-3"></div>
    <div class="mb-md-1 pb-md-3"></div>
    <div class="mb-md-1 pb-md-3"></div>
    <div class="mb-md-1 pb-md-3"></div>

</main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    let selectedColor = null;
    let selectedSize = null;

    // Lấy dữ liệu từ PHP
    const variants = <?= json_encode($productDetail['variants']) ?>;
    const colorButtons = document.querySelectorAll('.btn-color');
    const sizeButtons = document.querySelectorAll('.btn-size');

    // Sự kiện khi người dùng chọn màu
    colorButtons.forEach(button => {
        button.addEventListener('click', function() {
            selectedColor = this.getAttribute('data-color');
            updateSize(); // Cập nhật kích thước có sẵn khi chọn màu
            checkPrice(); // Kiểm tra giá
        });
    });

    // Sự kiện khi người dùng chọn kích thước
    sizeButtons.forEach(button => {
        button.addEventListener('click', function() {
            selectedSize = this.getAttribute('data-size');
            updateColor(); // Cập nhật màu sắc có sẵn khi chọn kích thước
            checkPrice(); // Kiểm tra giá
        });
    });

    // Kiểm tra giá và thông tin variant
    function checkPrice() {
        if (selectedColor && selectedSize) {
            const matchedVariant = variants.find(variant =>
                variant.product_variant_color_code === selectedColor &&
                variant.product_variant_size === selectedSize
            );

            if (matchedVariant) {
                document.querySelector('.price-variants').textContent = formatPrice(matchedVariant.product_variant_price);
                document.querySelector('.sale-price-variants').textContent = formatPrice(matchedVariant.product_variant_sale_price);
                document.querySelector('.quantity-variants').textContent = `Quantity: ${matchedVariant.product_variant_quantity}`;
                document.getElementById('variant_id').value = matchedVariant.variant_id;
            } else {
                // Nếu không tìm thấy variant, reset thông tin
                document.querySelector('.price-variants').textContent = '';
                document.querySelector('.sale-price-variants').textContent = '';
                document.querySelector('.quantity-variants').textContent = '0';
                document.getElementById('variant_id').value = '';
            }
        }
    }

    // Cập nhật màu sắc có sẵn khi chọn kích thước
    function updateColor() {
        if (selectedSize) {
            colorButtons.forEach(button => {
                const color = button.getAttribute('data-color');
                const isAvailable = variants.some(variant =>
                    variant.product_variant_color_code === color &&
                    variant.product_variant_size === selectedSize
                );
                button.disabled = !isAvailable;  // Disable các màu không có sẵn cho size này
                button.style.opacity = isAvailable ? '1' : '0.3'; // Làm mờ các màu không có sẵn
            });
        }
    }

    // Cập nhật kích thước có sẵn khi chọn màu
    function updateSize() {
        if (selectedColor) {
            sizeButtons.forEach(button => {
                const size = button.getAttribute('data-size');
                const isAvailable = variants.some(variant =>
                    variant.product_variant_color_code === selectedColor &&
                    variant.product_variant_size === size
                );
                button.disabled = !isAvailable;  // Disable các size không có sẵn cho màu này
                button.style.opacity = isAvailable ? '1' : '0.3'; // Làm mờ các size không có sẵn
            });
        }
    }

    // Định dạng giá thành tiền Việt Nam
    function formatPrice(price) {
        return new Intl.NumberFormat('vi-VN').format(price * 1000) + 'đ';
    }
});

</script>

<?php include '../views/client/layout/footer.php' ?>