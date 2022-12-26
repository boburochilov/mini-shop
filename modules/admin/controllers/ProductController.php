<?php

namespace app\modules\admin\controllers;

use app\components\StaticFunctions;
use app\models\CommonModel;
use app\models\Product;
use app\models\ProductCategory;
use app\models\ProductChar;
use app\models\ProductImages;
use app\models\ProductSearch;
use app\modules\admin\controllers\DefaultController;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends DefaultController
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Product models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Product();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                $image = UploadedFile::getInstance($model,'image');
                if (!empty($image)){
                    $model->image = StaticFunctions::saveImage('product',$model->id,$image);
                    $model->save();
                }

                return $this->redirect(['update', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $productGalleryImages = ProductImages::find()->where(['product_id' => $id])->all();
        $oldImage = $model->image;
        if ($this->request->isPost && $model->load($this->request->post())) {
            $model->image = $oldImage;
            $image = UploadedFile::getInstance($model,'image');
            if (!empty($image)){
                $model->image = StaticFunctions::saveImage('product',$model->id,$image);
                StaticFunctions::deleteImage('product',$model->id,$oldImage);
            }

            $galleryImages = UploadedFile::getInstances($model,'gallery');

            if (!empty($galleryImages)){
                foreach ($galleryImages as $galleryImage){
                    $fileName = StaticFunctions::saveImage('product',$model->id,$galleryImage);
                    $prodImage = new ProductImages();
                    $prodImage->product_id = $model->id;
                    $prodImage->image = $fileName;
                    if($prodImage->save()){

                    }else{
                        debug($prodImage->errors);
                    }
                }
            }

            $model->save();
            return $this->redirect(['index']);

        }



        return $this->render('update', [
            'model' => $model,
            'productGalleryImages' => $productGalleryImages
        ]);
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionDeleteGalImage($id){
        $image = ProductImages::findOne($id);
        $productId = $image->product_id;
        StaticFunctions::deleteImage('product',$productId,$image->image);
        $image->delete();
        return $this->redirect(['update','id'=>$productId]);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
