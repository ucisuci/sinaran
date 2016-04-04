<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
$private = require(dirname(__FILE__).'/private.php');
return array(

	
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Sistem Beasiswa',

	'theme'=>'madmin',
	
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.rights.*',
		'application.modules.rights.components.*',
		'application.extensions.debugtoolbar.*',
		'ext.ECompositeUniqueValidator.ECompositeUniqueValidator',
	),
	
	'aliases' => array(
		//If you used composer your path should be
		//'xupload' => 'ext.vendor.asgaroth.xupload'
		//If you manually installed it
		'xupload' => 'ext.xupload',
        'email' => 'application.modules.email',
        'vendor' => 'application.components.vendor',

	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
        'report_smcs',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'admin',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			//'ipFilters'=>array('127.0.0.1','::1'),
			'ipFilters'=>array('*'),
		),
		
		'rights'=>array(
			'debug'=>true,
			//'install'=>true,
			'userClass'=>'User',
			'userIdColumn'=>'id',
			'superuserName'=>'admin',    // I have inserted it in the 'user'  table
			'userNameColumn'=>'username',
			'enableBizRuleData'=>true,
		),
        'email' => array(
            // path to the EmailModule class
            'class' => 'email.EmailModule',

            // The ID of the CDbConnection application component. If not set, a SQLite3
            // database will be automatically created in protected/runtime/email-EmailVersion.db.
            'connectionID' => 'db',

            // Whether the DB tables should be created automatically if they do not exist. Defaults to true.
            // If you already have the table created, it is recommended you set this property to be false to improve performance.
            'autoCreateTables' => true,

            // The layout used for module controllers.
            'layout' => 'email.views.layouts.column1',

            // Defines the access filters for the module.
            // The default is EmailAccessFilter which will allow any user listed in EmailModule::adminUsers to have access.
            'controllerFilters' => array(
                'emailAccess' => array('email.components.EmailAccessFilter'),
            ),

            // A list of users who can access this module.
            'adminUsers' => array('admin'),

            // The path to YiiStrap.
            // Only required if you do not want YiiStrap in your app config, for example, if you are running YiiBooster.
            // Only required if you did not install using composer.
            // Please note:
            // - You must download YiiStrap even if you are using YiiBooster in your app.
            // - When using this setting YiiStrap will only loaded in the menu interface (eg: index.php?r=menu).
            'yiiStrapPath' => 'application.vendor.yiistrap',
        ),
		
	),

	// application components
	'components'=>array(
		
		'clientScript'=>array(
			'packages'=>array(
				'jquery'=>array(
					'baseUrl'=>''.$private['jquery_path'].'',
                    'js'=>array('jquery-1.11.1.js'),
                ),
			),
		),

		
		'user'=>array(
			//'class'=>'RWebUser',
			'class'=>'WebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		
		'phpThumb'=>array(
			'class'=>'ext.EPhpThumb.EPhpThumb',
			//'options'=>array()
		),
		
		'pelamarModel'=>array(
			'class' => 'application.components.model.PelamarModel'
		),
		'beasiswaModel'=>array(
			'class' => 'application.components.model.BeasiswaModel'
		),
		'aktifitasModel'=>array(
			'class' => 'application.components.model.AktifitasModel'
		),
		'beritaModel'=>array(
			'class' => 'application.components.model.BeritaModel'
		),
        'organisasiModel'=>array(
            'class' => 'application.components.model.OrganisasiModel'
        ),
		'keuanganModel'=>array(
			'class' => 'application.components.model.KeuanganModel'
		),
        'siakngService'=>array(
            'class' => 'application.components.service.SiakngService'
        ),
        'userModel'=>array(
            'class' => 'application.components.model.UserModel'
        ),
        'notifikasiModel'=>array(
            'class' => 'application.components.model.NotifikasiModel'
        ),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=> true,	// remove index.php (clean url)
			//'caseSensitive'=> false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),

		'db'=>array(
			'tablePrefix'=>'',
			//'class'=>'system.db.MyDbConnection',
			'connectionString'=>'pgsql:host='.$private['host'].';port='.$private['port'].';dbname='.$private['dbname'].'',
			'emulatePrepare'=>true,
			'username'=>$private['username'],
			'password'=>$private['password'],
			'charset'=>'UTF8',
		),
		
		'authManager'=>array(
            'class'=>'RDbAuthManager',
            'connectionID'=>'db',
            'itemTable'=>'role_management.rights_authitem',
			'itemChildTable'=>'role_management.rights_authitemchild',
			'assignmentTable'=>'role_management.rights_authassignment',
			'rightsTable'=>'role_management.rights',
        ),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
        'emailManager' => array(
            // path to the EEmailManager class
            'class' => 'email.components.EEmailManager',

            // Path to the SwiftMailer lib folder.
            // Only required if you did not install using composer.
            'swiftMailerPath' => 'application.vendor.swiftmailer.lib',

            // Path to the Mustache src folder.
            // Only required then templateType is set to "db".
            // Only required if you did not install using composer.
            'mustachePath' => 'application.vendor.mustache.src',

            // Default from email address.
            'fromEmail' => 'andri.setyawan@ui.ac.id',

            // Default from name.
            // If unset the application name is used.
            'fromName' => null,

            // Template type, can be one of: php, db.
            'templateType' => 'php',

            // When templateType=php this is the path to the email views.
            // You may copy the default templates from email/views/emails.
            'templatePath' => 'application.views.emails',

            // List of template parts that will be rendered.
            'templateFields' => array('subject', 'heading', 'message'),

            // The default layout to use for template emails.
            'defaultLayout' => 'layout_default',

            // The default transport to use.
            // For this example you can use "mail", "smtp" or "anotherSmtp".
            'defaultTransport' => 'mail',

            // A list of email transport methods, for example:
            //    array(
            //         'transport_name_or_id' => array(
            //            // the class name of the Swift_Transport subclass
            //            'class' => 'Swift_Transport',
            //            // set Swift_Transport::property1 to "my value"
            //            'property1' => 'my value',
            //            // call Swift_Transport::setProperty2("my value")
            //            'setters' => array(
            //                'property2' => 'my value',
            //            ),
            //        ),
            //    )
            'transports' => array(

                // mail transport
                'mail' => array(
                    // can be Swift_MailTransport or Swift_SmtpTransport
                    'class' => 'Swift_MailTransport',
                ),

                // smtp transport
                'smtp' => array(
                    // if you use smtp you may need to define the host, port, security and setters
                    'class' => 'Swift_SmtpTransport',
                    'host' => 'smtp.ui.ac.id',
                    'port' => 25,
                    'security' => null,
                    'setters' => array(
                        'username' => 'andri.setyawan',
                        'password' => '',
                    ),
                ),

                // another smtp transport
               /* 'anotherSmtp' => array(
                    'class' => 'Swift_SmtpTransport',
                    'host' => 'smtp.ui.ac.id',
                    'port' => 25,
                    'security' => null,
                    'setters' => array(
                        'username' => 'another_username',
                        'password' => 'another_password',
                    ),
                ),

                // gmail smtp transport
                'gmailSmtp' => array(
                    'class' => 'Swift_SmtpTransport',
                    'host' => 'smtp.gmail.com',
                    'port' => 465,
                    'security' => 'ssl',
                    'setters' => array(
                        'username' => 'username@gmail.com',
                        'password' => 'password',
                    ),
                ), */
            ),

        ),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	/*
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		//its list for pagination
		'listPerPage'=> 10,
	),
	*/
	'params'=>require(dirname(__FILE__).'/params.php'),
);
