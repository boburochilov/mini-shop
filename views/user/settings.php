<!-- Start Page Title Area -->
<section class="page-title-area" style="margin-bottom: 70px">
    <div class="container">
        <div class="page-title-content">
            <h1>Настройки профиля</h1>
            <ul>
                <li><a href="<?=\yii\helpers\Url::home()?>">Главная</a></li>
                <li><a href="<?=\yii\helpers\Url::to(['user/profile'])?>">Профиль</a></li>
                <li>Настройки профиля</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<section class="profile">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="profile_navigation">
                    <div class="user_login_info">
                        <div class="username"><?=$model->username;?></div>
                        <div class="logout"><a href="<?=\yii\helpers\Url::to(['user/logout'])?>">ВЫЙТИ <i class="fa-solid fa-arrow-right-from-bracket"></i></a></div>
                    </div>
                    <ul>
                        <li><a href="<?=\yii\helpers\Url::to(['user/profile'])?>">Заказы <i class="fa-solid fa-user"></i></a></li>
                        <li><a href="<?=\yii\helpers\Url::to(['user/settings'])?>" class="active">Настройки <i class="fa-solid fa-gear"></i></a></li>
                        <li><a href="<?=\yii\helpers\Url::to(['blog/'])?>">Блоги <i class="fa-solid fa-newspaper"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="user_orders user_settings">
                    <div class="section_title">Профиль</div>

                    <?php $form = \yii\bootstrap4\ActiveForm::begin()?>

                    <div class="settings_block">

                        <div class="settings_item">

                            <div class="settings_title">Данные аккаунта</div>

                            <div class="form_item">
                                <?=$form->field($model,'full_name')->textInput()?>
                            </div>

                            <div class="form_item">
                                <?=$form->field($model,'username')->textInput()?>
                            </div>

                            <div class="form_item">
                                <?=$form->field($model,'address')->textInput()?>
                            </div>

                            <div class="form_item">
                                <?=$form->field($model,'email')->textInput()?>
                            </div>

                        </div>

                        <div class="settings_item">

                            <div class="settings_title">Смена пароля</div>

                            <div class="form_item">
                                <?=$form->field($model,'newPassword')->passwordInput(['value' => ""])?>
                            </div>

                        </div>
                    </div>

                    <div class="action_block my-3">
                        <button type="submit" class="button button-blue">Сохранить</button>
                    </div>


                    <?php \yii\bootstrap4\ActiveForm::end();?>

                </div>
            </div>
        </div>
    </div>
</section>

