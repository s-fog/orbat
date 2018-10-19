<?php

namespace common\models;

use himiklab\sortablegrid\SortableGridBehavior;
use Yii;
use \common\models\base\Product as BaseProduct;
use yii\behaviors\SluggableBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "product".
 */
class Product extends BaseProduct
{
    public $image1_file;
    public $image2_file;
    public $image3_file;
    public $image4_file;
    public $image5_file;
    public $image6_file;
    public $image7_file;
    public $image8_file;
    public $image9_file;
    public $image10_file;
    public $image11_file;
    public $image12_file;
    public $image13_file;
    public $image14_file;
    public $image15_file;
    public $image16_file;
    public $image_small1_file;
    public $image_small2_file;
    public $image_small3_file;
    public $image_small4_file;
    public $image_small5_file;
    public $image_small6_file;
    public $image_small7_file;
    public $image_small8_file;
    public $image_small9_file;
    public $image_small10_file;
    public $image_small11_file;
    public $image_small12_file;
    public $image_small13_file;
    public $image_small14_file;
    public $image_small15_file;
    public $image_small16_file;
    public $slider_image1_file;
    public $slider_image2_file;
    public $slider_image3_file;
    public $slider_image4_file;
    public $slider_image5_file;
    public $slider_image_small1_file;
    public $slider_image_small2_file;
    public $slider_image_small3_file;
    public $slider_image_small4_file;
    public $slider_image_small5_file;
    public $plan_file;

public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                [
                    'class' => SluggableBehavior::className(),
                    'attribute' => 'name',
                    'slugAttribute' => 'alias',
                    'immutable' => true
                ],
                'sort' => [
                    'class' => SortableGridBehavior::className(),
                    'sortableAttribute' => 'sortOrder'
                ],
            ]
        );
    }

    public function getCategory() {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function getDesigner() {
        return $this->hasOne(Designer::className(), ['id' => 'designer_id']);
    }

    public function getDesigner2() {
        return $this->hasOne(Designer::className(), ['id' => 'designer2_id']);
    }

    public function littleImage($image, $littleImage) {
        if (!empty($image) && !empty($littleImage)) {
            $filename = basename($littleImage);
            $filename = explode('.', $filename);

            echo '
            <div class="lphotos__item" 
                data-fancybox="productImages" 
                data-src="'.$image.'">
                <div class="lphotos__itemInner">
                    <div class="lphotos__itemInnerImage" 
                    style="background-image: url(/images/thumbs/'.$filename[0].'-116-116.'.$filename[1].');"></div>
                </div>
            </div>';
        }
    }

    public static function pagination($allProductCount, $page, $limit) {
        if ($limit >= $allProductCount) {
            return '';
        } else {
            $pages = [];
            $_GET['page'] = (isset($_GET['page']))? $_GET['page'] : 1;
            $lastPage = ceil($allProductCount / $limit);
            $uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
            $prev = (($_GET['page'] - 1) == 1)? $uri_parts[0] : $uri_parts[0] . '?page=' . ($_GET['page'] - 1);

            if ($page != 1) {
                $pages[] = '<li><a href="' . $uri_parts[0] . '" class="pagination__item pagination__first">&lt;&lt;</a></li>';
                $pages[] = '<li><a href="' . $prev . '" class="pagination__item pagination__first">&lt;</a></li>';
            }

            for($i = 1; $i <= $lastPage; $i++) {
                $link = ($i == 1)? $uri_parts[0] : $uri_parts[0] . '?page=' . $i;
                if ($i == $page) {
                    $pages[] = '<li class="active"><span class="pagination__item">' . $i . '</span></li>';
                } else {
                    $pages[] = '<li><a href="' . $link . '" class="pagination__item">' . $i . '</a></li>';
                }
            }

            if ($page != $lastPage) {
                $pages[] = '<li><a href="' . $uri_parts[0] . '?page=' . ($page + 1) . '" class="pagination__item pagination__last">&gt;</a></li>';
                $pages[] = '<li><a href="' . $uri_parts[0] . '?page=' . ($lastPage) . '" class="pagination__item pagination__last">&gt;&gt;</a></li>';
            }

            return '<ul class="pagination">'.implode('', $pages).'</ul>';
        }
    }
}
