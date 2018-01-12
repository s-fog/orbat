<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Product;

/**
* ProductSearch represents the model behind the search form about `common\models\Product`.
*/
class ProductSearch extends Product
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id'], 'integer'],
            [['name', 'alias', 'object', 'area', 'realization', 'image1', 'image2', 'image3', 'image4', 'image5', 'image6', 'image7', 'image8', 'image9', 'image10', 'image11', 'seo_title', 'seo_keywords', 'seo_h1', 'seo_description'], 'safe'],
];
}

/**
* @inheritdoc
*/
public function scenarios()
{
// bypass scenarios() implementation in the parent class
return Model::scenarios();
}

/**
* Creates data provider instance with search query applied
*
* @param array $params
*
* @return ActiveDataProvider
*/
public function search($params)
{
$query = Product::find();

$dataProvider = new ActiveDataProvider([
'query' => $query,
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'object', $this->object])
            ->andFilterWhere(['like', 'area', $this->area])
            ->andFilterWhere(['like', 'realization', $this->realization])
            ->andFilterWhere(['like', 'image1', $this->image1])
            ->andFilterWhere(['like', 'image2', $this->image2])
            ->andFilterWhere(['like', 'image3', $this->image3])
            ->andFilterWhere(['like', 'image4', $this->image4])
            ->andFilterWhere(['like', 'image5', $this->image5])
            ->andFilterWhere(['like', 'image6', $this->image6])
            ->andFilterWhere(['like', 'image7', $this->image7])
            ->andFilterWhere(['like', 'image8', $this->image8])
            ->andFilterWhere(['like', 'image9', $this->image9])
            ->andFilterWhere(['like', 'image10', $this->image10])
            ->andFilterWhere(['like', 'image11', $this->image11])
            ->andFilterWhere(['like', 'seo_title', $this->seo_title])
            ->andFilterWhere(['like', 'seo_keywords', $this->seo_keywords])
            ->andFilterWhere(['like', 'seo_h1', $this->seo_h1])
            ->andFilterWhere(['like', 'seo_description', $this->seo_description]);

return $dataProvider;
}
}