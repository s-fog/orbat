<?php

$this->params['seo_title'] = $model->seo_title;
$this->params['seo_description'] = $model->seo_description;
$this->params['seo_keywords'] = $model->seo_keywords;
$this->params['seo_h1'] = $model->seo_h1;
$this->params['name'] = $model->name;

?>
<div class="contactsPage">
    <a href="tel:+79859917387" class="contactsPage__phone">+7 (985) 991-73-87</a>
    <a href="mailto:info@orbat.ru" class="contactsPage__email">info@orbat.ru</a>
    <div class="contactsPage__text">Толстой Андрей Валерьевич</div>
    <div class="contactsPage__text">ООО ОРБАТ: 119530, г. Москва, Очаковское ш., д. 28 стр. 2 эт. 3 пом. III ком.8</div>
    <a href="/cart_org.pdf" target="_blank" class="contactsPage__button">карточка организации</a>
    <?=$this->render('@frontend/views/blocks/socials')?>
</div>

<?=$this->render('@frontend/views/blocks/consult_form')?>

<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<div class="map">
    <div class="map__map" id="map" style="display: block;"></div>
</div>