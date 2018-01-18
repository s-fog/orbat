<?php

use common\models\Category;
use yii\helpers\Url;

$main_categories = Category::find()->where('id <> 4')->all();

?>

<div class="mainCategories">
    <div class="container">
        <div class="mainCategories__inner">
            <?php foreach($main_categories as $index => $category) { ?>
                <?php
                $filename = basename($category->image);
                $filename = explode('.', $filename);

                $active = '';
                if ($index == 1) {
                    $active = ' active';
                }
                ?>
                <div class="mainCategories__item<?=$active?>" style="background-image: url(/images/thumbs/<?=$filename[0]?>-427-550.<?=$filename[1]?>);">
                    <div class="mainCategories__itemInfo">
                        <div class="mainCategories__itemHeader"><?=$category->name?></div>
                        <div class="mainCategories__itemText"><?=$category->description?></div>
                        <a href="<?=Url::to(['catalog/index', 'alias1' => $category->alias])?>" class="mainCategories__itemButton"><?=$category->productcount?> проектов</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
