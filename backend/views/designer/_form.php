<?php

use kartik\checkbox\CheckboxX;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var common\models\Designer $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="designer-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Designer',
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-danger'
    ]
    );
    ?>

    <div class="">
        <?php $this->beginBlock('main'); ?>

        <p>
            

<!-- attribute name -->
			<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'show_on_page')->widget(CheckboxX::classname(), [
                'pluginOptions' => [
                    'threeState'=>false
                ]
            ])?>

            <?=$this->render('@backend/views/blocks/image', [
                'form' => $form,
                'model' => $model,
                'image' => $model->image,
                'name' => 'image'
            ])?>

<!-- attribute product_text -->
			<?= $form->field($model, 'product_text')->textarea(['rows' => 6]) ?>

<!-- attribute text -->
			<?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

<!-- attribute studio -->
			<?= $form->field($model, 'studio')->textInput(['maxlength' => true]) ?>

<!-- attribute address -->
			<?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

<!-- attribute phone1 -->
			<?= $form->field($model, 'phone1')->textInput(['maxlength' => true]) ?>

<!-- attribute phone2 -->
			<?= $form->field($model, 'phone2')->textInput(['maxlength' => true]) ?>

<!-- attribute email -->
			<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

<!-- attribute site -->
			<?= $form->field($model, 'site')->textInput(['maxlength' => true]) ?>
        </p>
        <?php $this->endBlock(); ?>
        
        <?=
    Tabs::widget(
                 [
                    'encodeLabels' => false,
                    'items' => [ 
                        [
    'label'   => Yii::t('models', 'Designer'),
    'content' => $this->blocks['main'],
    'active'  => true,
],
                    ]
                 ]
    );
    ?>
        <hr/>

        <?php echo $form->errorSummary($model); ?>

        <?= Html::submitButton(
        '<span class="glyphicon glyphicon-check"></span> ' .
        ($model->isNewRecord ? 'Создать' : 'Сохранить'),
        [
        'id' => 'save-' . $model->formName(),
        'class' => 'btn btn-success'
        ]
        );
        ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>

