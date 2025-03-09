<!-- Start Footer Area -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <a href="<?=\yii\helpers\Url::home()?>" class="logo d-inline-block"><img src="/assets/img/logo.png" alt="image"></a>
                    <ul class="footer-contact-info">
                        <li><span>Горячая линия:</span> <a href="#">16768</a></li>
                        <li><span>Телефон:</span> <a href="tel:+1234567898">(+123) 456-7898</a></li>
                        <li><span>Эл. адрес:</span> <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#80e8e5ececefc0e4f2efe4efaee3efed"><span class="__cf_email__" data-cfemail="523a373e3e3d1236203d363d7c313d3f">[email&#160;protected]</span></a></li>
                        <li><span>Адрес:</span> <a href="#" target="_blank">6890 Blvd, The Bronx, NY 1058, USA</a></li>
                    </ul>
                    <?php if (!empty($social)):?>
                        <ul class="social">

                            <?php foreach ($social as $item):?>


                            <li><a href="<?=$item->link?>" target="_blank"><i class='<?=$item->icon_class?>'></i></a></li>

                            <?php endforeach;?>

                        </ul>
                    <?php endif;?>

                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <h3>Информация</h3>

                    <ul class="link-list">
                        <li><a href="about.html">О нас</a></li>
                        <li><a href="contact.html">Свяжитесь с нами</a></li>
                        <li><a href="privacy-policy.html">Политика конфиденциальности</a></li>
                        <li><a href="terms-of-service.html">Условия</a></li>
                        <li><a href="customer-service.html">информация о доставке</a></li>
                        <li><a href="customer-service.html">Заказы и возвраты</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <h3>Обслуживание клиентов</h3>

                    <ul class="link-list">

                        <?php if (!empty($models)):?>
                            <?php foreach ($models as $model): ?>

                                <li>
                                    <a href="<?=$model->link?>"><?=$model->title?> </a>
                                </li>

                            <?php endforeach;?>
                        <?php endif;?>

                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <p>Copyright @ 2021 Дродо. Разработано <a href="https://t.me/httpBobur" target="_blank">Bobur Ochilov</a></p>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="payment-types">
                        <ul class="d-flex align-items-center justify-content-end">
                            <li>Мы принимаем оплату через:</li>
                            <li><a href="#" target="_blank"><img src="/assets/img/payment-types/visa.png" alt="image"></a></li>
                            <li><a href="#" target="_blank"><img src="/assets/img/payment-types/mastercard.png" alt="image"></a></li>
                            <li><a href="#" target="_blank"><img src="/assets/img/payment-types/paypal.png" alt="image"></a></li>
                            <li><a href="#" target="_blank"><img src="/assets/img/payment-types/descpver.png" alt="image"></a></li>
                            <li><a href="#" target="_blank"><img src="/assets/img/payment-types/american-express.png" alt="image"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->
