<?php

namespace backend\controllers;

use yii\filters\AccessControl;

/**
* This is the class for controller "VideoReviewController".
*/
class VideoReviewController extends \backend\controllers\base\VideoReviewController
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

}
