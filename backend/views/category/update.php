<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Category $model
*/
    
$this->title = Yii::t('models', 'Category') . " " . $model->name . ', ' . 'Редактирование';
?>
<div class="giiant-crud category-update">

    <h1>
        <?= Yii::t('models', 'Category') ?>
        <small>
                        <?= $model->name ?>
        </small>
    </h1>

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
