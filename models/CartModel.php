<?php


namespace app\models;


use Yii;

class CartModel
{
    public function addToCart($product,$quantity = 1){
        session_start();
        $_SESSION['cart']['product'][$product->id]['id'] = $product->id;
        $_SESSION['cart']['product'][$product->id]['title'] = $product->title;
        $_SESSION['cart']['product'][$product->id]['image'] = $product->image;
        $_SESSION['cart']['product'][$product->id]['price'] = $product->price;
        $_SESSION['cart']['product'][$product->id]['qty'] = (empty($_SESSION['cart']['product'][$product->id]['qty'])) ? $quantity : $_SESSION['cart']['product'][$product->id]['qty'] + $quantity;

        if ($_SESSION['cart']['product'][$product->id]['qty'] <= 0){
            unset($_SESSION['cart']['product'][$product->id]);
        }

        $_SESSION['cart']['total_price'] = (empty($_SESSION['cart']['total_price'])) ? $product->price : $_SESSION['cart']['total_price'] + $product->price * $quantity;
        $_SESSION['cart']['total_qty'] = (empty($_SESSION['cart']['total_qty'])) ? $quantity : $_SESSION['cart']['total_qty'] + $quantity;
    }


}