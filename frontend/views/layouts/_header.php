<?php

use common\models\Textpage;

?>
<div class="bgbg">
<div class="mainHeader">
    <div class="container">
        <div class="mainHeader__inner">
            <div class="mainHeader__logo">
                <a href="/"><img src="/img/logo.png" alt=""></a>
                <div class="mainHeader__mobileTrigger">
                    <div class="mainHeader__mobileTriggerItem"></div>
                    <div class="mainHeader__mobileTriggerItem"></div>
                    <div class="mainHeader__mobileTriggerItem"></div>
                </div>
            </div>
            <div class="mainHeader__menus">
                <ul class="mainHeader__menusTop">
                    <?=Textpage::liLink(1, 'mainHeader__menusTopLink')?>
                    <?=Textpage::liLink(2, 'mainHeader__menusTopLink')?>
                    <?=Textpage::liLink(3, 'mainHeader__menusTopLink')?>
                    <?=Textpage::liLink(4, 'mainHeader__menusTopLink')?>
                    <?=Textpage::liLink(5, 'mainHeader__menusTopLink')?>
                    <?=Textpage::liLink(6, 'mainHeader__menusTopLink')?>
                </ul>
                <ul class="mainHeader__menusBottom">
                    <?php
                    $active = '';
                    if ($_SERVER['REQUEST_URI'] == '/catalog') {
                        $active = ' class="active"';
                    }
                    ?>
                    <li<?=$active?>><a href="/catalog" class="mainHeader__menusBottomLink"><span>Проекты</span></a></li>
                    <?=Textpage::liLink(7, 'mainHeader__menusBottomLink')?>
                    <?=Textpage::liLink(8, 'mainHeader__menusBottomLink')?>
                </ul>
            </div>
            <div class="mainHeader__contacts">
                <a href="tel:+79859917387" class="mainHeader__phone">+7 (985) 991-73-87</a>
                <a href="#callback" class="mainHeader__callback" data-fancybox><span>заказать консультацию</span></a>
            </div>
        </div>
    </div>
</div>