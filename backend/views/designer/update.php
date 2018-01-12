<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Designer $model
*/
    
$this->title = Yii::t('models', 'Designer') . " " . $model->name . ', ' . 'Редактирование';
?>
<div class="giiant-crud designer-update">

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
