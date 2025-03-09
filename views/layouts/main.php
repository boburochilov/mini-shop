<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<?= \app\widgets\Header::widget() ?>

    <?= $content ?>

<?= \app\widgets\Facility::widget() ?>

<?= \app\widgets\Footer::widget() ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<!-- Start Shopping Cart Modal -->
<div class="modal right fade shoppingCartModal" id="shoppingCartModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i></span>
            </button>

            <div class="modal-body">
                <h3>My Cart (3)</h3>

                <div class="products-cart-content">
                    <div class="products-cart d-flex align-items-center">
                        <div class="products-image">
                            <a href="#"><img src="assets/img/products/products-img1.jpg" alt="image"></a>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">Coronavirus Face Mask</a></h3>
                            <div class="products-price">
                                <span>1</span>
                                <span>x</span>
                                <span class="price">$39.00</span>
                            </div>
                        </div>
                        <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                    </div>

                    <div class="products-cart d-flex align-items-center">
                        <div class="products-image">
                            <a href="#"><img src="assets/img/products/products-img2.jpg" alt="image"></a>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">Protective Gloves</a></h3>
                            <div class="products-price">
                                <span>1</span>
                                <span>x</span>
                                <span class="price">$99.00</span>
                            </div>
                        </div>
                        <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                    </div>

                    <div class="products-cart d-flex align-items-center">
                        <div class="products-image">
                            <a href="#"><img src="assets/img/products/products-img3.jpg" alt="image"></a>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">Infrared Thermometer Gun</a></h3>
                            <div class="products-price">
                                <span>1</span>
                                <span>x</span>
                                <span class="price">$90.00</span>
                            </div>
                        </div>
                        <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                    </div>
                </div>

                <div class="products-cart-subtotal">
                    <span>Subtotal</span>

                    <span class="subtotal">$228.00</span>
                </div>

                <div class="products-cart-btn">
                    <a href="#" class="default-btn">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Shopping Cart Modal -->

<!-- Start Shopping Cart Modal -->
<div class="modal right fade shoppingWishlistModal" id="shoppingWishlistModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i></span>
            </button>

            <div class="modal-body">
                <h3>My Wishlist (3)</h3>

                <div class="products-cart-content">
                    <div class="products-cart d-flex align-items-center">
                        <div class="products-image">
                            <a href="#"><img src="assets/img/products/products-img1.jpg" alt="image"></a>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">Coronavirus Face Mask</a></h3>
                            <div class="products-price">
                                <span>1</span>
                                <span>x</span>
                                <span class="price">$39.00</span>
                            </div>
                        </div>
                        <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                    </div>

                    <div class="products-cart d-flex align-items-center">
                        <div class="products-image">
                            <a href="#"><img src="assets/img/products/products-img2.jpg" alt="image"></a>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">Protective Gloves</a></h3>
                            <div class="products-price">
                                <span>1</span>
                                <span>x</span>
                                <span class="price">$99.00</span>
                            </div>
                        </div>
                        <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                    </div>

                    <div class="products-cart d-flex align-items-center">
                        <div class="products-image">
                            <a href="#"><img src="assets/img/products/products-img3.jpg" alt="image"></a>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">Infrared Thermometer Gun</a></h3>
                            <div class="products-price">
                                <span>1</span>
                                <span>x</span>
                                <span class="price">$90.00</span>
                            </div>
                        </div>
                        <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                    </div>
                </div>

                <div class="products-cart-subtotal">
                    <span>Subtotal</span>

                    <span class="subtotal">$228.00</span>
                </div>

                <div class="products-cart-btn">
                    <a href=#" class="default-btn">View Shopping Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Shopping Cart Modal -->

<!-- Start Products Filter Modal Area -->
<div class="modal left fade productsFilterModal" id="productsFilterModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i> Close</span>
            </button>

            <div class="modal-body">
                <div class="woocommerce-widget-area">
                    <div class="woocommerce-widget price-list-widget">
                        <h3 class="woocommerce-widget-title">Filter By Price</h3>

                        <div class="collection-filter-by-price">
                            <input class="js-range-of-price" type="text" data-min="0" data-max="1055" name="filter_by_price" data-step="10">
                        </div>
                    </div>

                    <div class="woocommerce-widget color-list-widget">
                        <h3 class="woocommerce-widget-title">Color</h3>

                        <ul class="color-list-row">
                            <li class="active"><a href="#" title="Black" class="color-black"></a></li>
                            <li><a href="#" title="Red" class="color-red"></a></li>
                            <li><a href="#" title="Yellow" class="color-yellow"></a></li>
                            <li><a href="#" title="White" class="color-white"></a></li>
                            <li><a href="#" title="Blue" class="color-blue"></a></li>
                            <li><a href="#" title="Green" class="color-green"></a></li>
                            <li><a href="#" title="Yellow Green" class="color-yellowgreen"></a></li>
                            <li><a href="#" title="Pink" class="color-pink"></a></li>
                            <li><a href="#" title="Violet" class="color-violet"></a></li>
                            <li><a href="#" title="Blue Violet" class="color-blueviolet"></a></li>
                            <li><a href="#" title="Lime" class="color-lime"></a></li>
                            <li><a href="#" title="Plum" class="color-plum"></a></li>
                            <li><a href="#" title="Teal" class="color-teal"></a></li>
                        </ul>
                    </div>

                    <div class="woocommerce-widget brands-list-widget">
                        <h3 class="woocommerce-widget-title">Brands</h3>

                        <ul class="brands-list-row">
                            <li><a href="#">Gucci</a></li>
                            <li><a href="#">Virgil Abloh</a></li>
                            <li><a href="#">Balenciaga</a></li>
                            <li class="active"><a href="#">Moncler</a></li>
                            <li><a href="#">Fendi</a></li>
                            <li><a href="#">Versace</a></li>
                        </ul>
                    </div>

                    <div class="woocommerce-widget woocommerce-ads-widget">
                        <img src="assets/img/ads.jpg" alt="image">

                        <div class="content">
                            <span>New Arrivals</span>
                            <h3>Modern Electronic Thermometer</h3>
                            <a href="#" class="default-btn"><i class="flaticon-trolley"></i> Shop Now</a>
                        </div>

                        <a href="#" class="link-btn"></a>
                    </div>

                    <div class="woocommerce-widget best-seller-widget">
                        <h3 class="woocommerce-widget-title">Best Seller</h3>

                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg1" role="img"></span>
                            </a>
                            <div class="info">
                                <h4 class="title usmall"><a href="#">Thermometer Gun</a></h4>
                                <span>$99.00</span>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </article>

                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg2" role="img"></span>
                            </a>
                            <div class="info">
                                <h4 class="title usmall"><a href="#">Protective Gloves</a></h4>
                                <span>$65.00</span>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </article>

                        <article class="item">
                            <a href="#" class="thumb">
                                <span class="fullimage cover bg3" role="img"></span>
                            </a>
                            <div class="info">
                                <h4 class="title usmall"><a href="#">Cosmetic Container</a></h4>
                                <span>$139.00</span>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Products Filter Modal Area -->

<div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>
