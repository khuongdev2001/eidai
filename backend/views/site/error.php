<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<!--<div class="error">-->
<!--    <div class="row">-->
<!--        <div class="col-xs-12">-->
<!--            <div class="error-content text-center">-->
<!--                <h3 class="headline">-->
<!--                    <i class="fa fa-warning text-yellow"></i>-->
<!--                    --><?php //echo Yii::t(
//                        'backend',
//                        'Error {code}',
//                        [
//                            'code' => property_exists($exception, 'statusCode') ? $exception->statusCode : 500
//                        ])
//                    ?>
<!--                </h3>-->
<!--                <p>-->
<!--                    --><?php //echo nl2br(Html::encode($message)) ?>
<!--                </p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>< /.error-page -->

<section class="content">
    <div class="error-page">
        <div>
            <h4 class="mb-0 text-muted font-weight-normal">Upps! <?php echo nl2br(Html::encode($message)) ?>!</h4>
            <div>
                <span class="error-page-item font-weight-bold">4</span>
                <span class="error-page-item font-weight-bold">0</span>
                <span class="error-page-item font-weight-bold">4</span>
            </div>
            <a href="/" class="btn btn-outline-light btn-lg">Go Home</a>
        </div>
    </div>
    <!-- /.error-page -->
</section>
