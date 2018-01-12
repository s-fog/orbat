<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "VideoController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class VideoController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\Video';
}
