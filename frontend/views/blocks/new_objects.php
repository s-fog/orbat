<?php

use common\models\Product;

$objects = Product::find()
    ->orderBy(['sortOrder' => SORT_DESC])
    ->limit(9)
    ->all();

?>

<div class="catalogBrick">
    <div class="container">
        <div class="headerWithLine"><span>Новые проекты</span></div>
        <div class="catalogBrick__inner">
            <?php foreach($objects as $object) {
                echo $this->render('@frontend/views/catalog/item_brick', [
                    'model' => $object
                ]);
            } ?>
        </div>
        <div class="toAll"><a href="/catalog">полный каталог проектов</a></div>
    </div>
</div>
