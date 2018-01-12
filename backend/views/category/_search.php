<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var common\models\CategorySearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="category-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'name') ?>

		<?= $form->field($model, 'alias') ?>

		<?= $form->field($model, 'seo_title') ?>

		<?= $form->field($model, 'seo_keywords') ?>

		<?php // echo $form->field($model, 'seo_h1') ?>

		<?php // echo $form->field($model, 'seo_description') ?>

		<?php // echo $form->field($model, 'image') ?>

		<?php // echo $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
