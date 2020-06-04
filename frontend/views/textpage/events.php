<?php

use common\models\Product;
use common\models\Textpage;
use yii\helpers\Url;

$this->params['seo_title'] = $model->seo_title;
$this->params['seo_description'] = $model->seo_description;
$this->params['seo_keywords'] = $model->seo_keywords;
$this->params['seo_h1'] = $model->seo_h1;
$this->params['name'] = $model->name;

?>
<div class="news">
    <div class="container">
        <div class="news__inner">
            <?php foreach($events as $event) {
                $filename = basename($event->image);
                $filename = explode('.', $filename);
                $blank = '';

                if ($event->id == 3) {
                    $product = Product::findOne(3);
                    $url = Url::to(['catalog/view', 'alias1' => $product->category->alias, 'alias2' => $product->alias]);
                } else if ($event->id == 4) {
                    $url = 'https://tatlin.ru/shop/interer_ot_pervogo_licza_orbat_2';
                    $blank = ' target="_blank"';
                } else {
                    $url = Url::to(['textpage/view', 'alias1' => Textpage::findOne(2)->alias, 'alias2' => $event->alias]);
                }


                ?>
                <div class="news__item"
                     style="background-image: url(/images/thumbs/<?=$filename[0]?>-1200-400.<?=$filename[1]?>);">
                    <div class="news__itemInner">
                        <div class="news__itemDate"><?=Yii::$app->formatter->asDate($event->date, 'dd LLLL yyyy');?></div>
                        <a href="<?=$url?>" class="news__itemName"<?=$blank?>><span><?=$event->name?></span></a>
                        <div class="news__itemText"><?=$event->text?></div>
                        <a href="<?=$url?>" class="news__itemButton"<?=$blank?>>Подробнее</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>