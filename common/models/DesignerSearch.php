<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Designer;

/**
* DesignerSearch represents the model behind the search form about `common\models\Designer`.
*/
class DesignerSearch extends Designer
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'sortOrder'], 'integer'],
            [['name', 'alias', 'product_text', 'text', 'image', 'studio', 'address', 'phone1', 'phone2', 'email', 'site', 'seo_title', 'seo_keywords', 'seo_h1', 'seo_description'], 'safe'],
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
$query = Designer::find()->orderBy(['sortOrder' => SORT_DESC]);

$dataProvider = new ActiveDataProvider([
'query' => $query,
    'pagination' => false
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
            ->andFilterWhere(['like', 'product_text', $this->product_text])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'studio', $this->studio])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone1', $this->phone1])
            ->andFilterWhere(['like', 'phone2', $this->phone2])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'site', $this->site])
            ->andFilterWhere(['like', 'seo_title', $this->seo_title])
            ->andFilterWhere(['like', 'seo_keywords', $this->seo_keywords])
            ->andFilterWhere(['like', 'seo_h1', $this->seo_h1])
            ->andFilterWhere(['like', 'seo_description', $this->seo_description]);

return $dataProvider;
}
}