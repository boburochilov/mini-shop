<?php

use app\models\CartModel;
use app\models\Product;
use yii\bootstrap4\ActiveForm;

?>
<!-- Start Page Title Area -->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Информация О Продукте</h1>
            <ul>
                <li><a href="<?=\yii\helpers\Url::home()?>">Home</a></li>
                <li><a href="<?=\yii\helpers\Url::to(['product/'])?>">Продукты</a></li>
                <li><a href="<?=\yii\helpers\Url::to(['product/by-cat','id' => $productCategory->id])?>"><?=$productCategory->name?></a></li>
                <li><?=$models->title?></li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Product Details Area -->
<section class="product-details-area pt-70 pb-40">
    <div class="container">
        <div class="row">

            <?php if (Yii::$app->session->hasFlash('review-success')):?>

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?=Yii::$app->session->getFlash('review-success')?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php endif;?>

            <div class="col-lg-5 col-md-12">
                <div class="products-details-image">

                    <?php if (!empty($productImages)): ?>

                        <ul class="products-details-image-slides owl-theme owl-carousel" data-slider-id="1">
                            <?php foreach ($productImages as $productImage): ?>
                                <?php $image = \app\components\StaticFunctions::getImage('product',$models->id,$productImage->image)?>
                                    <li><img src="<?=$image?>" alt="image"></li>
                            <?php endforeach;?>
                        </ul>

                    <?php endif;?>

                    <!-- Carousel Thumbs -->

                    <?php if (!empty($productImages)): ?>

                        <div class="owl-thumbs products-details-image-slides-owl-thumbs" data-slider-id="1">
                            <?php foreach ($productImages as $productImage): ?>
                                <?php $image = \app\components\StaticFunctions::getImage('product',$models->id,$productImage->image)?>
                                <div class="owl-thumb-item">
                                    <img src="<?=$image?>" alt="image">
                                </div>
                            <?php endforeach;?>
                        </div>

                    <?php endif;?>

                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="products-details-desc">
                    <h3><?=$models->title?></h3>

                    <div class="price">
                        <span class="new-price">$<?=number_format($models->price, 2, ',', ' ')?></span>
                        <span class="old-price">$<?=number_format($models->old_price, 2, ',', ' ')?></span>
                    </div>

                    <div class="products-review">
                        <a href="#reviews" class="rating-count"> Отзывы</a>
                        <?=\app\models\Reviews::getOneCount($models->id)?>
                    </div>

                    <ul class="products-info">
                        <li><span>Категория:</span> <a href="<?=\yii\helpers\Url::to(['product/by-cat','id' => $productCategory->id])?>"><?=$productCategory->name?></a></li>
                        <li><span>Доступность:</span>
                            <a href="#">
                                <?php if ($models->availability == 1): ?>

                                    В наличии

                                <?php else:?>

                                    Нет на складе

                                <?php endif;?>

                            </a>
                        </li>
                        <li><span>Бренд:</span> <a href="<?=\yii\helpers\Url::to(['product/by-brand','id' => $productBrand->id])?>"><?=$productBrand->title?></a></li>
                    </ul>

                    <div class="products-info-btn">
                    </div>

                    <div class="products-add-to-cart">
                        <button data-id="<?=$models->id?>" type="submit" class="default-btn"><i class="flaticon-trolley"></i> Добавить в корзину</button>
                    </div>

                    <div class="wishlist-btn">
                        <a href="#" data-id="<?=$models->id?>"><i class='bx bx-heart'></i> Добавить в список желаний</a>
                    </div>

                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="products-details-tabs">
                 <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description">Описание</a></li>
                        <li class="nav-item"><a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews">Отзывы (<?=\app\models\Reviews::getOneCount($models->id)?>)</a></li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                            <?=$models->body?>
                        </div>

                        <div class="tab-pane fade" id="reviews" role="tabpanel">

                            <div class="products-review-comments">
                                <h3><?=\app\models\Reviews::getOneCount($models->id)?> Reviews</h3>

                                <?php if (!empty($productReviews)):?>

                                <?php foreach ($productReviews as $productReview):?>

                                    <div class="user-review">

                                        <div class="review-rating">
                                            <span class="d-inline-block"><?=$productReview->name?></span>
                                        </div>
                                        <p><?=$productReview->body?></p>

                                    </div>

                                <?php endforeach;?>

                                <?php endif;?>

                            </div>

                            <div class="review-form-wrapper">
                                <h3>Добавить отзыв</h3>
                                <p class="comment-notes">Ваш электронный адрес не будет опубликован. Обязательные поля помечены <span>*</span></p>

                                <?php $form = ActiveForm::begin()?>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <?= $form->field($comment,'name')->textInput([
                                                    'placeholder' => 'Name *',
                                                    'class' => 'form-control',
                                                'value' => '',
                                                'required' => 'true'
                                            ])?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <?= $form->field($comment,'email')->textInput([
                                                'placeholder' => 'Email *',
                                                'class' => 'form-control',
                                                'required' => 'true',
                                                'value' => '',
                                                'type' => 'email'
                                            ])?>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <?= $form->field($comment,'body')->textarea([
                                                'placeholder' => 'Введите свой отзыв *',
                                                'class' => 'form-control',
                                                'value' => '',
                                                'required' => 'true',
                                                'rows' => 6,
                                            ])?>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn">Отправить</button>
                                    </div>
                                </div>

                                <?php ActiveForm::end()?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="related-products">
        <div class="container">

            <div class="section-title">
                <h2>Сопутствующие Товары</h2>
            </div>

            <?php if (!empty($relatedProducts)): ?>

                <div class="products-slides owl-carousel owl-theme">
                    <?php foreach ($relatedProducts as $relatedProduct): ?>
                        <div class="single-products-box">
                            <div class="image">
                                <?php $image = \app\components\StaticFunctions::getImage('product',$relatedProduct->id,$relatedProduct->image)?>
                                <a href="<?=\yii\helpers\Url::to(['product/view','id' => $relatedProduct->id])?>" class="d-block"><img src="<?=$image?>" alt="image"></a>

                                <?php if ($relatedProduct->sale == 1): ?>

                                    <div class="sale">Sale</div>

                                <?php else:?>



                                <?php endif;?>

                                <?php if ($relatedProduct->new == 1): ?>

                                    <div class="new">New</div>

                                <?php else:?>



                                <?php endif;?>

                                <div class="buttons-list">
                                    <ul>
                                        <li>
                                            <div class="cart-btn">
                                                <a href="#" data-id="<?=$relatedProduct->id?>">
                                                    <i class='bx bxs-cart-add'></i>
                                                    <span class="tooltip-label">Добавить в корзину</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="#" data-id="<?=$relatedProduct->id?>">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Добавить в список желаний</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="content">
                                <h3><a href="<?=\yii\helpers\Url::to(['product/view','id' => $relatedProduct->id])?>"><?=$relatedProduct->title?></a></h3>
                                <div class="price">
                                    <span class="new-price">$<?=number_format($relatedProduct->price, 2, ',', ' ')?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>

            <?php endif;?>

        </div>
    </div>
</section>
<!-- End Product Details Area -->