<?php

use backend\assets\BackendAsset;
use backend\modules\end_user\product\assets\ProductIndexAsset;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\web\View;

/* @var $this View */
/* @var $content string */
$module_id = Yii::$app->controller->module->id;
$bundle = BackendAsset::register($this);
if (in_array($module_id, ["product"])) {
    ProductIndexAsset::register($this);
}
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">
<head>
    <meta charset="<?php echo Yii::$app->charset ?>">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <?php $this->head() ?>
</head>
<?php


echo Html::beginTag("body", [
    'class' => implode(' ', [
        in_array($module_id, ["home", ""])
            ? "home page-template page-template-template-fullwidth page-template-template-fullwidth-php page page-id-14 wp-custom-logo wp-embed-responsive theme-storefront woocommerce-no-js storefront-align-wide right-sidebar woocommerce-active"
            : "product-template-default single single-product postid-259 wp-custom-logo wp-embed-responsive theme-storefront woocommerce woocommerce-page woocommerce-js storefront-align-wide right-sidebar woocommerce-active archive tax-product_cat term-san-go-tu-nhien-ky-thuat term-23 wp-custom-logo wp-embed-responsive theme-storefront woocommerce woocommerce-page woocommerce-js storefront-align-wide right-sidebar woocommerce-active"
    ])

]);
echo $this->render("_header.php");
echo $content;
echo $this->render("_footer.php");
echo $this->render("_plugin.php");
?>
<?php $this->endBody() ?>
<?php echo Html::endTag('body') ?>
</html>
<?php $this->endPage() ?>
