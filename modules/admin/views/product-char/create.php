<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ProductChar $model */

$this->title = 'Create Product Char';
$this->params['breadcrumbs'][] = ['label' => 'Product Chars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-char-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
