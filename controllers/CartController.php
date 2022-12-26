<?php

namespace app\controllers;

use app\models\Order;
use app\models\OrderItems;
use app\models\TelegramNotificator;
use app\models\User;
use yii\web\Controller;

class CartController extends Controller
{
    public function actionCheckout(){
        $models = new Order();
        $user = User::findOne(\Yii::$app->user->getId());
        if (\Yii::$app->request->isPost && $models->load(\Yii::$app->request->post())){
            $cart = $_SESSION['cart'];
            $models->created_date = date("Y-m-d H:i:s");
            $models->updated_date = date("Y-m-d H:i:s");
            $models->total_product_price = $cart['total_price'];
            $models->total_product_count = $cart['total_qty'];
            if (\Yii::$app->user->getId()){
                $models->user = \Yii::$app->user->getId();
            }
            if ($models->save()){
                \Yii::$app->session->setFlash('order-success','Ваш заказ принят! Мы скоро с Вами свяжемся :)');

                foreach ($cart['product'] as $key => $product){
                    $orderItem = new OrderItems();
                    $orderItem->order_id = $models->id;
                    $orderItem->product_id = $key;
                    $orderItem->product_count = $product['qty'];
                    $orderItem->product_price = $product['price'];
                    $orderItem->save();
                }
                unset($_SESSION['cart']);

                $notificator = new TelegramNotificator();
                $notificator->sendOrderNotification($models);

                return $this->redirect('success');
            }
        }
        return $this->render('checkout',compact('models','user'));
    }
    public function actionSuccess(){
        return $this->render('success');
    }
}