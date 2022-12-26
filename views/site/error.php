<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;

?>
<div class="site-error">

    <div class="container">

        <div class="error">
            <!-- Start 404 Error Area -->
            <section class="error-area ptb-70">
                <div class="container">
                    <div class="error-content">
                        <img src="/assets/img/error.png" alt="image">
                        <h3><?= Html::encode($this->title) ?></h3>
                        <p><?= nl2br(Html::encode($message)) ?></p>
                        <a href="/" class="default-btn"><i class="flaticon-left-chevron"></i> Вернуться на главную</a>
                    </div>
                </div>
            </section>
            <!-- End 404 Error Area -->

        </div>


    </div>

</div>

<style>

.error{
    width: 50%;
    text-align: center;
    margin: 0 auto;
}

</style>
