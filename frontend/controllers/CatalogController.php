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
        $typeAndWhere = [];
        if (!empty($_REQUEST['type'])) {
            $typeAndWhere = ['type' => $_REQUEST['type']];
        }

        $areaAndWhere = '';
        if (!empty($_REQUEST['area'])) {
            $area = explode('-', $_REQUEST['area']);
            $areaFrom = $area[0] * 1;
            $areaTo = $area[1] * 1;
            $areaAndWhere = 'area >= ' . $areaFrom . ' AND area <= ' . $areaTo;
        }

        $realizationAndWhere = [];
        if (!empty($_REQUEST['realization'])) {
            $realizationAndWhere = ['realization' => $_REQUEST['realization']];
        }

        $designerAndWhere = [];
        if (!empty($_REQUEST['designer'])) {
            $designerAndWhere = ['designer_id' => $_REQUEST['designer']];
        }

        $queryAndWhere = '';
        if (!empty($_REQUEST['query'])) {
            $queryAndWhere = '`name` LIKE \'%'.$_REQUEST['query'].'%\'';
        }

        if (empty($alias1)) {
            $model = Category::findOne(4);
            $products = Product::find()
                ->andWhere($typeAndWhere)
                ->andWhere($areaAndWhere)
                ->andWhere($realizationAndWhere)
                ->andWhere($designerAndWhere)
                ->andWhere($queryAndWhere)
                ->orderBy(['sortOrder' => SORT_DESC])
                ->all();
        } else {
            $model = Category::find()->where(['alias' => $alias1])->one();
            $products = Product::find()
                ->where(['category_id' => $model->id])
                ->andWhere($typeAndWhere)
                ->andWhere($areaAndWhere)
                ->andWhere($realizationAndWhere)
                ->andWhere($designerAndWhere)
                ->andWhere($queryAndWhere)
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
