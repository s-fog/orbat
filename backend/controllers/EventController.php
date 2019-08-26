<?php

namespace backend\controllers;

use backend\models\UploadFile;
use common\models\Event;
use yii\filters\AccessControl;

/**
* This is the class for controller "EventController".
*/
class EventController extends \backend\controllers\base\EventController
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

    public function actionCreate()
    {
        $model = new Event;

        if ($_POST) {
            $_POST['Event']['image'] = UploadFile::upload($model, 'image', 'image_file', ['1200x400']);
            $_POST['Event']['date'] = strtotime($_POST['Event']['date']);
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
     * Updates an existing Event model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($_POST) {
            $_POST['Event']['image'] = UploadFile::upload($model, 'image', 'image_file', ['1200x400']);
            $_POST['Event']['date'] = strtotime($_POST['Event']['date']);
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
