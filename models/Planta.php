<?php

namespace app\models;

use Yii;
use yz\shoppingcart\CartPositionInterface;
use yz\shoppingcart\CartPositionTrait;

/**
 * This is the model class for table "planta".
 *
 * @property int $id_planta
 * @property string $nombre_planta
 * @property int $id_tipo
 * @property int $precio_planta
 * @property string $fecha_compra
 * @property int $vida_util
 * @property int $stock
 * @property int $cantidad_compra
 * @property float $precio_compra
 */
class Planta extends \yii\db\ActiveRecord implements CartPositionInterface
{
    /**
     * {@inheritdoc}
     */

    use CartPositionTrait;

    public function getPrice()
    {
        return $this->price;
    }

    public function getId()
    {
        return $this->id;
    }

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
            [['id_tipo', 'precio_planta', 'vida_util', 'stock', 'cantidad_compra'], 'integer'],
            [['fecha_compra'], 'safe'],
            [['precio_compra'], 'number'],
            [['nombre_planta'], 'string', 'max' => 11],
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
