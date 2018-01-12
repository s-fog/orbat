<?php

namespace frontend\controllers;

use frontend\models\CallbackForm;
use frontend\models\ConsultForm;
use frontend\models\PhotoForm;
use frontend\models\ProschetForm;
use frontend\models\RaschetForm;
use frontend\models\RequestForm;
use frontend\models\RequestForm2;
use Yii;

class MailController extends \yii\web\Controller
{
    public function actionIndex() {
        if (isset($_POST['CallbackForm'])) {
            if (!empty($_POST['CallbackForm']) && isset($_POST['CallbackForm']['type']) && !strlen($_POST['CallbackForm']['BC'])) {
                $form = new CallbackForm();
                $form->send($_POST['CallbackForm']);
            }
        } else if (isset($_POST['ConsultForm'])) {
            if (!empty($_POST['ConsultForm']) && isset($_POST['ConsultForm']['type']) && !strlen($_POST['ConsultForm']['BC'])) {
                $form = new ConsultForm();
                $form->send($_POST['ConsultForm']);
            }
        }

    }
}
