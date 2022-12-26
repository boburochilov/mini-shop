<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\HotCollection $model */

$this->title = 'Update Hot Collection: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Hot Collections', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hot-collection-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
