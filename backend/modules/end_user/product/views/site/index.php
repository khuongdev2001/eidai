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
        <?php
        if ($dataProvider->getCount()) {
            ?>
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
                                <li
                                        class="product type-product post-106 status-publish <?= $classNames[$index] ?> instock product_cat-san-pham-noi-bat product_cat-san-go-tu-nhien-ky-thuat has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <a href="<?= Url::to("/end-user/product/site/view/?product_slug=" . $product->product_slug) ?>"
                                       class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                        <img width="324" height="243" style="height: 150px;"
                                             src="<?= env("BACKEND_BASE_URL") . '/' . $product->images
                                                 ? env("BACKEND_BASE_URL") . '/' . (isset(json_decode($product->images)[0]) ? json_decode($product->images)[0] : env("BACKEND_BASE_URL") . '/' . $product->images)
                                                 : null ?>"
                                             class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                             alt="" loading="lazy"/>
                                        <h2 class="woocommerce-loop-product__title">
                                            <?= $product->product_title ?>
                                        </h2>
                                        <span class="price">
                                        <?php
                                        if ($product->price) {
                                        ?>
                                            <span class="woocommerce-Price-amount amount" style=" color: #0f753d;"><bdi>
                                                    <?= number_format($product->price) ?><span
                                                            class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                </bdi></span></span>
                                        <?php
                                        }
                                        ?>
                                    </a><a href="?add-to-cart=106" data-quantity="1"
                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                           data-product_id="106"
                                           data-product_sku=""
                                           aria-label="Thêm &ldquo;Sàn gỗ kỹ thuật - Gỗ óc chó 1P (Bản rộng 90mm) (MRBS-WAL-C)&rdquo; vào giỏ hàng"
                                           rel="nofollow">Thêm vào giỏ hàng</a>
                                </li>
                                <?php
                                $index++;
                            }
                            ?>
                        </ul>
                        <div class="wp-pagination">
                            <?php echo \yii\widgets\LinkPager::widget([
                                'pagination' => $dataProvider->pagination,
                            ]); ?>
                        </div>
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
                                class="gamma widget-title">Sắp xếp theo</span>
                        <form>
                            <select id="myList">
                                <option value="price" <?= Yii::$app->request->get("sort") == "price" ? "selected" : null ?>> Tùy chọn</option>
                                <option value="price" <?= Yii::$app->request->get("sort") == "price" ? "selected" : null ?>> Giá tiền tăng dần</option>
                                <option value="-price" <?= Yii::$app->request->get("sort") == "-price" ? "selected" : null ?>> Giá tiền giảm dần</option>
                            </select>
                        </form>
                    </div>
                    <div id="woocommerce_price_filter-3" class="widget woocommerce widget_price_filter"><span
                                class="gamma widget-title">Lọc theo giá tiền</span>
                        <form method="get" action="<?= Yii::$app->request->getUrl() ?>">
                            <div class="price_slider_wrapper">
                                <div class="price_slider" style="display:none;"></div>
                                <div class="price_slider_amount" data-step="10">
                                    <label class="screen-reader-text" for="min_price">Giá thấp nhất</label>
                                    <input type="text" id="min_price" name="min_price"
                                           value="<?= Yii::$app->request->get("min_price", 2450000) ?>"
                                           data-min="<?= Yii::$app->request->get("min_price", 2450000) ?>"
                                           placeholder="Giá thấp nhất"/>
                                    <label class="screen-reader-text" for="max_price">Giá cao nhất</label>
                                    <input type="text" id="max_price" name="max_price"
                                           value="<?= Yii::$app->request->get("max_price", 5050000) ?>"
                                           data-max="<?= Yii::$app->request->get("max_price", 5050000) ?>"
                                           placeholder="Giá cao nhất"/>
                                    <button type="submit" class="button btn-filter">Lọc</button>
                                    <div class="price_label" style="display:none;">
                                        Giá <span class="from"></span> &mdash; <span class="to"></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php
                    foreach ($properties as $property) {
                        ?>
                        <div id="woocommerce_layered_nav-3"
                             class="widget woocommerce widget_layered_nav woocommerce-widget-layered-nav"><span
                                    class="gamma widget-title"><?= $property->property_name ?></span>
                            <ul class="woocommerce-widget-layered-nav-list">
                                <?php
                                foreach ($property->propertyChilds as $propertyChild) {
                                    ?>
                                    <li attr-filter-key="filter_<?= $property->property_slug ?>"
                                        attr-filter-value="<?= $propertyChild->property_slug ?>" class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term
                                                                        <?php
                                    if (Yii::$app->request->get("filter_" . $property->property_slug)) {
                                        if (in_array($propertyChild->property_slug, explode(",", Yii::$app->request->get("filter_" . $property->property_slug)))) {
                                            echo "chosen";
                                        }
                                    }
                                    ?>
                                                                    "><a rel="nofollow"
                                                                         href="https://eidai.com.vn/product-category/tat-ca-san-pham/san-go-tu-nhien-ky-thuat/?filter_kieu-lat=lat-thang&#038;query_type_kieu-lat=or">
                                            <?= $propertyChild->property_value ?>
                                        </a> <span class="count">(<?= $propertyChild->countProduct ?? 0 ?>)</span></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <?php
                    }
                    ?>
                </div><!-- #secondary -->
            </div><!-- .col-full -->
            <?php
        } else {
            ?>
            <p class="woocommerce-info woocommerce-no-products-found">Không tìm thấy sản phẩm nào khớp với lựa chọn của
                bạn.</p>
            <?php
        }
        ?>
    </div><!-- #content -->
