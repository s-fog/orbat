<?php

use common\models\Textpage;
use frontend\models\CallbackForm;
use frontend\models\SubscribeForm;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>
<div class="mainFooter">
    <div class="container">
        <div class="mainFooter__inner">
            <div class="mainFooter__left">
                <a href="/" class="mainFooter__logo"></a>
                <div class="mainFooter__copy">© 1992–2018 ОРБАТ. Все права защищены.</div>
                <a href="/00_doc.pdf" target="_blank" class="mainFooter__prav"><span>Обработка персональных данных</span></a>
            </div>
            <div class="mainFooter__middle">
                <div class="mainFooter__middleLeft">
                    <ul class="mainFooter__menu1">
                        <?=Textpage::liLink(1, 'mainFooter__menu1Link')?>
                        <?=Textpage::liLink(2, 'mainFooter__menu1Link')?>
                        <?=Textpage::liLink(3, 'mainFooter__menu1Link')?>
                        <?=Textpage::liLink(4, 'mainFooter__menu1Link')?>
                        <?=Textpage::liLink(5, 'mainFooter__menu1Link')?>
                        <?=Textpage::liLink(6, 'mainFooter__menu1Link')?>
                    </ul>
                </div>
                <div class="mainFooter__middleRight">
                    <ul class="mainFooter__menu2">
                        <li>
                            <a href="/catalog" class="mainFooter__menu2Link"><span>Проекты</span></a>
                            <ul class="mainFooter__menu2Inner">
                                <li><a href="#" class="mainFooter__menu2InnerLink"><span>Строительство</span></a></li>
                                <li><a href="#" class="mainFooter__menu2InnerLink"><span>Ремонт</span></a></li>
                                <li><a href="#" class="mainFooter__menu2InnerLink"><span>Реконструкция</span></a></li>
                            </ul>
                        </li>
                        <?=Textpage::liLink(7, 'mainFooter__menu2Link')?>
                        <?=Textpage::liLink(8, 'mainFooter__menu2Link')?>
                    </ul>
                </div>
            </div>
            <div class="mainFooter__right">
                <a href="tel:+79859917387" class="mainFooter__phone">+7 (985) 991-73-87</a>
                <a href="#callback" class="mainFooter__callback" data-fancybox><span>заказать консультацию</span></a>
                <div class="mainFooter__rightText">Юридический адрес:<br>
                    <a href="<?=Url::to(['textpage/index', 'alias' => Textpage::findOne(6)->alias])?>" class="linkSpan"><span>ООО ОРБАТ: 119530, г. Москва, Очаковское ш., д. 28 стр. 2 эт. 3 пом. III ком.8</span></a>
                </div>
                <div class="socials">
                    <a href="#" rel="nofollow" target="_blank" class="socials__item" style="background-image: url(/img/facebook.png);"></a>
                    <a href="#" rel="nofollow" target="_blank" class="socials__item" style="background-image: url(/img/vk.png);"></a>
                    <a href="#" rel="nofollow" target="_blank" class="socials__item" style="background-image: url(/img/youttube.png);"></a>
                    <a href="#" rel="nofollow" target="_blank" class="socials__item" style="background-image: url(/img/inta.png);"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$sibscribeForm = new SubscribeForm();
$sibscribeForm->agree = 1;
$form = ActiveForm::begin([
    'options' => [
        'class' => 'subscribeForm',
    ],
]);?>
<div class="subscribeForm__inner">
    <div class="subscribeForm__header">Хотите получать выгодные предложения от Orbat?</div>
    <div class="subscribeForm__fieldset">
        <?=$form->field($sibscribeForm, 'email')
            ->textInput(['class' => 'subscribeForm__input', 'placeholder' => 'Ваша электронная почта'])->label(false)?>
        <button class="subscribeForm__submit">Подписаться</button>
    </div>
    <label class="subscribeForm__checkbox">
        <?=$form->field($sibscribeForm, 'agree', [
            'errorOptions' => ['tag' => 'code', 'class' => 'help-block'],
            'template' => "{input}<span>Отправляя свои данные, я принимаю Пользовательское соглашение.</span>{error}"
        ])->checkbox(['checked' => false, 'label' => false]);?>
    </label>
    <a href="/00_doc.pdf" target="_blank" class="link" style="position: relative;top: 5px;font-size: 14px;">Подробнее</a>
</div>
<?php ActiveForm::end();?>

<?php
$callbackForm = new CallbackForm();
$callbackForm->pol = 1;
$form = ActiveForm::begin([
    'options' => [
        'class' => 'callback sendForm',
        'id' => 'callback'
    ],
]);?>
    <div class="callback__logo"></div>
    <?=$form->field($callbackForm, 'name')
        ->textInput([
            'class' => 'callback__input',
            'placeholder' => 'Имя'
        ])->label(false)?>
    <?=$form->field($callbackForm, 'email')
        ->textInput([
            'class' => 'callback__input',
            'placeholder' => 'E-mail'
        ])->label(false)?>
    <?=$form->field($callbackForm, 'phone')
        ->textInput([
            'class' => 'callback__input',
            'placeholder' => 'Телефон'
        ])->label(false)?>
    <?= $form->field($callbackForm, 'pol', [
        'template' => "<label class=\"checkbox\">
                            {input}
                            <span>Заказываю консультацию, Вы соглашаетесь с условиями обработки персональных данных. </span>
                       </label>{error}",
    ])->checkbox([],false) ?>

    <button class="callback__submit" type="submit">Заказать консультацию</button>

    <?=$form->field($callbackForm, 'type')
        ->hiddenInput([
            'value' => 'Заказана консультация на сайте Orbat'
        ])->label(false)?>

    <?=$form->field($callbackForm, 'consult')
        ->hiddenInput([
            'value' => ''
        ])->label(false)?>

    <?=$form->field($callbackForm, 'BC')
        ->hiddenInput([
            'value' => ''
        ])->label(false)?>
<?php ActiveForm::end();?>

<div id="success" class="success callback">
    <div class="callback__logo"></div>
    <div class="success__header">Спасибо за обращение<br>в компанию ОРБАТ!</div>
    <div class="success__text">Наши менеджеры свяжутся с вами в самое ближайшее время.</div>
</div>
</div>