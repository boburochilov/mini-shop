<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProductColor $model */
/** @var yii\bootstrap4\ActiveForm $form */
?>

<div class="product-color-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

        <div class="col-lg-8">

            <div class="card">

                <div class="card-body">

                    <div class="alert alert-danger d-inline-block">

                        <i class="fas fa-exclamation-triangle"></i>
                        Введите цвет только на английском языке без ошибок или используйте коды HEX, RGB <br>

                    </div>

                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="card">

                <div class="card-body">

                    <a class="btn btn-primary text-decoration-none" target="_blank" href="https://colorpicker.me/">
                        <i class="fas fa-palette"></i>
                        Выберите нужный цвет через онлайн-палитру цветов
                    </a>

                </div>

            </div>

            <div class="card">

                <div class="card-body">

                    <div class="form-check">

                        <?= $form->field($model, 'status')->checkbox() ?>
                        off/on

                    </div>


                </div>

            </div>

        </div>

    </div>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
