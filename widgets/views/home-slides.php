<!-- Start Home Slides Area -->
<section class="home-slides owl-carousel owl-theme">

    <?php if (!empty($models)): ?>

        <?php foreach ($models as $model):?>

            <div class="single-banner-item">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">

                                <div class="col-lg-5 col-md-12">
                                    <div class="banner-content">
                                        <span class="sub-title"><?=$model->subtitle?></span>
                                        <h1><?=$model->definition?> <span><?=$model->product_name?></span></h1>
                                        <p><?=$model->description?></p>
                                        <div class="btn-box">
                                            <div class="d-flex align-items-center">
                                                <a href="<?=\yii\helpers\Url::to(['product/index'])?>" class="default-btn"><i class="flaticon-trolley"></i> Купить сейчас</a>
                                                <span class="price">$<?=number_format($model->price, 2, ',', ' ')?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-12">
                                    <div class="banner-image text-center">
                                        <?php $image = \app\components\StaticFunctions::getImage('banner',$model->id,$model->image)?>
                                        <img src="<?=$image?>" class="main-image" alt="image">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach;?>

    <?php endif;?>

</section>
<!-- End Home Slides Area -->