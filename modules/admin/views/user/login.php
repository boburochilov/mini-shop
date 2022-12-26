<?php
    use yii\bootstrap4\ActiveForm;
    use yii\bootstrap4\Html;

?>
<!-- /.login-logo -->
<div class="card card-outline card-primary">
    <div class="card-header text-center">
        <a href="#" class="h1"><b>DRODO</b>LTE</a>
    </div>
    <div class="card-body">

        <?php
            $form = ActiveForm::begin([
                'id' => 'login-form',
            ]);
        ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-12 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-12">
                <?= Html::submitButton('Войти', ['class' => 'btn btn-primary w-100', 'name' => 'login-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->