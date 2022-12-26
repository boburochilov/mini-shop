<?php

namespace app\widgets;

use app\models\Haeder;
use app\models\Social;
use yii\bootstrap4\Widget;

class Footer extends Widget
{
    public function run()
    {
        $social = Social::find()->where(['status' => 1])->all();
        $models = Haeder::find()->where(['status' => 1])->all();
        return $this->render('footer',compact('models','social'));
    }
}