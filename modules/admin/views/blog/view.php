<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Blog $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="blog-view">

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
                    $image = \app\components\StaticFunctions::getImage('blog',$data->id,$data->image);
                    return "<img src='$image' alt='img' style='max-width: 100%; max-height: 100px'>";
                },
                'format' => 'html'
            ],
            'seen_count',
            'created_date',
            'top_body:ntext',
            'quote',
            'main_body:ntext',
            [
                'attribute' => 'category_id',
                'value' => function($data){
                    return \app\models\BlogCategories::findOne($data->category_id)->title;
                }
            ],
            'popular_post',
            'status',
        ],
    ]) ?>

</div>
