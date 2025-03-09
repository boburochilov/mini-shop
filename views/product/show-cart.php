<?php

use app\components\StaticFunctions;
use yii\helpers\Html;

//debug($_SESSION['cart']['product']);

if (!empty($_SESSION['cart']['product'])): ?>

    <?php $cart = $_SESSION['cart'] ;?>
    <!-- Start Shopping Cart Modal -->
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i></span>
            </button>

            <div class="modal-body">
                <h3>Моя Корзина  (<?=$cart['total_qty']?>)</h3>

                <div class="products-cart-content">

                    <?php foreach ($cart['product'] as $key => $product):?>

                        <div class="products-cart d-flex align-items-center cart_content">
                            <div class="products-image">
                                <?php $image = \app\components\StaticFunctions::getImage('product',$key,$product['image']);?>
                                <a href="<?=\yii\helpers\Url::to(['product/view','id' => $key])?>"><img src="<?=$image?>" alt="image"></a>
                            </div>

                            <div class="products-content">
                                <h3><a href="<?=\yii\helpers\Url::to(['product/view','id' => $key])?>"><?=$product['title']?></a></h3>
                                <div class="products-price">
                                    <span><?=$product['qty']?></span>
                                    <span>x</span>
                                    <span class="price">$<?=number_format($product['price'], 2, ',', ' ')?></span>
                                </div>
                            </div>
                            <a href="#" data-productId="<?=$key?>" class="remove-btn"><i class='bx bx-trash'></i></a>
                        </div>

                    <?php endforeach;?>

                </div>

                <div class="products-cart-subtotal">
                    <span>Промежуточный итог</span>

                    <span class="subtotal">$<?=number_format($cart['total_price'], 2, ',', ' ')?></span>
                </div>

                <div class="products-cart-btn">
                    <a href="<?=\yii\helpers\Url::to(['cart/checkout'])?>" class="default-btn">Перейти к оформлению заказа</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shopping Cart Modal --
    >
<?php else: ?>

    <div class="modal-content">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class='bx bx-x'></i></span>
        </button>

        <br>
        <br>

        <div class="modal-body">

            <div class="row">

                <div class="col-md-12">

                    <div class="empty_cart">

                        <img src="/assets/img/cart.png" alt="img">
                        <h3 class="text-primary text-bold text-center">Ваша корзина пуста! :(</h3>
                        <a href="<?=\yii\helpers\Url::to(['/product'])?>" class="btn btn-primary w-100"><i class='bx bx-shopping-bag'></i> На страницу продуктов</a>

                    </div>

                </div>

            </div>

        </div>
    </div>

<?php endif;?>

