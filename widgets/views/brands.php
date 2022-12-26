<!-- Start Brands Area -->
<section class="brands-area pt-70 pb-40">
    <div class="container">
        <div class="section-title">
            <h2>Продажа брендов</h2>
        </div>

        <?php if (!empty($models)): ?>

            <div class="row align-items-center">
                <?php foreach ($models as $model):?>
                    <div class="col-lg-2 col-sm-4 col-md-2 col-6">
                        <div class="single-brands-item">
                            <?php $image = \app\components\StaticFunctions::getImage('selling-brands',$model->id,$model->image)?>
                            <a href="<?=\yii\helpers\Url::to(['product/by-brand','id' => $model->id])?>" class="d-block"><img src="<?=$image?>" alt="image"></a>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>

        <?php endif;?>

    </div>
</section>
<!-- End Brands Area -->