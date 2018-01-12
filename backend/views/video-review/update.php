<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\VideoReview $model
*/
    
$this->title = Yii::t('models', 'Video Review') . " " . $model->id . ', ' . 'Редактирование';
?>
<div class="giiant-crud video-review-update">

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
