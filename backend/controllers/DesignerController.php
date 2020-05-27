<?php

namespace backend\controllers;

use backend\models\UploadFile;
use common\models\Designer;
use common\models\Product;
use himiklab\sortablegrid\SortableGridAction;
use yii\filters\AccessControl;

/**
* This is the class for controller "DesignerController".
*/
class DesignerController extends \backend\controllers\base\DesignerController
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'sort' => [
                'class' => SortableGridAction::className(),
                'modelName' => Designer::className(),
            ],
        ];
    }

    public function actionCreate()
    {
        $model = new Designer;

        if ($_POST) {
            $_POST['Designer']['image'] = UploadFile::upload($model, 'image', 'image_file', ['284x284']);
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
     * Updates an existing Designer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($_POST) {
            $_POST['Designer']['image'] = UploadFile::upload($model, 'image', 'image_file', ['284x284']);
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
