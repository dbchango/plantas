<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_planta".
 *
 * @property int $id_tipo
 * @property int $nombre_tipo
 */
class TipoPlanta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo_planta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_tipo'], 'required'],
            [['nombre_tipo'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tipo' => 'Id Tipo',
            'nombre_tipo' => 'Nombre Tipo',
        ];
    }
}
