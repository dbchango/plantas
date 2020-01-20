<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetalleFactura;

/**
 * DetalleFacturaSearch represents the model behind the search form of `app\models\DetalleFactura`.
 */
class DetalleFacturaSearch extends DetalleFactura
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_detalle', 'cantidad_venta', 'id_planta', 'id_factura'], 'integer'],
            [['valor_venta'], 'number'],
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
        $query = DetalleFactura::find();

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
            'id_detalle' => $this->id_detalle,
            'valor_venta' => $this->valor_venta,
            'cantidad_venta' => $this->cantidad_venta,
            'id_planta' => $this->id_planta,
            'id_factura' => $this->id_factura,
        ]);

        return $dataProvider;
    }
}
