<?php

namespace app\controllers;

use app\models\CartModel;
use app\models\Product;
use app\models\ProductCategory;
use app\models\ProductColor;
use app\models\ProductImages;
use app\models\Reviews;
use app\models\SellingBrands;
use app\models\TelegramNotificator;
use app\models\WishModel;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;

class ProductController extends Controller
{
    public function actionByCat($id){
        $bestSellers = Product::find()->where(['best_selling' => 1])->andWhere(['status' => 1])->limit(3)->all();
        $allProductCategories = ProductCategory::find()->where(['status' => 1])->all();
        $allProductBrands = SellingBrands::find()->where(['status' => 1])->all();
        $allProductColors = ProductColor::find()->where(['status' => 1])->all();
        $productCategory = ProductCategory::findOne($id);

        // pagination

        $query = Product::find()->where(['category_id' => $id])->andWhere(['status' => 1]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 9]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        // paginationw

        return $this->render('by-cat',compact('models','pages','productCategory','allProductCategories','allProductBrands','allProductColors','bestSellers'));
    }

    public function actionByBrand($id){
        $bestSellers = Product::find()->where(['best_selling' => 1])->andWhere(['status' => 1])->limit(3)->all();
        $allProductCategories = ProductCategory::find()->where(['status' => 1])->all();
        $allProductBrands = SellingBrands::find()->where(['status' => 1])->all();
        $allProductColors = ProductColor::find()->where(['status' => 1])->all();
        $productBrand = SellingBrands::findOne($id);

        // pagination

        $query = Product::find()->where(['brand_id' => $id])->andWhere(['status' => 1]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 9]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        // pagination

        return $this->render('by-brand',compact('models','pages','allProductCategories','allProductBrands','productBrand','allProductColors','bestSellers'));
    }

    public function actionByColor($id){

        $bestSellers = Product::find()->where(['best_selling' => 1])->andWhere(['status' => 1])->limit(3)->all();
        $allProductCategories = ProductCategory::find()->where(['status' => 1])->all();
        $allProductBrands = SellingBrands::find()->where(['status' => 1])->all();
        $allProductColors = ProductColor::find()->where(['status' => 1])->all();
        $productColor = ProductColor::findOne($id);

        // pagination

        $query = Product::find()->where(['color_id' => $id])->andWhere(['status' => 1]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 9]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        // pagination

        return $this->render('by-color',compact('query','pages','models','productColor','allProductCategories','allProductBrands','allProductColors','bestSellers'));
    }



    public function actionSelect(){
        $min = \Yii::$app->request->get('min');
        $max = \Yii::$app->request->get('max');

        $products = Product::find()->where(['status' => 1])->andWhere(['>','price',$min])->andWhere(['<','price',$max])->all();
    }

    public function actionFilter(){

        $min = \Yii::$app->request->get('min');
        $max = \Yii::$app->request->get('max');

        $bestSellers = Product::find()->where(['best_selling' => 1])->andWhere(['status' => 1])->limit(3)->all();
        $allProductCategories = ProductCategory::find()->where(['status' => 1])->all();
        $allProductBrands = SellingBrands::find()->where(['status' => 1])->all();
        $allProductColors = ProductColor::find()->where(['status' => 1])->all();

        $filter = Product::find()->where(['status' => 1])->andWhere(['>=','price',$min])->andWhere(['<=','price',$max])->all();

        return $this->render('filter',[
            'bestSellers' => $bestSellers,
            'allProductCategories' => $allProductCategories,
            'allProductBrands' => $allProductBrands,
            'allProductColors' => $allProductColors,
            'filter' => $filter,
            'min' => $min,
            'max' => $max
        ]);

    }

//    public function actionBanner($id){
//        $bestSellers = Product::find()->where(['best_selling' => 1])->andWhere(['status' => 1])->limit(3)->all();
//        $allProductCategories = ProductCategory::find()->where(['status' => 1])->all();
//        $allProductBrands = SellingBrands::find()->where(['status' => 1])->all();
//        $allProductColors = ProductColor::find()->where(['status' => 1])->all();
//        $productColor = ProductColor::findOne($id);
//
//        // pagination
//
//        $query = Product::find()->where(['new' => 1])->andWhere(['status' => 1]);
//        $countQuery = clone $query;
//        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 9]);
//        $models = $query->offset($pages->offset)
//            ->limit($pages->limit)
//            ->all();
//
//        // pagination
//
//        return $this->render('banner',compact('query','pages','models','productColor','allProductCategories','allProductBrands','allProductColors','bestSellers'));
//    }

    public function actionView($id)
    {
        $models = Product::findOne($id);
        $relatedProducts = Product::find()->where(['category_id' => $models->category_id])->all();
        $productCategory = ProductCategory::findOne($models->category_id);
        $productImages = ProductImages::find()->where(['product_id' => $id])->all();
        $productBrand = SellingBrands::findOne($models->brand_id);
        $productReviews = Reviews::find()->where(['product_id' => $id])->andWhere(['status' => 1])->all();

        $comment = new Reviews();
        if(Yii::$app->request->isPost && $comment->load(Yii::$app->request->post())){
            $comment->product_id = $id;
            $comment->created_date = date("Y-m-d H:i:s");
            $comment->updated_date = date("Y-m-d H:i:s");
            if ($comment->save()){
                Yii::$app->session->setFlash('review-success','Ваш комментарий был успешно отправлен!');
                $notificator = new TelegramNotificator();
                $notificator->sendReviewNotification($comment);
                return $this->refresh();
            }
        }

        return $this->render('view',compact('models','productCategory','comment','productImages','productBrand','relatedProducts','productReviews'));
    }

