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
                    <div id="product-259"
                         class="product type-product post-259 status-publish first instock product_cat-san-go-tu-nhien-ky-thuat has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                             data-columns="4" style="opacity: 0; transition: opacity .25s ease-in-out;">
                            <figure class="woocommerce-product-gallery__wrapper">
                                <?php
                                if (!empty(json_decode($product->images)[0])) {
                                    foreach (json_decode($product->images) as $image) {
                                        ?>
                                        <div data-thumb="<?= env("BACKEND_BASE_URL").'/'.$image ?>" data-thumb-alt=""
                                             class="woocommerce-product-gallery__image">
                                            <a href="https://eidai.com.vn/wp-content/uploads/2020/06/K000004497-scaled.jpg">
                                                <img width="500" height="687" src="<?= env("BACKEND_BASE_URL").'/'.$image ?>" class="wp-post-image"
                                                     alt="" loading="lazy" title="K000004497" data-caption=""/>
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
                                <bdi><?= number_format($product->price) ?> <span
                                            class="woocommerce-Price-currencySymbol">&#8363;</span>
                                </bdi>
                            </span>
                            </p>
                            <div class="woocommerce-product-details__short-description">
                                <?= $product->product_excerpt ?>
                            </div>
                            <form class="cart" action="https://eidai.com.vn/product/san-go-ky-thuat-go-thich-3p/"
                                  method="post" enctype='multipart/form-data'>
                                <div class="quantity">
                                    <label class="screen-reader-text" for="quantity_63a6965db5e67">S??n g??? k??? thu???t ??? G???
                                        th??ch 3P (MRSH-HM-C) s??? l?????ng</label>
                                    <input type="number" id="quantity_63a6965db5e67" class="input-text qty text"
                                           step="1" min="1" max="" name="quantity" value="1" title="SL" size="4"
                                           placeholder="" inputmode="numeric" autocomplete="off"/>
                                </div>
                                <button type="submit" name="add-to-cart" value="259"
                                        class="single_add_to_cart_button button alt">Th??m v??o gi??? h??ng
                                </button>
                            </form>
                            <div class="product_meta">
                            <span class="posted_in">Danh m???c: <a
                                        href="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/"
                                        rel="tag">S??N G??? T??? NHI??N KT</a>
                            </span>
                            </div>
                        </div>
                        <div class="woocommerce-tabs wc-tabs-wrapper">
                            <ul class="tabs wc-tabs" role="tablist">
                                <?php
                                if (!empty($product->product_content)) {
                                    ?>
                                    <li class="description_tab" id="tab-title-description" role="tab"
                                        aria-controls="tab-description">
                                        <a href="#tab-description"> M?? t??? </a>
                                    </li>
                                    <?php
                                }
                                ?>
                                <?php
                                if ($product->countProperty) {
                                    ?>
                                    <li class="additional_information_tab" id="tab-title-additional_information"
                                        role="tab" aria-controls="tab-additional_information">
                                        <a href="#tab-additional_information"> Th??ng tin b??? sung </a>
                                    </li>
                                    <?php
                                }
                                ?>
                                <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                    <a href="#tab-reviews"> ????nh gi?? (0) </a>
                                </li>
                            </ul>
                            <?php
                            if (!empty($product->product_content)) {
                                ?>
                                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab"
                                     id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                                    <h2>M?? t???</h2>
                                    <?= $product->product_content ?>
                                </div>
                                <?php
                            }
                            ?>
                            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab"
                                 id="tab-additional_information" role="tabpanel"
                                 aria-labelledby="tab-title-additional_information">
                                <h2>Th??ng tin b??? sung</h2>
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
                            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab"
                                 id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                                <div id="reviews" class="woocommerce-Reviews">
                                    <div id="comments">
                                        <h2 class="woocommerce-Reviews-title"> ????nh gi?? </h2>
                                        <p class="woocommerce-noreviews">Ch??a c?? ????nh gi?? n??o.</p>
                                    </div>
                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">
                                            <span id="reply-title" class="comment-reply-title">H??y l?? ng?????i ?????u ti??n nh???n x??t &ldquo;S??n g??? k??? thu???t ??? G??? th??ch 3P (MRSH-HM-C)&rdquo; <small>
                                                    <a rel="nofollow" id="cancel-comment-reply-link"
                                                       href="/product/san-go-ky-thuat-go-thich-3p/#respond"
                                                       style="display:none;">H???y</a>
                                                </small>
                                            </span>
                                                <form action="https://eidai.com.vn/wp-comments-post.php" method="post"
                                                      id="commentform" class="comment-form" novalidate>
                                                    <p class="comment-notes">
                                                        <span id="email-notes">Email c???a b???n s??? kh??ng ???????c hi???n th??? c??ng khai.</span>
                                                        <span class="required-field-message" aria-hidden="true">C??c tr?????ng b???t bu???c ???????c ????nh d???u <span
                                                                    class="required" aria-hidden="true">*</span>
                                                    </span>
                                                    </p>
                                                    <div class="comment-form-rating">
                                                        <label for="rating">????nh gi?? c???a b???n&nbsp; <span
                                                                    class="required">*</span>
                                                        </label>
                                                        <select name="rating" id="rating" required>
                                                            <option value="">X???p h???ng&hellip;</option>
                                                            <option value="5">R???t t???t</option>
                                                            <option value="4">T???t</option>
                                                            <option value="3">Trung b??nh</option>
                                                            <option value="2">Kh??ng t???</option>
                                                            <option value="1">R???t t???</option>
                                                        </select>
                                                    </div>
                                                    <p class="comment-form-comment">
                                                        <label for="comment">Nh???n x??t c???a b???n&nbsp; <span
                                                                    class="required">*</span>
                                                        </label>
                                                        <textarea id="comment" name="comment" cols="45" rows="8"
                                                                  required></textarea>
                                                    </p>
                                                    <p class="comment-form-author">
                                                        <label for="author">T??n&nbsp; <span class="required">*</span>
                                                        </label>
                                                        <input id="author" name="author" type="text" value="" size="30"
                                                               required/>
                                                    </p>
                                                    <p class="comment-form-email">
                                                        <label for="email">Email&nbsp; <span class="required">*</span>
                                                        </label>
                                                        <input id="email" name="email" type="email" value="" size="30"
                                                               required/>
                                                    </p>
                                                    <p class="comment-form-cookies-consent">
                                                        <input id="wp-comment-cookies-consent"
                                                               name="wp-comment-cookies-consent" type="checkbox"
                                                               value="yes"/>
                                                        <label for="wp-comment-cookies-consent">L??u t??n c???a t??i, email,
                                                            v??
                                                            trang web trong tr??nh duy???t n??y cho l???n b??nh lu???n k??? ti???p
                                                            c???a
                                                            t??i.</label>
                                                    </p>
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit" class="submit"
                                                               value="G???i ??i"/>
                                                        <input type='hidden' name='comment_post_ID' value='259'
                                                               id='comment_post_ID'/>
                                                        <input type='hidden' name='comment_parent' id='comment_parent'
                                                               value='0'/>
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
                            <h2>S???n ph???m t????ng t???</h2>
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
                                        <a href="<?= Url::to("?product_slug=" . $productSame->product_slug) ?>"
                                           class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <img width="324" height="243" src="<?= $productSame->images
                                                ? (isset(json_decode($productSame->images)[0]) ? json_decode($productSame->images)[0] : $productSame->images)
                                                : null ?>"
                                                 class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                 alt="<?= $productSame->product_title ?>"
                                                 class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                 alt="" loading="lazy"/>
                                            <h2 class="woocommerce-loop-product__title"><?= $productSame->product_title ?></h2>
                                            <span class="price"><span class="woocommerce-Price-amount amount"><bdi><?= number_format($productSame->price) ?><span
                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                        </a><a href="?add-to-cart=106" data-quantity="1"
                                               class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                               data-product_id="106" data-product_sku=""
                                               aria-label="Th??m &ldquo;S??n g??? k??? thu???t - G??? ??c ch?? 1P (B???n r???ng 90mm) (MRBS-WAL-C)&rdquo; v??o gi??? h??ng"
                                               rel="nofollow">Th??m v??o gi??? h??ng</a>
                                    </li>
                                    <?php
                                    $index++;
                                }
                                ?>
                            </ul>
                        </section>
                        <nav class="storefront-product-pagination" aria-label="Xem th??m s???n ph???m">
                            <?php
                            $productPrev = $product->prev;
                            $productNext = $product->next;
                            if ($productPrev) {
                                ?>
                                <a href="<?= Url::to("?product_slug=" . $productPrev->product_slug) ?>" rel="prev">
                                    <img width="324" height="243" src="<?= env("BACKEND_BASE_URL").'/'.$productPrev->images
                                        ? env("BACKEND_BASE_URL").'/'.(isset(json_decode($productPrev->images)[0]) ? json_decode($productPrev->images)[0] : $productPrev->images)
                                        : null ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                         alt="<?= $productPrev->product_title ?>" loading="lazy"/>
                                    <span class="storefront-product-pagination__title">
                                    <?= $productPrev->product_title ?>
                                </span>
                                </a>
                                <?php
                            }
                            if ($productNext) {
                                ?>
                                <a href="<?= Url::to("?product_slug=" . $productNext->product_slug) ?>" rel="next">
                                    <img width="324" height="243" src="<?= env("BACKEND_BASE_URL").'/'.$productNext->images
                                        ? env("BACKEND_BASE_URL").'/'.(isset(json_decode($productNext->images)[0]) ? json_decode($productNext->images)[0] : $productNext->images)
                                        : null ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="<?= $productNext->product_title ?>"
                                         loading="lazy"/>
                                    <span class="storefront-product-pagination__title">
                                    <?= $productNext->product_title ?>
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
<!--            <div id="secondary" class="widget-area" role="complementary">-->
<!--                <div id="woocommerce_recently_viewed_products-2"-->
<!--                     class="widget woocommerce widget_recently_viewed_products">-->
<!--                    <span class="gamma widget-title">S???n ph???m v???a ???????c xem</span>-->
<!--                    <ul class="product_list_widget">-->
<!--                        <li>-->
<!--                            <a href="https://eidai.com.vn/product/san-go-xuong-ca-go-cong-nghiep-mau-go-soi-tu-nhien/">-->
<!--                                <img width="324" height="243"-->
<!--                                     src="https://eidai.com.vn/wp-content/uploads/2020/06/HM-324x243.jpg"-->
<!--                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""-->
<!--                                     loading="lazy"/>-->
<!--                                <span class="product-title">S??n g??? x????ng c?? ??? g??? c??ng nghi???p m??u g??? th??ch (SHV-HMPT-C)</span>-->
<!--                            </a>-->
<!--                            <span class="woocommerce-Price-amount amount">-->
<!--                            <bdi>1.090.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>-->
<!--                            </bdi>-->
<!--                        </span>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="https://eidai.com.vn/product/san-go-xuong-ca-go-tu-nhien-oc-cho/">-->
<!--                                <img width="324" height="243"-->
<!--                                     src="https://eidai.com.vn/wp-content/uploads/2020/10/slide01-324x243.jpg"-->
<!--                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""-->
<!--                                     loading="lazy"/>-->
<!--                                <span class="product-title">S??n g??? x????ng c?? ??? g??? k??? thu???t ??c ch?? ??en (MRHV-WAL-C)</span>-->
<!--                            </a>-->
<!--                            <span class="woocommerce-Price-amount amount">-->
<!--                            <bdi>3.050.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>-->
<!--                            </bdi>-->
<!--                        </span>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="https://eidai.com.vn/product/san-go-ky-thuat-go-anh-dao-2p/">-->
<!--                                <img width="324" height="243"-->
<!--                                     src="https://eidai.com.vn/wp-content/uploads/2020/06/K000004575-324x243.jpg"-->
<!--                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""-->
<!--                                     loading="lazy"/>-->
<!--                                <span class="product-title">S??n g??? k??? thu???t ??? G??? anh ????o 2P (MRNH-CHE-C)</span>-->
<!--                            </a>-->
<!--                            <span class="woocommerce-Price-amount amount">-->
<!--                            <bdi>2.750.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>-->
<!--                            </bdi>-->
<!--                        </span>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="https://eidai.com.vn/product/san-go-ky-thuat-go-anh-dao-3p-2/">-->
<!--                                <img width="324" height="243"-->
<!--                                     src="https://eidai.com.vn/wp-content/uploads/2020/06/MRSH-ROA1-3P-324x243.jpg"-->
<!--                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""-->
<!--                                     loading="lazy"-->
<!--                                     srcset="https://eidai.com.vn/wp-content/uploads/2020/06/MRSH-ROA1-3P-324x243.jpg 324w, https://eidai.com.vn/wp-content/uploads/2020/06/MRSH-ROA1-3P-24x19.jpg 24w"-->
<!--                                     sizes="(max-width: 65.88px) 100vw, 324px"/>-->
<!--                                <span class="product-title">S??n g??? k??? thu???t ??? G??? s???i ????? 3P (MRSH-ROA-C)</span>-->
<!--                            </a>-->
<!--                            <span class="woocommerce-Price-amount amount">-->
<!--                            <bdi>2.450.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>-->
<!--                            </bdi>-->
<!--                        </span>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="https://eidai.com.vn/product/san-go-ky-thuat-go-soi-do-2p/">-->
<!--                                <img width="324" height="243"-->
<!--                                     src="https://eidai.com.vn/wp-content/uploads/2020/06/K000004617-324x243.jpg"-->
<!--                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""-->
<!--                                     loading="lazy"-->
<!--                                     srcset="https://eidai.com.vn/wp-content/uploads/2020/06/K000004617-324x243.jpg 324w, https://eidai.com.vn/wp-content/uploads/2020/06/K000004617-24x17.jpg 24w, https://eidai.com.vn/wp-content/uploads/2020/06/K000004617-36x26.jpg 36w"-->
<!--                                     sizes="(max-width: 324px) 100vw, 324px"/>-->
<!--                                <span class="product-title">S??n g??? k??? thu???t ??? G??? s???i ????? 2P (MRNH-ROA-C)</span>-->
<!--                            </a>-->
<!--                            <span class="woocommerce-Price-amount amount">-->
<!--                            <bdi>2.750.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>-->
<!--                            </bdi>-->
<!--                        </span>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
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


