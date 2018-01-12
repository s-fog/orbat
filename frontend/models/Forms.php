<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class Forms extends Model
{
    public $name;
    public $phone;
    public $email;
    public $type;
    public $consult;
    public $comments;
    public $pol;

    public function send($post) {
        $labels = array(
            'name' => 'Имя',
            'phone' => 'Телефон',
            'email' => 'Эл. адрес',
            'consult' => 'У этого дизайнера',
            'comments' => 'Комментарии',
        );

        $type = $post['type'];
        $msg = '';
        $to = 's-fog@yandex.ru';
        $headers = "Content-type: text/html; charset=\"utf-8\"\r\n";
        $headers .= "From: <orbat@yandex.ru>\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
        unset($post['type']);
        unset($post['pol']);

        foreach($post as $name=>$value){
            $label = array_key_exists($name, $labels) ? $labels[$name] : $name;
            $value = htmlspecialchars($value);
            if(strlen($value)) {
                if ($name == 'url') {
                    $msg .= "<p><b>$label</b>: <a href='$value'>$value</a></p>";
                } else {
                    $msg .= "<p><b>$label</b>: $value</p>";
                }
            }
        }

        $emailSendError = false;
        foreach(explode(',', $to) as $email) {
            if(!mail($email, $type, $msg, $headers)) {
                $emailSendError = true;
            }
        }

        if ($emailSendError) {
            echo 'error';
        } else {
            echo 'success';
        }
    }

    public function attributeLabels() {

        return  [
            'name' => 'Имя',
            'phone' => 'Телефон',
            'email' => 'E-mail'
        ];
    }
}