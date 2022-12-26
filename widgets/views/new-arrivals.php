<!-- Start Products Area -->
<section class="products-area pb-40">
    <div class="container">
        <div class="section-title">
            <h2>Новые поступления</h2>
        </div>

        <?php if (!empty($models)):?>

            <div class="row">

                <?php foreach ($models as $model):?>

                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <?php $image = \app\components\StaticFunctions::getImage('product',$model->id,$model->image)?>
                                <a href="<?=\yii\helpers\Url::to(['product/view','id' => $model->id])?>" class="d-block">
                                    <?php if ($model->sale == 1): ?>

                                        <div class="sale">Sale</div>

                                    <?php else:?>



                                    <?php endif;?>

                                    <?php if ($model->new == 1): ?>

                                        <div class="new">New</div>

                                    <?php else:?>



                                    <?php endif;?>
                                    <img src="<?=$image?>" alt="image">
                                </a>

                                <div class="buttons-list">
                                    <ul>
                                        <li>
                                            <div class="cart-btn">
                                                <a href="#" data-id="<?=$model->id?>">
                                                    <i class='bx bxs-cart-add'></i>
                                                    <span class="tooltip-label">Добавить в корзину</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="#" data-id="<?=$model->id?>">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Добавить в список желаний</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="content">
                                <h3><a href="<?=\yii\helpers\Url::to(['product/view','id' => $model->id])?>"><?=$model->title?></a></h3>
                                <div class="price">
                                    <span class="new-price">$<?=number_format($model->price, 2, ',', ' ')?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach;?>

            </div>

        <?php endif;?>

    </div>
</section>
<!-- End Products Area -->