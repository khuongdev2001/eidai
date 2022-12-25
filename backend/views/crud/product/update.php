<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Product $model
*/

$this->title = Yii::t('models', 'Product');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Product'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud product-update">

    <h1>
                <?= Html::encode($model->id) ?>

        <small>
            <?= Yii::t('models', 'Product') ?>        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
