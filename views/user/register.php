<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Start Page Title Area -->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Добро пожаловать в Дродо</h1>
            <ul>
                <li><a href="<?=\yii\helpers\Url::home()?>">Главная</a></li>
                <li>Регистрация</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Profile Authentication Area -->
<section class="profile-authentication-area ptb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="login-form">
                    <h2>Регистрация</h2>

                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'fieldConfig' => [
                            'template' => "{label}\n{input}\n{error}",
                            'labelOptions' => ['class' => 'col-lg-12 col-form-label'],
                            'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                        ],
                    ]); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true,'class' => 'form-control','required']) ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'email')->textInput(['autofocus' => true,'class' => 'form-control','required','type' => 'email']) ?>

                    <div class="form-group">
                        <div class="offset-lg-12 col-lg-12">
                            <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="offset-lg-12 col-lg-12">
                            <a href="<?=\yii\helpers\Url::to(['user/login'])?>">У вас уже есть аккаунт?</a>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Start Profile Authentication Area -->