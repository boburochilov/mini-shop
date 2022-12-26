<?php

use app\components\StaticFunctions;
use app\models\ProductCategory;
use kartik\file\FileInput;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var app\models\Product $model */
/** @var yii\bootstrap4\ActiveForm $form */

$js = <<<JS

    CKEDITOR.replace('product-body');

JS;

$this->registerJs($js);

$css = <<<CSS

    .switches{
        padding: 20px; 
        margin-bottom: 10px;
        transition: .3s all ease;
        border-bottom: 1px solid #fff;
    }
    .form-check{
        cursor: pointer;
    }

CSS;

$this->registerCss($css);

?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

        <div class="col-lg-8">

            <div class="card">

                <div class="card-body">

                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                    <div class="row">

                        <div class="col-lg-6">

                            <?= $form->field($model, 'price')->textInput() ?>

                        </div>

                        <div class="col-lg-6">

                            <?= $form->field($model, 'old_price')->textInput() ?>

                        </div>

                    </div>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                </div>

            </div>

            <div class="card">

                <div class="card-body">

                    <?php

                        echo '<label class="control-label">Add Attachments</label>';
                        echo FileInput::widget([
                            'model' => $model,
                            'attribute' => 'gallery[]',
                            'options' => ['multiple' => true]
                        ]);

                    ?>


                    <?php if (!empty($productGalleryImages)): ?>
                        <div class="gallery_images mt-5">
                            <div class="table_block">
                                <table class="table table-bordered table-hover table-striped">
                                    <tbody>
                                    <?php foreach ($productGalleryImages as $galleryImage): ?>

                                        <?php $galImageItem = StaticFunctions::getImage('product',$galleryImage->product_id,$galleryImage->image)?>
                                        <tr>
                                            <td><img src="<?=$galImageItem?>" style="max-width: 155px;" alt="img"></td>
                                            <td style="vertical-align: middle; text-align: center">
                                                <a href="<?=\yii\helpers\Url::to(['product/delete-gal-image','id'=>$galleryImage->id])?>" class="btn btn-danger remove"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php endif;?>

                    <div class="alert alert-danger mt-3">

                        Если вы хотите добавить более одного изображения для Товара, вы можете сделать это только из раздела «UPDATE».
                        И вы автоматически перейдете в раздел «UPDATE» после раздела «CREATE».

                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="card">

                <div class="card-body">

                    <?php $image = StaticFunctions::getImage('product',$model->id,$model->image)?>

                    <label class="preview_label">

                        <img src="<?=$image?>" alt="img" style="max-width: 100%; max-height: 300px; cursor: pointer" class="image_preview">


                        <?= $form->field($model, 'image')->fileInput(['class' => 'hidden','id' =>'upload']) ?>

                        <style>
                            .hidden{
                                display: none;
                            }
                        </style>

                    </label>

                    <?= $form->field($model, 'category_id')->dropdownList(ArrayHelper::map(ProductCategory::find()->all(),'id','name'))?>

                    <?= $form->field($model, 'brand_id')->dropdownList(ArrayHelper::map(\app\models\SellingBrands::find()->all(),'id','title'))?>

                    <?= $form->field($model, 'color_id')->dropdownList(ArrayHelper::map(\app\models\ProductColor::find()->all(),'id','title'))?>

                    <div class="switches row justify-content-between align-items-center">

                        <div class="col-lg-5" style="border-right: 1px solid #fff">

                            <div class="form-check">

                                <?= $form->field($model, 'availability')->checkbox() ?>
                                off/on

                            </div>

                        </div>

                        <div class="col-lg-5">

                            <div class="form-check">

                                <?= $form->field($model, 'best_selling')->checkbox() ?>
                                off/on

                            </div>

                        </div>

                    </div>

                    <div class="switches row justify-content-between align-items-center">

                        <div class="col-lg-5" style="border-right: 1px solid #fff">

                            <div class="form-check">

                                <?= $form->field($model, 'new')->checkbox() ?>
                                off/on

                            </div>

                        </div>

                        <div class="col-lg-5">

                            <div class="form-check">

                                <?= $form->field($model, 'sale')->checkbox() ?>
                                off/on

                            </div>

                        </div>

                    </div>

                    <div class="switches row justify-content-between align-items-center">

                        <div class="col-lg-5" style="border-right: 1px solid #fff">

                            <div class="form-check">

                                <?= $form->field($model, 'hot_collection')->checkbox() ?>
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
