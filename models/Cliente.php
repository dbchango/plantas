<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $id_cliente
 * @property int $nombre_cliente
 * @property int $ci_cliente
 * @property int $correo_cliente
 * @property int $telefono_cliente
 * @property int $direccion_cliente
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_cliente', 'ci_cliente', 'correo_cliente', 'telefono_cliente', 'direccion_cliente'], 'required'],
            [['nombre_cliente', 'ci_cliente', 'correo_cliente', 'telefono_cliente', 'direccion_cliente'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_cliente' => 'Id Cliente',
            'nombre_cliente' => 'Nombre Cliente',
            'ci_cliente' => 'Ci Cliente',
            'correo_cliente' => 'Correo Cliente',
            'telefono_cliente' => 'Telefono Cliente',
            'direccion_cliente' => 'Direccion Cliente',
        ];
    }
}
