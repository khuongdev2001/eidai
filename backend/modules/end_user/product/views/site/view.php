<?php

/**
 * @var Product $product
 */

use backend\modules\end_user\product\models\Product;
use yii\helpers\Url;

?>
<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="woocommerce"></div>
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <div class="woocommerce-notices-wrapper"></div>
                <div id="product-259" class="product type-product post-259 status-publish first instock product_cat-san-go-tu-nhien-ky-thuat has-post-thumbnail shipping-taxable purchasable product-type-simple">
                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 0; transition: opacity .25s ease-in-out;">
                        <figure class="woocommerce-product-gallery__wrapper">
                            <?php
                            if (!empty(json_decode($product->images)[0])) {
                                foreach (json_decode($product->images) as $image) {
                            ?>
                                    <div data-thumb="<?= $image ?>" data-thumb-alt="" class="woocommerce-product-gallery__image">
                                        <a href="https://eidai.com.vn/wp-content/uploads/2020/06/K000004497-scaled.jpg">
                                            <img width="500" height="687" src="<?= $image ?>" class="wp-post-image" alt="" loading="lazy" title="K000004497" data-caption="" />
                                        </a>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </figure>
                    </div>
                    <div class="summary entry-summary">
                        <h1 class="product_title entry-title"><?= $product->product_title ?></h1>
                        <p class="price">
                            <span class="woocommerce-Price-amount amount">
                                <bdi><?= number_format($product->price) ?> <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                </bdi>
                            </span>
                        </p>
                        <div class="woocommerce-product-details__short-description">
                            <?= $product->product_excerpt ?>
                        </div>
                        <form class="cart" action="https://eidai.com.vn/product/san-go-ky-thuat-go-thich-3p/" method="post" enctype='multipart/form-data'>
                            <div class="quantity">
                                <label class="screen-reader-text" for="quantity_63a6965db5e67">Sàn gỗ kỹ thuật – Gỗ
                                    thích 3P (MRSH-HM-C) số lượng</label>
                                <input type="number" id="quantity_63a6965db5e67" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="SL" size="4" placeholder="" inputmode="numeric" autocomplete="off" />
                            </div>
                            <button type="submit" name="add-to-cart" value="259" class="single_add_to_cart_button button alt">Thêm vào giỏ hàng
                            </button>
                        </form>
                        <div class="product_meta">
                            <span class="posted_in">Danh mục: <a href="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/" rel="tag">SÀN GỖ TỰ NHIÊN KT</a>
                            </span>
                        </div>
                    </div>
                    <div class="woocommerce-tabs wc-tabs-wrapper">
                        <ul class="tabs wc-tabs" role="tablist">
                            <?php
                            if (!empty($product->product_content)) {
                            ?>
                                <li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
                                    <a href="#tab-description"> Mô tả </a>
                                </li>
                            <?php
                            }
                            ?>
                            <?php
                            if ($product->countProperty) {
                            ?>
                                <li class="additional_information_tab" id="tab-title-additional_information" role="tab" aria-controls="tab-additional_information">
                                    <a href="#tab-additional_information"> Thông tin bổ sung </a>
                                </li>
                            <?php
                            }
                            ?>
                            <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                <a href="#tab-reviews"> Đánh giá (0) </a>
                            </li>
                        </ul>
                        <?php
                        if (!empty($product->product_content)) {
                        ?>
                            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                                <h2>Mô tả</h2>
                                <?= $product->product_content ?>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab" id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information">
                            <h2>Thông tin bổ sung</h2>
                            <table class="woocommerce-product-attributes shop_attributes">
                                <?php
                                foreach ($properties as $property) {
                                ?>
                                    <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_kieu-lat">
                                        <th class="woocommerce-product-attributes-item__label"><?= $property->property_name ?></th>
                                        <td class="woocommerce-product-attributes-item__value">
                                            <p>
                                                <?= join(", ", array_map(function ($item) {
                                                    return $item->property_value;
                                                }, $property->getProductPropertiesByProductId($product->id))) ?>
                                            </p>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                            <div id="reviews" class="woocommerce-Reviews">
                                <div id="comments">
                                    <h2 class="woocommerce-Reviews-title"> Đánh giá </h2>
                                    <p class="woocommerce-noreviews">Chưa có đánh giá nào.</p>
                                </div>
                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond" class="comment-respond">
                                            <span id="reply-title" class="comment-reply-title">Hãy là người đầu tiên nhận xét &ldquo;Sàn gỗ kỹ thuật – Gỗ thích 3P (MRSH-HM-C)&rdquo; <small>
                                                    <a rel="nofollow" id="cancel-comment-reply-link" href="/product/san-go-ky-thuat-go-thich-3p/#respond" style="display:none;">Hủy</a>
                                                </small>
                                            </span>
                                            <form action="https://eidai.com.vn/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
                                                <p class="comment-notes">
                                                    <span id="email-notes">Email của bạn sẽ không được hiển thị công khai.</span>
                                                    <span class="required-field-message" aria-hidden="true">Các trường bắt buộc được đánh dấu <span class="required" aria-hidden="true">*</span>
                                                    </span>
                                                </p>
                                                <div class="comment-form-rating">
                                                    <label for="rating">Đánh giá của bạn&nbsp; <span class="required">*</span>
                                                    </label>
                                                    <select name="rating" id="rating" required>
                                                        <option value="">Xếp hạng&hellip;</option>
                                                        <option value="5">Rất tốt</option>
                                                        <option value="4">Tốt</option>
                                                        <option value="3">Trung bình</option>
                                                        <option value="2">Không tệ</option>
                                                        <option value="1">Rất tệ</option>
                                                    </select>
                                                </div>
                                                <p class="comment-form-comment">
                                                    <label for="comment">Nhận xét của bạn&nbsp; <span class="required">*</span>
                                                    </label>
                                                    <textarea id="comment" name="comment" cols="45" rows="8" required></textarea>
                                                </p>
                                                <p class="comment-form-author">
                                                    <label for="author">Tên&nbsp; <span class="required">*</span>
                                                    </label>
                                                    <input id="author" name="author" type="text" value="" size="30" required />
                                                </p>
                                                <p class="comment-form-email">
                                                    <label for="email">Email&nbsp; <span class="required">*</span>
                                                    </label>
                                                    <input id="email" name="email" type="email" value="" size="30" required />
                                                </p>
                                                <p class="comment-form-cookies-consent">
                                                    <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" />
                                                    <label for="wp-comment-cookies-consent">Lưu tên của tôi, email, và
                                                        trang web trong trình duyệt này cho lần bình luận kế tiếp của
                                                        tôi.</label>
                                                </p>
                                                <p class="form-submit">
                                                    <input name="submit" type="submit" id="submit" class="submit" value="Gửi đi" />
                                                    <input type='hidden' name='comment_post_ID' value='259' id='comment_post_ID' />
                                                    <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                                </p>
                                            </form>
                                        </div>
                                        <!-- #respond -->
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <section class="related products">
                        <h2>Sản phẩm tương tự</h2>
                        <ul class="products columns-3">
                            <?php
                            $index = 0;
                            $classNames = ["first", "", "last"];
                            foreach ($product->productSames as $productSame) {
                                if (!isset($classNames[$index])) {
                                    $index = 0;
                                }
                            ?>
                                <li class="product type-product post-106 status-publish <?= $classNames[$index] ?> instock product_cat-san-pham-noi-bat product_cat-san-go-tu-nhien-ky-thuat has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <a href="<?= Url::to("?product_slug=" . $productSame->product_slug) ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                        <img width="324" height="243" src="<?= $productSame->images
                                                                                ? (isset(json_decode($productSame->images)[0]) ? json_decode($productSame->images)[0] : $productSame->images)
                                                                                : null ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="<?= $productSame->product_title ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />
                                        <h2 class="woocommerce-loop-product__title"><?= $productSame->product_title ?></h2>
                                        <span class="price"><span class="woocommerce-Price-amount amount"><bdi><?= number_format($productSame->price) ?><span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                    </a><a href="?add-to-cart=106" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="106" data-product_sku="" aria-label="Thêm &ldquo;Sàn gỗ kỹ thuật - Gỗ óc chó 1P (Bản rộng 90mm) (MRBS-WAL-C)&rdquo; vào giỏ hàng" rel="nofollow">Thêm vào giỏ hàng</a>
                                </li>
                            <?php
                                $index++;
                            }
                            ?>
                        </ul>
                    </section>
                    <nav class="storefront-product-pagination" aria-label="Xem thêm sản phẩm">
                        <?php
                        if ($product->prev) {
                        ?>
                            <a href="<?= Url::to("?product_slug=" . $product->prev->product_slug) ?>" rel="prev">
                                <img width="324" height="243" src="<?= $product->prev->images
                                                                        ? (isset(json_decode($product->prev->images)[0]) ? json_decode($product->prev->images)[0] :  $product->prev->images)
                                                                        : null ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />
                                <span class="storefront-product-pagination__title">
                                    <?= $product->prev->product_title ?>
                                </span>
                            </a>
                        <?php
                        }
                        if ($product->next) {
                        ?>
                            <a href="<?= Url::to("?product_slug=" . $product->next->product_slug) ?>" rel="next">
                                <img width="324" height="243" src="<?= $product->next->images
                                                                        ? (isset(json_decode($product->next->images)[0]) ? json_decode($product->next->images)[0] :  $product->next->images)
                                                                        : null ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />
                                <span class="storefront-product-pagination__title">
                                    <?= $product->next->product_title ?>
                                </span>
                            </a>
                        <?php
                        }
                        ?>
                    </nav>
                    <!-- .storefront-product-pagination -->
                </div>
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
        <div id="secondary" class="widget-area" role="complementary">
            <div id="woocommerce_recently_viewed_products-2" class="widget woocommerce widget_recently_viewed_products">
                <span class="gamma widget-title">Sản phẩm vừa được xem</span>
                <ul class="product_list_widget">
                    <li>
                        <a href="https://eidai.com.vn/product/san-go-xuong-ca-go-cong-nghiep-mau-go-soi-tu-nhien/">
                            <img width="324" height="243" src="https://eidai.com.vn/wp-content/uploads/2020/06/HM-324x243.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />
                            <span class="product-title">Sàn gỗ xương cá – gỗ công nghiệp màu gỗ thích (SHV-HMPT-C)</span>
                        </a>
                        <span class="woocommerce-Price-amount amount">
                            <bdi>1.090.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                            </bdi>
                        </span>
                    </li>
                    <li>
                        <a href="https://eidai.com.vn/product/san-go-xuong-ca-go-tu-nhien-oc-cho/">
                            <img width="324" height="243" src="https://eidai.com.vn/wp-content/uploads/2020/10/slide01-324x243.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />
                            <span class="product-title">Sàn gỗ xương cá – gỗ kỹ thuật óc chó đen (MRHV-WAL-C)</span>
                        </a>
                        <span class="woocommerce-Price-amount amount">
                            <bdi>3.050.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                            </bdi>
                        </span>
                    </li>
                    <li>
                        <a href="https://eidai.com.vn/product/san-go-ky-thuat-go-anh-dao-2p/">
                            <img width="324" height="243" src="https://eidai.com.vn/wp-content/uploads/2020/06/K000004575-324x243.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />
                            <span class="product-title">Sàn gỗ kỹ thuật – Gỗ anh đào 2P (MRNH-CHE-C)</span>
                        </a>
                        <span class="woocommerce-Price-amount amount">
                            <bdi>2.750.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                            </bdi>
                        </span>
                    </li>
                    <li>
                        <a href="https://eidai.com.vn/product/san-go-ky-thuat-go-anh-dao-3p-2/">
                            <img width="324" height="243" src="https://eidai.com.vn/wp-content/uploads/2020/06/MRSH-ROA1-3P-324x243.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="https://eidai.com.vn/wp-content/uploads/2020/06/MRSH-ROA1-3P-324x243.jpg 324w, https://eidai.com.vn/wp-content/uploads/2020/06/MRSH-ROA1-3P-24x19.jpg 24w" sizes="(max-width: 65.88px) 100vw, 324px" />
                            <span class="product-title">Sàn gỗ kỹ thuật – Gỗ sồi đỏ 3P (MRSH-ROA-C)</span>
                        </a>
                        <span class="woocommerce-Price-amount amount">
                            <bdi>2.450.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                            </bdi>
                        </span>
                    </li>
                    <li>
                        <a href="https://eidai.com.vn/product/san-go-ky-thuat-go-soi-do-2p/">
                            <img width="324" height="243" src="https://eidai.com.vn/wp-content/uploads/2020/06/K000004617-324x243.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="https://eidai.com.vn/wp-content/uploads/2020/06/K000004617-324x243.jpg 324w, https://eidai.com.vn/wp-content/uploads/2020/06/K000004617-24x17.jpg 24w, https://eidai.com.vn/wp-content/uploads/2020/06/K000004617-36x26.jpg 36w" sizes="(max-width: 324px) 100vw, 324px" />
                            <span class="product-title">Sàn gỗ kỹ thuật – Gỗ sồi đỏ 2P (MRNH-ROA-C)</span>
                        </a>
                        <span class="woocommerce-Price-amount amount">
                            <bdi>2.750.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                            </bdi>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- #secondary -->
    </div>
    <!-- .col-full -->
</div>
<!-- #content -->

<?php
$script = <<< JS
    $(document).ready(function(){
		$('.woocommerce-product-gallery__image').zoom();
	});
JS;
$style = <<< CSS
    .flex-control-nav img{
        width: 65.88px !important;
        height: 65.88px !important;
        object-fit: cover;
    }
CSS;
$this->registerCss($style);
$this->registerJs($script);
?>