<?php
use yii\helpers\Url;
$filename = basename($model->image_small1);
$filename = explode('.', $filename);
?>
<a href="<?=Url::to(['catalog/view', 'alias1' => $model->category->alias, 'alias2' => $model->alias])?>"
   class="catalogBrick__item"
   style="background-image: url(/images/thumbs/<?=$filename[0]?>-426-426.<?=$filename[1]?>);">
    <span class="catalogBrick__itemInner">
                <span class="catalogBrick__itemInfo">
                    <span class="catalogBrick__itemHeader"><?=$model->name?></span>
                    <span class="catalogBrick__itemFeature">Объект: <?=$model->object?></span>
                    <span class="catalogBrick__itemFeature">Общая площадь: <?=$model->area?> m<sup>2</sup></span>
                    <span class="catalogBrick__itemFeature">Реализация: <?=$model->realization?></span>
                </span>
        </span>
</a>