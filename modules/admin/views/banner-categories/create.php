<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\BannerCategories $model */

$this->title = 'Create Banner Categories';
$this->params['breadcrumbs'][] = ['label' => 'Banner Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-categories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
