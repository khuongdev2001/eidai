<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var common\models\Property $model
*/
$copyParams = $model->attributes;

$this->title = Yii::t('models', 'Property');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models.plural', 'Property'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud property-view">

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>

    <h1>
        <?= Html::encode($model->id) ?>
        <small>
            <?= Yii::t('models', 'Property') ?>
        </small>
    </h1>


    <div class="clearfix crud-navigation">

        <!-- menu buttons -->
        <div class='pull-left'>
            <?php 
 echo Html::a(
            '<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit',
            [ 'update', 'id' => $model->id],
            ['class' => 'btn btn-info'])
          ?>

            <?php 
 echo Html::a(
            '<span class="glyphicon glyphicon-copy"></span> ' . 'Copy',
            ['create', 'id' => $model->id, 'Property'=>$copyParams],
            ['class' => 'btn btn-success'])
          ?>

            <?php 
 echo Html::a(
            '<span class="glyphicon glyphicon-plus"></span> ' . 'New',
            ['create'],
            ['class' => 'btn btn-success'])
          ?>
        </div>

        <div class="pull-right">
            <?= Html::a('<span class="glyphicon glyphicon-list"></span> '
            . 'Full list', ['index'], ['class'=>'btn btn-default']) ?>
        </div>

    </div>

    <hr/>

    <?php $this->beginBlock('common\models\Property'); ?>

    
    <?php 
 echo DetailView::widget([
    'model' => $model,
    'attributes' => [
            'user_id',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
        'property_name',
        'property_slug',
    ],
    ]);
  ?>

    
    <hr/>

    <?php 
 echo Html::a('<span class="glyphicon glyphicon-trash"></span> ' . 'Delete', ['delete', 'id' => $model->id],
    [
    'class' => 'btn btn-danger',
    'data-confirm' => '' . 'Are you sure to delete this item?' . '',
    'data-method' => 'post',
    ]);
  ?>
    <?php $this->endBlock(); ?>


    
<?php $this->beginBlock('PropertyChilds'); ?>
<div style='position: relative'>
<div style='position:absolute; right: 0px; top: 0px;'>
  <?php
        echo Html::a(
            '<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Property Childs',
            ['/crud/product-property/index'],
            ['class'=>'btn text-muted btn-xs']
        ) ?>
  <?= Html::a(
            '<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Property Childs',
             ['/crud/product-property/create', 'ProductProperty' => ['property_id' => $model->id]],
            ['class'=>'btn btn-success btn-xs']
        ); ?>
</div>
</div>
<?php Pjax::begin(['id'=>'pjax-PropertyChilds', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-PropertyChilds ul.pagination a, th a']) ?>
<?=
 '<div class="table-responsive">'
 . \yii\grid\GridView::widget([
    'layout' => '{summary}<div class="text-center">{pager}</div>{items}<div class="text-center">{pager}</div>',
    'dataProvider' => new \yii\data\ActiveDataProvider([
        'query' => $model->getPropertyChilds(),
        'pagination' => [
            'pageSize' => 20,
            'pageParam'=>'page-propertychilds',
        ]
    ]),
    'pager'        => [
        'class'          => yii\widgets\LinkPager::className(),
        'firstPageLabel' => 'First',
        'lastPageLabel'  => 'Last'
    ],
    'columns' => [
 [
    'class'      => 'yii\grid\ActionColumn',
    'template'   => '{view} {update}',
    'contentOptions' => ['nowrap'=>'nowrap'],
    'urlCreator' => function ($action, $model, $key, $index) {
        // using the column name as key, not mapping to 'id' like the standard generator
        $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
        $params[0] = '/crud/product-property' . '/' . $action;
        $params['ProductProperty'] = ['property_id' => $model->primaryKey()[0]];
        return $params;
    },
    'buttons'    => [
        
    ],
    'controller' => '/crud/product-property'
],
        'id',
        'user_id',
        'product_id',
        'property_value',
        'created_at',
        'updated_at',
        'deleted_at',
        'property_slug',
]
])
 . '</div>' 
?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


    <?php 
        echo Tabs::widget(
                 [
                     'id' => 'relation-tabs',
                     'encodeLabels' => false,
                     'items' => [
 [
    'label'   => '<b class=""># '.Html::encode($model->id).'</b>',
    'content' => $this->blocks['common\models\Property'],
    'active'  => true,
],
[
    'content' => $this->blocks['PropertyChilds'],
    'label'   => '<small>Property Childs <span class="badge badge-default">'. $model->getPropertyChilds()->count() . '</span></small>',
    'active'  => false,
],
 ]
                 ]
    );
    ?>
</div>
