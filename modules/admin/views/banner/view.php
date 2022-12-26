<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Banner $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Banners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="banner-view">

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

    <div class="card">

        <div class="card-body">

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'subtitle',
                    'definition',
                    'product_name',
                    'description',
                    [
                        'attribute' => 'image',
                        'value' => function($data){
                            $image = \app\components\StaticFunctions::getImage('banner',$data->id,$data->image);
                            return "<img src='$image' alt='img' style='max-width: 100%; max-height: 100px'>";
                        },
                        'format' => 'html'
                    ],
                    'price',
                    'status',
                ],
            ]) ?>

        </div>

    </div>



</div>
