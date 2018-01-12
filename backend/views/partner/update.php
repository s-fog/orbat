<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Partner $model
*/
    
$this->title = Yii::t('models', 'Partner') . " " . $model->name . ', ' . 'Редактирование';
?>
<div class="giiant-crud partner-update">

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
