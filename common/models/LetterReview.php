<?php

namespace common\models;

use himiklab\sortablegrid\SortableGridBehavior;
use Yii;
use \common\models\base\LetterReview as BaseLetterReview;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "letter_review".
 */
class LetterReview extends BaseLetterReview
{
    public $image_file;

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                'sort' => [
                    'class' => SortableGridBehavior::className(),
                    'sortableAttribute' => 'sortOrder'
                ],
            ]
        );
    }

    public function rules()
    {

        return [
            [['sortOrder'], 'integer'],
            [['image'], 'string', 'max' => 255]
        ];
    }

    public function attributeLabels()
    {
        return [
            'image' => 'Изображение(1200x1650)',
        ];
    }
}
