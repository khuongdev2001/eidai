<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var backend\models\search\ProductProperty $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="product-property-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'user_id') ?>

		<?= $form->field($model, 'product_id') ?>

		<?= $form->field($model, 'property_id') ?>

		<?= $form->field($model, 'property_value') ?>

		<?php // echo $form->field($model, 'created_at') ?>

		<?php // echo $form->field($model, 'updated_at') ?>

		<?php // echo $form->field($model, 'deleted_at') ?>

		<?php // echo $form->field($model, 'property_slug') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
