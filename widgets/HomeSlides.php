<?php

namespace app\widgets;

use app\models\Banner;
use yii\bootstrap4\Widget;

class HomeSlides extends Widget
{
    public function run()
    {
        $models = Banner::find()->where(['status' => 1])->all();
        return $this->render('home-slides',compact('models'));
    }
}