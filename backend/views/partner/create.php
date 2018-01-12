<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Partner $model
*/

$this->title = 'Создание';
?>
<div class="giiant-crud partner-create">

    <h1>
        <?= Yii::t('models', 'Partner') ?>
    </h1>

    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
