<?php

namespace common\models;

use Yii;
use \common\models\base\Event as BaseEvent;
use yii\behaviors\SluggableBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "event".
 */
class Event extends BaseEvent
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
        return [
            [['name', 'date', 'text'], 'required'],
            [['date'], 'safe'],
            [['text', 'seo_description'], 'string'],
            [['name', 'image', 'alias', 'seo_title', 'seo_keywords', 'seo_h1'], 'string', 'max' => 255]
        ];
    }
}
