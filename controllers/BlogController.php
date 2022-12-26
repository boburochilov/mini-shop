<?php

namespace app\controllers;

use app\models\Blog;
use app\models\BlogCategories;
use yii\data\Pagination;
use yii\web\Controller;

class BlogController extends Controller
{
    public function actionView($id){
        $model = Blog::findOne($id);

        $model->seen_count += 1;
        $model->save();

        $popularPosts = Blog::find()->where(['status' => 1])->andWhere(['popular_post' => 1])->limit(3)->all();
        $blogCategories = BlogCategories::find()->where(['status' => 1])->all();
        $blogCategory = BlogCategories::findOne($model->category_id);
        return $this->render('view',compact('model','blogCategories','blogCategory','popularPosts'));
    }

    public function actionByCat($id){

        // pagination

        $query = Blog::find()->where(['category_id' => $id])->andWhere(['status' => 1]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 6]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        // pagination

        $popularPosts = Blog::find()->limit(10)->where(['status' => 1])->limit(3)->all();
        $blogCategories = BlogCategories::find()->where(['status' => 1])->all();
        $blogCategory = BlogCategories::findOne($id);
        return $this->render('by-cat',compact('blogCategories','blogCategory','popularPosts','pages','models','pages'));
    }

    public function actionIndex(){
        // pagination

        $query = Blog::find()->where(['status' => 1]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 6]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        // pagination

        $popularPosts = Blog::find()->limit(10)->where(['status' => 1])->limit(3)->all();
        $blogCategories = BlogCategories::find()->where(['status' => 1])->all();
        return $this->render('index',compact('blogCategories','popularPosts','pages','models','pages'));
    }

}