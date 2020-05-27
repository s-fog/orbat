<?php

namespace common\models;

use himiklab\sortablegrid\SortableGridBehavior;
use Yii;
use \common\models\base\Designer as BaseDesigner;
use yii\behaviors\SluggableBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "designer".
 */
class Designer extends BaseDesigner
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
                'sort' => [
                    'class' => SortableGridBehavior::className(),
                    'sortableAttribute' => 'sortOrder'
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

    public function getProducts() {
        $products = Product::find()
            ->where(['designer_id' => $this->id])
            ->orWhere(['designer2_id' => $this->id])
            ->all();

        return $products;
    }
}
