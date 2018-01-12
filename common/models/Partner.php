<?php

namespace common\models;

use Yii;
use \common\models\base\Partner as BasePartner;
use yii\behaviors\SluggableBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "partner".
 */
class Partner extends BasePartner
{
    public $image_file;

public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                [
                    'class' => SluggableBehavior::className(),
                    'attribute' => 'name',
                    'slugAttribute' => 'alias',
                    'immutable' => true
                ],
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
             parent::rules(),
             [
                  # custom validation rules
             ]
        );
    }
}
