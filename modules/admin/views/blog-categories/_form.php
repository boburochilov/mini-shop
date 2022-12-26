<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\BlogCategories $model */
/** @var yii\bootstrap4\ActiveForm $form */
?>

<div class="blog-categories-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

        <div class="col-lg-8">

            <div class="card">

                <div class="card-body">

                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>


                </div>

            </div>

        </div>

        <div class="col-lg-4">

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
