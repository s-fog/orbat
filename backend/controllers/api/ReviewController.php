<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "ReviewController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class ReviewController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\Review';
}
