<?php

use app\components\StaticFunctions;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Banner $model */
/** @var yii\bootstrap4\ActiveForm $form */
?>

<div class="banner-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

        <div class="col-md-8">

            <div class="card">

                <div class="card-body">

                    <?= $form->field($model, 'subtitle')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'definition')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'price')->textInput() ?>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card">

                <div class="card-body">

                    <?php $image = StaticFunctions::getImage('banner',$model->id,$model->image)?>

                    <label class="preview_label">

                        <img src="<?=$image?>" alt="img" style="max-width: 100%; max-height: 300px; cursor: pointer" class="image_preview">


                        <?= $form->field($model, 'image')->fileInput(['class' => 'hidden','id' =>'upload']) ?>

                        <style>
                            .hidden{
                                display: none;
                            }
                        </style>

                    </label>

                    <div title="Если вы отключите это, этот элемент не будет отображаться на сайте." class="custom-control custom-switch">
                        <label for="customSwitch1">
                            <?= $form->field($model, 'status')->checkbox(['class'=>'custom-control-input','id' => 'customSwitch1']) ?>
                        </label>
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

<div class="help-block text-center">

    <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Вам нужна помощь?
        </button>

        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Вы что-то понимаете?
        </button>

    </p>
    <div class="collapse" id="collapseExample">
        <div class="help_images d-flex justify-content-between">

            <img title="banner" style="width: 49%" src="/admin-assets/dist/img/help-imgs/before_banner.jpg" alt="img">
            <a href="/admin-assets/dist/img/help-imgs/banner.jpg">
                <img style="width: 98%" src="/admin-assets/dist/img/help-imgs/banner.jpg" alt="img">
            </a>

        </div>

        <h1>То, что вы публикуете, будет видно в этой части сайта.</h1>
    </div>





</div>


