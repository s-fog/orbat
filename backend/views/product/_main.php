<?php

use common\models\Category;
use common\models\Designer;
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;


?>
<br>

    <!-- attribute name -->
<?=$form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <!-- attribute alias -->
<?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>

<?=$form->field($model, 'category_id')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(Category::find()->where('id <> 4')->all(), 'id', 'name'),
    'options' => ['placeholder' => 'Выберите категорию']
]);?>

<?=$form->field($model, 'designer_id')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(Designer::find()->all(), 'id', 'name'),
    'options' => ['placeholder' => 'Выберите дизайнера']
]);?>

    <!-- attribute object -->
<?=$form->field($model, 'type')->widget(Select2::classname(), [
    'data' => [
        'Квартира' => 'Квартира',
        'Дом' => 'Дом',
        'Пентхаус' => 'Пентхаус'
    ],
    'options' => ['placeholder' => 'Выберите тип объекта']
]);?>

    <!-- attribute area -->
<?= $form->field($model, 'object')->textInput(['maxlength' => true]) ?>

    <!-- attribute area -->
<?= $form->field($model, 'area')->textInput(['maxlength' => true]) ?>

    <!-- attribute realization -->
<?= $form->field($model, 'realization')->textInput(['maxlength' => true]) ?>

<hr style="height: 1px;background-color: #000;">
<?= $form->field($model, 'block1_text')->textarea(['maxlength' => true]) ?>
<?= $form->field($model, 'block1_author')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'block1_function')->textInput(['maxlength' => true]) ?>

<hr style="height: 1px;background-color: #000;">
<?= $form->field($model, 'block2_text')->textarea(['maxlength' => true]) ?>
<?= $form->field($model, 'block2_author')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'block2_function')->textInput(['maxlength' => true]) ?>

<hr style="height: 1px;background-color: #000;">
<?= $form->field($model, 'block3_text')->textarea(['maxlength' => true]) ?>
<?= $form->field($model, 'block3_author')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'block3_function')->textInput(['maxlength' => true]) ?>