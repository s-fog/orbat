<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "LetterReviewController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class LetterReviewController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\LetterReview';
}
