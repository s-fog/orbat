<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Review $model
*/
    
$this->title = Yii::t('models', 'Review') . " " . $model->name . ', ' . 'Редактирование';
?>
<div class="giiant-crud review-update">

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
