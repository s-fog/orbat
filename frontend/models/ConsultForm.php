<?php

namespace frontend\models;

use Yii;

class ConsultForm extends Forms
{
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['email'], 'email']
        ];
    }

}