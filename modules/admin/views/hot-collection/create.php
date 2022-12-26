<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\HotCollection $model */

$this->title = 'Create Hot Collection';
$this->params['breadcrumbs'][] = ['label' => 'Hot Collections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hot-collection-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
