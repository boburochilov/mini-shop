<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MegaSale $model */

$this->title = 'Update Mega Sale: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Mega Sales', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mega-sale-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
