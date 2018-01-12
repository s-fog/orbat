<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Event;

/**
* EventSearch represents the model behind the search form about `common\models\Event`.
*/
class EventSearch extends Event
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'date'], 'integer'],
            [['name', 'text', 'image', 'alias', 'seo_title', 'seo_keywords', 'seo_h1', 'seo_description'], 'safe'],
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
$query = Event::find();

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
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'seo_title', $this->seo_title])
            ->andFilterWhere(['like', 'seo_keywords', $this->seo_keywords])
            ->andFilterWhere(['like', 'seo_h1', $this->seo_h1])
            ->andFilterWhere(['like', 'seo_description', $this->seo_description]);

return $dataProvider;
}
}