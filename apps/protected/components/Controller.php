<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
 Yii::import('application.vendor.*');
require_once('CAS/CAS.php');
 
class Controller extends RController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	//public $layout='//layouts/main';
	public $layout = 'main-simple';
	
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	/* 
	public $menu=array(
		'items' => array(
                    array(
                        'label' => '<span class="username">Home</span>',
                        'url' => array('site/index'),
                    ),
					array(
                        'label' => '<span class="username">Beranda</span> &nbsp; <i class="fa fa-angle-down"></i>',
                        'url' => '#',
                        'linkOptions'=> array(
                            'class' => 'dropdown-toggle',
                            'data-toggle' => 'dropdown',
                            ),
                        'itemOptions' => array('class'=>'dropdown user'),
                        'items' => array(
                            array(
                                'label' => 'Pendaftar',
                                'url' => '#'
                            ),
                            array(
                                'label' => 'Pengelola',
                                'url' => '#',
                            ),
                            array(
                                'label' => '</i>Pendonor</a>',
                                'url' => '#',
                            ),
                        )
                    ),
					array(
                        'label' => '<span class="username">Bantuan</span> &nbsp; <i class="fa fa-angle-down"></i>',
                        'url' => '#',
                        'linkOptions'=> array(
                            'class' => 'dropdown-toggle',
                            'data-toggle' => 'dropdown',
                            ),
                        'itemOptions' => array('class'=>'dropdown user'),
                        'items' => array(
                            array(
                                'label' => 'Akses dan User Account',
                                'url' => '#'
                            ),
                            array(
                                'label' => 'Pendaftaran',
                                'url' => '#',
                            ),
                            array(
                                'label' => 'FAQ',
                                'url' => '#',
                            ),
                            array(
                                'label' => 'Dokumentasi',
                                'url' => '#',
                            ),
                            array(
                                'label' => 'Kontak Pengelola',
                                'url' => '#',
                            ),
                        )
                    ),
                ),
                'encodeLabel' => false,
                'htmlOptions' => array(
                    'class'=>'hidden-xs nav navbar-nav navbar-top-links horizontal-menu',
                        ),
                'submenuHtmlOptions' => array(
                    'class' => 'dropdown-menu',
                )
            );
	
	*/
	/**
	 * @var array context hidden menu items.
	 */
	/* 
	public $hidden_menu=array(
		'items' => array(
					array(
                        'label'=>'<img src=images/ui.png > &nbsp; Sistem Beasiswa UI &nbsp;<i class="fa fa-angle-down"></i>',
                        'url' => '#',
                        'linkOptions'=> array(
                            'class' => 'dropdown-toggle',
                            'data-toggle' => 'dropdown',
                            ),
                        'itemOptions' => array('class'=>'dropdown user'),
                        'items' => array(
                            array(
                                'label' => '<h5>Home</h5>',
                                'url' => '#',
                            ),
                            array(
                                'label' => 'Home',
                                'url' => '#',
                            ),
                            array(
                                'label' => 'Pendonor',
                                'url' => '#',
                            ),
                        ),
                    ),
                ),
                'encodeLabel' => false,
                'htmlOptions' => array(
                    'class'=>'nav visible-xs',
                        ),
                'submenuHtmlOptions' => array(
                    'class' => 'dropdown-menu mega-menu-submenu',
                )
            );
	*/
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

    public static $role;

	/**
	 * @var array menu profile untuk nampilin list menu bagi user
	*/
	
	public $menu_profile=array(
		'items' => array(
                    array(
                        'label' => '<img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/48.jpg" alt="" class="img-responsive img-circle"/>&nbsp;John Doe&nbsp;<span class="caret"></span>',
                        'url' => '#',
                        'linkOptions'=> array(
                            'class' => 'dropdown-toggle',
                            'data-toggle' => 'dropdown',
                            ),
                        'itemOptions' => array('class'=>'dropdown user'),
                        'items' => array(
                            array(
                                'label' => '<i class="fa fa-user"></i>My Profile',
                                'url' => '#'
                            ),
                            array(
                                'label' => '<i class="fa fa-calendar"></i>My Calendar',
                                'url' => '#',
                            ),
                            array(
                                'label' => '<i class="fa fa-envelope"></i>My Inbox<span class="badge badge-danger">3</span>',
                                'url' => '#',
                            ),
                            array(
                                'label' => '<i class="fa fa-tasks"></i>My Tasks<span class="badge badge-success">7</span>',
                                'url' => '#',
                            ),
                            array(
                                'label' => '<i class="fa fa-lock"></i>Lock Screen',
                                'url' => '#',
                            ),
                            array(
                                'label' => '<i class="fa fa-key"></i>Log Out',
                                'url' => array('login/logout'),
                            ),

                        )
                    ),
                ),
                'encodeLabel' => false,
                'htmlOptions' => array(
                    'class'=>'hidden-xs nav navbar-nav navbar-top-links horizontal-menu navbar',
                        ),
                'submenuHtmlOptions' => array(
                    'class' => 'dropdown-menu dropdown-user',
                )
            );
		

	/**
	 * @var array list Notification
	*/
	public $list_notification=array();
	
	public $rememberMe;
	private $_identity;
	private $userCasAttributes;
	
	public function beforeAction($action) {      
	  
		$controllerId = $this->getId();
		$actionId = $action->id;
		
		//echo "controllerId : ".$controllerId;
		//echo "<br />";
		//echo "actionId : ".$actionId;	
		//echo "<br />";
	
		//$this->casValidation();
		//$generalController = array('site', 'paketbeasiswa', 'pendaftaran', 'unggah', 'informasi', 'detailpelamar', 'login');
		$generalController = Yii::app()->params['generalController'];
		$roleName = Yii::app()->session['roleName'];
        //print_r(Yii::app()->session['listControllerNRoleName']);die();
		if (!empty($roleName)) {
			if (!array_key_exists($controllerId, Yii::app()->session['listControllerNRoleName'])) {
				if (!in_array($controllerId, $generalController)) {
					$this->redirect(Yii::app()->createUrl('site/ubahRole', array('roleName'=>$roleName)));
				}	
			}
		}
		
		//echo "controllerRole : ".$controllerRole;
		
		//echo "<pre>";
		//print_r(Yii::app()->session['listControllerNRoleName']);
		//echo "<br />";
		//echo "controllerRole : ".$controllerRole;
		
		$this->pageTitle = ucfirst($controllerId). ' - ' .ucfirst($actionId);
        return parent::beforeAction($action);
		
	}
	
	
	public function casValidation() {
		
		$isCasValidated = false;
		$server = Yii::app()->params['casServer'];
		$port = Yii::app()->params['casPort'];
		
		phpCAS::client(CAS_VERSION_2_0, $server, $port, '');
		phpCAS::setDebug('/tmp/lasldhasd');
		phpCAS::setNoCasServerValidation();
		phpCAS::forceAuthentication();
		
		$userLogin = phpCAS::getUser();
		$attributes = phpCas::getAttributes();
		
		$this->userCasAttributes = array('userLogin' => $userLogin, 'attributes' => $attributes);
		// echo "<pre>";print_r($this->userCasAttributes);
		// die;
		
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
			
			$isCasValidated = true;
			//$this->redirect(Yii::app()->user->returnUrl);
			
		}
		//else{
			//echo "Empty";
		//}
		return $isCasValidated;
	}
	
	
}
