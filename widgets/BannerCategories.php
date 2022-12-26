<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class BannerCategories extends Widget
{
    public function run()
    {
        $models = \app\models\BannerCategories::find()->where(['status' => 1])->limit(2)->all();
        return $this->render('banner-categories',compact('models'));
    }
}