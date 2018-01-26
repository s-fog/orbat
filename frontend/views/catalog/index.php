<?php

use common\models\Category;
use common\models\Designer;
use common\models\Textpage;
use yii\db\Query;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->params['seo_title'] = $model->seo_title;
$this->params['seo_description'] = $model->seo_description;
$this->params['seo_keywords'] = $model->seo_keywords;
$this->params['seo_h1'] = $model->seo_h1;
$this->params['name'] = $model->name;

?>
<form class="catalog" id="filter">
    <div class="catalog__top">
        <div class="container">
            <div class="catalog__topInner">
                <ul class="catalog__categories">
                    <?php
                    foreach(Category::find()->where('id <> 4')->all() as $category) {
                        $uri = explode('?', $_SERVER['REQUEST_URI']);
                        if ($uri[0] == '/catalog/'.$category->alias.Yii::$app->get('urlManager')->suffix) {
                            $active = ' class="active"';
                        } else {
                            $active = '';
                        }
                        echo '<li'.$active.'><a href="'.Url::to(['catalog/index', 'alias1' => $category->alias]).'" class="catalog__categoriesItem">'.$category->name.'</a></li>';
                    } ?>
                </ul>
                <?php
                $searchValue = '';
                if (!empty($_REQUEST['query'])) {
                    $searchValue = $_REQUEST['query'];
                }
                ?>
                <div class="search">
                    <input type="text" name="query" placeholder="Поиск по названию объекта" class="search__input" value="<?=$searchValue?>">
                    <button type="submit" class="search__submit"></button>
                </div>

                <?=$this->render('@frontend/views/blocks/change_view')?>
            </div>
        </div>
    </div>

    <div class="filter">
    <?php
    $types = (new Query())->select('type')
        ->groupBy('type')
        ->orderBy(['type' => SORT_ASC])
        ->from('product')
        ->all();
    $years = (new Query())->select('realization')
        ->groupBy('realization')
        ->orderBy(['realization' => SORT_ASC])
        ->from('product')
        ->all();
    $designers = ArrayHelper::map(Designer::find()->all(), 'id', 'name');
    ?>
        <div class="container">
            <div class="filter__inner">
                <div class="filter__item">
                    <div class="filter__itemText">Тип объекта:</div>
                    <select name="type" class="filter__select">
                        <option selected disabled value="0">Выбрать тип объекта</option>
                        <?php foreach($types as $type) {
                            $selected = '';

                            if (isset($_REQUEST['type'])) {
                                if ($type['type'] == $_REQUEST['type']) {
                                    $selected = ' selected';
                                }
                            }
                            ?>
                            <option value="<?=$type['type']?>"<?=$selected?>><?=$type['type']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="filter__item" style="position: relative; top: -5px;">
                    <div class="filter__itemText">Площадь объекта (м<sup>2</sup>):</div>
                    <?php
                    $areas = [
                        '50-200' => '50-200',
                        '201-500' => '201-500',
                        '501-1000' => '501-1000',
                        '1000-100000' => '1001 и более',
                    ];
                    ?>
                    <select name="area" class="filter__select">
                        <option selected disabled value="0">Выбрать площадь объекта</option>
                        <?php foreach($areas as $value => $area) {
                            $selected = '';

                            if (isset($_REQUEST['area'])) {
                                if ($value == $_REQUEST['area']) {
                                    $selected = ' selected';
                                }
                            }
                            ?>
                            <option value="<?=$value?>"<?=$selected?>><?=$area?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="filter__item">
                    <div class="filter__itemText">Дизайнеры и архитекторы:</div>
                    <select name="designer" class="filter__select">
                        <option selected disabled value="0">Выбрать дизайнера</option>
                        <?php foreach($designers as $index => $designer) {
                            $selected = '';

                            if (isset($_REQUEST['designer'])) {
                                if ($index == $_REQUEST['designer']) {
                                    $selected = ' selected';
                                }
                            }
                            ?>
                            <option value="<?=$index?>"<?=$selected?>><?=$designer?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="filter__item">
                    <div class="filter__itemText">Год реализации:</div>
                    <select name="realization" class="filter__select">
                        <option selected disabled value="0">Выбрать год</option>
                        <?php foreach($years as $year) {
                            $selected = '';

                            if (isset($_REQUEST['realization'])) {
                                if ($year['realization'] == $_REQUEST['realization']) {
                                    $selected = ' selected';
                                }
                            }
                            ?>
                            <option value="<?=$year['realization']?>"<?=$selected?>><?=$year['realization']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="filter__item">
                    <div class="filter__itemText">&nbsp;</div>
                    <div class="filter__clear">Сбросить фильтр</div>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="catalogList">
    <?php foreach($products as $index => $product) {
        $index++;

        if ($index % 2 == 0) {
            $parity = 'even';
        } else {
            $parity = 'odd';
        }

        if ($index < 10 ) {
            $number = '0'.$index;
        } else {
            $number = $index;
        }

        $count = count($products);

        if ($count < 10 ) {
            $count = '0'.$count;
        }
        ?>
        <div class="catalogList__item catalogList__item_<?=$parity?>">
            <div class="container">
                <div class="catalogList__slider owl-carousel">
                    <?php
                    if (!empty($product->slider_image1) && !empty($product->slider_image_small1)) {
                        $filename = basename($product->slider_image_small1);
                        $filename = explode('.', $filename);

                        echo '<div class="catalogList__sliderItem" 
                        data-fancybox="item'.$product->id.'" 
                        data-src="'.$product->slider_image1.'"
                        style="background-image: url(/images/thumbs/'.$filename[0].'-950-540.'.$filename[1].');"></div>';
                    }
                    if (!empty($product->slider_image2) && !empty($product->slider_image_small2)) {
                        $filename = basename($product->slider_image_small2);
                        $filename = explode('.', $filename);

                        echo '<div class="catalogList__sliderItem" 
                        data-fancybox="item'.$product->id.'" 
                        data-src="'.$product->slider_image2.'"
                        style="background-image: url(/images/thumbs/'.$filename[0].'-950-540.'.$filename[1].');"></div>';
                    }
                    if (!empty($product->slider_image3) && !empty($product->slider_image_small3)) {
                        $filename = basename($product->slider_image_small3);
                        $filename = explode('.', $filename);

                        echo '<div class="catalogList__sliderItem" 
                        data-fancybox="item'.$product->id.'" 
                        data-src="'.$product->slider_image3.'"
                        style="background-image: url(/images/thumbs/'.$filename[0].'-950-540.'.$filename[1].');"></div>';
                    }
                    if (!empty($product->slider_image4) && !empty($product->slider_image_small4)) {
                        $filename = basename($product->slider_image_small4);
                        $filename = explode('.', $filename);

                        echo '<div class="catalogList__sliderItem" 
                        data-fancybox="item'.$product->id.'" 
                        data-src="'.$product->slider_image4.'"
                        style="background-image: url(/images/thumbs/'.$filename[0].'-950-540.'.$filename[1].');"></div>';
                    }
                    if (!empty($product->slider_image5) && !empty($product->slider_image_small5)) {
                        $filename = basename($product->slider_image_small5);
                        $filename = explode('.', $filename);

                        echo '<div class="catalogList__sliderItem" 
                        data-fancybox="item'.$product->id.'" 
                        data-src="'.$product->slider_image5.'"
                        style="background-image: url(/images/thumbs/'.$filename[0].'-950-540.'.$filename[1].');"></div>';
                    }
                    ?>
                </div>
                <div class="catalogList__info catalogList__info_<?=$parity?>">
                    <div class="catalogList__infoInner">
                        <div class="product__name"><?=$product->name?></div>
                        <div class="product__feature">Авторы проекта:</div>
                        <ul class="product__author">
                            <li>
                                - <a href="<?=Url::to(['textpage/index', 'alias' => Textpage::findOne(7)->alias])?>?id=<?=$product->designer->id?>"
                                     class="product__feature link"><?=$product->designer->name?></a>
                            </li>
                            <?=$product->designer2->show_on_page ?>
                            <?php if (!empty($product->designer2_id)) { ?>
                                <li>
                                    <?php if ($product->designer2->show_on_page == 1) {?>
                                        - <a href="<?=Url::to(['textpage/index', 'alias' => Textpage::findOne(7)->alias])?>?id=<?=$product->designer2->id?>"
                                             class="product__feature link"><?=$product->designer2->name?></a>
                                    <?php } else { ?>
                                        - <span class="product__feature"><?=$product->designer2->name?></span>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                            <?php if(!empty($product->support)) { ?>
                                <li>
                                    - <span class="product__feature"><?=$product->support?></span>
                                </li>
                            <?php } ?>
                        </ul>
                        <div class="product__feature">Объект: <?=$product->object?></div>
                        <div class="product__feature">Общая площадь: <?=$product->area?> m<sup>2</sup></div>
                        <div class="product__feature">Реализация: <?=$product->realization?></div>
                        <div class="product__plan" data-fancybox data-src="<?=$product->plan?>">План объекта</div><br>
                        <a href="<?=Url::to(['catalog/view', 'alias1' => $product->category->alias, 'alias2' => $product->alias])?>" class="catalogList__button">подробнее о проекте</a>
                    </div>
                </div>
            </div>
            <div class="catalogList__itemNumber">
                <span class="catalogList__itemNumberBig"><?=$number?></span>
                <span class="catalogList__itemNumberSmall">/ <?=$count?></span>
            </div>
            <div class="catalogList__zag"></div>
        </div>
        <div class="catalogList__more">
            <div class="catalogList__moreInner"></div>
        </div>
    <?php } ?>
</div>

<div class="catalogPlitka">
    <div class="container">
        <div class="catalogPlitka__inner">
            <?php foreach($products as $product) {
                echo $this->render('@frontend/views/catalog/item_brick', [
                    'model' => $product
                ]);
            } ?>
        </div>
    </div>
</div>