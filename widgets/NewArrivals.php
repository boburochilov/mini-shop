<?php

namespace app\widgets;

use app\models\Product;
use yii\bootstrap4\Widget;

class NewArrivals extends Widget
{
    public function run()
    {
        $models = Product::find()->where(['status' => 1])->andWhere(['new' => 1])->all();
        return $this->render('new-arrivals',compact('models'));
    }
}