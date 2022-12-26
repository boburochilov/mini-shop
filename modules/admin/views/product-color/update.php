<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ProductColor $model */

$this->title = 'Update Product Color: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Product Colors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-color-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
