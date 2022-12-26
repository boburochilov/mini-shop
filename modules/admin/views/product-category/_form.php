<?php

use app\components\StaticFunctions;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProductCategory $model */
/** @var yii\bootstrap4\ActiveForm $form */
?>

<div class="product-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

        <div class="col-md-6">

            <div class="card">

                <div class="card-body">

                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                    <div class="form-check">

                        <?= $form->field($model, 'status')->checkbox() ?>
                        off/on

                    </div>


                </div>

            </div>

        </div>

        <div class="col-md-6">

            <div class="card">

                <div class="card-body">

                    <?php $image = StaticFunctions::getImage('product-category',$model->id,$model->image)?>

                    <label class="preview_label">

                        <img src="<?=$image?>" alt="img" style="max-width: 100%; max-height: 300px; cursor: pointer" class="image_preview">


                        <?= $form->field($model, 'image')->fileInput(['class' => 'hidden','id' =>'upload']) ?>

                        <style>
                            .hidden{
                                display: none;
                            }
                        </style>

                    </label>

                </div>

            </div>

        </div>

    </div>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
