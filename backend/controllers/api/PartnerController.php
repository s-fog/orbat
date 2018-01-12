<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "PartnerController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class PartnerController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\Partner';
}
