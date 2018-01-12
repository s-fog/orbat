<?php

namespace common\models;

use Yii;
use \common\models\base\VideoReview as BaseVideoReview;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "video_review".
 */
class VideoReview extends BaseVideoReview
{

public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
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
