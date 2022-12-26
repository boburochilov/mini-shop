<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\SellingBrands $model */

$this->title = 'Update Selling Brands: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Selling Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="selling-brands-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
