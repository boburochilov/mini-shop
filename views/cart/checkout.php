<!-- Start Page Title Area -->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Проверить</h1>
            <ul>
                <li><a href="<?=\yii\helpers\Url::home()?>">Главная</a></li>
                <li>Проверить</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Checkout Area -->
<section class="checkout-area">
    <div class="container">

        <form>
            <div class="row">

                <?php if (!empty($_SESSION['cart']['product'])):?>
                <?php $cart = $_SESSION['cart']['product']?>

                    <div class="col-lg-7 col-md-12">
                        <!-- Start Cart Area -->
                        <section class="cart-area">
                            <div class="container">
                                <form>
                                    <div class="cart-table table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th scope="col">Товар</th>
                                                <th scope="col">Имя</th>
                                                <th scope="col">Цена</th>
                                                <th scope="col">Количество</th>
                                            </tr>
                                            </thead>

                                            <tbody>

                                                <?php foreach ($cart as $key => $product):?>

                                                    <tr>
                                                        <td class="product-thumbnail">
                                                            <a href="<?=\yii\helpers\Url::to(['product/view','id' => $key])?>">
                                                                <?php $image = \app\components\StaticFunctions::getImage('product',$key,$product['image']);?>
                                                                <img src="<?=$image?>" alt="item">
                                                            </a>
                                                        </td>

                                                        <td class="product-name">
                                                            <a style="max-width: 200px; overflow: hidden;" href="<?=\yii\helpers\Url::to(['product/view','id' => $key])?>"><?=$product['title']?></a>
                                                        </td>

                                                        <td class="product-price">
                                                            <span class="unit-amount">$<?=number_format($product['price'], 2, ',', ' ')?></span>
                                                        </td>

                                                        <td class="product-quantity">
                                                            <div class="input-counter">
                                                                <a href="<?=\yii\helpers\Url::to(['product/re-calc','id' => $key,'count' => -1])?>" class="minus-btn"><i class='bx bx-minus'></i></a>
                                                                <input readonly type="text" min="1" value="<?=$product['qty']?>">
                                                                <a href="<?=\yii\helpers\Url::to(['product/re-calc','id' => $key,'count' => 1])?>" class="plus-btn"><i class='bx bx-plus'></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                <?php endforeach;?>

                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col-md-12 cart-totals mt-4" style="font-size: 20px;font-weight: bold;">

                                        Промежуточный итог: <span style="font-weight: 400">$<?=number_format($_SESSION['cart']['total_price'], 2, ',', ' ')?></span>

                                    </div>
                                </form>
                            </div>
                        </section>
                        <!-- End Cart Area -->
                    </div>

                    <div class="card col-lg-5 col-md-12">
                        <div class="card-body billing-details">
                            <h3 class="title">Платежные реквизиты</h3>

                            <div class="row">

                                <?php $form = \yii\bootstrap4\ActiveForm::begin()?>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">

                                            <?= $form->field($models,'full_name')->textInput([
                                                'required' => (!empty($user)) ? true : false,
                                                'value' => (!empty($user)) ? $user->full_name : '',
                                            ])?>
                                            
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">

                                            <?= $form->field($models,'address')->textInput([
                                                'required' => (!empty($user)) ? true : false,
                                                'value' => (!empty($user)) ? $user->address : '',
                                            ])?>

                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <?=$form->field($models,'city')?>
                                        </div>
                                    </div>



                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <?= $form->field($models,'email')->textInput([
                                                'required' => (!empty($user)) ? true : false,
                                                'value' => (!empty($user)) ? $user->email : '',
                                            ])?>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <?=$form->field($models,'phone')->input('tel')?>
                                            </div>
                                        </div>

                                    <div class="col-lg-12">

                                    <div class="form-group">

                                        <button class="w-100 default-btn"><i style="left: 100px" class="flaticon-trolley"></i> Разместить заказ</button>

                                    </div>

                                </div>

                                <?php \yii\bootstrap4\ActiveForm::end();?>

                            </div>
                        </div>
                    </div>

                <?php else:?>

                    <div class="modal-content" style="border: none">

                        <div class="modal-body">

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="empty_cart">

                                        <img class="d-flex" style="margin: 0 auto" src="/assets/img/cart.png" alt="img">
                                        <h3 class="text-primary text-bold text-center">Ваша корзина пуста! :(</h3>
                                        <a href="<?=\yii\helpers\Url::to(['/product'])?>" class="btn btn-primary"><i class='bx bx-shopping-bag'></i> На страницу продуктов</a>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                <?php endif;?>

            </div>
        </form>
    </div>
</section>
<!-- End Checkout Area -->