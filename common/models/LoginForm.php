<?php
namespace common\models;

use Yii;
use yii\base\Model;
use yii\helpers\Security;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;
/**
 * Login form
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    public function attributeLabels()
            {
            return [
                'username' => 'Usuario',
                'password' => 'Clave',   
                'rememberMe' => 'Recordarme',   
                ];
            } 



    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Nombre de usuario o contraseña incorrecta.');
            }
        }
    }

    /**
     * agregado    OJO CON EL VALOR DEL STATUS ES Activo y NO Active
	*/

	public function loginAdmin()
		{
			if (($this->validate()) && $this->getUser()->role_id >= ValueHelpers::getRoleValue('admin')
			&& $this->getUser()->status_id == ValueHelpers::getStatusValue('Activo')) {
				if ($this->validate())  {	
				return Yii::$app->user->login($this->getUser(),
				$this->rememberMe ? 3600 * 24 * 30 : 0);
				} else {
				throw new NotFoundHttpException('Ud. no tiene acceso.');
				}
			} else {
			throw new NotFoundHttpException('Solo administradores con estado activo acceden a esta sección.');			
			}
		}	
	 	
	
    /**
     * modificado OJO CON EL VALOR DEL STATUS ES Activo y NO Active
     */
	 
    public function login()
    {
 
		if ($this->validate() && $this->getUser()->status_id == ValueHelpers::getStatusValue('Activo')) {	
			if ($this->validate()) {	
				return Yii::$app->user->login($this->getUser(),
				$this->rememberMe ? 3600 * 24 * 30 : 0);
				} else {
				return false;
			}
		}
    }

	
    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}
