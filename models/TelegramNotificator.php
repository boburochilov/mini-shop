<?php

namespace app\models;


use Yii;
use yii\base\Model;
use yii\httpclient\Client;

class TelegramNotificator extends Model
{

    public function sendOrderNotification($orderModel){

        $message = "
<b>Новый заказ, свяжитесь с покупателем быстро!!!</b>
<b>Имя:</b> $orderModel->full_name
<b>Адрес:</b> $orderModel->address
<b>Город:</b> $orderModel->city
<b>Номер телефона:</b> $orderModel->phone
<b>Общее количество товаров:</b>$orderModel->total_product_count
<b>Общая стоимость товаров:</b>$orderModel->total_product_price
    ---------------------------------------
    <b>Товары</b>
    ";

        $orderedProducts = OrderItems::find()->where(['order_id' => $orderModel->id])->all();
        foreach ($orderedProducts as $product){

            $productData = Product::findOne($product->product_id);
            $productText = "
Имя : $productData->title
Цена : $product->product_price
Количество : $product->product_count
_______________________________________
             
            ";
            $message .= $productText;
        }

        $client = new Client();

        $managers = Yii::$app->params['managersTelegramIds'];

        foreach ($managers as $manager){
            $response = $client->createRequest()
                ->setMethod('GET')
                ->setUrl('https://api.telegram.org/bot5988238341:AAE_0gVaoho6xBX7kZUACHhFGy7qFu4-84Y/sendMessage')
                ->setData(['text' => $message, 'chat_id' => $manager,'parse_mode' => 'HTML'])
                ->send();
        }
    }

    public function sendPaymentNotification($order){
        $message = "Заказ под     <b>$order->id</b>    -id оплачен!
<b>Имя:</b> $order->full_name
<b>Адрес:</b> $order->address
<b>Город:</b> $order->city
<b>Номер телефона:</b> $order->phone

<b>Управлять этим заказом-</b>
http://drodo/admin/order?OrderSearch%5Bid%5D=$order->id

";
        
        
        $client = new Client();
        $managers = Yii::$app->params['managersTelegramIds'];
        foreach ($managers as $manager){
            $response = $client->createRequest()
                ->setMethod('GET')
                ->setUrl('https://api.telegram.org/bot5988238341:AAE_0gVaoho6xBX7kZUACHhFGy7qFu4-84Y/sendMessage')
                ->setData(['text' => $message, 'chat_id' => $manager,'parse_mode' => 'HTML'])
                ->send();
        }
    }

    public function sendConfirmNotification($order){
        $message = "Заказ под    <b>$order->id</b>    - id Подтвержденный!
<b>Имя:</b> $order->full_name
<b>Адрес:</b> $order->address
<b>Город:</b> $order->city
<b>Номер телефона:</b> $order->phone

<b>Управлять этим заказом-</b>
http://drodo/admin/order?OrderSearch%5Bid%5D=$order->id

";


        $client = new Client();
        $managers = Yii::$app->params['managersTelegramIds'];
        foreach ($managers as $manager){
            $response = $client->createRequest()
                ->setMethod('GET')
                ->setUrl('https://api.telegram.org/bot5988238341:AAE_0gVaoho6xBX7kZUACHhFGy7qFu4-84Y/sendMessage')
                ->setData(['text' => $message, 'chat_id' => $manager,'parse_mode' => 'HTML'])
                ->send();
        }
    }

    public function sendCancelNotification($order){
        $message = "Заказ под    <b>$order->id</b>    - id Отменено!
<b>Имя:</b> $order->full_name
<b>Адрес:</b> $order->address
<b>Город:</b> $order->city
<b>Номер телефона:</b> $order->phone

<b>Управлять этим заказом-</b>
http://drodo/admin/order?OrderSearch%5Bid%5D=$order->id

";


        $client = new Client();
        $managers = Yii::$app->params['managersTelegramIds'];
        foreach ($managers as $manager){
            $response = $client->createRequest()
                ->setMethod('GET')
                ->setUrl('https://api.telegram.org/bot5988238341:AAE_0gVaoho6xBX7kZUACHhFGy7qFu4-84Y/sendMessage')
                ->setData(['text' => $message, 'chat_id' => $manager,'parse_mode' => 'HTML'])
                ->send();
        }
    }

    public function sendReviewNotification($comment){
        $message = "Комментарий написан к товару под ID -  <b>$comment->product_id</b>!
<b>Имя:</b> $comment->name
<b>Е-маил:</b> $comment->email
<b>Текст комментария:</b> $comment->body

<b>Ссылка для просмотра обзора-</b>  
http://drodo/product/view?id=$comment->product_id

<b>Администрирование этого обзора-</b>  
http://drodo/admin/reviews?ReviewsSearch%5Bid%5D=$comment->id

";


        $client = new Client();
        $managers = Yii::$app->params['managersTelegramIds'];
        foreach ($managers as $manager){
            $response = $client->createRequest()
                ->setMethod('GET')
                ->setUrl('https://api.telegram.org/bot5988238341:AAE_0gVaoho6xBX7kZUACHhFGy7qFu4-84Y/sendMessage')
                ->setData(['text' => $message, 'chat_id' => $manager,'parse_mode' => 'HTML'])
                ->send();
        }
    }


}