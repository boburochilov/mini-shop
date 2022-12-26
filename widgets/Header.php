<?php

namespace app\widgets;

use app\models\Haeder;
use app\models\User;
use yii\bootstrap4\Widget;

class Header extends Widget
{
    public function run()
    {
        $user = User::findOne(\Yii::$app->user->getId());
        $models = Haeder::find()->where(['status' => 1])->all();
        return $this->render('header',compact('user','models'));
    }
}