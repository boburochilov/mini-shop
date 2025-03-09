<!-- Start Banner Categories Area -->
<section class="banner-categories-area pt-70 pb-40">
    <div class="container">
        <div class="row">

            <?php if (!empty($models)): ?>

                <?php foreach ($models as $model):?>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-banner-categories-box">
                            <?php $image = \app\components\StaticFunctions::getImage('banner-categories',$model->id,$model->image)?>
                            <img src="<?=$image?>" alt="image">

                            <div class="content">
                                <span class="sub-title"><?=$model->title?></span>
                                <h3><a href="<?=\yii\helpers\Url::to(['product/index'])?>"><?=$model->sub_title?></a></h3>
                                <div class="btn-box">
                                    <div class="d-flex align-items-center">
                                        <a href="<?=\yii\helpers\Url::to(['product/index'])?>" class="default-btn"><i class="flaticon-trolley"></i> Купить сейчас</a>
                                        <span class="price">$<?=number_format($model->price, 2, ',', ' ')?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach;?>

            <?php endif;?>

        </div>
    </div>
</section>
<!-- End Banner Categories Area -->