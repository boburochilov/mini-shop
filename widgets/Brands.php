<?php

namespace app\widgets;

use app\models\SellingBrands;
use yii\bootstrap4\Widget;

class Brands extends Widget
{
    public function run()
    {
        $models = SellingBrands::find()->where(['status' => 1])->all();

        return $this->render('brands',compact('models'));
    }
}