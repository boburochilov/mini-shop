<?php

namespace app\controllers;

use app\models\LoginForm;
use app\models\Order;
use app\models\RegisterForm;
use app\models\TelegramNotificator;
use app\models\User;
use Yii;
use yii\web\Controller;

class UserController extends Controller
{

    public function actionLogin(){
        $model = new LoginForm();
        if ($model->load(\Yii::$app->request->post()) && $model->login()){
            return $this->redirect('profile');
        }
        return $this->render('login',compact('model'));
    }

    public function actionProfile(){

        if (\Yii::$app->user->isGuest){
            return $this->redirect('login');
        }
        $model = User::findOne(\Yii::$app->user->getId());
        $orders = Order::find()->where(['user' => $model->id])->all();
        return $this->render('profile',compact('model','orders'));
    }

    public function actionChangeStatus($id, $status)
    {
        $order = Order::findOne($id);
        $order->status = $status;
        if ($order->status >= 6) {
            $notification = new TelegramNotificator();
            $notification->sendCancelNotification($order);
        }
        $order->save();
        return $this->redirect('profile');
    }

    public function actionLogout(){
        \Yii::$app->user->logout();
        return $this->redirect('login');
    }

    public function actionRegister(){
        $model = new RegisterForm();
        if (\Yii::$app->request->isPost && $model->load(\Yii::$app->request->post())){
            if ($model->validate() && $model->register()){

                \Yii::$app->session->setFlash('register-success', 'Аккаунт успешно создан!');
                return $this->redirect('login');
            }

        }
        return $this->render('register',compact('model'));
    }

    public function actionSettings(){
        $model = User::findOne(Yii::$app->user->getId());

        if ($this->request->isPost && $model->load($this->request->post())){

            if(!empty($model->newPassword)){
                $model->password = Yii::$app->security->generatePasswordHash($model->newPassword);
            }

            if ($model->save()){
                Yii::$app->session->setFlash('settings-success','Данные успешно сохранены!');
                return $this->redirect('profile');
            }
        }
        return $this->render('settings',compact('model'));
    }
}