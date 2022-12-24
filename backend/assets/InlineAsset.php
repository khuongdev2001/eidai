<?php

/**
 * Created by PhpStorm.
 * User: zein
 * Date: 7/3/14
 * Time: 3:14 PM
 */

namespace backend\assets;

use yii\web\YiiAsset;

class InlineAsset extends AssetBundle
{

    /**
     * @var array
     */
    public $css = [
        'css/themes/inlines/style-inline-css.css',
        'css/themes/inlines/woocommerce-style-inline-css.css',
    ];

    public $js = [
        'js/themes/inlines/inline-js.js'
    ];
}
