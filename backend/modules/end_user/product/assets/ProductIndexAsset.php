<?php

namespace backend\modules\end_user\product\assets;

use backend\assets\AssetBundle;

class ProductIndexAsset extends AssetBundle
{
    public $css = [
        "css/plugins/woocommerce/woocommerce.css",
        "css/plugins/woocommerce/photoswipe.min.css"
    ];

    public $js = [
        "js/plugins/woocommerce/js.cookie.min.js",
        "js/plugins/woocommerce/woocommerce.min.js",
        "js/plugins/woocommerce/price-slider.min.js",
        "js/plugins/woocommerce/accounting.min.js",
        "js/plugins/woocommerce/cart-fragments.min.js",
        "js/plugins/woocommerce/header-cart.min.js",
        "js/jquery.zoom.min.js",
        "js/jquery.flexslider.min.js",
        "js/themes/photoswipe.min.js",
        "js/themes/photoswipe-ui-default.min.js".
        "js/themes/single-product.min.js",
        "js/plugins/woocommerce/jquery-ui-touch-punch.min.js",
        "js/themes/single-product.min.js",
        "js/themes/comment-reply.min.js",
        "js/core.min.js",
        "js/mouse.min.js",
        "js/slider.min.js",
    ];
}