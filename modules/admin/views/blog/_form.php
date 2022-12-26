<?php

use app\components\StaticFunctions;
use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Blog $model */
/** @var yii\bootstrap4\ActiveForm $form */

$js = <<<JS

    CKEDITOR.replace('blog-top_body');

    CKEDITOR.replace('blog-main_body');

JS;

$this->registerJs($js);


?>

<div class="blog-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

        <div class="col-lg-8">

            <div class="card">

                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-8">

                            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                        </div>

                        <div class="col-lg-4">

                            <?=$form->field($model,'created_date')->widget(DatePicker::classname(),[
                                'value' => '31-Dec-2010',
                                'options'=>[
                                    'placeholder'=>'Введите дату создания ...',
                                    'autocomplete' => 'off',
                                ],
                                'pluginOptions'=>[
                                    'calendarWeeks' => true,
                                    'daysOfWeekDisabled' => [0, 6],
                                    'format' => 'M-dd-yyyy',
                                    'autoclose' => true,
                                ]
                            ]);?>

                        </div>

                    </div>

                    <?= $form->field($model, 'top_body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'quote')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'main_body')->textarea(['rows' => 6]) ?>

                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="card">

                <div class="card-body">

                    <?php $image = StaticFunctions::getImage('blog',$model->id,$model->image)?>

                    <label class="preview_label">

                        <img src="<?=$image?>" alt="img" style="max-width: 100%; max-height: 300px; cursor: pointer" class="image_preview">


                        <?= $form->field($model, 'image')->fileInput(['class' => 'hidden','id' =>'upload']) ?>

                        <style>
                            .hidden{
                                display: none;
                            }
                        </style>

                    </label>

                    <div class="row">

                        <div class="col-lg-5">

                            <?= $form->field($model, 'seen_count')->textInput(['value' => 1]) ?>

                        </div>

                        <div class="col-lg-7">

                            <?= $form->field($model, 'category_id')->dropdownList(\yii\helpers\ArrayHelper::map(\app\models\BlogCategories::find()->all(),'id','title'))?>

                        </div>

                    </div>

                    <div class="row justify-content-between align-items-center">

                        <div class="col-lg-5" style="border-right: 1px solid #fff">

                            <div class="form-check">

                                <?= $form->field($model, 'popular_post')->checkbox() ?>
                                off/on

                            </div>

                        </div>

                        <div class="col-lg-5">

                            <div class="form-check">

                                <?= $form->field($model, 'status')->checkbox() ?>
                                off/on

                            </div>

                        </div>

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
