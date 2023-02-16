<?php

use common\models\ProductCategory;
use yii\helpers\Url;
?>
    <header id="masthead" class="site-header" role="banner" style="">
        <div class="header-social"
             style="max-width: 1080px; margin-left: auto; margin-right: auto; margin-bottom: 0px; margin-top:15px;">
            <div class="header_soci" style="float:right; padding-right:0px;">
                <a href="https://www.facebook.com/sangonhatban/">
                    <img src="/img/icons8-facebook-100.png" width="20px" padding-bottom="-20px"> Facebook </a>
                <a href="https://www.youtube.com/channel/UCO6W7tJ1OP27-e99Yl4EDvg/">
                    <img src="/img/icons8-youtube-64.png" width="20px" margin-bottom="-20px"> Youtube </a>
            </div>
            <div class="storefront-primary-navigation">
                <div class="col-full">
                    <nav id="site-navigation" class="main-navigation" role="navigation"
                         aria-label="Thanh điều hướng chính">
                        <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false">
                            <span>Danh mục</span>
                        </button>
                        <div class="primary-navigation">
                            <ul id="menu-menu-chinh" class="menu">
                                <li id="menu-item-204"
                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-204">
                                    <a href="<?= Yii::$app->urlManagerBackend->hostInfo ?>" aria-current="page"
                                       class="menu-image-title-after menu-image-not-hovered">
                                        <img width="200" height="54" src="/img/Untitled-1-1.png"
                                             class="menu-image menu-image-title-after" alt="" loading="lazy"/>
                                        <span class="menu-image-title-after menu-image-title">
                                        <img src="">
                                    </span>
                                    </a>
                                </li>
                                <li id="menu-item-809"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-809">
                                    <?php
                                    $parentCategories = ProductCategory::find()->parent()->andWhere(["category_slug" => "tat-ca-san-pham"])->all();
                                    foreach ($parentCategories as $parentCategory) {
                                        ?>
                                        <a href="<?= Yii::$app->urlManagerBackend->hostInfo . "/end-user/product/site?category_id=" . $parentCategory->id ?>"><?= $parentCategory->category_name ?></a>
                                        <ul class="sub-menu">
                                            <?php
                                            $childCategories = ProductCategory::find()->where(["parent_id" => $parentCategory->id])->all();
                                            foreach ($childCategories as $childCategory) {
                                                ?>
                                                <li id="menu-item-22"
                                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-22">
                                                    <a href="<?= Yii::$app->urlManagerBackend->hostInfo . "/end-user/product/site?category_id=" . $childCategory->id ?>">
                                                        <?= $childCategory->category_name ?>
                                                    </a>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                        <?php
                                    }
                                    ?>
                                </li>
                                <li id="menu-item-88"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-88">
                                    <a href="<?= Yii::$app->urlManagerBackend->hostInfo . "/end-user/product/site?category_id=19" ?>">DỰ
                                        ÁN TIÊU BIỂU</a>
                                </li>
                                <li id="menu-item-423"
                                    class="menu-item menu-item-type-post_type menu-item-object-post menu-item-423">
                                    <a href="/end-user/page/site/view?page_slug=danh-sach-showroom-dai-ly">DANH SÁCH
                                        SHOWROOM/ĐẠI LÝ</a>
                                </li>
                                <li id="menu-item-431"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-431">
                                    <a href="/end-user/post/site?category_slug=tin-tuc-and-bai-viet">TIN TỨC &#038; BÀI
                                        VIẾT</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-403"
                                            class="menu-item menu-item-type-post_type menu-item-object-post menu-item-403">
                                            <a href="/end-user/post/site/view?post_slug=chao-moi-nguoi">Ký kết hợp tác
                                                phân
                                                phối sàn gỗ
                                                EIDAI</a>
                                        </li>
                                        <li id="menu-item-428"
                                            class="menu-item menu-item-type-post_type menu-item-object-post menu-item-428">
                                            <a href="/end-user/post/site/view?post_slug=tieu-chuan-chat-luong-cua-san-go-cao-cap-eidai">Tiêu
                                                chuẩn chất lượng của sàn gỗ cao cấp EIDAI</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="handheld-navigation">
                            <ul id="menu-menu-dien-thoai" class="menu">
                                <li id="menu-item-243"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-243">
                                    <a class="menu-image-title-after menu-image-not-hovered">
                                        <img width="36" height="36" src="/img/Untitled-1-1.png"
                                             class="menu-image menu-image-title-after" alt="" loading="lazy"/>
                                        <span class="menu-image-title-after menu-image-title">
                                        <b></b>
                                    </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-246"
                                            class="menu-item menu-item-type-post_type menu-item-object-post menu-item-246">
                                            <a href="https://eidai.com.vn/chao-moi-nguoi/">Lễ ký kết hợp tác</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-237"
                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-237">
                                    <a href="http://eidai.com.vn" aria-current="page">TRANG CHỦ</a>
                                </li>
                                <?php
                                foreach ($childCategories as $childCategory) {
                                    ?>
                                    <li id="menu-item-242"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-242">
                                        <a href="<?= Yii::$app->urlManagerBackend->hostInfo . "/end-user/product/site?category_id=" . $childCategory->id ?>">
                                            <?= $childCategory->category_name ?>
                                        </a>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </nav>
                    <!-- #site-navigation -->
                    <ul id="site-header-cart" class="site-header-cart menu">
                        <li class="">
                            <a class="cart-contents" href="https://eidai.com.vn/cart/" title="Xem giỏ hàng của bạn">
                            <span class="woocommerce-Price-amount amount">0 <span
                                        class="woocommerce-Price-currencySymbol">&#8363;</span>
                            </span>
                                <span class="count">0 mục</span>
                            </a>
                        </li>
                        <li>
                            <div class="widget woocommerce widget_shopping_cart">
                                <div class="widget_shopping_cart_content"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
    </header>
    <!-- #masthead -->
    <div class="header-widget-region" role="complementary">
        <div class="col-full">
            <div id="woocommerce_product_search-2" class="widget woocommerce widget_product_search">
                <form role="search" method="get" class="woocommerce-product-search"
                      action="/end-user/product/site/index">
                    <label class="screen-reader-text" for="woocommerce-product-search-field-1">Tìm kiếm:</label>
                    <input type="search" id="woocommerce-product-search-field-1" class="search-field"
                           placeholder="Tìm sản phẩm&hellip;" value="<?= Yii::$app->request->get("s") ?>" name="s"/>
                    <button type="submit" value="Tìm kiếm">Tìm kiếm</button>
                    <input type="hidden" name="post_type" value="product"/>
                </form>
            </div>
        </div>
    </div>
<?php
$this->registerJs(<<< EOT_JS_CODE
    $(".menu-toggle").click(function(){
        console.log($(this).parent().toggleClass("toggled"))
    })
EOT_JS_CODE
);
?>