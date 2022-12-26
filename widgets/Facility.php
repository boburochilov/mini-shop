<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class Facility extends Widget
{
    public function run()
    {
        $models = \app\models\Facility::find()->where(['status' => 1])->all();
        return $this->render('facility',compact('models'));
    }
}