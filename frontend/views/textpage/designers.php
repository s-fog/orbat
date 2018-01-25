<?php

use yii\helpers\Url;

$this->params['seo_title'] = $model->seo_title;
$this->params['seo_description'] = $model->seo_description;
$this->params['seo_keywords'] = $model->seo_keywords;
$this->params['seo_h1'] = $model->seo_h1;
$this->params['name'] = $model->name;

?>

<div class="header">
    <div class="container">
        <h1><?=(!empty($model->seo_h1)) ? $model->seo_h1 : $model->name?></h1>
        <?=$this->render('@frontend/views/blocks/change_view')?>
    </div>
</div>

<div class="designersList">
    <?php foreach($designers as $index => $designer) {
        $index++;

        if ($index < 10 ) {
            $number = '0'.$index;
        } else {
            $number = $index;
        }

        $count = count($designers);

        if ($count < 10 ) {
            $count = '0'.$count;
        }

        $filename = basename($designer->image);
        $filename = explode('.', $filename);
        ?>
        <div class="designersList__item" data-id="<?=$designer->id?>">
            <div class="designersList__top">
                <div class="container">
                    <div class="designersList__topInner">
                        <div class="designersList__image"
                             style="background-image: url(/images/thumbs/<?=$filename[0]?>-284-284.<?=$filename[1]?>);"></div>
                        <div class="designersList__middle">
                            <div class="designersList__name"><?=$designer->name?></div>
                            <div class="designersList__text"><?=$designer->text?></div>
                        </div>
                        <div class="designersList__right">
                            <div class="designersList__st"><?=$designer->studio?></div>
                            <?php if (!empty($designer->address)) { ?>
                                <div class="designersList__address"><?=$designer->address?></div>
                            <?php } ?>
                            <?php if (!empty($designer->phone1)) { ?>
                                <a href="tel:<?=$designer->phone1?>" class="designersList__phone"><?=$designer->phone1?></a>
                            <?php } ?>
                            <?php if (!empty($designer->phone2)) { ?>
                                <a href="tel:<?=$designer->phone2?>" class="designersList__phone"><?=$designer->phone2?></a>
                            <?php } ?>
                            <?php if (!empty($designer->site)) { ?>
                                <a href="http://<?=$designer->site?>" target="_blank" rel="nofollow" class="designersList__email"><?=$designer->site?></a>
                            <?php } ?>
                            <a href="#callback" class="designersList__button js-consult" data-fancybox>Закзать консультацию архитектора</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="headerWithLine headerWithLine_small"><span>Реализованные проекты</span></div>
            </div>
            <div class="designersList__bottom">
                <div class="container">
                    <div class="designersList__bottomInner">
                        <?php foreach($designer->products as $product) {
                            echo $this->render('@frontend/views/catalog/item_brick', ['model' => $product]);
                        } ?>
                    </div>
                </div>
            </div>
            <div class="catalogList__itemNumber">
                <span class="catalogList__itemNumberBig"><?=$number?></span>
                <span class="catalogList__itemNumberSmall">/ <?=$count?></span>
            </div>
        </div>
    <?php } ?>
</div>

<div class="designersPlitka">
    <div class="container">
        <div class="designersPlitka__inner">
            <?php foreach($designers as $designer) {
                $filename = basename($designer->image);
                $filename = explode('.', $filename);
                ?>
                <div class="designersPlitka__item">
                    <div class="designersPlitka__image" style="background-image: url(/images/thumbs/<?=$filename[0]?>-284-284.<?=$filename[1]?>);"></div>
                    <div class="designersPlitka__name"><?=$designer->name?></div>
                    <div class="designersPlitka__text"><?=$designer->text?></div>
                    <a href="/catalog?designer=<?=$designer->id?>" class="designersPlitka__button1">Реализованные проекты</a>
                    <a href="#callback" class="designersPlitka__button2 js-consult" data-fancybox>Закзать консультацию архитектора</a>
                    <div class="designersList__st"><?=$designer->studio?></div>
                    <div class="designersList__address"><?=$designer->address?></div>
                    <a href="tel:<?=$designer->phone1?>" class="designersList__phone"><?=$designer->phone1?></a>
                    <a href="tel:<?=$designer->phone2?>" class="designersList__phone"><?=$designer->phone2?></a>
                    <a href="mailto:<?=$designer->email?>" class="designersPlitka__email"><?=$designer->email?></a>
                    <a href="http://<?=$designer->site?>" target="_blank" rel="nofollow" class="designersList__email"><?=$designer->site?></a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>