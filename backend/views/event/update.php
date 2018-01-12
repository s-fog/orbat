<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Event $model
*/
    
$this->title = Yii::t('models', 'Event') . " " . $model->name . ', ' . 'Редактирование';
?>
<div class="giiant-crud event-update">
    
    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
