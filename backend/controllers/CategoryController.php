<?php

namespace backend\controllers;

use backend\models\UploadFile;
use common\models\Category;

/**
* This is the class for controller "CategoryController".
*/
class CategoryController extends \backend\controllers\base\CategoryController
{
    public function actionCreate()
    {
        $model = new Category;

        if ($_POST) {
            $_POST['Category']['image'] = UploadFile::upload($model, 'image', 'image_file', ['427x550']);
        }

        try {
            if ($model->load($_POST) && $model->save()) {
                return $this->redirect(['index']);
            } elseif (!\Yii::$app->request->isPost) {
                $model->load($_GET);
            }
        } catch (\Exception $e) {
            $msg = (isset($e->errorInfo[2]))?$e->errorInfo[2]:$e->getMessage();
            $model->addError('_exception', $msg);
        }
        return $this->render('create', ['model' => $model]);
    }

    /**
     * Updates an existing Category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($_POST) {
            $_POST['Category']['image'] = UploadFile::upload($model, 'image', 'image_file', ['427x550']);
        }

        if ($model->load($_POST) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
}
