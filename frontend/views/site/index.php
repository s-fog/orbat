<?php

use common\models\Textpage;
use yii\helpers\Url;

$this->params['seo_title'] = $model->seo_title;
$this->params['seo_description'] = $model->seo_description;
$this->params['seo_keywords'] = $model->seo_keywords;
$this->params['name'] = $model->name;

?>

<?=$this->render('@frontend/views/blocks/main_categories')?>

<?=$this->render('@frontend/views/blocks/advantages')?>

<?=$this->render('@frontend/views/blocks/new_objects')?>

<?=$this->render('@frontend/views/blocks/video')?>

<div class="people">
    <div class="container">
        <div class="headerWithLine"><span>дизайнеры и архитекторы</span></div>
    </div>
    <div class="people__slider owl-carousel">
        <?php foreach($designers as $designer) {
            $filename = basename($designer->image);
            $filename = explode('.', $filename);
            $url = Url::to(['textpage/index', 'alias' => Textpage::findOne(7)->alias]).'?id='.$designer->id;
            ?>
            <div class="people__sliderItem">
                <a href="<?=$url?>"
                   class="people__sliderImage"
                   style="background-image: url(/images/thumbs/<?=$filename[0]?>-284-284.<?=$filename[1]?>);"></a>
                <div class="people__sliderItemInfo">
                    <div class="people__sliderItemHeader"><?=$designer->name?></div>
                    <div class="people__sliderItemText"><?=$designer->text?></div>
                    <a href="<?=$url?>" class="people__sliderItemButton">Подробнее</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<div class="partners">
    <div class="container">
        <div class="headerWithLine"><span>Партнеры</span></div>
        <div class="partners__slider owl-carousel">
            <?php foreach($partners as $partner) { ?>
                <div class="partners__item">
                    <a href="http://<?=$partner->site1?>" rel="nofollow" target="_blank" class="partners__itemImage">
                        <img src="<?=$partner->image?>" alt="">
                    </a>
                    <hr>
                    <a href="http://<?=$partner->site1?>" rel="nofollow" target="_blank" class="partners__itemName"><span><?=$partner->name?></span></a>
                    <a href="http://<?=$partner->site1?>" rel="nofollow" target="_blank" class="partners__itemButton"><?=$partner->site1?></a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?=$this->render('@frontend/views/blocks/consult_form')?>

<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<div class="map">
    <div class="map__map" id="map"></div>
    <div class="map__content">
        <a href="tel:+79859917387" class="map__contentPhone">+7 (985) 991-73-87</a>
        <a href="mailto:info@orbat.ru" class="map__contentEmail">info@orbat.ru</a>
        <div class="map__contentText">
            ООО ОРБАТ: 119530, г. Москва, Очаковское ш., д. 28 стр. 2<br>эт. 3 пом. III ком.8
        </div>
    </div>
</div>