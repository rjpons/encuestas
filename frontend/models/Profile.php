<?php

namespace frontend\models;

use Yii;
use common\models\User;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\db\Expression;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "profile".
 *
 * @property string $id
 * @property string $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $birthdate
 * @property string $gender_id
 * @property string $telefono
 * @property string $direccion
 * @property string $created_at
 * @property string $updated_at
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'crm_profile';
    }

    
    /**
    * behaviors to control time stamp, don't forget to use statement for expression
    *
     */ 
    public function behaviors()
    {
        return [
        'timestamp' => [
        'class' => 'yii\behaviors\TimestampBehavior',		
        'attributes' => [
		ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'], 
		ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
        ],
        'value' => new Expression('NOW()'),
        ],
        ];
    }    
  
    
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'gender_id'], 'required'],
            [['user_id', 'gender_id'], 'integer'],
            [['birthdate', 'created_at', 'updated_at'], 'safe'],
            [['first_name', 'last_name', 'telefono'], 'string', 'max' => 50],
            [['direccion'], 'string', 'max' => 100],
            [['gender_id'],'in', 'range'=>array_keys($this->getGenderList())]
        ];
    }

    
    /**
    * uses magic getGender on return statement
    *
    */
    public function getGenderName()
    {
        return $this->gender->gender_name;
    }    
   
    /**
    * get list of genders for dropdown
    */
    public static function getGenderList()
    {
        $droptions = Gender::find()->asArray()->all();
        return Arrayhelper::map($droptions, 'id', 'gender_name');
    }
    
    /**
    * @return \yii\db\ActiveQuery
    */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
    
    /**
    * @get Username
    */
    public function getUsername()
    {   
        return $this->user->username;
    }
 
   /**
    * @getUserId
    */
    public function getUserId()
    {
        return $this->user ? $this->user->id : 'none';
    } 
 
    /**
    * @getUserLink
    */
    public function getUserLink()
    {
        $url = Url::to(['user/view', 'id'=>$this->UserId]);
        $options = [];
        return Html::a($this->getUserName(), $url, $options);
    }
    
  /**
    * @getProfileLink
    */
    public function getProfileIdLink()
    {
        $url = Url::to(['profile/update', 'id'=>$this->id]);
        $options = [];
        return Html::a($this->id, $url, $options);
    }  
 
    
    
    /**
     * @inheritdoc
     */
   
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'first_name' => 'Nombres',
            'last_name' => 'Apellido',
            'birthdate' => 'Cumpleaños',
            'gender_id' => 'Genero',
            'telefono' => 'Telefono',
            'direccion' => 'Direccion',
            'created_at' => 'Creado el',
            'updated_at' => 'Actualizado el',
            'genderName' => Yii::t('app', 'Gender'),
            'userLink' => Yii::t('app', 'User'),
            'profileIdLink' => Yii::t('app', 'Profile'),
            
        ];
    }
    
    /**
    * @return \yii\db\ActiveQuery
    */
    public function getGender()
    {
        return $this->hasOne(Gender::className(), ['id' => 'gender_id']);
    }    
    
    
}
