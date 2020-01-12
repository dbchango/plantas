<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Planta;

/**
 * PlantaSearch represents the model behind the search form of `app\models\Planta`.
 */
class PlantaSearch extends Planta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_planta', 'nombre_planta', 'id_tipo', 'precio_planta', 'fecha_compra', 'vida_util', 'stock', 'cantidad_compra', 'precio_compra'], 'integer'],
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
        $query = Planta::find();

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
            'id_planta' => $this->id_planta,
            'nombre_planta' => $this->nombre_planta,
            'id_tipo' => $this->id_tipo,
            'precio_planta' => $this->precio_planta,
            'fecha_compra' => $this->fecha_compra,
            'vida_util' => $this->vida_util,
            'stock' => $this->stock,
            'cantidad_compra' => $this->cantidad_compra,
            'precio_compra' => $this->precio_compra,
        ]);

        return $dataProvider;
    }
}
