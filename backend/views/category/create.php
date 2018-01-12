<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Category $model
*/

$this->title = 'Создать';
?>
<div class="giiant-crud category-create">

    <h1>
        <?= Yii::t('models', 'Category') ?>
    </h1>

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
