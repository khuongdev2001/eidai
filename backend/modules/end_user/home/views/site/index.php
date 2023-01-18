<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="woocommerce"></div>
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <article id="post-14" class="post-14 page type-page status-publish has-post-thumbnail hentry">
                    <div class="entry-content">
                        <div class="wp-container-1 wp-block-group alignfull">
                            <div class="wp-block-group__inner-container">
                                <p class="has-text-align-center">
                                <div class="n2-section-smartslider fitvidsignore " data-ssid="1" tabindex="0" role="region" aria-label="Slider">
                                    <div id="n2-ss-1-align" class="n2-ss-align" style="margin: 0 auto; max-width: 1140px;">
                                        <div class="n2-padding">
                                            <div id="n2-ss-1" data-creator="Smart Slider 3" data-responsive="auto" class="n2-ss-slider n2-ow n2-has-hover n2notransition  ">
                                                <div class="n2-ss-slider-wrapper-outside" style="grid-template-rows:1fr auto">
                                                    <div class="n2-ss-slider-wrapper-inside">
                                                        <div class="n2-ss-slider-1 n2_ss__touch_element n2-ow">
                                                            <div class="n2-ss-slider-2 n2-ow">
                                                                <div class="n2-ss-background-animation n2-ow"></div>
                                                                <div class="n2-ss-slider-3 n2-ow">
                                                                    <div class="n2-ss-slide-backgrounds n2-ow-all">
                                                                        <?php

                                                                        use common\models\Product;
                                                                        use yii\helpers\Url;

                                                                        foreach ($sliders as $slider) {
                                                                        ?>
                                                                            <div class="n2-ss-slide-background" data-public-id="<?= $slider->id ?>" data-mode="fit">
                                                                                <div class="n2-ss-slide-background-image" data-blur="0" data-opacity="100" data-x="50" data-y="50" data-alt="" data-title="">
                                                                                    <picture class="skip-lazy" data-skip-lazy="1">
                                                                                        <img src="<?= $slider->image ?>" alt="" title="" loading="lazy" class="skip-lazy" data-skip-lazy="1">
                                                                                    </picture>
                                                                                </div>
                                                                                <div data-color="RGBA(255,255,255,0)" style="background-color: RGBA(255,255,255,0);" class="n2-ss-slide-background-color"></div>
                                                                            </div>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                    <div class="n2-ss-slider-4 n2-ow">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1140 420" data-related-device="desktopPortrait" class="n2-ow n2-ss-preserve-size n2-ss-preserve-size--slider n2-ss-slide-limiter">
                                                                        </svg>
                                                                        <?php
                                                                        foreach ($sliders as $slider) {
                                                                        ?>
                                                                            <div <?= $slider->id === 1 ? 'data-first="1"' : null ?> data-slide-duration="0" data-id="<?= $slider->id ?>" data-slide-public-id="<?= $slider->id ?>" data-title="top_slide_normal23" class="n2-ss-slide n2-ow  n2-ss-slide-15">
                                                                                <div role="note" class="n2-ss-slide--focus" tabindex="-1">top_slide_normal23
                                                                                </div>
                                                                                <div class="n2-ss-layers-container n2-ss-slide-limiter n2-ow">
                                                                                    <div class="n2-ss-layer n2-ow n-uc-EtZD3wE7OBe0" data-sstype="slide" data-pm="default"></div>
                                                                                </div>
                                                                                <img loading="lazy" class="n2-ss-slide-thumbnail skip-lazy" data-skip-lazy="1" src="<?= $slider->image ?>" alt="top_slide_normal23">
                                                                            </div>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="n2-ss-slider-controls n2-ss-slider-controls-absolute-right-center">
                                                            <div style="--widget-offset:15px;" class="n2-ss-widget nextend-arrow n2-ow-all nextend-arrow-next  nextend-arrow-animated-fade" data-hide-mobileportrait="1" id="n2-ss-1-arrow-next" role="button" aria-label="next arrow" tabindex="0">
                                                                <img width="32" height="32" class="skip-lazy" data-skip-lazy="1" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxwYXRoIGQ9Ik0xMC43MjIgNC4yOTNjLS4zOTQtLjM5LTEuMDMyLS4zOS0xLjQyNyAwLS4zOTMuMzktLjM5MyAxLjAzIDAgMS40MmwxMS4yODMgMTAuMjgtMTEuMjgzIDEwLjI5Yy0uMzkzLjM5LS4zOTMgMS4wMiAwIDEuNDIuMzk1LjM5IDEuMDMzLjM5IDEuNDI3IDBsMTIuMDA3LTEwLjk0Yy4yMS0uMjEuMy0uNDkuMjg0LS43Ny4wMTQtLjI3LS4wNzYtLjU1LS4yODYtLjc2TDEwLjcyIDQuMjkzeiIKICAgICAgICAgIGZpbGw9IiNmZmZmZmYiIG9wYWNpdHk9IjAuOCIgZmlsbC1ydWxlPSJldmVub2RkIi8+Cjwvc3ZnPg==" alt="next arrow">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="n2-ss-slider-controls n2-ss-slider-controls-below">
                                                        <div style="--widget-offset:10px;" class="n2-ss-widget n2-ss-control-bullet n2-ow-all n2-ss-control-bullet-horizontal">
                                                            <div class=" nextend-bullet-bar n2-bar-justify-content-center">
                                                                <div class="n2-bullet n2-style-98b890a69860771f94d32019bd5202d1-dot " style="visibility:hidden;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ss3-loader></ss3-loader>
                                        </div>
                                    </div>
                                    <div class="n2_clear"></div>
                                </div>
                                </p>
                            </div>
                        </div>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <h2 class="has-text-align-center">
                            <span class="has-inline-color has-vivid-green-cyan-color">
                                <em>
                                    <strong>Sản phẩm nổi bật</strong>
                                </em>
                            </span>
                        </h2>
                        <p>&nbsp;</p>
                        <div data-block-name="woocommerce/product-top-rated" data-categories="[15]" data-content-visibility="{&quot;title&quot;:true,&quot;price&quot;:true,&quot;rating&quot;:false,&quot;button&quot;:false}" class="wc-block-grid wp-block-product-top-rated wc-block-product-top-rated has-3-columns has-multiple-rows">
                            <ul class="wc-block-grid__products">
                                <?php
                                $products = Product::find()->joinWith("category")->andWhere(["like", "product_categories.category_slug", "san-pham-noi-bat"])->all();
                                foreach ($products as $product) {
                                ?>
                                    <li class="wc-block-grid__product">
                                        <a href="<?= Url::to("end-user/product/site/view?product_slug=" . $product->product_slug) ?>" class="wc-block-grid__product-link">
                                            <div class="wc-block-grid__product-image">
                                                <img width="324" height="243" src="<?= $product->images
                                                                                        ? (isset(json_decode($product->images)[0]) ? json_decode($product->images)[0] : $product->images)
                                                                                        : null ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="<?= $product->product_title ?>" loading="lazy" />
                                            </div>
                                            <div class="wc-block-grid__product-title">
                                                <?= $product->product_title ?>
                                            </div>
                                        </a>
                                        <div class="wc-block-grid__product-price price">
                                            <span class="woocommerce-Price-amount amount" style=" color: #0f753d;">3.050.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                            </span>
                                        </div>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="wp-container-2 wp-block-buttons aligncenter">
                            <div class="wp-block-button">
                                <a class="wp-block-button__link has-text-color has-very-dark-gray-color has-background has-vivid-green-cyan-background-color" style="border-radius: 25px;" href=<?=Url::to("end-user/product/site?category_id=15")?>>Xem tiếp</a>
                            </div>
                        </div>
                        <p>&nbsp;</p>
                        <div class="wp-container-4 wp-block-group">
                            <div class="wp-block-group__inner-container">
                                <h2>
                                    <a href=<?=Url::to("end-user/product/site?category_id=23")?>>
                                        <span class="has-inline-color has-vivid-green-cyan-color">
                                            <strong>Sàn gỗ tự nhiên kỹ thuật</strong>
                                        </span>
                                    </a>
                                </h2>
                                <div data-block-name="woocommerce/product-category" data-categories="[23]" data-content-visibility="{&quot;button&quot;:false,&quot;rating&quot;:false,&quot;title&quot;:true,&quot;price&quot;:true}" data-edit-mode="false" class="wc-block-grid wp-block-product-category wc-block-product-category has-3-columns has-multiple-rows">
                                    <ul class="wc-block-grid__products">
                                        <?php
                                        $products = Product::find()->joinWith("category")->andWhere(["like", 'product_categories.category_slug', 'san-go-tu-nhien-ky-thuat'])->all();
                                        foreach ($products as $product) {
                                        ?>
                                            <li class="wc-block-grid__product">
                                                <a href="<?= Url::to("end-user/product/site/view?product_slug=" . $product->product_slug) ?>" class="wc-block-grid__product-link">
                                                    <div class="wc-block-grid__product-image">
                                                        <img width="324" height="243" src="<?= $product->images
                                                                                                ? (isset(json_decode($product->images)[0]) ? json_decode($product->images)[0] : $product->images)
                                                                                                : null ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="<?= $product->product_title ?>" loading="lazy" />
                                                    </div>
                                                    <div class="wc-block-grid__product-title"><?= $product->product_title ?></div>
                                                </a>
                                                <div class="wc-block-grid__product-price price">
                                                    <span class="woocommerce-Price-amount amount" style=" color: #0f753d;"><?= number_format($product->price) ?><span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                    </span>
                                                </div>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="wp-container-3 wp-block-buttons aligncenter">
                                    <div class="wp-block-button">
                                        <a class="wp-block-button__link has-text-color has-very-dark-gray-color has-background has-vivid-green-cyan-background-color" style="border-radius: 25px;" href=<?=Url::to("end-user/product/site?category_id=23")?>>Xem
                                            tiếp</a>
                                    </div>
                                </div>
                                <h2>
                                    <a href=<?=Url::to("end-user/product/site?category_id=16")?>>
                                        <span class="has-inline-color has-vivid-green-cyan-color">
                                            <strong>Sàn gỗ tự nhiên</strong>
                                        </span>
                                    </a>
                                </h2>
                                <div data-block-name="woocommerce/product-category" data-categories="[16]" data-content-visibility="{&quot;button&quot;:false,&quot;rating&quot;:false,&quot;title&quot;:true,&quot;price&quot;:true}" data-edit-mode="false" class="wc-block-grid wp-block-product-category wc-block-product-category has-3-columns has-multiple-rows">
                                    <ul class="wc-block-grid__products">
                                        <?php
                                        $products = Product::find()->joinWith("category")->andWhere(["like", "product_categories.category_slug", "san-go-tu-nhien"])->all();
                                        foreach ($products as $product) {
                                        ?>
                                            <li class="wc-block-grid__product">
                                                <a href="<?= Url::to("end-user/product/site/view?product_slug=" . $product->product_slug) ?>" class="wc-block-grid__product-link">
                                                    <div class="wc-block-grid__product-image">
                                                        <img width="324" height="243" src="<?= $product->images
                                                                                                ? (isset(json_decode($product->images)[0]) ? json_decode($product->images)[0] : $product->images)
                                                                                                : null ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="<?= $product->product_title ?>" loading="lazy" />
                                                    </div>
                                                    <div class="wc-block-grid__product-title"><?= $product->product_title ?></div>
                                                </a>
                                                <div class="wc-block-grid__product-price price">
                                                    <span class="woocommerce-Price-amount amount " style ="color: #0f753d;"><?= number_format($product->price) ?><span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                    </span>
                                                </div>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="wp-container-5 wp-block-buttons aligncenter">
                            <div class="wp-block-button">
                                <a class="wp-block-button__link has-text-color has-very-dark-gray-color has-background has-vivid-green-cyan-background-color" style="border-radius: 25px;" href=<?=Url::to("end-user/product/site?category_id=16")?>>Xem tiếp</a>
                            </div>
                        </div>
                        <p>&nbsp;</p>
                        <h2 class="has-text-align-left">
                            <a href=<?=Url::to("end-user/product/site?category_id=17")?>>
                                <span class="has-inline-color has-vivid-green-cyan-color">
                                    <strong>Sàn gỗ Olefin kỹ thuật</strong>
                                </span>
                            </a>
                        </h2>
                        <div data-block-name="woocommerce/product-category" data-categories="[17]" data-content-visibility="{&quot;title&quot;:true,&quot;price&quot;:true,&quot;rating&quot;:false,&quot;button&quot;:false}" data-edit-mode="false" class="wc-block-grid wp-block-product-category wc-block-product-category has-3-columns has-multiple-rows">
                            <ul class="wc-block-grid__products">
                                <?php
                                $products = Product::find()->joinWith("category")->andWhere(["like", "product_categories.category_slug", "san-go-olefin-ky-thuat"])->all();
                                foreach ($products as $product) {
                                ?>
                                    <li class="wc-block-grid__product">
                                        <a href="<?= Url::to("end-user/product/site/view?product_slug=" . $product->product_slug) ?>" class="wc-block-grid__product-link">
                                            <div class="wc-block-grid__product-image">
                                                <img width="324" height="243" src="<?= $product->images
                                                                                        ? (isset(json_decode($product->images)[0]) ? json_decode($product->images)[0] : $product->images)
                                                                                        : null ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="<?= $product->product_title ?>" loading="lazy" />
                                            </div>
                                            <div class="wc-block-grid__product-title"><?= $product->product_title ?></div>
                                        </a>
                                        <div class="wc-block-grid__product-price price">
                                            <span class="woocommerce-Price-amount amount" style=" color: #0f753d;"><?= number_format($product->price) ?><span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                            </span>
                                        </div>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="wp-container-6 wp-block-buttons aligncenter">
                            <div class="wp-block-button">
                                <a class="wp-block-button__link has-text-color has-very-dark-gray-color has-background has-vivid-green-cyan-background-color" style="border-radius: 25px;" href=<?=Url::to("end-user/product/site?category_id=17")?>>Xem tiếp</a>
                            </div>
                        </div>
                        <p>&nbsp;</p>
                        <h2 class="has-text-align-left">
                            <a href=<?=Url::to("end-user/product/site?category_id=18")?>>
                                <span class="has-inline-color has-vivid-green-cyan-color">
                                    <strong>Sàn gỗ lát xương cá</strong>
                                </span>
                            </a>
                        </h2>
                        <div data-block-name="woocommerce/product-category" data-categories="[18]" data-content-visibility="{&quot;title&quot;:true,&quot;price&quot;:true,&quot;rating&quot;:false,&quot;button&quot;:false}" data-edit-mode="false" class="wc-block-grid wp-block-product-category wc-block-product-category has-3-columns has-multiple-rows">
                            <ul class="wc-block-grid__products">
                                <?php
                                $products = Product::find()->joinWith("category")->andWhere(["like", "product_categories.category_slug", "san-go-lat-xuong-ca"])->all();
                                foreach ($products as $product) {
                                ?>
                                    <li class="wc-block-grid__product">
                                        <a href="<?= Url::to("end-user/product/site/view?product_slug=" . $product->product_slug) ?>" class="wc-block-grid__product-link">
                                            <div class="wc-block-grid__product-image">
                                                <img width="324" height="243" src="<?=
                                                                                    $product->images
                                                                                        ? (isset(json_decode($product->images)[0]) ? json_decode($product->images)[0] : $product->images)
                                                                                        : null ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="<?= $product->product_title ?>" loading="lazy" />
                                            </div>
                                            <div class="wc-block-grid__product-title"><?= $product->product_title ?></div>
                                        </a>
                                        <div class="wc-block-grid__product-price price">
                                            <span class="woocommerce-Price-amount amount" style=" color: #0f753d;"><?= number_format($product->price) ?><span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                            </span>
                                        </div>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="wp-container-7 wp-block-buttons aligncenter">
                            <div class="wp-block-button">
                                <a class="wp-block-button__link has-text-color has-very-dark-gray-color has-background has-vivid-green-cyan-background-color" style="border-radius: 25px;" href=<?=Url::to("end-user/product/site?category_id=18")?>>Xem tiếp</a>
                            </div>
                        </div>
                        <p>&nbsp;</p>
                        <h2 class="has-text-align-left">
                            <a href=<?=Url::to("end-user/product/site?category_id=19")?>>
                                <span class="has-inline-color has-vivid-green-cyan-color">
                                    <strong>Dự án tiêu biểu</strong>
                                </span>
                            </a>
                        </h2>
                        <div data-block-name="woocommerce/product-category" data-categories="[19]" data-content-visibility="{&quot;title&quot;:true,&quot;price&quot;:true,&quot;rating&quot;:false,&quot;button&quot;:false}" data-edit-mode="false" class="wc-block-grid wp-block-product-category wc-block-product-category has-3-columns has-multiple-rows">
                            <ul class="wc-block-grid__products">
                                <?php
                                $products = Product::find()->joinWith("category")->andWhere(["like", "product_categories.category_slug", "du-an-tieu-bieu"])->all();
                                foreach ($products as $product) {
                                ?>
                                    <li class="wc-block-grid__product">
                                        <a href="<?= Url::to("end-user/product/site/view?product_slug=" . $product->product_slug) ?>" class="wc-block-grid__product-link">
                                            <div class="wc-block-grid__product-image">
                                                <img width="324" height="243" src="<?= $product->images
                                                                                        ? (isset(json_decode($product->images)[0]) ? json_decode($product->images)[0] : $product->images)
                                                                                        : null ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="<?= $product->product_title ?>" loading="lazy" />
                                            </div>
                                            <div class="wc-block-grid__product-title"><?= $product->product_title ?></div>
                                        </a>
                                        <div class="wc-block-grid__product-price price">

                                        </div>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="wp-container-8 wp-block-buttons aligncenter">
                            <div class="wp-block-button">
                                <a class="wp-block-button__link has-text-color has-very-dark-gray-color has-background has-vivid-green-cyan-background-color" style="border-radius: 25px;" href=<?=Url::to("end-user/product/site?category_id=19")?>>Xem tiếp</a>
                            </div>
                        </div>
                        <p>&nbsp;</p>
                        <h2 class="has-text-align-left">
                            <strong>
                                <span class="has-inline-color has-vivid-green-cyan-color">Catalog</span>
                            </strong>
                        </h2>
                        <div class="wp-block-image">
                            <figure class="aligncenter size-large">
                                <img width="1024" height="388" class="wp-image-228" src="/img/86840871_3020293461336918_1488949313370324992_o-1024x388.jpg" alt="" srcset="/img/86840871_3020293461336918_1488949313370324992_o-1024x388.jpg 1024w, /img/86840871_3020293461336918_1488949313370324992_o-500x189.jpg 500w, /img/86840871_3020293461336918_1488949313370324992_o-300x114.jpg 300w, /img/86840871_3020293461336918_1488949313370324992_o-768x291.jpg 768w, /img/86840871_3020293461336918_1488949313370324992_o-1536x582.jpg 1536w, /img/86840871_3020293461336918_1488949313370324992_o-2048x776.jpg 2048w, /img/86840871_3020293461336918_1488949313370324992_o-24x9.jpg 24w, /img/86840871_3020293461336918_1488949313370324992_o-36x14.jpg 36w, /img/86840871_3020293461336918_1488949313370324992_o-48x18.jpg 48w" sizes="(max-width: 1024px) 100vw, 1024px" />
                            </figure>
                        </div>
                        <div class="wp-container-9 wp-block-buttons aligncenter">
                            <div class="wp-block-button">
                                <a class="wp-block-button__link" style="background-color: #eeeeee; color: #166b20" href="https://drive.google.com/drive/folders/1CJAD7Z8D2ljfiVvRzaHhocv9MCVGZmha?usp=sharing" target="_blank" rel="noreferrer noopener">Bấm để tải về Catalog</a>
                            </div>
                        </div>
                        <div class="wp-container-10 wp-block-group">
                            <div class="wp-block-group__inner-container"></div>
                        </div>
                        <p>&nbsp;</p>
                        <div class="ddict_btn" style="top: 984px; left: 456.234px;">
                            <img src="chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png" />
                        </div>
                    </div>
                    <!-- .entry-content -->
                </article>
                <!-- #post-## -->
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
    </div>
    <!-- .col-full -->
</div>