<?php


namespace app\models;


use Yii;

class WishModel
{
    public function addToWish($product,$quantity = 1){
        session_start();
        $_SESSION['wish']['product'][$product->id]['id'] = $product->id;
        $_SESSION['wish']['product'][$product->id]['title'] = $product->title;
        $_SESSION['wish']['product'][$product->id]['image'] = $product->image;
        $_SESSION['wish']['product'][$product->id]['price'] = $product->price;
        $_SESSION['wish']['product'][$product->id]['qty'] = (empty($_SESSION['wish']['product'][$product->id]['qty'])) ? $quantity : $_SESSION['wish']['product'][$product->id]['qty'] + $quantity;

        if ($_SESSION['wish']['product'][$product->id]['qty'] <= 0){
            unset($_SESSION['wish']['product'][$product->id]);
        }

        $_SESSION['wish']['total_price'] = (empty($_SESSION['wish']['total_price'])) ? $product->price : $_SESSION['wish']['total_price'] + $product->price * $quantity;
        $_SESSION['wish']['total_qty'] = (empty($_SESSION['wish']['total_qty'])) ? $quantity : $_SESSION['wish']['total_qty'] + $quantity;
    }


}