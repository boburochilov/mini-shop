<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Haeder $model */

$this->title = 'Create Haeder';
$this->params['breadcrumbs'][] = ['label' => 'Haeders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="haeder-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
