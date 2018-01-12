<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Textpage $model
*/

$this->title = 'Создать';
?>
<div class="giiant-crud textpage-create">

    <h1>
        <?= Yii::t('models', 'Textpage') ?>
        <small>
                        <?= $model->name ?>
        </small>
    </h1>
    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
