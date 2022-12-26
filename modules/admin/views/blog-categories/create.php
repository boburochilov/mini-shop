<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\BlogCategories $model */

$this->title = 'Create Blog Categories';
$this->params['breadcrumbs'][] = ['label' => 'Blog Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-categories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
