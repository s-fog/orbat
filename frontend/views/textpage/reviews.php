<?php

$this->params['seo_title'] = $model->seo_title;
$this->params['seo_description'] = $model->seo_description;
$this->params['seo_keywords'] = $model->seo_keywords;
$this->params['seo_h1'] = $model->seo_h1;
$this->params['name'] = $model->name;

?>
<div class="container">
    <div class="headerWithLine headerWithLine_small"><span>Видео отзывы клиентов</span></div>
</div>
<div class="reviewsSlider owl-carousel">
    <?php foreach($video_reviews as $video_review) { ?>
        <div class="reviewsSlider__item">
            <iframe src="https://www.youtube.com/embed/<?=$video_review->video_id?>?rel=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        </div>
    <?php } ?>
</div>
<div class="container">
    <div class="headerWithLine headerWithLine_small"><span>Отзывы архитекторов и дизайнеров</span></div>
</div>
<div class="reviews">
    <div class="container">
        <div class="reviews__inner">
            <?php foreach($reviews as $review) {
                $filename = basename($review->image);
                $filename = explode('.', $filename);
                ?>
                <div class="reviews__item">
                    <div class="reviews__itemImage" style="background-image: url(/images/thumbs/<?=$filename[0]?>-119-119.<?=$filename[1]?>);"></div>
                    <div class="reviews__itemName"><?=$review->name?></div>
                    <div class="reviews__itemText"><?=$review->text?></div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>