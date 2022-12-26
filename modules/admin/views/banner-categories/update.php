<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\BannerCategories $model */

$this->title = 'Update Banner Categories: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Banner Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="banner-categories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
