<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\VideoReview $model
*/

$this->title = 'Создание';
?>
<div class="giiant-crud video-review-create">

    <h1>
        <?= Yii::t('models', 'Video Review') ?>
    </h1>

    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
