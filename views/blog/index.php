<?php

use yii\bootstrap4\LinkPager;

?>
<!-- Start Page Title Area -->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Все блоги</h1>
            <ul>
                <li><a href="<?=\yii\helpers\Url::home()?>">Главная</a></li>
                <li>Все блоги</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Blog Area -->
<section class="blog-area ptb-70">

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <aside class="widget-area widget-left-sidebar">

                    <section class="widget widget_drodo_posts_thumb">
                        <h3 class="widget-title">Популярные Посты</h3>

                        <?php if (!empty($popularPosts)): ?>

                            <?php foreach ($popularPosts as $popularPost): ?>

                                <article class="item">
                                    <a href="<?=\yii\helpers\Url::to(['blog/view','id' => $popularPost->id])?>" class="thumb">
                                        <?php $image = \app\components\StaticFunctions::getImage('blog',$popularPost->id,$popularPost->image)?>
                                        <span style="background-image: url(<?=$image?>);" class="fullimage cover bg1" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <span><?=$popularPost->created_date?></span>
                                        <h4 class="title usmall"><a href="<?=\yii\helpers\Url::to(['blog/view','id' => $popularPost->id])?>"><?=$popularPost->title?></a></h4>
                                    </div>

                                    <div class="clear"></div>
                                </article>

                            <?php endforeach;?>

                        <?php endif;?>

                    </section>

                    <section class="widget widget_categories">
                        <h3 class="widget-title">Категории</h3>

                        <?php if (!empty($blogCategories)): ?>

                            <ul>

                                <?php foreach ($blogCategories as $category):?>

                                    <li><a href="<?=\yii\helpers\Url::to(['blog/by-cat','id' => $category->id])?>"><?=$category->title?> <span class="post-count">(<?=\app\models\Blog::getOneCount($category->id)?>)</span></a></li>

                                <?php endforeach;?>

                            </ul>

                        <?php endif;?>
                    </section>

                </aside>
            </div>

            <div class="col-lg-8 col-md-12">

                <?php if (!empty($models)): ?>

                    <div class="row">

                        <?php foreach ($models as $model):?>

                            <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <div class="post-image">
                                    <?php $image = \app\components\StaticFunctions::getImage('blog',$model->id,$model->image)?>
                                    <a href="<?=\yii\helpers\Url::to(['blog/view','id' => $model->id])?>" class="d-block"><img src="<?=$image?>" alt="image"></a>
                                </div>

                                <div class="post-content">
                                    <h3><a href="<?=\yii\helpers\Url::to(['blog/view','id' => $model->id])?>"><?=$model->title?></a></h3>
                                    <ul class="post-meta align-items-center d-flex">
                                        <li><?=$model->created_date?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <?php endforeach;?>


                        <div class="col-lg-12 col-md-12">
                            <div class="pagination-area text-center">

                                <?php

                                echo LinkPager::widget([
                                    'pagination' => $pages,
                                ]);
                                ?>

                            </div>
                        </div>
                    </div>

                <?php endif;?>

            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->