<?php

namespace app\widgets;

use app\models\ProductCategory;
use yii\bootstrap4\Widget;

class ProductCategories extends Widget
{
    public function run()
    {
        $models = ProductCategory::find()->where(['status' => 1])->all();
        return $this->render('product-categories',compact('models'));
    }
}