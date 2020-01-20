<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_pago".
 *
 * @property int $id_tipo_pago
 * @property string $nombre_tipo_pago
 */
class TipoPago extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo_pago';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_tipo_pago'], 'required'],
            [['nombre_tipo_pago'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tipo_pago' => 'Id Tipo Pago',
            'nombre_tipo_pago' => 'Nombre Tipo Pago',
        ];
    }
}
