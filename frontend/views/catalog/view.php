<?php

use yii\helpers\Url;

$this->params['seo_title'] = $model->seo_title;
$this->params['seo_description'] = $model->seo_description;
$this->params['seo_keywords'] = $model->seo_keywords;
$this->params['seo_h1'] = $model->seo_h1;
$this->params['name'] = $model->name;

?>
    <h1 class="header" style="display: none;"><?=(!empty($model->seo_h1)) ? $model->seo_h1 : $model->name?></h1>
    <div class="header">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="/" class="breadcrumbs__link">Главная</a></li>
                <li><a href="/catalog" class="breadcrumbs__link">Каталог</a></li>
                <li><a href="<?=Url::to(['catalog/index', 'alias1' => $model->category->alias])?>"
                       class="breadcrumbs__link"><?=$model->category->name?></a></li>
                <li><span class="breadcrumbs__link"><?=$model->name?></span></li>
            </ul>
        </div>
    </div>

<div class="product">
    <div class="container">
        <div class="product__inner">
            <div class="product__item">
                <div class="product__itemInner">
                    <div class="product__name"><?=$model->name?></div>
                    <div class="product__feature">Авторы проекта:</div>
                    <ul class="product__author">
                        <li>- <a href="#" class="product__feature link">Евгения Богатырёва</a></li>
                        <li>- <a href="#" class="product__feature link">Павел Богатырёв</a></li>
                    </ul>
                    <div class="product__feature">Объект: <?=$model->object?></div>
                    <div class="product__feature">Общая площадь: <?=$model->area?> m<sup>2</sup></div>
                    <div class="product__feature">Реализация: <?=$model->realization?></div>
                    <div class="product__plan" data-fancybox data-src="<?=$model->plan?>">План объекта</div><br>
                </div>
            </div>
            <?php
            $filename = basename($model->image_small1);
            $filename = explode('.', $filename);
            ?>
            <div class="product__item">
                <div data-fancybox="productImages" data-src="<?=$model->image1?>" class="product__itemImage" style="background-image: url(/images/thumbs/<?=$filename[0]?>-426-426.<?=$filename[1]?>);"></div>
            </div>
            <div class="product__item">
                <div class="product__itemInner">
                    <div class="product__peopleInner">
                        <div class="product__peopleImage" style="background-image: url(/img/desig1.png);"></div>
                        <div class="product__peopleRight">
                            <div class="product__peopleName">Евгения и Павел Богатырёвы</div>
                            <div class="product__peopleAuthor">Авторы проекта</div>
                        </div>
                    </div>
                    <div class="product__peopleText">Учредители дизайн-студии «Mobile Line Decor» Евгения и Павел Богатырёвы вот уже почти
                        20 лет занимаются комплектацией эксклюзивных интерьеров класса люкс. При работе придерживаются двух аксиом: «стройка
                        должна быть в радость» и «нельзя идти
                        на компромиссы при постройке своего дома». Избегать компромиссов в проектах помогает наличие в компании трех собственных производств — столярного, текстильного
                        и карнизного.
                    </div>
                </div>
            </div>
            <?php
            $filename = basename($model->image_small2);
            $filename = explode('.', $filename);
            ?>
            <div class="product__item">
                <div data-fancybox="productImages" data-src="<?=$model->image2?>" class="product__itemImage" style="background-image: url(/images/thumbs/<?=$filename[0]?>-426-426.<?=$filename[1]?>);"></div>
            </div>
            <div class="product__item">
                <div class="product__itemInner">
                    <div class="product__text"><?=$model->block1_text?></div>
                    <div class="product__textBottom">
                        <div class="product__textBottomInner">
                            <div class="product__textName"><?=$model->block1_author?></div>
                            <div class="product__textFunction"><?=$model->block1_function?></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $filename = basename($model->image_small3);
            $filename = explode('.', $filename);
            ?>
            <div class="product__item">
                <div data-fancybox="productImages" data-src="<?=$model->image3?>" class="product__itemImage" style="background-image: url(/images/thumbs/<?=$filename[0]?>-426-426.<?=$filename[1]?>);"></div>
            </div>

            <div class="product__item">
                <div class="product__itemInner">
                    <div class="product__text"><?=$model->block2_text?></div>
                    <div class="product__textBottom">
                        <div class="product__textBottomInner">
                            <div class="product__textName"><?=$model->block2_author?></div>
                            <div class="product__textFunction"><?=$model->block2_function?></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $filename = basename($model->image_small4);
            $filename = explode('.', $filename);
            ?>
            <div class="product__item">
                <div data-fancybox="productImages" data-src="<?=$model->image4?>" class="product__itemImage" style="background-image: url(/images/thumbs/<?=$filename[0]?>-426-426.<?=$filename[1]?>);"></div>
            </div>

            <div class="product__item">
                <div class="product__itemInner">
                    <div class="product__text"><?=$model->block3_text?></div>
                    <div class="product__textBottom">
                        <div class="product__textBottomInner">
                            <div class="product__textName"><?=$model->block3_author?></div>
                            <div class="product__textFunction"><?=$model->block3_function?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="headerWithLine headerWithLine_small"><span>Другие фотографии проекта</span></div>
        <div class="lphotos">
            <?=$model->littleImage($model->image5, $model->image_small5)?>
            <?=$model->littleImage($model->image6, $model->image_small6)?>
            <?=$model->littleImage($model->image7, $model->image_small7)?>
            <?=$model->littleImage($model->image8, $model->image_small8)?>
            <?=$model->littleImage($model->image9, $model->image_small9)?>
            <?=$model->littleImage($model->image10, $model->image_small10)?>
            <?=$model->littleImage($model->image11, $model->image_small11)?>
        </div>
    </div>
</div>

<?=$this->render('@frontend/views/blocks/advantages')?>