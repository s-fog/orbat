<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "VideoReviewController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class VideoReviewController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\VideoReview';
}
