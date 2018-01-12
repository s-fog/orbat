<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "DesignerController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class DesignerController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\Designer';
}
