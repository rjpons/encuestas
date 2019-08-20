<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Campania;

/**
 * CampaniaSearch represents the model behind the search form of `common\models\Campania`.
 */
class CampaniaSearch extends Campania
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['campo1', 'campo2', 'campo3', 'campo4', 'campo5', 'campo6', 'campo7', 'campotexto1', 'campotexto2', 'comentario'], 'safe'],
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
        $query = Campania::find();

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
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'campo1', $this->campo1])
            ->andFilterWhere(['like', 'campo2', $this->campo2])
            ->andFilterWhere(['like', 'campo3', $this->campo3])
            ->andFilterWhere(['like', 'campo4', $this->campo4])
            ->andFilterWhere(['like', 'campo5', $this->campo5])
            ->andFilterWhere(['like', 'campo6', $this->campo6])
            ->andFilterWhere(['like', 'campo7', $this->campo7])
            ->andFilterWhere(['like', 'campotexto1', $this->campotexto1])
            ->andFilterWhere(['like', 'campotexto2', $this->campotexto2])
            ->andFilterWhere(['like', 'comentario', $this->comentario]);

        return $dataProvider;
    }
}
