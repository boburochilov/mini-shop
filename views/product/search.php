<?php

use app\models\Product;
use app\models\ProductColor;
use yii\bootstrap4\LinkPager;

?>
<!-- Start Page Title Area -->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1><?=$_GET['search']?> - Продукты </span></h1>
            <ul>
                <li><a href="<?=\yii\helpers\Url::home()?>">Главная</a></li>
                <li><a href="<?=\yii\helpers\Url::to(['product/'])?>">Продукты</a></li>
                <li><h1><?=$_GET['search']?> - Продукты </span></h1></li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Products Area -->
<section class="products-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="woocommerce-widget-area">

                    <div class="woocommerce-widget price-list-widget">
                        <h3 class="woocommerce-widget-title">Фильтровать по цене</h3>

                        <form action="<?=\yii\helpers\Url::to(['product/filter'])?>" method="GET" class="filter_form">

                            <div class="row">

                                <div class="col-md-6">

                                    <label for="min">
                                        Min
                                        <input min="0" value="<?=$min?>" name="min" id="min" type="number" class="form-control">

                                    </label>


                                </div>

                                <div class="col-md-6">

                                    <label for="max">
                                        Max
                                        <input min="0" value="<?=$max?>" name="max" id="max" type="number" class="form-control">

                                    </label>

                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary w-100">Сохранять</button>

                        </form>

                    </div>

                    <div class="woocommerce-widget color-list-widget">
                        <h3 class="woocommerce-widget-title">Цвета</h3>
                        <?php if (!empty($allProductColors)):?>
                            <ul class="color-list-row">
                                <?php foreach ($allProductColors as $allProductColor):?>
                                    <li><a style="background-color: <?=$allProductColor->title?>;" href="<?=\yii\helpers\Url::to(['product/by-color', 'id' => $allProductColor->id])?>"></a></li>
                                <?php endforeach;?>

                            </ul>
                        <?php endif;?>
                    </div>

                    <div class="woocommerce-widget brands-list-widget">
                        <h3 class="woocommerce-widget-title">Категории</h3>
                        <?php if (!empty($allProductCategories)):?>
                            <ul class="brands-list-row">
                                <?php foreach ($allProductCategories as $allProductCategory):?>
                                    <li><a href="<?=\yii\helpers\Url::to(['product/by-cat', 'id' => $allProductCategory->id])?>"><?=$allProductCategory->name?></a></li>
                                <?php endforeach;?>

                            </ul>
                        <?php endif;?>
                    </div>

                    <div class="woocommerce-widget brands-list-widget">
                        <h3 class="woocommerce-widget-title">Бренды</h3>
                        <?php if (!empty($allProductBrands)):?>
                            <ul class="brands-list-row">
                                <?php foreach ($allProductBrands as $productBrand):?>
                                    <li><a href="<?=\yii\helpers\Url::to(['product/by-brand', 'id' => $productBrand->id])?>"><?=$productBrand->title?></a></li>
                                <?php endforeach;?>

                            </ul>
                        <?php endif;?>
                    </div>

                    <div class="woocommerce-widget best-seller-widget">
                        <h3 class="woocommerce-widget-title">Лучший продавец</h3>

                        <?php if (!empty($bestSellers)):?>
                            <?php foreach ($bestSellers as $bestSeller):?>

                                <article class="item">
                                    <a href="<?=\yii\helpers\Url::to(['product/view','id' => $bestSeller->id])?>" class="thumb">
                                        <?php $image = \app\components\StaticFunctions::getImage('product',$bestSeller->id,$bestSeller->image)?>
                                        <span style="background-image: url(<?=$image?>);" class="fullimage cover bg1" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title usmall"><a href="<?=\yii\helpers\Url::to(['product/view','id' => $bestSeller->id])?>"><?=$bestSeller->title?></a></h4>
                                        <span>$<?=number_format($bestSeller->price, 2, ',', ' ')?></span>
                                    </div>
                                    <div class="clear"></div>
                                </article>

                            <?php endforeach;?>
                        <?php endif;?>

                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-12">

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

                <?php else:?>

                    <div class="no_photo text-center">
                        <h1 class="text">

                            <a>Согласно с <span style="color: #2A96FF"><?=$_GET['search']?> </span> </a> Ничего не найдено :(

                        </h1>
                        <h4 style="color: #2a96ff">Скоро будут новые товары :)</h4>
                        <img style="text-align: center;" src="/assets/img/no_product.png" alt="img">

                    </div>

                <?php endif;?>

            </div>
        </div>
    </div>
</section>
<!-- End Products Area -->