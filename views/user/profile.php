<?php

use app\models\OrderItems;
use yii\helpers\Url;

?>
<!-- Start Page Title Area -->
<section class="page-title-area" style="margin-bottom: 70px">
    <div class="container">
        <div class="page-title-content">
            <h1>Профиль</h1>
            <ul>
                <li><a href="<?=\yii\helpers\Url::home()?>">Главная</a></li>
                <li>Профиль</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<section class="profile">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="profile_navigation">
                    <div class="user_login_info">
                        <div class="username text-capitalize"><?=$model->username;?></div>
                        <div class="logout"><a href="<?=\yii\helpers\Url::to(['user/logout'])?>">выйти</a></div>
                    </div>
                    <ul>
                        <li><a href="<?=\yii\helpers\Url::to(['user/profile'])?>" class="active">Заказы</a></li>
                        <li><a href="<?=\yii\helpers\Url::to(['user/settings'])?>">Настройки</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="user_orders">

                    <?php if (Yii::$app->session->hasFlash('confirm-success')):?>
                        <div class="alert alert-success">
                            <?=Yii::$app->session->getFlash('confirm-success')?>
                        </div>
                    <?php endif;?>

                    <?php if (Yii::$app->session->hasFlash('settings-success')):?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?=Yii::$app->session->getFlash('settings-success')?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    <?php endif;?>

                    <div class="section_title">Мои заказы</div>

                    <?php if (!empty($orders)): ?>

                    <div class="row">

                        <?php foreach ($orders as $order):?>

                            <div class="col-md-6">

                                <div class="order_item">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="order_date"><strong>№<?=$order->id?></strong> от <?=date('d.m.Y',strtotime($order->created_date))?></div>

                                            <?php switch ($order->status): ?>
<?php case 1;?>
                                                    <div class="order_status badge badge-secondary">
                                                        <?=Yii::$app->params['orderStatuses'][$order->status]?>
                                                    </div>
                                                    <?php break;?>

                                                <?php case 2;?>
                                                    <div class="order_status badge badge-warning">
                                                        <?=Yii::$app->params['orderStatuses'][$order->status]?>
                                                    </div>
                                                    <?php break;?>

                                                <?php case 3;?>
                                                    <div class="order_status badge badge-success">
                                                        <?=Yii::$app->params['orderStatuses'][$order->status]?>
                                                    </div>
                                                    <?php break;?>

                                                <?php case 4;?>
                                                    <div class="order_status badge badge-primary">
                                                        <?=Yii::$app->params['orderStatuses'][$order->status]?>
                                                    </div>
                                                    <?php break;?>

                                                <?php case 5;?>
                                                    <div class="order_status badge badge-info">
                                                        <?=Yii::$app->params['orderStatuses'][$order->status]?>
                                                    </div>
                                                    <?php break;?>

                                                <?php case 6;?>
                                                    <div class="order_status badge badge-danger">
                                                        <?=Yii::$app->params['orderStatuses'][$order->status]?>
                                                    </div>
                                                    <?php break;?>

                                                <?php endswitch; ?>

                                        </div>
                                        <div class="card-body">
                                            <div class="products">

                                                <?php $orderItems = OrderItems::find()->where(['order_id' => $order->id])->all()?>

                                                <?php foreach ($orderItems as $item): ?>

                                                        <?php

                                                        $product = \app\models\Product::findOne($item->product_id);
                                                        $image = \app\components\StaticFunctions::getImage('product',$product->id,$product->image);

                                                        ?>

                                                    <div class="product_item">
                                                        <div class="product_image">
                                                            <a href="<?=\yii\helpers\Url::to(['/product/view','id'=>$product->id])?>"><img src="<?=$image?>" alt=""></a>
                                                        </div>
                                                        <div class="product_info">
                                                            <div class="product_name">
                                                                <a href="<?=\yii\helpers\Url::to(['/product/view','id'=>$product->id])?>"><?=$product->title?></a>
                                                            </div>
                                                            <div class="product_price">
                                                                <div class="new_price"><?=number_format($product->price) ?> $</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <?php endforeach;?>

                                            </div>

                                            <hr>

                                            <div class="order_action">
                                                <div class="order_action_info">
                                                    <div class="info_item">
                                                        <span class="info_name">Доставка: </span>
                                                        <span class="info_value">транспортной компанией</span>
                                                    </div>
                                                    <div class="info_item">
                                                        <span class="info_name">Сумма заказа: </span>
                                                        <span class="info_value general_price"><?=number_format($order->total_product_price)?> $</span>
                                                    </div>
                                                </div>
                                                <div class="order_action_buttons">

                                                    <?php if ($order->status == 1): ?>

                                                        <a href="<?=Url::to(['/user/change-status','id' => $order->id,'status'=>6])?>" class="btn btn-sm btn-danger w-100 text-center"> Отмена </a>

                                                    <?php else:?>



                                                    <?php endif;?>

                                                    <?php if ($order->status == 2): ?>

                                                        <a href="<?=Url::to(['/user/change-status','id' => $order->id,'status'=>6])?>" class="btn btn-sm btn-danger w-100 text-center mb-2"> Отмена </a>

                                                        <a target="_blank" href="https://t.me/bobur_LLC" class="button button-blue w-100 text-center">Оплатить</a>

                                                    <?php else:?>



                                                    <?php endif;?>

                                                    <?php if ($order->status == 3): ?>

                                                        <a href="<?=Url::to(['/admin/order/change-status','id' => $order->id,'status'=>6])?>" class="btn btn-sm btn-danger"> Отмена </a>

                                                    <?php else:?>



                                                    <?php endif;?>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        <?php endforeach;?>

                    </div>

                    <?php else:?>

                        <div class="alert alert-warning">Вы еще не разместили заказ :(</div>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>