<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class Blog extends Widget
{
    public function run()
    {
        $models = \app\models\Blog::find()->limit(3)->all();
        return $this->render('blog',compact('models'));
    }
}