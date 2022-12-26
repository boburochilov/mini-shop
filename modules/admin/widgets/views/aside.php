<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="/admin-assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <?php $image = \app\components\StaticFunctions::getImage('user',$user->id,$user->avatar);?>
                <img src="<?=$image?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">

                <a href="#" class="text-uppercase d-block">


                    <?php if ($user->status == 99): ?>

                        <?= $user->username?> <i title="Вы администратор сайта" class="fas fa-star"></i>

                    <?php else:?>

                        <?= $user->username?>

                    <?php endif;?>

                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php if ($user->status == 99): ?>

                    <li class="nav-header">EXAMPLES</li>

                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/admin/haeder'])?>" class="nav-link">
                            <i class="fas fa-book-reader pr-2"></i>
                            <p>
                                Заголовок
                            </p>
                        </a>
                    </li>

                    <span style="width: 100%; color: #fff; border-top: 1px solid #fff"></span>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-window-restore pr-2"></i>
                            <p>
                                Баннеры
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item pl-2">
                                <a href="<?=\yii\helpers\Url::to(['/admin/banner'])?>" class="nav-link">
                                    <i class="fas fa-home pr-2"></i>
                                    <p>
                                        Слайдер Баннеры
                                        <span class="badge badge-info right"><?=\app\models\Banner::getCount()?></span>
                                    </p>
                                </a>
                            </li>

                            <span style="width: 100%; color: #fff; border-top: 1px solid #fff"></span>

                            <li class="nav-item pl-2">
                                <a href="<?=\yii\helpers\Url::to(['/admin/banner-categories'])?>" class="nav-link">
                                    <i class="fas fa-bars pr-2"></i>
                                    <p>
                                        Категории баннеров
                                        <span class="badge badge-info right"><?=\app\models\BannerCategories::getCount()?></span>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item pl-2">

                                <a href="<?=\yii\helpers\Url::to(['/admin/mega-sale'])?>" class="nav-link">
                                    <i class="fas fa-percentage pr-2"></i>
                                    <p>
                                        Мега Скидка
                                        <span class="badge badge-info right"><?=\app\models\MegaSale::getCount()?></span>
                                    </p>
                                </a>

                            </li>

                            <li class="nav-item pl-2">

                                <a href="<?=\yii\helpers\Url::to(['/admin/new-arrivals'])?>" class="nav-link">
                                    <i class="fas fa-truck pr-2"></i>
                                    <p>
                                        Новые поступления
                                        <span class="badge badge-info right"><?=\app\models\NewArrivals::getCount()?></span>
                                    </p>
                                </a>

                            </li>

                            <li class="nav-item pl-2">

                                <a href="<?=\yii\helpers\Url::to(['/admin/hot-collection'])?>" class="nav-link">
                                    <i class="fas fa-mug-hot pr-2"></i>
                                    <p>
                                        Горячая коллекция
                                        <span class="badge badge-info right"><?=\app\models\HotCollection::getCount()?></span>
                                    </p>
                                </a>

                            </li>

                        </ul>
                    </li>

                    <span style="width: 100%; color: #fff; border-top: 1px solid #fff"></span>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fab fa-product-hunt pr-2"></i>
                            <p>
                                Товары
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item pl-2">
                                <a href="<?=\yii\helpers\Url::to(['/admin/product'])?>" class="nav-link">
                                    <i class="fas fa-shopping-basket pr-2"></i>
                                    <p>
                                        Товары
                                        <span class="badge badge-info right"><?=\app\models\Product::getCount()?></span>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item pl-2">
                                <a href="<?=\yii\helpers\Url::to(['/admin/product-category'])?>" class="nav-link">
                                    <i class="fas fa-bars pr-2"></i>
                                    <p>
                                        Категории Товаров
                                        <span class="badge badge-info right"><?=\app\models\ProductCategory::getCount()?></span>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item pl-2">
                                <a href="<?=\yii\helpers\Url::to(['/admin/order'])?>" class="nav-link">
                                    <i class="fas fa-cart-plus pr-2"></i>
                                    <p>
                                        Заказы
                                        <span class="badge badge-info right"><?=\app\models\Order::getCount()?></span>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item pl-2">
                                <a href="<?=\yii\helpers\Url::to(['/admin/product-color'])?>" class="nav-link">
                                    <img style="width: 20px; height: 20px; object-fit: contain;" src="https://i.ibb.co/C9WNWSB/color-wheel-removebg-preview-1.png" alt="img">
                                    <p>
                                        Цвета продукта
                                        <span class="badge badge-info right"><?=\app\models\ProductColor::getCount()?></span>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item pl-2">
                                <a href="<?=\yii\helpers\Url::to(['/admin/reviews'])?>" class="nav-link">
                                    <i class="fas fa-comments pr-2"></i>
                                    <p>
                                        Отзывы
                                        <span class="badge badge-info right"><?=\app\models\Reviews::getCount()?></span>
                                    </p>
                                </a>
                            </li>

                            <span style="width: 100%; color: #fff; border-top: 1px solid #fff"></span>

                        </ul>
                    </li>

                    <span style="width: 100%; color: #fff; border-top: 1px solid #fff"></span>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-flag pr-2"></i>
                            <p>
                                Простой раздел
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item pl-2">
                                <a href="<?=\yii\helpers\Url::to(['/admin/selling-brands'])?>" class="nav-link">
                                    <i class="fab fa-shopify pr-2"></i>
                                    <p>
                                        Продажа брендов
                                        <span class="badge badge-info right"><?=\app\models\SellingBrands::getCount()?></span>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item pl-2">
                                <a href="<?=\yii\helpers\Url::to(['/admin/facility'])?>" class="nav-link">
                                    <i class="fas fa-grin-stars pr-2"></i>
                                    <p>
                                        Средство
                                        <span class="badge badge-info right"><?=\app\models\Facility::getCount()?></span>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item pl-2">
                                <a href="<?=\yii\helpers\Url::to(['/admin/social'])?>" class="nav-link">
                                    <i class="fas fa-share-alt pr-2"></i>
                                    <p>
                                        Социальное
                                        <span class="badge badge-info right"><?=\app\models\Social::getCount()?></span>
                                    </p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <span style="width: 100%; color: #fff; border-top: 1px solid #fff"></span>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-newspaper pr-2"></i>
                            <p>
                                Новости
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item pl-2">
                                <a href="<?=\yii\helpers\Url::to(['/admin/blog'])?>" class="nav-link">
                                    <i class="fas fa-blog pr-2"></i>
                                    <p>
                                        Блог
                                        <span class="badge badge-info right"><?=\app\models\Blog::getCount()?></span>
                                    </p>
                                </a>
                            </li>

                            <span style="width: 100%; color: #fff; border-top: 1px solid #fff"></span>

                            <li class="nav-item pl-2">
                                <a href="<?=\yii\helpers\Url::to(['/admin/blog-categories'])?>" class="nav-link">
                                    <i class="fas fa-bars pr-2"></i>
                                    <p>
                                        Категории блога
                                        <span class="badge badge-info right"><?=\app\models\BlogCategories::getCount()?></span>
                                    </p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/admin/user'])?>" class="nav-link">
                            <i class="fas fa-users pr-2"></i>
                            <p>
                                Пользователи
                                <span class="badge badge-info right"><?=\app\models\User::getCount()?></span>
                            </p>
                        </a>
                    </li>

                <?php else:?>

                <div class="alert alert-danger text-center">

                    <i style="font-size: 50px" class="fas fa-exclamation-triangle"></i> <br>

                    Вы обычный <br>
                    пользователь.<br>
                    Вы не можете <br>
                    управлять сайтом

                </div>

                <?php endif;?>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>