<?php

namespace backend\controllers;

use backend\models\UploadFile;
use common\models\Product;

/**
* This is the class for controller "ProductController".
*/
class ProductController extends \backend\controllers\base\ProductController
{
    public function actionCreate()
    {
        $model = new Product;

        if ($_POST) {
            $_POST['Product']['plan'] = UploadFile::upload($model, 'plan', 'plan_file', []);
            $_POST['Product']['image1'] = UploadFile::upload($model, 'image1', 'image1_file', []);
            $_POST['Product']['image2'] = UploadFile::upload($model, 'image2', 'image2_file', []);
            $_POST['Product']['image3'] = UploadFile::upload($model, 'image3', 'image3_file', []);
            $_POST['Product']['image4'] = UploadFile::upload($model, 'image4', 'image4_file', []);
            $_POST['Product']['image5'] = UploadFile::upload($model, 'image5', 'image5_file', []);
            $_POST['Product']['image6'] = UploadFile::upload($model, 'image6', 'image6_file', []);
            $_POST['Product']['image7'] = UploadFile::upload($model, 'image7', 'image7_file', []);
            $_POST['Product']['image8'] = UploadFile::upload($model, 'image8', 'image8_file', []);
            $_POST['Product']['image9'] = UploadFile::upload($model, 'image9', 'image9_file', []);
            $_POST['Product']['image10'] = UploadFile::upload($model, 'image10', 'image10_file', []);
            $_POST['Product']['image11'] = UploadFile::upload($model, 'image11', 'image11_file', []);
            $_POST['Product']['image12'] = UploadFile::upload($model, 'image12', 'image12_file', []);
            $_POST['Product']['image13'] = UploadFile::upload($model, 'image13', 'image13_file', []);
            $_POST['Product']['image14'] = UploadFile::upload($model, 'image14', 'image14_file', []);
            $_POST['Product']['image15'] = UploadFile::upload($model, 'image15', 'image15_file', []);
            $_POST['Product']['image16'] = UploadFile::upload($model, 'image16', 'image16_file', []);
            $_POST['Product']['image_small1'] = UploadFile::upload($model, 'image_small1', 'image_small1_file', ['116x116', '426x426']);
            $_POST['Product']['image_small2'] = UploadFile::upload($model, 'image_small2', 'image_small2_file', ['116x116', '426x426']);
            $_POST['Product']['image_small3'] = UploadFile::upload($model, 'image_small3', 'image_small3_file', ['116x116', '426x426']);
            $_POST['Product']['image_small4'] = UploadFile::upload($model, 'image_small4', 'image_small4_file', ['116x116', '426x426']);
            $_POST['Product']['image_small5'] = UploadFile::upload($model, 'image_small5', 'image_small5_file', ['116x116', '426x426']);
            $_POST['Product']['image_small6'] = UploadFile::upload($model, 'image_small6', 'image_small6_file', ['116x116', '426x426']);
            $_POST['Product']['image_small7'] = UploadFile::upload($model, 'image_small7', 'image_small7_file', ['116x116', '426x426']);
            $_POST['Product']['image_small8'] = UploadFile::upload($model, 'image_small8', 'image_small8_file', ['116x116', '426x426']);
            $_POST['Product']['image_small9'] = UploadFile::upload($model, 'image_small9', 'image_small9_file', ['116x116', '426x426']);
            $_POST['Product']['image_small10'] = UploadFile::upload($model, 'image_small10', 'image_small10_file', ['116x116', '426x426']);
            $_POST['Product']['image_small11'] = UploadFile::upload($model, 'image_small11', 'image_small11_file', ['116x116', '426x426']);
            $_POST['Product']['image_small12'] = UploadFile::upload($model, 'image_small12', 'image_small12_file', ['116x116', '426x426']);
            $_POST['Product']['image_small13'] = UploadFile::upload($model, 'image_small13', 'image_small13_file', ['116x116', '426x426']);
            $_POST['Product']['image_small14'] = UploadFile::upload($model, 'image_small14', 'image_small14_file', ['116x116', '426x426']);
            $_POST['Product']['image_small15'] = UploadFile::upload($model, 'image_small15', 'image_small15_file', ['116x116', '426x426']);
            $_POST['Product']['image_small16'] = UploadFile::upload($model, 'image_small16', 'image_small16_file', ['116x116', '426x426']);
            $_POST['Product']['slider_image1'] = UploadFile::upload($model, 'slider_image1', 'slider_image1_file', []);
            $_POST['Product']['slider_image2'] = UploadFile::upload($model, 'slider_image2', 'slider_image2_file', []);
            $_POST['Product']['slider_image3'] = UploadFile::upload($model, 'slider_image3', 'slider_image3_file', []);
            $_POST['Product']['slider_image4'] = UploadFile::upload($model, 'slider_image4', 'slider_image4_file', []);
            $_POST['Product']['slider_image5'] = UploadFile::upload($model, 'slider_image5', 'slider_image5_file', []);
            $_POST['Product']['slider_image_small1'] = UploadFile::upload($model, 'slider_image_small1', 'slider_image_small1_file', ['950x540']);
            $_POST['Product']['slider_image_small2'] = UploadFile::upload($model, 'slider_image_small2', 'slider_image_small2_file', ['950x540']);
            $_POST['Product']['slider_image_small3'] = UploadFile::upload($model, 'slider_image_small3', 'slider_image_small3_file', ['950x540']);
            $_POST['Product']['slider_image_small4'] = UploadFile::upload($model, 'slider_image_small4', 'slider_image_small4_file', ['950x540']);
            $_POST['Product']['slider_image_small5'] = UploadFile::upload($model, 'slider_image_small5', 'slider_image_small5_file', ['950x540']);
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
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($_POST) {
            $_POST['Product']['plan'] = UploadFile::upload($model, 'plan', 'plan_file', []);
            $_POST['Product']['image1'] = UploadFile::upload($model, 'image1', 'image1_file', []);
            $_POST['Product']['image2'] = UploadFile::upload($model, 'image2', 'image2_file', []);
            $_POST['Product']['image3'] = UploadFile::upload($model, 'image3', 'image3_file', []);
            $_POST['Product']['image4'] = UploadFile::upload($model, 'image4', 'image4_file', []);
            $_POST['Product']['image5'] = UploadFile::upload($model, 'image5', 'image5_file', []);
            $_POST['Product']['image6'] = UploadFile::upload($model, 'image6', 'image6_file', []);
            $_POST['Product']['image7'] = UploadFile::upload($model, 'image7', 'image7_file', []);
            $_POST['Product']['image8'] = UploadFile::upload($model, 'image8', 'image8_file', []);
            $_POST['Product']['image9'] = UploadFile::upload($model, 'image9', 'image9_file', []);
            $_POST['Product']['image10'] = UploadFile::upload($model, 'image10', 'image10_file', []);
            $_POST['Product']['image11'] = UploadFile::upload($model, 'image11', 'image11_file', []);
            $_POST['Product']['image12'] = UploadFile::upload($model, 'image12', 'image12_file', []);
            $_POST['Product']['image13'] = UploadFile::upload($model, 'image13', 'image13_file', []);
            $_POST['Product']['image14'] = UploadFile::upload($model, 'image14', 'image14_file', []);
            $_POST['Product']['image15'] = UploadFile::upload($model, 'image15', 'image15_file', []);
            $_POST['Product']['image16'] = UploadFile::upload($model, 'image16', 'image16_file', []);
            $_POST['Product']['image_small1'] = UploadFile::upload($model, 'image_small1', 'image_small1_file', ['116x116', '426x426']);
            $_POST['Product']['image_small2'] = UploadFile::upload($model, 'image_small2', 'image_small2_file', ['116x116', '426x426']);
            $_POST['Product']['image_small3'] = UploadFile::upload($model, 'image_small3', 'image_small3_file', ['116x116', '426x426']);
            $_POST['Product']['image_small4'] = UploadFile::upload($model, 'image_small4', 'image_small4_file', ['116x116', '426x426']);
            $_POST['Product']['image_small5'] = UploadFile::upload($model, 'image_small5', 'image_small5_file', ['116x116', '426x426']);
            $_POST['Product']['image_small6'] = UploadFile::upload($model, 'image_small6', 'image_small6_file', ['116x116', '426x426']);
            $_POST['Product']['image_small7'] = UploadFile::upload($model, 'image_small7', 'image_small7_file', ['116x116', '426x426']);
            $_POST['Product']['image_small8'] = UploadFile::upload($model, 'image_small8', 'image_small8_file', ['116x116', '426x426']);
            $_POST['Product']['image_small9'] = UploadFile::upload($model, 'image_small9', 'image_small9_file', ['116x116', '426x426']);
            $_POST['Product']['image_small10'] = UploadFile::upload($model, 'image_small10', 'image_small10_file', ['116x116', '426x426']);
            $_POST['Product']['image_small11'] = UploadFile::upload($model, 'image_small11', 'image_small11_file', ['116x116', '426x426']);
            $_POST['Product']['image_small12'] = UploadFile::upload($model, 'image_small12', 'image_small12_file', ['116x116', '426x426']);
            $_POST['Product']['image_small13'] = UploadFile::upload($model, 'image_small13', 'image_small13_file', ['116x116', '426x426']);
            $_POST['Product']['image_small14'] = UploadFile::upload($model, 'image_small14', 'image_small14_file', ['116x116', '426x426']);
            $_POST['Product']['image_small15'] = UploadFile::upload($model, 'image_small15', 'image_small15_file', ['116x116', '426x426']);
            $_POST['Product']['image_small16'] = UploadFile::upload($model, 'image_small16', 'image_small16_file', ['116x116', '426x426']);
            $_POST['Product']['slider_image1'] = UploadFile::upload($model, 'slider_image1', 'slider_image1_file', []);
            $_POST['Product']['slider_image2'] = UploadFile::upload($model, 'slider_image2', 'slider_image2_file', []);
            $_POST['Product']['slider_image3'] = UploadFile::upload($model, 'slider_image3', 'slider_image3_file', []);
            $_POST['Product']['slider_image4'] = UploadFile::upload($model, 'slider_image4', 'slider_image4_file', []);
            $_POST['Product']['slider_image5'] = UploadFile::upload($model, 'slider_image5', 'slider_image5_file', []);
            $_POST['Product']['slider_image_small1'] = UploadFile::upload($model, 'slider_image_small1', 'slider_image_small1_file', ['950x540']);
            $_POST['Product']['slider_image_small2'] = UploadFile::upload($model, 'slider_image_small2', 'slider_image_small2_file', ['950x540']);
            $_POST['Product']['slider_image_small3'] = UploadFile::upload($model, 'slider_image_small3', 'slider_image_small3_file', ['950x540']);
            $_POST['Product']['slider_image_small4'] = UploadFile::upload($model, 'slider_image_small4', 'slider_image_small4_file', ['950x540']);
            $_POST['Product']['slider_image_small5'] = UploadFile::upload($model, 'slider_image_small5', 'slider_image_small5_file', ['950x540']);
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
