<?php

use kartik\widgets\DatePicker;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var common\models\Event $model
* @var yii\widgets\ActiveForm $form
*/

$model->date = date('d.m.Y', $model->date);
?>

<div class="event-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Event',
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

            <!-- attribute alias -->
            <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>

            <?=$form->field($model, 'date')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Выберите дату'],
                'pluginOptions' => [
                    'format' => 'dd.mm.yyyy',
                    'autoclose'=>true,
                    'todayHighlight' => false
                ]
            ]);?>

<!-- attribute text -->
			<?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

            <?=$this->render('@backend/views/blocks/image', [
                'form' => $form,
                'model' => $model,
                'image' => $model->image,
                'name' => 'image'
            ])?>

<!-- attribute seo_title -->
			<?= $form->field($model, 'seo_title')->textInput(['maxlength' => true]) ?>

<!-- attribute seo_keywords -->
			<?= $form->field($model, 'seo_keywords')->textInput(['maxlength' => true]) ?>

<!-- attribute seo_h1 -->
			<?= $form->field($model, 'seo_h1')->textInput(['maxlength' => true]) ?>

            <!-- attribute seo_description -->
            <?= $form->field($model, 'seo_description')->textarea(['rows' => 6]) ?>
        </p>
        <?php $this->endBlock(); ?>
        
        <?=
    Tabs::widget(
                 [
                    'encodeLabels' => false,
                    'items' => [ 
                        [
    'label'   => Yii::t('models', 'Event'),
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

