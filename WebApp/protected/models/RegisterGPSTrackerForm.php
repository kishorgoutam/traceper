<?php

/**
 * RegisterForm class.
 * RegisterForm is the data structure for registering
 * the user. It is used by the 'register' action of 'SiteController'.
 */
class RegisterGPSTrackerForm extends CFormModel
{
	public $name;
	public $deviceId;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			//name and deviceID (IMEI no) are required
			array('name, deviceId', 'required',
			'message'=>'Field cannot be blank!'),						
			// password needs to be same
			/*
			array('passwordAgain', 'compare', 'compareAttribute'=>'password',
			'message'=>'Passwords not same!'),
			*/
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			//'email'=>Yii::t('general', 'E-mail'),
			//'passwordAgain'=>Yii::t('general', 'Password (Again)'),
		);
	}	
}
