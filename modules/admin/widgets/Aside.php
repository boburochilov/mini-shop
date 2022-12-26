<?php


namespace app\modules\admin\widgets;


use app\models\User;
use Yii;
use yii\bootstrap4\Widget;

class Aside extends Widget
{
    public function run(){
        $user = User::findOne(Yii::$app->user->getId());
        return $this->render('aside', compact('user'));
    }
}