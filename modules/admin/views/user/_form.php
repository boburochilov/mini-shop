<?php

use app\components\StaticFunctions;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\User $model */
/** @var yii\bootstrap4\ActiveForm $form */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

        <div class="col-lg-8">

            <div class="card">

                <div class="card-body">

                    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true,'value' => '']) ?>

                    <div class="alert alert-danger">

                        Пароль, который вы введете здесь, будет автоматически хеширован,
                        и когда вы его редактируете, вы удалите хешированный пароль
                        и установите новый пароль.

                    </div>

                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="card">

                <div class="card-body">

                    <?php $image = StaticFunctions::getImage('user',$model->id,$model->avatar)?>

                    <label class="preview_label">

                        <img src="<?=$image?>" alt="img" style="max-width: 100%; max-height: 300px; cursor: pointer" class="image_preview">


                        <?= $form->field($model, 'avatar')->fileInput(['class' => 'hidden','id' =>'upload']) ?>

                        <style>
                            .hidden{
                                display: none;
                            }
                        </style>

                    </label>

                    <?= $form->field($model, 'status')->dropDownList(Yii::$app->params['user_status']) ?>

                </div>

            </div>

        </div>

    </div>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
