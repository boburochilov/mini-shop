<!-- Start Blog Area -->
<section class="blog-area pb-40">
    <div class="container">
        <div class="section-title">
            <h2>Наш блог</h2>
        </div>

        <?php if (!empty($models)): ?>

            <div class="row">

                <?php foreach ($models as $model):?>

                    <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <div class="post-image">
                            <?php $image = \app\components\StaticFunctions::getImage('blog',$model->id,$model->image)?>
                            <a href="<?=\yii\helpers\Url::to(['blog/view','id' => $model->id])?>" class="d-block"><img src="<?=$image?>" alt="image"></a>
                        </div>

                        <div class="post-content">
                            <h3><a href="<?=\yii\helpers\Url::to(['blog/view','id' => $model->id])?>"><?=$model->title?></a></h3>
                            <ul class="post-meta">
                                <li><?=$model->created_date?></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <?php endforeach;?>

            </div>

        <?php endif;?>
    </div>
</section>
<!-- End Blog Area -->