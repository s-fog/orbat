<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Video $model
*/
    
$this->title = Yii::t('models', 'Video') . " " . $model->name . ', ' . 'Редактирование';
?>
<div class="giiant-crud video-update">

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
