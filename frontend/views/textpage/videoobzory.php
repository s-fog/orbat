<?php

$this->params['seo_title'] = $model->seo_title;
$this->params['seo_description'] = $model->seo_description;
$this->params['seo_keywords'] = $model->seo_keywords;
$this->params['seo_h1'] = $model->seo_h1;
$this->params['name'] = $model->name;

?>

<?php

use common\models\Video;

$videos = Video::find()
    ->orderBy(['id' => SORT_ASC])
    ->all();

?>
<div class="videoobzory">
    <div class="container videoobzory__inner">
        <?php foreach($videos as $video) { ?>
            <div class="videoobzory__item">
                <div class="videoobzory__video">
                    <iframe src="https://www.youtube.com/embed/<?=$video->video_id?>?rel=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="videoobzory__header"><?=$video->name?></div>
                <div class="videoobzory__text"><?=$video->text?></div>
            </div>
        <?php } ?>
    </div>
</div>
