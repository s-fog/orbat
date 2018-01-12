<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Product $model
*/

$this->title = 'Создать';
?>
<div class="giiant-crud product-create">

    <h1>
        <?= Yii::t('models', 'Product') ?>
    </h1>

    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
