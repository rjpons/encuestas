<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Resultcampa;

/**
 * ResultcampaSearch represents the model behind the search form of `common\models\Resultcampa`.
 */
class ResultcampaSearch extends Resultcampa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'campo1', 'campo2', 'campo3', 'campo4', 'campo5', 'campo6', 'campo7'], 'integer'],
            [['texto1', 'texto2'], 'safe'],
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
        $query = Resultcampa::find();

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
            'campo1' => $this->campo1,
            'campo2' => $this->campo2,
            'campo3' => $this->campo3,
            'campo4' => $this->campo4,
            'campo5' => $this->campo5,
            'campo6' => $this->campo6,
            'campo7' => $this->campo7,
        ]);

        $query->andFilterWhere(['like', 'texto1', $this->texto1])
            ->andFilterWhere(['like', 'texto2', $this->texto2]);

        return $dataProvider;
    }
}
