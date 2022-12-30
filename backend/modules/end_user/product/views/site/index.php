<?php

use yii\data\DataProviderInterface;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

/**
 * @var DataProviderInterface $dataProvider
 */
?>
<?php
Pjax::begin(['id' => 'content_ajax']);
?>
<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="woocommerce"></div>
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <header class="woocommerce-products-header">
                    <h1 class="woocommerce-products-header__title page-title">
                        <?= $category->category_name ?>
                    </h1>

                </header>
                <div class="storefront-sorting">
                    <div class="woocommerce-notices-wrapper"></div>
                    <form class="woocommerce-ordering" method="get">
                        <select name="orderby" class="orderby" aria-label="Đơn hàng của cửa hàng">
                            <option value="popularity" selected='selected'>Thứ tự theo mức độ phổ biến</option>
                            <option value="rating">Thứ tự theo điểm đánh giá</option>
                            <option value="date">Mới nhất</option>
                            <option value="price-desc">Thứ tự theo giá: cao xuống thấp</option>
                            <option value="alphabetical">Sort by name: A to Z</option>
                            <option value="by_stock">Sort by availability</option>
                        </select>
                        <input type="hidden" name="paged" value="1"/>
                    </form>
                    <p class="woocommerce-result-count">
                        Hiển thị tất cả 14 kết quả</p>
                </div>
                <ul class="products columns-4">
                    <?php
                    $index = 0;
                    $classNames = ["first", "", "", "last"];
                    foreach ($dataProvider->getModels() as $product) {
                        if (!isset($classNames[$index])) {
                            $index = 0;
                        }
                        ?>
                        <li class="product type-product post-106 status-publish <?= $classNames[$index] ?> instock product_cat-san-pham-noi-bat product_cat-san-go-tu-nhien-ky-thuat has-post-thumbnail shipping-taxable purchasable product-type-simple">
                            <a href="<?= Url::to("?product_slug=" . $product->product_slug) ?>"
                               class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                <img width="324" height="243" src="<?= $product->images
                                    ? (isset(json_decode($product->images)[0]) ? json_decode($product->images)[0] : $product->images)
                                    : null ?>"
                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                     alt="" loading="lazy"/>
                                <h2 class="woocommerce-loop-product__title"><?= $product->product_title ?></h2>
                                <span class="price"><span class="woocommerce-Price-amount amount"><bdi><?= number_format($product->price) ?><span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                            </a><a href="?add-to-cart=106" data-quantity="1"
                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                   data-product_id="106" data-product_sku=""
                                   aria-label="Thêm &ldquo;Sàn gỗ kỹ thuật - Gỗ óc chó 1P (Bản rộng 90mm) (MRBS-WAL-C)&rdquo; vào giỏ hàng"
                                   rel="nofollow">Thêm vào giỏ hàng</a>
                        </li>
                        <?php
                        $index++;
                    }
                    ?>
                </ul>
                <div class="storefront-sorting">
                    <form class="woocommerce-ordering" method="get">
                        <select name="orderby" class="orderby" aria-label="Đơn hàng của cửa hàng">
                            <option value="popularity" selected='selected'>Thứ tự theo mức độ phổ biến</option>
                            <option value="rating">Thứ tự theo điểm đánh giá</option>
                            <option value="date">Mới nhất</option>
                            <option value="price-desc">Thứ tự theo giá: cao xuống thấp</option>
                            <option value="alphabetical">Sort by name: A to Z</option>
                            <option value="by_stock">Sort by availability</option>
                        </select>
                        <input type="hidden" name="paged" value="1"/>
                    </form>
                    <p class="woocommerce-result-count">
                        Hiển thị tất cả 14 kết quả</p>
                </div>
            </main><!-- #main -->
        </div><!-- #primary -->
        <div id="secondary" class="widget-area" role="complementary">
            <div id="woocommerce_price_filter-3" class="widget woocommerce widget_price_filter"><span
                        class="gamma widget-title">Lọc theo giá tiền</span>
                <form method="get"
                      action="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/">
                    <div class="price_slider_wrapper">
                        <div class="price_slider" style="display:none;"></div>
                        <div class="price_slider_amount" data-step="10">
                            <label class="screen-reader-text" for="min_price">Giá thấp nhất</label>
                            <input type="text" id="min_price" name="min_price" value="2450000" data-min="2450000"
                                   placeholder="Giá thấp nhất"/>
                            <label class="screen-reader-text" for="max_price">Giá cao nhất</label>
                            <input type="text" id="max_price" name="max_price" value="3050000" data-max="3050000"
                                   placeholder="Giá cao nhất"/>
                            <button type="submit" class="button">Lọc</button>
                            <div class="price_label" style="display:none;">
                                Giá <span class="from"></span> &mdash; <span class="to"></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </form>

            </div>
            <div id="woocommerce_layered_nav-3"
                 class="widget woocommerce widget_layered_nav woocommerce-widget-layered-nav"><span
                        class="gamma widget-title">Kiểu Lát</span>
                <ul class="woocommerce-widget-layered-nav-list">
                    <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term chosen"><a
                                rel="nofollow"
                                href="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/?filter_kieu-lat=lat-thang&#038;query_type_kieu-lat=or">Lát
                            thẳng</a> <span class="count">(12)</span></li>
                    <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow"
                                                                                                  href="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/?filter_kieu-lat=lat-xuong-ca&#038;query_type_kieu-lat=or">lát
                            xương cá</a> <span class="count">(2)</span></li>
                </ul>
            </div>
            <div id="woocommerce_layered_nav-4"
                 class="widget woocommerce widget_layered_nav woocommerce-widget-layered-nav"><span
                        class="gamma widget-title">Loại Sàn</span>
                <ul class="woocommerce-widget-layered-nav-list">
                    <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow"
                                                                                                  href="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/?filter_loai-san=tu-nhien-ky-thuat&#038;query_type_loai-san=or">tự
                            nhiên kỹ thuật</a> <span class="count">(14)</span></li>
                </ul>
            </div>
            <div id="woocommerce_layered_nav-6"
                 class="widget woocommerce widget_layered_nav woocommerce-widget-layered-nav"><span
                        class="gamma widget-title">Loại gỗ</span>
                <ul class="woocommerce-widget-layered-nav-list">
                    <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow"
                                                                                                  href="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/?filter_loai-go=anh-dao">anh
                            đào</a> <span class="count">(3)</span></li>
                    <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow"
                                                                                                  href="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/?filter_loai-go=black-walnut">black
                            walnut</a> <span class="count">(4)</span></li>
                    <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow"
                                                                                                  href="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/?filter_loai-go=cherry">cherry</a>
                        <span class="count">(3)</span></li>
                    <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow"
                                                                                                  href="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/?filter_loai-go=go-anh-dao">gỗ
                            anh đào</a> <span class="count">(3)</span></li>
                    <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow"
                                                                                                  href="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/?filter_loai-go=go-soi-do">gỗ
                            sồi đỏ</a> <span class="count">(3)</span></li>
                    <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow"
                                                                                                  href="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/?filter_loai-go=go-thich-cung">gỗ
                            thích cứng</a> <span class="count">(3)</span></li>
                    <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow"
                                                                                                  href="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/?filter_loai-go=hard-mapple">hard
                            mapple</a> <span class="count">(2)</span></li>
                    <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow"
                                                                                                  href="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/?filter_loai-go=oc-cho">óc
                            chó</a> <span class="count">(4)</span></li>
                    <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow"
                                                                                                  href="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/?filter_loai-go=oc-cho-den">óc
                            chó đen</a> <span class="count">(4)</span></li>
                    <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow"
                                                                                                  href="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/?filter_loai-go=red-oak">red
                            OAK</a> <span class="count">(2)</span></li>
                    <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow"
                                                                                                  href="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/?filter_loai-go=soi-do">sồi
                            đỏ</a> <span class="count">(4)</span></li>
                    <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow"
                                                                                                  href="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/?filter_loai-go=thich-cung">thích
                            cứng</a> <span class="count">(2)</span></li>
                    <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a rel="nofollow"
                                                                                                  href="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/?filter_loai-go=walnut">walnut</a>
                        <span class="count">(2)</span></li>
                </ul>
            </div>
        </div><!-- #secondary -->
    </div><!-- .col-full -->
</div><!-- #content -->
<?php
$script = <<< JS
    $(document).ready(function() {
         $(".woocommerce-product-search").submit(function (event){
            event.preventDefault()
                $.pjax({
                url: "http://localhost:8080/end-user/product/site/index?s=dev",
                container: '#content_ajax',
            });
        });
    });
JS;
$this->registerJs($script);
Pjax::end();
?>
