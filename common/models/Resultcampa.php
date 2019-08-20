<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "crm_resultcampa".
 *
 * @property int $id
 * @property int $campo1
 * @property int $campo2
 * @property int $campo3
 * @property int $campo4
 * @property int $campo5
 * @property int $campo6
 * @property int $campo7
 * @property string $texto1
 * @property string $texto2
 */
class Resultcampa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'crm_resultcampa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['campo1'], 'required'],
            [['campo1', 'campo2', 'campo3', 'campo4', 'campo5', 'campo6', 'campo7'], 'integer'],
            [['texto1', 'texto2'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'campo1' => 'Campo1',
            'campo2' => 'Campo2',
            'campo3' => 'Campo3',
            'campo4' => 'Campo4',
            'campo5' => 'Campo5',
            'campo6' => 'Campo6',
            'campo7' => 'Campo7',
            'texto1' => 'Texto1',
            'texto2' => 'Texto2',
        ];
    }
}
