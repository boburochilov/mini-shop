<!-- Start Facility Area -->
<section class="facility-area bg-f7f8fa pt-70 pb-40">
    <div class="container">

        <?php if (!empty($models)): ?>

            <div class="row">

                <?php foreach ($models as $model):?>

                    <div class="col-lg-3 col-sm-6 col-md-3 col-6">
                    <div class="single-facility-box">
                        <div class="icon">
                            <i class="<?=$model->image?>"></i>
                        </div>
                        <h3><?=$model->title?></h3>
                        <p><?=$model->info?></p>
                    </div>
                </div>

                <?php endforeach;?>

            </div>

        <?php endif; ?>

    </div>
</section>
<!-- End Facility Area -->