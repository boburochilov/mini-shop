<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">


    <img class="animation__wobble" src="/admin-assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" target="_blank" class="nav-link">Вернуться на сайт</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>  Fullscreen
            </a>
        </li>

        <li class="nav-item logout">
            <a class="nav-link" href="<?=\yii\helpers\Url::to(['/admin/user/logout'])?>">
                <i class="fas fa-door-closed mr-2"></i> Logout
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->