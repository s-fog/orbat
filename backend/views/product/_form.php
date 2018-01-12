<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var common\models\Product $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="product-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Product',
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-danger'
    ]
    );
    ?>

    <?=Tabs::widget([
        'items' => [
            [
                'label'     =>  'Основное',
                'content'   =>  $this->render('_main', ['form' => $form, 'model' => $model]),
                'active'    =>  true
            ],
            [
                'label'     => 'Изображения',
                'content'   =>  $this->render('_images', ['form' => $form, 'model' => $model])
            ],
            [
                'label'     => 'Слайдер',
                'content'   =>  $this->render('_slider', ['form' => $form, 'model' => $model])
            ],
            [
                'label'     => 'План объекта',
                'content'   =>  $this->render('_plan', ['form' => $form, 'model' => $model])
            ],
            [
                'label'     => 'SEO',
                'content'   =>  $this->render('_seo', ['form' => $form, 'model' => $model])
            ]
        ]
    ]);?>
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

