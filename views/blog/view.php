<!-- Start Page Title Area -->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Взгляд в блоге</h1>
            <ul>
                <li><a href="<?=\yii\helpers\Url::home()?>">Главная</a></li>
                <li><a href="<?=\yii\helpers\Url::to(['blog/by-cat','id' => $blogCategory->id])?>"><?=$blogCategory->title?></a></li>
                <li><?=$model->title?></li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Blog Details Area -->
<section class="blog-details-area ptb-70">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <div class="article-image">
                        <?php $image = \app\components\StaticFunctions::getImage('blog',$model->id,$model->image)?>
                        <img src="<?=$image?>" alt="image">
                    </div>

                    <div class="article-content">
                        <div class="entry-meta">
                            <ul>
                                <li>
                                    <i class='bx bx-folder-open'></i>
                                    <span>Категория</span>
                                    <a href="<?=\yii\helpers\Url::to(['blog/by-cat','id' => $blogCategory->id])?>"><?=$blogCategory->title?></a>
                                </li>
                                <li>
                                    <i class='bx bx-group'></i>
                                    <span>Количество просмотров</span>
                                    <?= number_format($model->seen_count);?>
                                </li>
                                <li>
                                    <i class='bx bx-calendar'></i>
                                    <span>Дата создания</span>
                                    <?=$model->created_date?>
                                </li>
                            </ul>
                        </div>

                        <br>

                        <?=html_entity_decode($model->top_body)?>

                        <blockquote class="wp-block-quote">
                            <p>

                                <?=$model->quote?>

                            </p>
                        </blockquote>

                        <p>

                            <?=html_entity_decode($model->main_body)?>

                        </p>

                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area">

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
                                        <span>June 10, 2021</span>
                                        <h4 class="title usmall"><a href="<?=\yii\helpers\Url::to(['blog/view','id' => $popularPost->id])?>">The Data Surrounding Higher Education</a></h4>
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
        </div>
    </div>
</section>
<!-- End Blog Details Area -->