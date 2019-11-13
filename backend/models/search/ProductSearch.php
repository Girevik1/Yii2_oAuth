<?php

namespace backend\models\search;

use common\models\Product;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * ProductSearch represents the model behind the search form of `common\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['cost', 'type_id', 'text', 'sklad_id'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Product::find()->joinWith('sklad');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
//            'sklad_id' => $this->sklad_id,
        ]);

        $query->andFilterWhere(['like', 'cost', $this->cost])
            ->andFilterWhere(['like', 'type_id', $this->type_id])
            ->andFilterWhere(['like', 'text', $this->text]);
//            ->andFilterWhere(['like', 'sklad.title', $this->sklad_id]);
        return $dataProvider;
    }
}
