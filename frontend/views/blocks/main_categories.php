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
                <a href="<?=Url::to(['catalog/index', 'alias1' => $category->alias])?>" class="mainCategories__item<?=$active?>" style="background-image: url(/images/thumbs/<?=$filename[0]?>-427-550.<?=$filename[1]?>);">
                    <span class="mainCategories__itemInfo">
                        <span class="mainCategories__itemHeader"><?=$category->name?></span>
                        <span class="mainCategories__itemText"><?=$category->description?></span>
                        <span class="mainCategories__itemButton"><?=$category->productcount?> проектов</span>
                    </span>
                </a>
            <?php } ?>
        </div>
    </div>
</div>
