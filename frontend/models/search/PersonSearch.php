<?php

namespace frontend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Person;

/**
 * PersonSearch represents the model behind the search form of `common\models\person`.
 */
class PersonSearch extends Person
{
    /* Вычисляемое поле */
    public $fullName;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'first_name', 'country_id'], 'integer'],
            [['last_name', 'parent_id', 'fullName'], 'safe'],
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
        $query = Person::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        /**
         * Настройка параметров сортировки
         * Важно: должна быть выполнена раньше $this->load($params)
         */
        $dataProvider->setSort([
            'attributes' => [
                'id',
                'fullName' => [
                    'asc' => ['first_name' => SORT_ASC, 'last_name' => SORT_ASC],
                    'desc' => ['first_name' => SORT_DESC, 'last_name' => SORT_DESC],
                    'label' => 'Full Name',
                    'default' => SORT_ASC
                ],
                'country_id'
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }


        $this->addCondition($query, 'id');
        $this->addCondition($query, 'first_name', true);
        $this->addCondition($query, 'last_name', true);
        $this->addCondition($query, 'country_id');

        /* Настроим правила фильтрации */

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'first_name' => $this->first_name,
        ]);

        $query->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'country_id', $this->country_id])
            ->andFilterWhere(['like', 'parent_id', $this->parent_id]);
        // фильтр по имени
        $query->andWhere('first_name LIKE "%' . $this->fullName . '%" ' .
            'OR last_name LIKE "%' . $this->fullName . '%"'
        );


        return $dataProvider;
    }

    protected function addCondition($query, $attribute, $partialMatch = false)
    {
        if (($pos = strrpos($attribute, '.')) !== false) {
            $modelAttribute = substr($attribute, $pos + 1);
        } else {
            $modelAttribute = $attribute;
        }

        $value = $this->$modelAttribute;
        if (trim($value) === '') {
            return;
        }

        /*
         * Для корректной работы фильтра со связью со
         * свой же моделью делаем:
         */
        $attribute = "person.$attribute";

        if ($partialMatch) {
            $query->andWhere(['like', $attribute, $value]);
        } else {
            $query->andWhere([$attribute => $value]);
        }
    }
}
