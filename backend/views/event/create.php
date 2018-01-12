<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Event $model
*/

$this->title = 'Создание';
?>
<div class="giiant-crud event-create">

    <h1>
        <?= Yii::t('models', 'Event') ?>
    </h1>

    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
