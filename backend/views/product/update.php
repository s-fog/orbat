<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Product $model
*/
    
$this->title = Yii::t('models', 'Product') . " " . $model->name . ', ' . 'Редактирование';
?>
<div class="giiant-crud product-update">

    <h1>
        <?= Yii::t('models', 'Product') ?>
        <small>
                        <?= $model->name ?>
        </small>
    </h1>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
