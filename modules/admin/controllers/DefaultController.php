<?php

namespace app\modules\admin\controllers;

use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{

    public function init()
    {
        if (Yii::$app->user->getId()){
            $user = User::findOne(Yii::$app->user->getId());
            if ($user->status < 99){
                echo "Как вы сюда попали?! <a href='/'>Назад</a> или <br>",
                "<a href='/user/logout'>выйти</a>";die;
            }
        }

        parent::init();
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?']
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Renders the index view for the module
     * @return string
     */

    public $layout = 'admin';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionError(){
        return $this->render('error');
    }


}
