<?php

namespace common\models;

use Yii;
use \common\models\base\Textpage as BaseTextpage;
use yii\behaviors\SluggableBehavior;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/**
 * This is the model class for table "textpage".
 */
class Textpage extends BaseTextpage
{

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

    public static function liLink($id, $class) {
        $model = Textpage::findOne($id);

        if ($_SERVER['REQUEST_URI'] == '/'.$model->alias.Yii::$app->get('urlManager')->suffix) {
            $active = ' class="active"';
        } else {
            $active = '';
        }

        $onclick = '';
        if ($id == 3) {
            $onclick = ' onclick="return false;"';
        }

        return '<li'.$active.'><a href="'.Url::to(['textpage/index', 'alias' => $model->alias]).'"'.$onclick.' class="'.$class.'"><span>'.$model->name.'</span></a></li>';
    }
}
