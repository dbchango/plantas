<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Factura;

/**
 * FacturaSearch represents the model behind the search form of `app\models\Factura`.
 */
class FacturaSearch extends Factura
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_factura', 'id_cliente', 'ci_cliente', 'fecha_factura', 'subtotal_factura', 'iva_factura', 'total_factura'], 'integer'],
            [['id_detalle_factura'], 'safe'],
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
        $query = Factura::find();

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
            'id_factura' => $this->id_factura,
            'id_cliente' => $this->id_cliente,
            'ci_cliente' => $this->ci_cliente,
            'fecha_factura' => $this->fecha_factura,
            'subtotal_factura' => $this->subtotal_factura,
            'iva_factura' => $this->iva_factura,
            'total_factura' => $this->total_factura,
        ]);

        $query->andFilterWhere(['like', 'id_detalle_factura', $this->id_detalle_factura]);

        return $dataProvider;
    }
}
