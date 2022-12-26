<!-- Start Categories Area -->
<section class="categories-area pb-40">
    <div class="container">
        <div class="section-title">
            <h2>Категории</h2>
        </div>

        <div class="row">

            <?php if (!empty($models)): ?>

                <?php foreach ($models as $model):?>

                    <div class="col-lg-2 col-sm-4 col-md-4">
                        <div class="single-categories-box">
                            <?php $image = \app\components\StaticFunctions::getImage('product-category',$model->id,$model->image)?>
                            <img src="<?=$image?>" alt="image">
                            <h3><?=$model->name?></h3>
                            <a href="<?=\yii\helpers\Url::to(['product/by-cat','id' => $model->id])?>" class="link-btn"></a>
                        </div>
                    </div>

                <?php endforeach;?>

            <?php endif;?>

        </div>
    </div>
</section>
<!-- End Categories Area -->