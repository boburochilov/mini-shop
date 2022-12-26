<?php

use app\models\Banner;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\BannerSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Banners';
$this->params['breadcrumbs'][] = $this->title;
?>


    <div class="banner-index">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Create Banner', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <div class="card">

            <div class="card-body">

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

    //            'id',
    //            'subtitle',
                        'definition',
                        'product_name',
    //            'description',
                        [
                            'attribute' => 'image',
                            'value' => function($data){
                                $image = \app\components\StaticFunctions::getImage('banner',$data->id,$data->image);
                                return "<img src='$image' alt='img' style='max-width: 100%; max-height: 100px'>";
                            },
                            'format' => 'html'
                        ],
                        //'price',
                        'status',
                        [

                            'class' => 'yii\grid\ActionColumn',

                            'header' => "Actions",

                            'headerOptions' => ['style' => 'text-align:center'],

                            'template' => '{buttons}',

                            'contentOptions' => ['style' => 'min-width:150px;max-width:150px;width:150px', 'class' => 'v-align-middle'],

                            'buttons' => [

                                'buttons' => function ($url, $model) {

                                    $controller = Yii::$app->controller->id;

                                    $code = <<<BUTTONS
    
                                        <div class="btn-group flex-center">
    
                                            <a href="/admin/{$controller}/update?id={$model->id}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            
                                            <a href="/admin/{$controller}/view?id={$model->id}" class="btn btn-secondary postRemove"><i class="fa fa-eye"></i></a>
                                            
                                            <a href="/admin/{$controller}/delete?id={$model->id}" class="btn btn-danger remove postRemove"><i class="fa fa-trash"></i></a>
                                            
                                        </div>
    
    BUTTONS;

                                    return $code;

                                }
                            ],
                        ],
                    ],
                ]); ?>

            </div>

        </div>

    </div>


