<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Video $model
*/

$this->title = 'Создание';
?>
<div class="giiant-crud video-create">

    <h1>
        <?= Yii::t('models', 'Video') ?>
    </h1>

    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
