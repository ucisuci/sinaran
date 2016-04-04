<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends RController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	//public $layout='//layouts/main';
	public $layout='';
	
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
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
	
	/**
	 * @var array context hidden menu items.
	 */
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
	
	protected function beforeAction($action) {          
		$controllerId = $this->getId();
		$actionId = $action->id;
		
		$this->pageTitle = ucfirst($controllerId) . ' - ' . ucfirst($actionId);
        return parent::beforeAction($action);
    }
}
