<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var common\models\ProductSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'name') ?>

		<?= $form->field($model, 'alias') ?>

		<?= $form->field($model, 'object') ?>

		<?= $form->field($model, 'area') ?>

		<?php // echo $form->field($model, 'realization') ?>

		<?php // echo $form->field($model, 'image1') ?>

		<?php // echo $form->field($model, 'image2') ?>

		<?php // echo $form->field($model, 'image3') ?>

		<?php // echo $form->field($model, 'image4') ?>

		<?php // echo $form->field($model, 'image5') ?>

		<?php // echo $form->field($model, 'image6') ?>

		<?php // echo $form->field($model, 'image7') ?>

		<?php // echo $form->field($model, 'image8') ?>

		<?php // echo $form->field($model, 'image9') ?>

		<?php // echo $form->field($model, 'image10') ?>

		<?php // echo $form->field($model, 'image11') ?>

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
