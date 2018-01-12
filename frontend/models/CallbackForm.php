<?php

namespace frontend\models;

use Yii;

class CallbackForm extends Forms
{
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['email'], 'email'],
            ['pol', 'required', 'requiredValue' => 1, 'message' => 'Вы должны принять пользовательское соглашение'],
        ];
    }

}