<?php

use app\models\ProductCategory;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Product $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

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
            'title',
            [
                'attribute' => 'image',
                'value' => function($data){
                    $image = \app\components\StaticFunctions::getImage('product',$data->id,$data->image);
                    return "<img src='$image' alt='img' style='max-width: 100%; max-height: 100px'>";
                },
                'format' => 'html'
            ],
            'price',
            'old_price',
            'body:ntext',
            [
                'attribute' => 'category_id',
                'value' => function($data){
                    $category = ProductCategory::findOne($data->category_id);
                    if($category === null) {
                        return null;
                    }
                    return $category->name;
                }
            ],
            'brand_id',
            'color_id',
            'availability',
            'best_selling',
            'new',
            'sale',
            'hot_collection',
            'status',
        ],
    ]) ?>

</div>
