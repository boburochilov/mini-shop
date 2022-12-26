<?php

use yii\bootstrap4\LinkPager;



?>

<style>

    .knowledges_item:hover{
        border-color: #2A95FF;
        background-color: #c6dbf5;
    }
    .knowledges_item{
        transition: .2s all ease;
        border: 1px solid #c6dbf5;
        text-align: center;
        display: inline-block;
        height: 100%;
        width: 100%;
        padding: 10px;
        border-radius: 10px;
    }
    .knowledges_img img{
        width: 100%;
        object-fit: cover;
        text-align: center;
    }
    .social a img{
        width: 50px;
    }

</style>

<!-- Start Page Title Area -->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>О сайте</h1>
            <ul>
                <li><a href="<?=\yii\helpers\Url::home()?>">Главная</a></li>
                <li>О сайте</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Blog Area -->
<section class="blog-area ptb-70">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">

                            O'zbekcha
                            <img style="width: 50px; padding-left: 10px" src="/assets/img/uzbekistan.png" alt="">

                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link d-flex align-items-center" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            Русский
                            <img style="width: 50px; padding-left: 10px" src="/assets/img/russia.png" alt="">
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">

                            English
                            <img style="width: 50px; padding-left: 10px" src="/assets/img/united-states.png" alt="">

                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                        <div class="card">

                            <div class="card-body">

                                <h2 class="text-center">Assalomu Aleykum! Men Boburman</h2>

                                <br>

                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="about_item">

                                            <h5 class="text-center">Bilimlarim:</h5>

                                            <div class="knowledges_items">

                                                <div class="row justify-content-center">

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/html.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/css-3.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/js.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/bootstrap.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/jquery-removebg-preview.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/sass.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/php.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/yii2.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/oop-removebg-preview.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/mysql.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <hr>

                                        <div class="alert alert-warning">

                                            <h5>

                                                HTML,CSS,JAVASCRIPT,JQUERY,BOOTSTRAP - ushbu texnalogialar orqali men saytni dizayn bo'yicha verstka qila olaman,
                                                va Internetdagi barcha tayyor kutubxonalar bilan ishlay olaman.

                                            </h5>

                                            <br>
                                            <br>

                                            <h5>

                                                PHP/YII2 - ushbu texnalogialar orqali men sayt uchun qulay
                                                Admin Panel,
                                                Saytning backend qismi,
                                                Avtorizatsiya, Registratsiya,
                                                va boshqa siz istagan funksionalliklarni yasay olaman

                                            </h5>

                                        </div>


                                        <div class="about_item">

                                            <h5 class="text-center"><span style="color: #4aa3df; font-size: 40px; font-weight: bold">Tajriba</span>

                                                <br>
                                                <br>
                                                Verstka: 1 Yil+ <br>
                                                Backend: 6 oy+

                                            </h5>

                                        </div>

                                    </div>

                                </div>

                                <hr>

                                <div class="site_about">

                                    <h2 class="text-center title">Ushbu Sayt uchun sarflangan mehnat:</h2>

                                    <div class="alert alert-danger">

                                        Ushbu Saytni Verstkasini Klentning o'zi Berdi, Faqat Backendini buyurdi va Ushbu saytning frontendagi muammolarga men javob bera olmayman!

                                    </div>

                                    <div class="alert alert-info text-center font-weight-bolder">

                                        Saytdagi Barcha narsa PhpMyAdmin dan keladi. Va Sayt uchun yaratilgan qulay
                                        <a target="_blank" href="/admin">Admin Panel</a> Orqali Hohlagan Narsangizni:
                                        O'chirishingiz, Tahrirlashingiz, Qo'shishingiz mumkin. <br> <br>

                                        Siz men bilan bog'langaningizda <a target="_blank" href="/admin">Admin Panel</a> ga kirish uchun
                                        Vaqtinchalik login va parol beraman! Shunchaki mehmonlar uchun bu biroz havfliroq (

                                        <br>
                                        <br>

                                        Saytdagi barcha funksionalliklarni:
                                        <ul class="text-left">

                                            <li>Savatchaga qo'shish</li>
                                            <li>Istaklar roʻyxatiga qoʻshish</li>
                                            <li>Narxi bo'yicha saralash</li>
                                            <li>Kategoriya,Brendi,Rangi Orqali Saralash</li>
                                            <li>Mahsulotga Komentariya Yozish</li>
                                            <li>Mahsulotlar Ichidan qidirish</li>
                                            <li>Shaxsiy Kabinet</li>

                                        </ul>
                                        Agar sizga ham shunday sayt kerak bo'lsa Men bilan bog'laning!

                                        <br>
                                        <br>

                                        <h2>Men bilan bog'lanish:</h2>
                                        <div class="social">

                                            <a target="_blank" href="https://t.me/bobur_LLC"><img src="/assets/img/telegram-removebg-preview.png" alt="img"></a>
                                            <a target="_blank" href="mailto:ochilovbobur642@gmail.com"><img src="/assets/img/email.png" alt="img"></a>
                                            <a target="_blank" href="https://kwork.ru/user/ochilov_bobur"><img src="/assets/img/kwork.png" alt="img"></a>
                                            <a target="_blank" href="https://www.instagram.com/bobur2.0/"><img src="/assets/img/insta.png" alt="img"></a>

                                        </div>


                                    </div>

                                </div>

                                <hr>

                                <div class="images_site">

                                    <h2 class="text-center title">Saytdan lavhalar, Telegram Api</h2>

                                    <div class="alert alert-primary">

                                        <div class="card">

                                            <div class="card-body">

                                                <img src="/assets/img/checkout.png" alt="">

                                                <img src="/assets/img/tg.png" alt="">

                                                <h5 class="mt-4 pb-4">

                                                    Biror narsa buyurtma qilganingizda uchbu bo'limga ma'lumotlar to'ldirilinadi,
                                                    va bu yerdagi ma'lumotlar telegram bot orqali adminlarga habar boradi va,
                                                    Bazaga yangi buyurtma qo'shilib ma'lumotlar shaxsiy kabinetga avtomatik ravishda paydo bo'ladi


                                                    <div class="alert alert-danger">

                                                        Agar siz saytni telegram bot bilan ishlashini ko'rmoqchi bo'lsangiz Men bilan
                                                        <a href="https://t.me/bobur_LLC">Bog'laning</a> !

                                                    </div>

                                                </h5>

                                            </div>

                                        </div>

                                        <h2 class="mt-3 text-center title">Admin Panelidan kichik Lavhalar</h2>

                                        <div class="row justify-content-center">

                                            <div class="col-md-12">

                                                <div class="products-details-image">
                                                    <ul class="products-details-image-slides owl-theme owl-carousel owl-loaded owl-drag" data-slider-id="1">

                                                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1954px, 0px, 0px); transition: all 0.25s ease 0s; width: 3908px;"><div class="owl-item cloned" style="width: 488.5px;">

                                                            <li><img src="/assets/img/admin3.png" alt="image"></li>
                                                                </div><div class="owl-item cloned" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin4.png" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin1.jpg" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin2.png" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item active" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin3.png" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin4.png" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin5.png" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/order.png" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item cloned" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin1.jpg" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item cloned" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin2.png" alt="image"></li>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="owl-nav disabled">
                                                            <button type="button" role="presentation" class="owl-prev"><i class="flaticon-left-chevron"></i></button><button type="button" role="presentation" class="owl-next"><i class="flaticon-next"></i></button>
                                                        </div>

                                                        <div class="owl-dots disabled">

                                                        </div>

                                                    </ul>

                                                    <!-- Carousel Thumbs -->
                                                    <div class="owl-thumbs products-details-image-slides-owl-thumbs" data-slider-id="1">
                                                        <div class="owl-thumb-item">
                                                            <img src="/assets/img/admin1.jpg" alt="image">
                                                        </div>

                                                        <div class="owl-thumb-item">
                                                            <img src="/assets/img/admin2.png" alt="image">
                                                        </div>

                                                        <div class="owl-thumb-item active">
                                                            <img src="/assets/img/admin3.png" alt="image">
                                                        </div>

                                                        <div class="owl-thumb-item">
                                                            <img src="/assets/img/admin4.png" alt="image">
                                                        </div>

                                                        <div class="owl-thumb-item">
                                                            <img src="/assets/img/admin5.png" alt="image">
                                                        </div>

                                                        <div class="owl-thumb-item">
                                                            <img src="/assets/img/order.png" alt="image">
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                    </div>

                                </div>

                                <hr>

                                <div class="text-center">

                                    <h2>Men bilan bog'lanish:</h2>
                                    <div class="social">

                                        <a target="_blank" href="https://t.me/bobur_LLC"><img src="/assets/img/telegram-removebg-preview.png" alt="img"></a>
                                        <a target="_blank" href="mailto:ochilovbobur642@gmail.com"><img src="/assets/img/email.png" alt="img"></a>
                                        <a target="_blank" href="https://kwork.ru/user/ochilov_bobur"><img src="/assets/img/kwork.png" alt="img"></a>
                                        <a target="_blank" href="https://www.instagram.com/bobur2.0/"><img src="/assets/img/insta.png" alt="img"></a>

                                    </div>


                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                        <div class="card">

                            <div class="card-body">

                                <h2 class="text-center">Привет! Я Бoбур</h2>

                                <br>

                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="about_item">

                                            <h5 class="text-center">Мои знания:</h5>

                                            <div class="knowledges_items">

                                                <div class="row justify-content-center">

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/html.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/css-3.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/js.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/bootstrap.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/jquery-removebg-preview.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/sass.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/php.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/yii2.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/oop-removebg-preview.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/mysql.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <hr>

                                        <div class="alert alert-warning">

                                            <h5>

                                                HTML,CSS,JAVASCRIPT,JQUERY,BOOTSTRAP - с помощью этих технологий я могу верстка сайт по дизайна,
                                                и я могу работать со всеми готовыми библиотеками в интернете.

                                            </h5>

                                            <br>
                                            <br>

                                            <h5>

                                                PHP/YII2 - С помощью этих технологий я могу создать удобную панель админ (с полным бэкендом) для сайта.

                                            </h5>

                                        </div>


                                        <div class="about_item">

                                            <h5 class="text-center"><span style="color: #4aa3df; font-size: 40px; font-weight: bold">Опыт</span>

                                                <br>
                                                <br>
                                                Верстка: 1 Год+ <br>
                                                Бэкенд: 6 месяц+

                                            </h5>

                                        </div>

                                    </div>

                                </div>

                                <hr>

                                <div class="site_about">

                                    <h2 class="text-center title">Работа проведена этот сайте:</h2>

                                    <div class="alert alert-danger">

                                        Фронтенд этого сайта разработан Клентом, только бэкэнд сделан на заказ, и я не могу ответить на проблемы на фронтенде этого сайта!

                                    </div>

                                    <div class="alert alert-info text-center font-weight-bolder">

                                        Все на сайте исходит от PhpMyAdmin. И удобно для сайта
                                        Что вы хотите через <a href="/admin">Админ Панель</a>:
                                        Вы можете удалять, редактировать, добавлять. <br> <br>

                                        Для доступа к вашей <a target="_blank" href="/admin">Админ Панель</a> при обращении к вам
                                        Я дам вам временный логин и пароль! Просто для гостей немного опаснее(

                                        <br>
                                        <br>

                                        Все функции на сайте::
                                        <ul class="text-left">

                                            <li>Добавить в корзину</li>
                                            <li>Добавить в список желаний</li>
                                            <li>Сортировать по цене</li>
                                            <li>Сортировка по категории, бренду, цвету</li>
                                            <li>Комментарий к продукту</li>
                                            <li>Поиск продуктов</li>
                                            <li>Личный кабинет</li>

                                        </ul>
                                        Если вам нужен такой сайт, обращайтесь!

                                        <br>
                                        <br>

                                        <h2>Свяжитесь со мной:</h2>
                                        <div class="social">

                                            <a target="_blank" href="https://t.me/bobur_LLC"><img src="/assets/img/telegram-removebg-preview.png" alt="img"></a>
                                            <a target="_blank" href="mailto:ochilovbobur642@gmail.com"><img src="/assets/img/email.png" alt="img"></a>
                                            <a target="_blank" href="https://kwork.ru/user/ochilov_bobur"><img src="/assets/img/kwork.png" alt="img"></a>
                                            <a target="_blank" href="https://www.instagram.com/bobur2.0/"><img src="/assets/img/insta.png" alt="img"></a>

                                        </div>


                                    </div>

                                </div>

                                <hr>

                                <div class="images_site">

                                    <h2 class="text-center title">Фото  с сайта, Telegram Api</h2>

                                    <div class="alert alert-primary">

                                        <div class="card">

                                            <div class="card-body">

                                                <img src="/assets/img/checkout.png" alt="">

                                                <img src="/assets/img/tg.png" alt="">

                                                <h5 class="mt-4 pb-4">

                                                    Когда вы что-то заказываете, этот раздел наполняется информацией,
                                                    и информация здесь будет отправлена ​​админам через телеграм-бота и,
                                                    Новые заказы добавляются в базу и информация появляется автоматически в личном кабинете


                                                    <div class="alert alert-danger">

                                                        Если вы хотите посмотреть, как сайт работает с телеграммой
                                                        <a href="https://t.me/bobur_LLC">Связаться</a> !

                                                    </div>

                                                </h5>

                                            </div>

                                        </div>

                                        <h2 class="mt-3 text-center title">Скриншоты из панели администратора</h2>

                                        <div class="row justify-content-center">

                                            <div class="col-md-12">

                                                <div class="products-details-image">
                                                    <ul class="products-details-image-slides owl-theme owl-carousel owl-loaded owl-drag" data-slider-id="1">

                                                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1954px, 0px, 0px); transition: all 0.25s ease 0s; width: 3908px;"><div class="owl-item cloned" style="width: 488.5px;">

                                                                    <li><img src="/assets/img/admin3.png" alt="image"></li>
                                                                </div><div class="owl-item cloned" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin4.png" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin1.jpg" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin2.png" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item active" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin3.png" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin4.png" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin5.png" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/order.png" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item cloned" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin1.jpg" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item cloned" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin2.png" alt="image"></li>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="owl-nav disabled">
                                                            <button type="button" role="presentation" class="owl-prev"><i class="flaticon-left-chevron"></i></button><button type="button" role="presentation" class="owl-next"><i class="flaticon-next"></i></button>
                                                        </div>

                                                        <div class="owl-dots disabled">

                                                        </div>

                                                    </ul>

                                                    <!-- Carousel Thumbs -->
                                                    <div class="owl-thumbs products-details-image-slides-owl-thumbs" data-slider-id="1">
                                                        <div class="owl-thumb-item">
                                                            <img src="/assets/img/admin1.jpg" alt="image">
                                                        </div>

                                                        <div class="owl-thumb-item">
                                                            <img src="/assets/img/admin2.png" alt="image">
                                                        </div>

                                                        <div class="owl-thumb-item active">
                                                            <img src="/assets/img/admin3.png" alt="image">
                                                        </div>

                                                        <div class="owl-thumb-item">
                                                            <img src="/assets/img/admin4.png" alt="image">
                                                        </div>

                                                        <div class="owl-thumb-item">
                                                            <img src="/assets/img/admin5.png" alt="image">
                                                        </div>

                                                        <div class="owl-thumb-item">
                                                            <img src="/assets/img/order.png" alt="image">
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                    </div>

                                </div>

                                <hr>

                                <div class="text-center">

                                    <h2>Свяжитесь со мной::</h2>
                                    <div class="social">

                                        <a target="_blank" href="https://t.me/bobur_LLC"><img src="/assets/img/telegram-removebg-preview.png" alt="img"></a>
                                        <a target="_blank" href="mailto:ochilovbobur642@gmail.com"><img src="/assets/img/email.png" alt="img"></a>
                                        <a target="_blank" href="https://kwork.ru/user/ochilov_bobur"><img src="/assets/img/kwork.png" alt="img"></a>
                                        <a target="_blank" href="https://www.instagram.com/bobur2.0/"><img src="/assets/img/insta.png" alt="img"></a>

                                    </div>


                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                        <div class="card">

                            <div class="card-body">

                                <h2 class="text-center">Hello! I am Bobur</h2>

                                <br>

                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="about_item">

                                            <h5 class="text-center">My knowledge:</h5>

                                            <div class="knowledges_items">

                                                <div class="row justify-content-center">

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/html.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/css-3.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/js.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/bootstrap.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/jquery-removebg-preview.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/sass.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/php.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/yii2.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/oop-removebg-preview.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-1">

                                                        <div class="knowledges_item">

                                                            <div class="knowledges_img">

                                                                <img src="/assets/img/mysql.png" alt="">

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <hr>

                                        <div class="alert alert-warning">

                                            <h5>

                                                HTML, CSS, JAVASCRIPT, JQUERY, BOOTSTRAP - with the help of these technologies, I can design a site,
                                                and I can work with all ready-made libraries on the Internet.

                                            </h5>

                                            <br>
                                            <br>

                                            <h5>

                                                PHP/YII2 - Using these technologies, I can create a user friendly admin panel (with full backend) for the site.

                                            </h5>

                                        </div>


                                        <div class="about_item">

                                            <h5 class="text-center"><span style="color: #4aa3df; font-size: 40px; font-weight: bold">An experience</span>

                                                <br>
                                                <br>
                                                Layout: 1 Year+ <br>
                                                Backend: 6 month+

                                            </h5>

                                        </div>

                                    </div>

                                </div>

                                <hr>

                                <div class="site_about">

                                    <h2 class="text-center title">Work carried out on this site:</h2>

                                    <div class="alert alert-danger">

                                        <div class="alert alert-danger">

                                            The front end of this site is designed by Klent, only the back end is custom made and I can't answer problems on the front end of this site!

                                        </div>

                                    </div>

                                    <div class="alert alert-info text-center font-weight-bolder">

                                        Everything on the site comes from PhpMyAdmin. And convenient for the site
                                        What you want via <a href="/admin">Admin Panel</a>:
                                        You can delete, edit, add. <br><br>

                                        To access your <a target="_blank" href="/admin">Admin Panel</a> when contacting you
                                        I will give you a temporary username and password! It's just a little more dangerous for guests (

                                        <br>
                                        <br>

                                        All features on the site:
                                        <ul class="text-left">

                                            <li>Add to Cart</li>
                                            <li>Add to Wishlist</li>
                                            <li>Sort by price</li>
                                            <li>Sort by category, brand, color</li>
                                            <li>Add to Commment</li>
                                            <li>Search Products</li>
                                            <li>Personal Area</li>

                                        </ul>
                                        If you need such a site, contact us!

                                        <br>
                                        <br>

                                        <h2>Get into contact with me:</h2>
                                        <div class="social">

                                            <a target="_blank" href="https://t.me/bobur_LLC"><img src="/assets/img/telegram-removebg-preview.png" alt="img"></a>
                                            <a target="_blank" href="mailto:ochilovbobur642@gmail.com"><img src="/assets/img/email.png" alt="img"></a>
                                            <a target="_blank" href="https://kwork.ru/user/ochilov_bobur"><img src="/assets/img/kwork.png" alt="img"></a>
                                            <a target="_blank" href="https://www.instagram.com/bobur2.0/"><img src="/assets/img/insta.png" alt="img"></a>

                                        </div>


                                    </div>

                                </div>

                                <hr>

                                <div class="images_site">

                                    <h2 class="text-center title">Photo from the site, Telegram Api</h2>

                                    <div class="alert alert-primary">

                                        <div class="card">

                                            <div class="card-body">

                                                <img src="/assets/img/checkout.png" alt="">

                                                <img src="/assets/img/tg.png" alt="">

                                                <h5 class="mt-4 pb-4">

                                                    When you order something, this section is filled with information,
                                                    and information here will be sent to admins via telegram bot and,
                                                    New orders are added to the database and the information appears automatically in your personal account


                                                    <div class="alert alert-danger">

                                                        If you want to see how the site works with telegram
                                                        <a href="https://t.me/bobur_LLC">Contact</a> !

                                                    </div>

                                                </h5>

                                            </div>

                                        </div>

                                        <h2 class="mt-3 text-center title">Screenshots from the admin panel</h2>

                                        <div class="row justify-content-center">

                                            <div class="col-md-12">

                                                <div class="products-details-image">
                                                    <ul class="products-details-image-slides owl-theme owl-carousel owl-loaded owl-drag" data-slider-id="1">

                                                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1954px, 0px, 0px); transition: all 0.25s ease 0s; width: 3908px;"><div class="owl-item cloned" style="width: 488.5px;">

                                                                    <li><img src="/assets/img/admin3.png" alt="image"></li>
                                                                </div><div class="owl-item cloned" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin4.png" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin1.jpg" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin2.png" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item active" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin3.png" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin4.png" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin5.png" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/order.png" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item cloned" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin1.jpg" alt="image"></li>
                                                                </div>

                                                                <div class="owl-item cloned" style="width: 488.5px;">
                                                                    <li><img src="/assets/img/admin2.png" alt="image"></li>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="owl-nav disabled">
                                                            <button type="button" role="presentation" class="owl-prev"><i class="flaticon-left-chevron"></i></button><button type="button" role="presentation" class="owl-next"><i class="flaticon-next"></i></button>
                                                        </div>

                                                        <div class="owl-dots disabled">

                                                        </div>

                                                    </ul>

                                                    <!-- Carousel Thumbs -->
                                                    <div class="owl-thumbs products-details-image-slides-owl-thumbs" data-slider-id="1">
                                                        <div class="owl-thumb-item">
                                                            <img src="/assets/img/admin1.jpg" alt="image">
                                                        </div>

                                                        <div class="owl-thumb-item">
                                                            <img src="/assets/img/admin2.png" alt="image">
                                                        </div>

                                                        <div class="owl-thumb-item active">
                                                            <img src="/assets/img/admin3.png" alt="image">
                                                        </div>

                                                        <div class="owl-thumb-item">
                                                            <img src="/assets/img/admin4.png" alt="image">
                                                        </div>

                                                        <div class="owl-thumb-item">
                                                            <img src="/assets/img/admin5.png" alt="image">
                                                        </div>

                                                        <div class="owl-thumb-item">
                                                            <img src="/assets/img/order.png" alt="image">
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                    </div>

                                </div>

                                <hr>

                                <div class="text-center">

                                    <h2>Get into contact with me:</h2>
                                    <div class="social">

                                        <a target="_blank" href="https://t.me/bobur_LLC"><img src="/assets/img/telegram-removebg-preview.png" alt="img"></a>
                                        <a target="_blank" href="mailto:ochilovbobur642@gmail.com"><img src="/assets/img/email.png" alt="img"></a>
                                        <a target="_blank" href="https://kwork.ru/user/ochilov_bobur"><img src="/assets/img/kwork.png" alt="img"></a>
                                        <a target="_blank" href="https://www.instagram.com/bobur2.0/"><img src="/assets/img/insta.png" alt="img"></a>

                                    </div>


                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- End Blog Area -->