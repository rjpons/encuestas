<?php

namespace backend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "status".
 *
 * @property int $id
 * @property string $status_name
 * @property int $status_value
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'crm_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status_name', 'status_value'], 'required'],
            [['status_value'], 'integer'],
            [['status_name'], 'string', 'max' => 45],
        ];
    }

    public function getUsers()
    {
        return $this->hasMany(User::className(), ['status_id' => 'status_value']);
    }    
    
    
    
    
    
    
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status_name' => 'Status Nombre',
            'status_value' => 'Status Valor',
        ];
    }
}
