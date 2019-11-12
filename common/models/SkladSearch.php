<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * SkladSearch represents the model behind the search form of `common\models\Sklad`.
 */
class SkladSearch extends Sklad
{
    public $cost;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'address'], 'safe'],
            [['cost'], 'safe']
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
        $query = Sklad::find()->joinWith('product');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->setSort([
            'attributes' => array_merge($dataProvider->getSort()->attributes,[
                'cost' => [
                    'asc' => ['cost' => SORT_ASC],
                    'desc' => ['cost' => SORT_DESC],
                    'default' => SORT_ASC,
                    'label' => 'Цена'
                ]
            ])
            ]
        );

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            //'product.sclad_id'=>$this->id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'address', $this->address]);
            //->andFilterWhere(['like', 'product.cost', $this->cost]);

        return $dataProvider;
    }
}
