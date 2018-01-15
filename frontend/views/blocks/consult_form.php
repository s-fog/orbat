<?php
use frontend\models\ConsultForm;
use yii\widgets\ActiveForm;

$consultForm = new ConsultForm();
$form = ActiveForm::begin([
    'options' => [
        'class' => 'mainForm sendForm',
        'id' => 'mainForm'
    ],
]);?>
<div class="mainForm__item">
    <div class="mainForm__itemInner">
        <?=$form->field($consultForm, 'name')
            ->textInput([
                'class' => 'mainForm__input',
                'placeholder' => 'Имя'
            ])->label(false)?>
        <?=$form->field($consultForm, 'phone')
            ->textInput([
                'class' => 'mainForm__input',
                'placeholder' => 'Телефон'
            ])->label(false)?>
        <?=$form->field($consultForm, 'email')
            ->textInput([
                'class' => 'mainForm__input',
                'placeholder' => 'E-mail'
            ])->label(false)?>
    </div>
</div>
<div class="mainForm__item">
    <div class="mainForm__itemInner">
        <?=$form->field($consultForm, 'comments')
            ->textarea([
                'class' => 'mainForm__input mainForm__textarea',
                'placeholder' => 'Комментарий'
            ])->label(false)?>
    </div>
</div>
<div class="mainForm__submitWrapper">
    <button type="submit" class="mainForm__submit"><span>Заказать консультацию</span></button>
</div>
<div class="mainForm__textWrapper">
    <div class="mainForm__text">Заказываю консультацию, Вы соглашаетесь с условиями <a href="/00_doc.pdf" target="_blank"><span>обработки персональных данных</span></a>.</div>
</div>

<?=$form->field($consultForm, 'type')
    ->hiddenInput([
        'value' => 'Заказана консультация на сайте Orbat'
    ])->label(false)?>

<?=$form->field($consultForm, 'BC')
    ->hiddenInput([
        'value' => ''
    ])->label(false)?>
<?php ActiveForm::end();?>