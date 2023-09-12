<?php

use common\models\Video;

$videos = Video::find()
    ->andWhere(['show_on_main_page' => 1])
    ->orderBy(['id' => SORT_ASC])
    ->all();

?>
<div class="video">
    <div class="video__slider owl-carousel">
        <?php foreach($videos as $video) { ?>
            <div class="video__sliderItem">
                <div class="video__header"><?=$video->name?></div>
                <div class="video__text"><?=$video->text?></div>
                <div class="video__video">
                    <iframe src="https://www.youtube.com/embed/<?=$video->video_id?>?rel=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        <?php } ?>
    </div>
</div>