<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\SellingBrands $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Selling Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="selling-brands-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы хотите удалить этот элемент?!',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'image',
                'value' => function($data){
                    $image = \app\components\StaticFunctions::getImage('selling-brands',$data->id,$data->image);
                    return "<img src='$image' alt='img' style='max-width: 100%; max-height: 100px'>";
                },
                'format' => 'html'
            ],
            'link',
            'status',
        ],
    ]) ?>

</div>
