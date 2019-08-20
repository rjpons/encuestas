<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "crm_campania".
 *
 * @property int $id
 * @property int $user_id
 * @property string $campo1
 * @property string $campo2
 * @property string $campo3
 * @property string $campo4
 * @property string $campo5
 * @property string $campo6
 * @property string $campo7
 * @property string $campotexto1
 * @property string $campotexto2
 * @property string $comentario
 */
class Campania extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'crm_campania';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'campo1'], 'required'],
            [['user_id'], 'integer'],
            [['comentario'], 'string'],
            [['campo1', 'campo2', 'campo3', 'campo4', 'campo5', 'campo6', 'campo7', 'campotexto1', 'campotexto2'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'campo1' => '1er Pregunta (Valor)',
            'campo2' => '2da Pregunta (Valor)',
            'campo3' => '3er Pregunta (Valor)',
            'campo4' => '4ta Pregunta (Valor)',
            'campo5' => '5ta Pregunta (Valor)',
            'campo6' => '6ta Pregunta (Valor)',
            'campo7' => '7ma Pregunta (Valor)',
            'campotexto1' => '8va Pregunta (Texto)',
            'campotexto2' => '9na Pregunta (Texto)',
            'comentario' => 'Comentario sobre campaña',
        ];
    }
}
