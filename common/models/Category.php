<?php

namespace common\models;

use Yii;
use \common\models\base\Category as BaseCategory;
use yii\behaviors\SluggableBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "category".
 */
class Category extends BaseCategory
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
                 [['image_file'], 'image', 'skipOnEmpty' => true, 'minWidth' => 427, 'minHeight' => 550, 'extensions' => 'png, gif, jpg, jpeg']
             ]
        );
    }
}
