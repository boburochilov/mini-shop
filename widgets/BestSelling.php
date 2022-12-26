<?php

namespace app\widgets;

use app\models\Product;
use yii\bootstrap4\Widget;

class BestSelling extends Widget
{
    public function run()
    {
        $models = Product::find()->where(['status' => 1])->andWhere(['best_selling' => 1])->all();
        return $this->render('best-selling',compact('models'));
    }
}