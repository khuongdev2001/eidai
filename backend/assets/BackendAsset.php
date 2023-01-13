<?php

/**
 * Created by PhpStorm.
 * User: zein
 * Date: 7/3/14
 * Time: 3:14 PM
 */

namespace backend\assets;


use yii\web\YiiAsset;

class BackendAsset extends AssetBundle
{

    /**
     * @var array
     */
    public $css = [
        'css/style.css',
    ];
    /**
     * @var array
     */
    public $js = [
        'js/app.js'
    ];

    public function __construct()
    {
        $inlineAsset = new InlineAsset();
        $this->css = array_merge([
            'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic,400italic,600,700,900&subset=latin%2Clatin-ext',
            'https://fonts.googleapis.com/css?family=Bai+Jamjuree%3A200%2C300%2C400%2C500%2C600%2C700%2C200i%2C300i%2C400i%2C500i%2C600i%2C700i&display=swap&subset=all&ver=3.2.0',
            'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css',
            'css/themes/inlines/global-inline-css.css',
            'css/style.css?t=' . time(),
            'css/pagenavi-css.css',
            'css/dashicons.min.css',
            'css/block-library.css',
            'css/themes/woocommerce.css',
            'css/themes/styles.css',
            'css/themes/smart-slider-3.css',
            'css/themes/icon.css',
            'css/themes/gutenberg-blocks.css',
            'css/plugins/woocommerce/wc-blocks-vendors-style.css',
            'css/plugins/woocommerce/wc-blocks-style.css',
            'css/plugins/menu-image/menu-image.css',
            'css/plugins/hotline-phone-ring/style-2.css'
        ], $inlineAsset->css);
        $this->js = array_merge([
            'js/jquery-migrate.js?t=' . time(),
            'js/plugins/smart-slider-3/n2.min.js',
            'js/plugins/smart-slider-3/w-bullet.min.js',
            'js/plugins/smart-slider-3/smartslider-frontend.min.js',
            'js/plugins/smart-slider-3/ss-simple.min.js',
            'js/plugins/smart-slider-3/smartslider-backgroundanimation.min.js',
            'js/plugins/smart-slider-3/w-arrow-image.min.js',
        ], $inlineAsset->js);
    }
}