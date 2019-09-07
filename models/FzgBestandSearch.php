<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FzgBestand;

/**
 * FzgBestandSearch represents the model behind the search form of `app\models\FzgBestand`.
 */
class FzgBestandSearch extends FzgBestand
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nr', 'ek_datum', 'modell', 'verkaeufer', 'fin', 'vk_datum', 'kaeufer', 'sonstiges'], 'safe'],
            [['ek_netto_preis', 'ek_mwst', 'ek_brutto_preis', 'vk_netto_preis', 'vk_mwst', 'vk_brutto_preis', 'gewinn'], 'number'],
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
       // var_dump($params);Exit();
        $query = FzgBestand::find();

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
            'ek_datum' => $this->ek_datum,
            'ek_netto_preis' => $this->ek_netto_preis,
            'ek_mwst' => $this->ek_mwst,
            'ek_brutto_preis' => $this->ek_brutto_preis,
            'vk_datum' => $this->vk_datum,
            'vk_netto_preis' => $this->vk_netto_preis,
            'vk_mwst' => $this->vk_mwst,
            'vk_brutto_preis' => $this->vk_brutto_preis,
            'gewinn' => $this->gewinn,
        ]);

        $query->andFilterWhere(['like', 'nr', $this->nr])
            ->andFilterWhere(['like', 'modell', $this->modell])
            ->andFilterWhere(['like', 'verkaeufer', $this->verkaeufer])
            ->andFilterWhere(['like', 'fin', $this->fin])
            ->andFilterWhere(['like', 'kaeufer', $this->kaeufer])
            ->andFilterWhere(['like', 'sonstiges', $this->sonstiges]);
            //->andFilterWhere(['between', 'id', $this->id, 300]);

        return $dataProvider;
    }
}
