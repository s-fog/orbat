<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Textpage $model
*/
    
$this->title = Yii::t('models', 'Textpage') . " " . $model->name . ', ' . 'Edit';
?>
<div class="giiant-crud textpage-update">

    <h1>
        <?= Yii::t('models', 'Textpage') ?>
        <small>
                        <?= $model->name ?>
        </small>
    </h1>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
