<?php

$this->params['seo_title'] = $model->seo_title;
$this->params['seo_description'] = $model->seo_description;
$this->params['seo_keywords'] = $model->seo_keywords;
$this->params['seo_h1'] = $model->seo_h1;
$this->params['name'] = $model->name;

?>
<div class="partnersPage">
    <div class="container">
        <div class="partnersPage__inner">
            <?php foreach($partners as $partner) {
                ?>
                <div class="partnersPage__item">
                    <a href="http://<?=$partner->site1?>" target="_blank" rel="nofollow" class="partnersPage__itemImage">
                        <img src="<?=$partner->image?>" alt="">
                    </a>
                    <div class="partnersPage__itemLine"></div>
                    <a href="http://<?=$partner->site1?>" target="_blank" rel="nofollow" class="partnersPage__itemName"><span><?=$partner->name?></span></a>
                    <div class="partnersPage__itemText"><?=$partner->text?></div>
                    <a href="http://<?=$partner->site1?>" target="_blank" rel="nofollow" class="partnersPage__itemButton"><?=$partner->site1?></a>
                    <?php if(!empty($partner->site2)) { ?>
                        <br>
                        <a href="http://<?=$partner->site2?>" target="_blank" rel="nofollow" class="partnersPage__itemButton"><?=$partner->site2?></a>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>