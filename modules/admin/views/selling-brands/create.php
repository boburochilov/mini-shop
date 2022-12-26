<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\SellingBrands $model */

$this->title = 'Create Selling Brands';
$this->params['breadcrumbs'][] = ['label' => 'Selling Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="selling-brands-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
