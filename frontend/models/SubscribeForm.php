<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class SubscribeForm extends Model
{
    public $email;
    public $agree;

    public function rules()
    {
        return [
            ['agree', 'required', 'requiredValue' => 1, 'message' => 'Вы должны принять пользовательское соглашение'],
            ['email', 'required'],
            ['email', 'email'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'email' => 'Email',
        ];
    }
}
