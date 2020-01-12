<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "planta".
 *
 * @property int $id_planta
 * @property int $nombre_planta
 * @property int $id_tipo
 * @property int $precio_planta
 * @property int $fecha_compra
 * @property int $vida_util
 * @property int $stock
 * @property int $cantidad_compra
 * @property int $precio_compra
 */
class Planta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'planta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_planta', 'id_tipo', 'precio_planta', 'fecha_compra', 'vida_util', 'stock', 'cantidad_compra', 'precio_compra'], 'required'],
            [['nombre_planta', 'id_tipo', 'precio_planta', 'fecha_compra', 'vida_util', 'stock', 'cantidad_compra', 'precio_compra'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_planta' => 'Id Planta',
            'nombre_planta' => 'Nombre Planta',
            'id_tipo' => 'Id Tipo',
            'precio_planta' => 'Precio Planta',
            'fecha_compra' => 'Fecha Compra',
            'vida_util' => 'Vida Util',
            'stock' => 'Stock',
            'cantidad_compra' => 'Cantidad Compra',
            'precio_compra' => 'Precio Compra',
        ];
    }
}
