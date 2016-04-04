<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	/* 
	public function authenticate()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
	*/
	
	private $_id;
	private $casAttributes;
	
	public function setUserCasAttributes($casAttributes) {
		$this->casAttributes = $casAttributes;
	}
	
	public function authenticate()
	{		
		//print_r($this->casAttributes);
		//print_r($this->username);
		//die;
		$user=User::model()->find('LOWER(username)=?',array(strtolower($this->username)));
		//print_r($this->casAttributes);die();
		
		if($user!=null) {
			$this->_id=$user->id;
			$this->username=strtolower($user->username);
			$this->errorCode=self::ERROR_NONE;
		}else{
			$userModel  = New User;
			
			$userModel->username = $this->casAttributes['userLogin'];
			
			if (isset($this->casAttributes['attributes']['nama'])){
				$userModel->nama = $this->casAttributes['attributes']['nama'];
				//echo ("Nama : ".$this->casAttributes['attributes']['nama']);
			}else{
				$userModel->nama = $this->casAttributes['attributes']['ldap_cn'];
				//echo ("Nama ldap cn : ".$this->casAttributes['attributes']['ldap_cn']);
			}
			
			if (isset($this->casAttributes['attributes']['email']))
				$userModel->email = $this->casAttributes['attributes']['email'];
			
			//echo "<pre>";print_r($userModel);\
			//
			$userModel->save();
			//die;
			
			//echo ("User Id : ".$userModel->id);die;
			$this->_id=$userModel->id;
			$this->username=strtolower($userModel->username);
			$this->errorCode=self::ERROR_NONE;
			
		}
		
		$this->setState('casAttr', $this->casAttributes);
		
		
		return $this->errorCode==self::ERROR_NONE;
		
	}
	
	
	/**
	 * @return integer the ID of the user record
	 */
	public function getId()
	{
		return $this->_id;
	}
	
	
}