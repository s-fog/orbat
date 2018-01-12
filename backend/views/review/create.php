<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Review $model
*/

$this->title = 'Создание';
?>
<div class="giiant-crud review-create">

    <h1>
        <?= Yii::t('models', 'Review') ?>
    </h1>

    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