<?php
$baseUrl = env("BASE_URL");
$script = <<<JS
    priceSlider();
    $(document).ready(function() {
        const urlParams = new URLSearchParams(location.search);
        let filters = Object.fromEntries(urlParams);
        for (const key in filters){
               if(key.includes("filter")){
                   filters[key]=filters[key].split(","); 
               }
            }
        $(".woocommerce-widget-layered-nav-list__item").click(function (e){
            if(Array.isArray(filters[$(this)[0].getAttribute("attr-filter-key")])){
                if(!filters[$(this)[0].getAttribute("attr-filter-key")].includes($(this)[0].getAttribute("attr-filter-value"))){
                    filters[$(this)[0].getAttribute("attr-filter-key")].push($(this)[0].getAttribute("attr-filter-value"));
                }
                else{
                    const filterValue =$(this)[0].getAttribute("attr-filter-value");
                    const dataFilterSame = filters[$(this)[0].getAttribute("attr-filter-key")].filter(function (item){
                        return item != filterValue;
                    });
                    filters[$(this)[0].getAttribute("attr-filter-key")]=dataFilterSame;
                }
            }
            else if(filters[$(this)[0].getAttribute("attr-filter-key")] == "undefined"){
                filters[$(this)[0].getAttribute("attr-filter-key")]=[$(this)[0].getAttribute("attr-filter-value")];
            }
            else {
                filters[$(this)[0].getAttribute("attr-filter-key")]=[filters[$(this)[0].getAttribute("attr-filter-key")],$(this)[0].getAttribute("attr-filter-value")]
            }
            fetch(filters);
            e.preventDefault();
        })  
        
        $(".btn-filter").click(function (e){
            filters["min_price"] = $(this).parent(".price_slider_amount").find("#min_price").val();
            filters["max_price"] = $(this).parent(".price_slider_amount").find("#max_price").val();
            fetch(filters);
            e.preventDefault();
        })
        $("#myList").change(function (e){
            filters["sort"] = e.target.value;
            fetch(filters);
        })
    });

    function fetch (filters) {
        filterClones = {...filters};
        for (const filter in filterClones){
                if(Array.isArray(filterClones[filter])){
                    filterClones[filter]=filterClones[filter].join(",");
                }
            }
            const params = new URLSearchParams(filterClones).toString();
            event.preventDefault()
                $.pjax({
                url: "{$baseUrl}/end-user/product/site/index?"+params,
                container: '#content_ajax',
            });
    }
       // $('#content_ajax').on('pjax:end',function() {
       //      $("html, body").animate({scrollTop: 0}, 200);
       // });
    function favTutorial() {
        // var mylist = document.getElementById("myList");
        // document.getElementById("favourite").value = mylist.options[mylist.selectedIndex].text;
    }
JS;
$this->registerJs($script);
Pjax::end();
?>