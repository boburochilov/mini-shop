<?php if (Yii::$app->session->hasFlash('order-success')):?>

    <div class="container">

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= Yii::$app->session->getFlash('order-success')?>
            <a href="/" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
        </div>

        <a class="btn btn-primary" href="<?=\yii\helpers\Url::home()?>">Главный</a>

    </div>

<?php endif?>

<script>

    $('.alert').alert()

</script>
