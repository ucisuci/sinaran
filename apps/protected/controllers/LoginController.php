<?php

Yii::import('application.vendor.*');
require_once('CAS/CAS.php');

class LoginController extends Controller
{
	
	/*
	public $rememberMe;
	private $_identity;
	private $userCasAttributes;
	
	protected function casValidation() {
		
		$server = 'sso.ui.ac.id/cas';
		$port = 443;
		
		phpCAS::client(CAS_VERSION_2_0, $server, $port, '');
		//phpCAS::setDebug('/tmp/lasldhasd');
		phpCAS::setNoCasServerValidation();
		phpCAS::forceAuthentication();
		
		$userLogin = phpCAS::getUser();
		$attributes = phpCas::getAttributes();
		
		$this->userCasAttributes = array('userLogin' => $userLogin, 'attributes' => $attributes);
		
		
		//print_r($this->userCasAttributes);
		//die;
		
		
		if (!empty($userLogin)) {
			//echo "Login";
			if($this->_identity===null)
			{
				$this->_identity=new UserIdentity($userLogin, 'passwd');
				$this->_identity->setUserCasAttributes($this->userCasAttributes);
				$this->_identity->authenticate();
			}
		
			if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
			{	
			
				$duration=$this->rememberMe ? 3600*24*1 : 0; // 1 days
				Yii::app()->user->login($this->_identity, $duration);
				//return true;
			}
			
			
			//print_r($this->_identity);
			//die;
			
			//echo "<pre>";print_r(Yii::app()->user->casAttr['attributes']);die;
			$this->redirect(Yii::app()->user->returnUrl);
			
		}else{
			//echo "Empty";
		}
		
	}
	*/
	/*
	public function beforeAction($action) {      
		
		//$this->redirect(Yii::app()->createUrl("site/jadiPendaftar"));
		//echo "<pre>";print_r($action);die;
		//echo $action->id;die;
		$actionId = $action->id;
		//echo $actionId;die;
		if ($actionId=="index") {
			return false;
		}else{
			return true;
        }
		//return parent::beforeAction($action);
		
	}
	*/
	public function actionIndex() {
	
		$isCasValidated = $this->casValidation();
		if ($isCasValidated) {
            
            
            $this->redirect(Yii::app()->user->returnUrl);
			/*
			FileAttachments::createUploadDirectory();
			
			$isUserAssignedToUserRole = true;
			$roles=Rights::getAssignedRoles(Yii::app()->user->Id); // check role
			
			//echo "<pre>";print_r($roles);	
			if (empty($roles)) {
				//echo "<br />";
				//echo "Belum punya role nih";
				$isUserAssignedToUserRole = false;
			}
			//die;
			
			
			if (!$isUserAssignedToUserRole) {
			
				$defaultRole = "pendaftar";
				
				$assignUserToRolePendaftar = New RightsAuthassignment;
				$assignUserToRolePendaftar->itemname = $defaultRole;
				$assignUserToRolePendaftar->userid = Yii::app()->user->Id;
				$assignUserToRolePendaftar->data = "N;";
				$assignUserToRolePendaftar->save();
				
				$this->redirect(Yii::app()->createUrl('site/ubahRole', array('roleName'=>$defaultRole)));
				
			}else{
				
				$sqlQuery = "
					SELECT
					a.userid, b.name, b.description, c.priority
					FROM
					role_management.rights_authassignment a
					INNER JOIN
					role_management.rights_authitem b
					ON a.itemname = b.name
					INNER JOIN
					role_management.role_priority c
					ON a.itemname = c.itemname
					WHERE
					b.type = 2
					AND
					a.userid = :userId
					ORDER BY
					c.priority
				";
				
				$sql = Yii::app()->db->createCommand($sqlQuery);
				$userId = Yii::app()->user->Id;
				$sql->bindParam(":userId", $userId, PDO::PARAM_STR); 	
				$data = $sql->queryRow();
				//print_r($data);
				
				$this->redirect(Yii::app()->createUrl('site/ubahRole', array('roleName'=>$data['name'])));
				
			}
			*/
		}
		
	}
	
	public function actionLogout() {
		//phpCAS::setDebug('/tmp/blabla');
		
		$server = Yii::app()->params['casServer'];
		$port = Yii::app()->params['casPort'];
		
		//echo "server cas : ".$server;
		//die;
		
		phpCAS::client(SAML_VERSION_1_1, $server, $port, '');
    	phpCAS::setNoCasServerValidation();
		
		// handle incoming logout requests
		phpCAS::logout();

		phpCAS::handleLogoutRequests();
        phpCAS::forceAuthentication();
	}
	
	
}
