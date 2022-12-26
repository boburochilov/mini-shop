<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Order $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="card">

        <div class="card-body">

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'user',
                    'full_name',
                    'address',
                    'city',
                    'email:email',
                    'phone',
                    'created_date',
                    'updated_date',
                    'total_product_count',
                    'total_product_price',
                    'status',
                ],
            ]) ?>

        </div>

    </div>

</div>
