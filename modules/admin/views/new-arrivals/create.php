<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\NewArrivals $model */

$this->title = 'Create New Arrivals';
$this->params['breadcrumbs'][] = ['label' => 'New Arrivals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="new-arrivals-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
