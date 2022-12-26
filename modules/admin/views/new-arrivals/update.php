<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\NewArrivals $model */

$this->title = 'Update New Arrivals: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'New Arrivals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="new-arrivals-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
