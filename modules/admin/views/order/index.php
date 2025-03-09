<?php

use app\models\Order;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\OrderSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="card">

        <div class="card-body status_changer">

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                        'id',
//                    'user',
                    'full_name',
                    'address',
                    'city',
                    //'email:email',
                    //'phone',
                    //'created_date',
                    //'updated_date',
                    //'total_product_count',
                    //'total_product_price',
                    //'status',
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
    
                                
                                <div class="btn-group flex-center w-100">
                                                
                                    <a href="/admin/{$controller}/view?id={$model->id}" class="btn btn-secondary postRemove"><i class="fa fa-eye"></i></a>
                                            
                                </div>
                                
BUTTONS;
                                return $code;
                            }
                        ],
                    ],
                    [
                        'attribute' => 'status',
                        'value' => function($data){
                            $result = "";
                            switch ($data->status){
                                case 1:
                                    $result = "
                                  
                                    <div class='w-100 order_status warning badge badge-light'>
                                        " . Yii::$app->params['orderStatuses'][$data->status] . "
                                    </div>
                                    
                                ";
                                    break;

                                case 2:
                                    $result = "
                                  
                                    <div class='w-100 order_status primary badge badge-warning'>
                                        " . Yii::$app->params['orderStatuses'][$data->status] . "
                                    </div>
                                    
                                ";
                                    break;

                                case 3:
                                    $result = "
                                  
                                    <div class='w-100 order_status success badge badge-success'>
                                        " . Yii::$app->params['orderStatuses'][$data->status] . "
                                    </div>
                                    
                                ";
                                    break;

                                case 4:
                                    $result = "
                                  
                                    <div class='w-100 order_status success badge badge-primary'>
                                        " . Yii::$app->params['orderStatuses'][$data->status] . "
                                    </div>
                                    
                                ";
                                    break;

                                case 5:
                                    $result = "
                                  
                                    <div class='w-100 order_status danger badge badge-info'>
                                        " . Yii::$app->params['orderStatuses'][$data->status] . "
                                    </div>
                                    
                                ";
                                    break;

                                case 6:
                                    $result = "
                                  
                                    <div class='w-100 order_status danger badge badge-danger'>
                                        " . Yii::$app->params['orderStatuses'][$data->status] . "
                                    </div>
                                    
                                ";
                                    break;
                            }
                            return $result;
                        },
                        'format' => 'html'
                    ],
                    [
                        'attribute' => 'statusChanger',
                        'value' => function($data){
                            $result = "    
                        <div class='btn-group w-100'>  
                            <a href='" . Url::to(['/admin/order/change-status','id' => $data->id,'status'=>2]) . "' data-toggle='tooltip' data-placement='bottom' title='Подтверждение' class='btn btn-sm btn-warning'><i class='fas fa-check-circle'></i></a>
                            <a href='" . Url::to(['/admin/order/change-status','id' => $data->id,'status'=>3]) . "' data-toggle='tooltip' data-placement='bottom' title='Оплаченный' class='btn btn-sm btn-success'><i class='fas fa-credit-card'></i></a>
                            <a href='" . Url::to(['/admin/order/change-status','id' => $data->id,'status'=>4]) . "' data-toggle='tooltip' data-placement='bottom' title='В пути' class='btn btn-sm btn-primary'><i class='fab fa-telegram-plane'></i></a>
                            <a href='" . Url::to(['/admin/order/change-status','id' => $data->id,'status'=>5]) . "' data-toggle='tooltip' data-placement='bottom' title='Доставленный' class='btn btn-sm btn-info'><i class='fas fa-truck'></i> </a>
                            <a href='" . Url::to(['/admin/order/change-status','id' => $data->id,'status'=>6]) . "' data-toggle='tooltip' data-placement='bottom' title='Отмена' class='btn btn-sm btn-danger'><i class='fas fa-ban'></i> </a>
                        </div>
                    ";

                            if ($data->status <= 1){
                                return "
                            <div class='btn-group w-100'>  
                            <a href='" . Url::to(['/admin/order/change-status','id' => $data->id,'status'=>2]) . "' data-toggle='tooltip' data-placement='bottom' title='Подтверждение' class='btn btn-sm btn-warning'><i class='fas fa-check-circle'></i></a>
                            <a href='" . Url::to(['/admin/order/change-status','id' => $data->id,'status'=>3]) . "' data-toggle='tooltip' data-placement='bottom' title='Оплаченный' class='btn btn-sm btn-success'><i class='fas fa-credit-card'></i></a>
                            <a href='" . Url::to(['/admin/order/change-status','id' => $data->id,'status'=>4]) . "' data-toggle='tooltip' data-placement='bottom' title='В пути' class='btn btn-sm btn-primary'><i class='fab fa-telegram-plane'></i></a>
                            <a href='" . Url::to(['/admin/order/change-status','id' => $data->id,'status'=>5]) . "' data-toggle='tooltip' data-placement='bottom' title='Доставленный' class='btn btn-sm btn-info'><i class='fas fa-truck'></i> </a>
                            <a href='" . Url::to(['/admin/order/change-status','id' => $data->id,'status'=>6]) . "' data-toggle='tooltip' data-placement='bottom' title='Отмена' class='btn btn-sm btn-danger'><i class='fas fa-ban'></i> </a>
                        </div>
                        ";

                            }

                            if ($data->status <= 2){
                                return "
                            <div class='btn-group w-100'>
                            <a href='" . Url::to(['/admin/order/change-status','id' => $data->id,'status'=>3]) . "' data-toggle='tooltip' data-placement='bottom' title='Оплаченный' class='btn btn-sm btn-success'><i class='fas fa-credit-card'></i></a>
                            <a href='" . Url::to(['/admin/order/change-status','id' => $data->id,'status'=>4]) . "' data-toggle='tooltip' data-placement='bottom' title='В пути' class='btn btn-sm btn-primary'><i class='fab fa-telegram-plane'></i></a>
                            <a href='" . Url::to(['/admin/order/change-status','id' => $data->id,'status'=>5]) . "' data-toggle='tooltip' data-placement='bottom' title='Доставленный' class='btn btn-sm btn-info'><i class='fas fa-truck'></i> </a>
                            <a href='" . Url::to(['/admin/order/change-status','id' => $data->id,'status'=>6]) . "' data-toggle='tooltip' data-placement='bottom' title='Отмена' class='btn btn-sm btn-danger'><i class='fas fa-ban'></i> </a>
                            </div>
                        ";

                            }

                            if ($data->status <= 3){
                                return "
                            <div class='btn-group w-100'>
                                <a href='" . Url::to(['/admin/order/change-status','id' => $data->id,'status'=>4]) . "' data-toggle='tooltip' data-placement='bottom' title='В пути' class='btn btn-sm btn-primary'><i class='fab fa-telegram-plane'></i></a>
                            <a href='" . Url::to(['/admin/order/change-status','id' => $data->id,'status'=>5]) . "' data-toggle='tooltip' data-placement='bottom' title='Доставленный' class='btn btn-sm btn-info'><i class='fas fa-truck'></i> </a>
                            <a href='" . Url::to(['/admin/order/change-status','id' => $data->id,'status'=>6]) . "' data-toggle='tooltip' data-placement='bottom' title='Отмена' class='btn btn-sm btn-danger'><i class='fas fa-ban'></i> </a>
                            </div>
                        ";

                            }

                            if ($data->status <= 4){
                                return "
                            <div class='btn-group w-100'>
                                <a href='" . Url::to(['/admin/order/change-status','id' => $data->id,'status'=>5]) . "' data-toggle='tooltip' data-placement='bottom' title='Доставленный' class='btn btn-sm btn-info'><i class='fas fa-truck'></i> </a>
                            </div>
                        ";

                            }

                            return"
                        <div class='badge badge-danger status0'>
                            Заказ находится в пути, доставлен или отменен
                        </div>
                    ";

                        },
                        'format' => 'html'
                    ]
                ],
            ]); ?>

        </div>

    </div>
