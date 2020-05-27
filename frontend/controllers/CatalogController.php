<?php
namespace frontend\controllers;

use common\models\Category;
use common\models\Product;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class CatalogController extends Controller
{
    public function actionIndex($alias1 = '')
    {
        $query = Product::find();

        if (!empty($_REQUEST['type'])) {
            $query->andWhere(['type' => $_REQUEST['type']]);
        }

        if (!empty($_REQUEST['area'])) {
            $area = explode('-', $_REQUEST['area']);
            $areaFrom = $area[0] * 1;
            $areaTo = $area[1] * 1;
            $query->andWhere('area >= ' . $areaFrom . ' AND area <= ' . $areaTo);
        }

        if (!empty($_REQUEST['realization'])) {
            $query->andWhere(['realization' => $_REQUEST['realization']]);
        }

        if (!empty($_REQUEST['designer'])) {
            $query->andWhere(['or',
                ['designer_id' => $_REQUEST['designer']],
                ['designer2_id' => $_REQUEST['designer']]
            ]);
        }

        if (!empty($_REQUEST['query'])) {
            $query->andWhere('`name` LIKE \'%'.$_REQUEST['query'].'%\'');
        }

        if (empty($alias1)) {
            $model = Category::findOne(4);
            $products = $query
                ->orderBy(['sortOrder' => SORT_DESC])
                ->all();
        } else {
            $model = Category::find()->where(['alias' => $alias1])->one();
            $products = $query
                ->orderBy(['sortOrder' => SORT_DESC])
                ->all();
        }

        return $this->render('index', [
            'products' => $products,
            'model' => $model
        ]);
    }

    public function actionView($alias1, $alias2)
    {
        $model = Product::find()
            ->where(['category_id' => Category::find()->where(['alias' => $alias1])->one()->id])
            ->where(['alias' => $alias2])
            ->one();
        return $this->render('view', ['model' => $model]);
    }
}
