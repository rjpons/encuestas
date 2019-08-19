<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "crm_referencias".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $detalle
 * @property string $valor
 */
class Referencias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'crm_referencias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'detalle', 'valor'], 'required'],
            [['detalle'], 'string'],
            [['nombre'], 'string', 'max' => 50],
            [['valor'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'detalle' => 'Detalle',
            'valor' => 'Valor',
        ];
    }
}