    public function actionSearch($search){

        $min = \Yii::$app->request->get('min');
        $max = \Yii::$app->request->get('max');

        $models = Product::find()->where(['like','title',$search])->all();
        $bestSellers = Product::find()->where(['best_selling' => 1])->andWhere(['sxtatus' => 1])->limit(3)->all();
        $allProductCategories = ProductCategory::find()->where(['status' => 1])->all();
        $allProductBrands = SellingBrands::find()->where(['status' => 1])->all();
        $allProductColors = ProductColor::find()->where(['status' => 1])->all();
        return $this->render('search',[
            'bestSellers' => $bestSellers,
            'allProductCategories' => $allProductCategories,
            'allProductBrands' => $allProductBrands,
            'allProductColors' => $allProductColors,
            'models' => $models,
            'min' => $min,
            'max' => $max
        ]);
    }

    public function actionHotDeal(){

        $min = \Yii::$app->request->get('min');
        $max = \Yii::$app->request->get('max');

        $bestSellers = Product::find()->where(['best_selling' => 1])->andWhere(['status' => 1])->limit(3)->all();
        $allProductCategories = ProductCategory::find()->where(['status' => 1])->all();
        $allProductBrands = SellingBrands::find()->where(['status' => 1])->all();
        $allProductColors = ProductColor::find()->where(['status' => 1])->all();

        $filter = Product::find()->where(['status' => 1])->andWhere(['sale' => 1])->all();

        return $this->render('hot-deal',[
            'bestSellers' => $bestSellers,
            'allProductCategories' => $allProductCategories,
            'allProductBrands' => $allProductBrands,
            'allProductColors' => $allProductColors,
            'filter' => $filter,
            'min' => $min,
            'max' => $max
        ]);

    }

    // add cart

    public function actionAddToCart($id){
        $product = Product::findOne($id);
        $model = new CartModel();
        $model->addToCart($product);
        return $this->renderAjax('show-cart');
    }

    public function actionShowCart(){
        return $this->renderPartial('show-cart');
    }

    public function actionReCount($id,$count)
    {
        $cart = new CartModel();
        $product = Product::findOne($id);
        $cart->addToCart($product, $count);
        return $this->renderAjax('show-cart');
    }

    //wishlist

    public function actionAddToWish($id){
        $product = Product::findOne($id);
        $model = new WishModel();
        $model->addToWish($product);
        return $this->renderAjax('wish-list');
    }

    public function actionShowWish(){
        return $this->renderPartial('wish-list');
    }

    public function actionWishReCount($id,$count)
    {
        $cart = new WishModel();
        $product = Product::findOne($id);
        $cart->addToWish($product, $count);
        return $this->renderAjax('wish-list');
    }

    //wishlist

//    public function actionTotalCount(){
//        return $_SESSION['cart']['total_qty'];
//    }

    //add to cart

    public function actionIndex(){
        $bestSellers = Product::find()->where(['best_selling' => 1])->andWhere(['status' => 1])->limit(3)->all();
        $allProductCategories = ProductCategory::find()->where(['status' => 1])->all();
        $allProductBrands = SellingBrands::find()->where(['status' => 1])->all();
        $allProductColors = ProductColor::find()->where(['status' => 1])->all();

        // pagination

        $query = Product::find()->where(['status' => 1]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 9]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        // pagination

        return $this->render('index',compact('models','pages','allProductCategories','allProductBrands','allProductColors','bestSellers'));
    }

    public function actionReCalc($id,$count)
    {
        $cart = new CartModel();
        $product = Product::findOne($id);
        $cart->addToCart($product, $count);
        return $this->redirect('/cart/checkout');
    }

    public function actionSales(){
        $bestSellers = Product::find()->where(['best_selling' => 1])->andWhere(['status' => 1])->limit(3)->all();
        $allProductCategories = ProductCategory::find()->where(['status' => 1])->all();
        $allProductBrands = SellingBrands::find()->where(['status' => 1])->all();
        $allProductColors = ProductColor::find()->where(['status' => 1])->all();

        // pagination

        $query = Product::find()->where(['status' => 1])->andWhere(['sale' => 1]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 9]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        // pagination

        return $this->render('sales',compact('models','pages','allProductCategories','allProductBrands','allProductColors','bestSellers'));
    }

    public function actionNewArrivals(){
        $bestSellers = Product::find()->where(['best_selling' => 1])->andWhere(['status' => 1])->limit(3)->all();
        $allProductCategories = ProductCategory::find()->where(['status' => 1])->all();
        $allProductBrands = SellingBrands::find()->where(['status' => 1])->all();
        $allProductColors = ProductColor::find()->where(['status' => 1])->all();

        // pagination

        $query = Product::find()->where(['status' => 1])->andWhere(['new' => 1]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 9]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        // pagination

        return $this->render('new-arrivals',compact('models','pages','allProductCategories','allProductBrands','allProductColors','bestSellers'));
    }


}