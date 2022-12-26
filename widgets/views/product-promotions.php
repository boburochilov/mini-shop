<!-- Start Products Promotions Area -->
<section class="products-promotions-area pb-40">
    <div class="container">
        <div class="row">

            <?php if (!empty($megaSales)): ?>

                <?php foreach ($megaSales as $megaSale):?>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-products-promotions-box">
                            <?php $image = \app\components\StaticFunctions::getImage('mega-sale',$megaSale->id,$megaSale->image)?>
                            <img class="w-100" src="<?=$image?>" alt="image">

                            <div class="content">
                                <span class="sub-title"><?=$megaSale->sub_title?></span>
                                <h3><?=$megaSale->title?></h3>
                                <span class="discount"><span>up to</span> <?=$megaSale->sale?>% OFF</span>
                                <a href="<?=\yii\helpers\Url::to(['product/sales'])?>" class="link-btn">Купить сейчас <i class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>

                <?php endforeach;?>

            <?php endif;?>

            <?php if (!empty($newArrivals)): ?>

                <?php foreach ($newArrivals as $newArrival):?>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-products-promotions-box">
                            <?php $image = \app\components\StaticFunctions::getImage('new-arrivals',$newArrival->id,$newArrival->image)?>
                            <img class="w-100" src="<?=$image?>" alt="image">

                            <div class="content">
                                <span class="sub-title"><?=$newArrival->sub_title?></span>
                                <h3><?=$newArrival->title?></h3>
                                <span class="discount"><span>up to</span> $<?=number_format($newArrival->sale, 2, ',', ' ')?></span>
                                <a href="<?=\yii\helpers\Url::to(['product/new-arrivals'])?>" class="link-btn">Купить сейчас <i class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>

                <?php endforeach;?>

            <?php endif;?>

        </div>
    </div>
</section>
<!-- End Products Promotions Area -->