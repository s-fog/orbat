<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var common\models\VideoSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="video-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'name') ?>

		<?= $form->field($model, 'video_id') ?>

		<?= $form->field($model, 'text') ?>

		<?= $form->field($model, 'alias') ?>

		<?php // echo $form->field($model, 'seo_title') ?>

		<?php // echo $form->field($model, 'seo_keywords') ?>

		<?php // echo $form->field($model, 'seo_h1') ?>

		<?php // echo $form->field($model, 'seo_description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
