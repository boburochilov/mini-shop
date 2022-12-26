<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Haeder $model */

$this->title = 'Update Haeder: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Haeders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="haeder-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
