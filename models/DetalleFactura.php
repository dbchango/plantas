<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detalle_factura".
 *
 * @property int $id_detalle
 * @property int $valor_venta
 * @property int $cantidad_venta
 * @property int $id_planta
 * @property int $id_factura
 */
class DetalleFactura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detalle_factura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['valor_venta', 'cantidad_venta', 'id_planta', 'id_factura'], 'required'],
            [['valor_venta', 'cantidad_venta', 'id_planta', 'id_factura'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_detalle' => 'Id Detalle',
            'valor_venta' => 'Valor Venta',
            'cantidad_venta' => 'Cantidad Venta',
            'id_planta' => 'Id Planta',
            'id_factura' => 'Id Factura',
        ];
    }
}
