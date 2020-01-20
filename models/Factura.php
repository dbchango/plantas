<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "factura".
 *
 * @property int $id_factura
 * @property int $id_cliente
 * @property int $ci_cliente
 * @property int $fecha_factura
 * @property string $id_detalle_factura
 * @property int $subtotal_factura
 * @property int $iva_factura
 * @property int $total_factura
 */
class Factura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'factura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_cliente', 'ci_cliente', 'fecha_factura', 'id_detalle_factura', 'subtotal_factura', 'iva_factura', 'total_factura'], 'required'],
            [['id_cliente', 'ci_cliente', 'fecha_factura', 'subtotal_factura', 'iva_factura', 'total_factura'], 'integer'],
            [['id_detalle_factura'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_factura' => 'Id Factura',
            'id_cliente' => 'Id Cliente',
            'ci_cliente' => 'Ci Cliente',
            'fecha_factura' => 'Fecha Factura',
            'id_detalle_factura' => 'Id Detalle Factura',
            'subtotal_factura' => 'Subtotal Factura',
            'iva_factura' => 'Iva Factura',
            'total_factura' => 'Total Factura',
        ];
    }
}
