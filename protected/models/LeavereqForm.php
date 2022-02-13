<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LeavereqForm extends CFormModel
{
	public $reason;
	public $startdate;
	public $enddate;
	public $type;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('reason, startdate, enddate, type', 'required'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'rememberMe'=>'Remember me next time',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 * @param string $attribute the name of the attribute to be validated.
	 * @param array $params additional parameters passed with rule when being executed.
	 */
	public function authenticateemp($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new EmpIdentity($this->username,$this->password);
			if(!$this->_identity->authenticateemp())
				$this->addError('password','Incorrect username or password.');
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function loginemp()
	{
		if($this->_identity===null)
		{
			$this->_identity=new EmpIdentity($this->username,$this->password);
			$this->_identity->authenticateemp();
		}
		if($this->_identity->errorCode===EmpIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
}