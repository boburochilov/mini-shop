<?php

namespace app\widgets;

use app\models\HotCollection;
use app\models\MegaSale;
use app\models\Product;
use yii\bootstrap4\Widget;

class ProductPromotions extends Widget
{
    public function run()
    {
        $megaSales = MegaSale::find()->where(['status' => 1])->limit(1)->all();
        $newArrivals = \app\models\NewArrivals::find()->where(['status' => 1])->limit(1)->all();
        $hotCollections = HotCollection::find()->where(['status' => 1])->limit(1)->all();
        return $this->render('product-promotions',compact('megaSales','newArrivals','hotCollections'));
    }
}