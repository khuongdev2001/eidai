<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var backend\models\search\Product $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'user_id') ?>

		<?= $form->field($model, 'product_title') ?>

		<?= $form->field($model, 'category_id') ?>

		<?= $form->field($model, 'product_slug') ?>

		<?php // echo $form->field($model, 'product_excerpt') ?>

		<?php // echo $form->field($model, 'images') ?>

		<?php // echo $form->field($model, 'price') ?>

		<?php // echo $form->field($model, 'old_price') ?>

		<?php // echo $form->field($model, 'status') ?>

		<?php // echo $form->field($model, 'publish_at') ?>

		<?php // echo $form->field($model, 'created_at') ?>

		<?php // echo $form->field($model, 'updated_at') ?>

		<?php // echo $form->field($model, 'deleted_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
