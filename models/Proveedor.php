<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proveedor".
 *
 * @property int $id_proveedor
 * @property int $nombre_proveedor
 * @property int $ruc_proveedor
 */
class Proveedor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'proveedor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_proveedor', 'ruc_proveedor'], 'required'],
            [['nombre_proveedor', 'ruc_proveedor'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_proveedor' => 'Id Proveedor',
            'nombre_proveedor' => 'Nombre Proveedor',
            'ruc_proveedor' => 'Ruc Proveedor',
        ];
    }
}
