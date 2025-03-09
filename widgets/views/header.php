<!-- Start Top Header Area -->
<div class="top-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-7">
                <ul class="top-header-contact-info">
                    <li><i class='bx bx-phone-call'></i> <a href="tel:+1234567898">(+123) 456-7898</a></li>
                    <li><i class='bx bx-map'></i> <a href="#" target="_blank">6890 Blvd, Бронкс, Нью-Йорк 1058, США</a></li>
                </ul>
            </div>

            <div class="col-lg-6 col-md-5">
                <ul class="top-header-menu">
                    <li>
                        <a href="<?=\yii\helpers\Url::to(['user/profile'])?>">
                            <?php if (!empty($user)):?>
                                <span style="text-transform: uppercase"><?=$user->username?></span

                            <?php else:?>
                                Мой Аккаунт
                            <?php endif;?>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Top Header Area -->

<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="drodo-responsive-nav">
        <div class="container">
            <div class="drodo-responsive-menu">
                <div class="logo">
                    <a href="/">
                        <img src="/assets/img/logo.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="drodo-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="/assets/img/logo.png" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">

                        <?php if (!empty($models)):?>
                            <?php foreach ($models as $model): ?>

                                <li class="nav-item"><a href="<?=$model->link?>" class="nav-link"><?=$model->title?> </a></li>

                            <?php endforeach;?>
                        <?php endif;?>

                    </ul>

                    <div class="others-option">
                        <div class="option-item">
                            <div class="wishlist-btn">
                                <a href="#" data-bs-toggle="modal"><i class='bx bx-heart'></i></a>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="cart-btn">
                                <a href="#" data-bs-toggle="modal"><i class='bx bx-shopping-bag'></i></a>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="search-btn-box">
                                <i class="search-btn bx bx-search-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<!-- Start Search Overlay -->
<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>

            <div class="search-overlay-close">
                <span class="search-overlay-close-line"></span>
                <span class="search-overlay-close-line"></span>
            </div>

            <div class="search-overlay-form">
                <form action="/product/search" method="get">
                    <input name="search" value="<?=(!empty($_GET['search']) ? $_GET['search'] : '')?>" type="text" class="input-search" placeholder="Искать в продуктах... ">
                    <button type="submit"><i class='bx bx-search-alt'></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Search Overlay -->