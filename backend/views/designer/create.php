<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Designer $model
*/

$this->title = 'Создание';
?>
<div class="giiant-crud designer-create">
    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
