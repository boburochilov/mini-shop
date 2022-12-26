<?php

namespace app\modules\admin\controllers;

use app\components\StaticFunctions;
use app\models\ProductCategory;
use app\models\SellingBrands;
use app\models\SellingBrandsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SellingBrandsController implements the CRUD actions for SellingBrands model.
 */
class SellingBrandsController extends DefaultController
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
     * Lists all SellingBrands models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SellingBrandsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SellingBrands model.
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
     * Creates a new SellingBrands model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SellingBrands();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                $image = UploadedFile::getInstance($model,'image');
                if (!empty($image)){
                    $model->image = StaticFunctions::saveImage('selling-brands',$model->id,$image);
                    $model->save();
                }
                return $this->redirect(['index']);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SellingBrands model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImage = $model->image;
        if ($this->request->isPost && $model->load($this->request->post())) {
            $model->image = $oldImage;
            $image = UploadedFile::getInstance($model,'image');
            if (!empty($image)){
                $model->image = StaticFunctions::saveImage('selling-brands',$model->id,$image);
                StaticFunctions::deleteImage('selling-brands',$model->id,$oldImage);
            }
            $model->save();
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SellingBrands model.
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

    /**
     * Finds the SellingBrands model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return SellingBrands the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SellingBrands::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
