<?php

class SiteController extends Controller
{	
	//public $layout='//layouts/main-simple';
	
	/**
	 * @return array action filters
	 */
	
	public function filters() {
		return array(
			'rights',
		);
	}
	

	/**
	* Actions that are always allowed.
	*/
	public function allowedActions()
	{
	 	//return 'index, beranda, jadipendaftar';
		return 'error';
	}
	
	
	public function beforeAction($action) {
		if(parent::beforeAction($action)) {
			$cs = Yii::app()->clientScript;
			$cs->registerCoreScript('jquery');
			return true;
		}
		return false;
	}
	
	
	/**
	 * This is the action to handle external exceptions.
	 */
	 
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
		
	}
	
	public function actionUbahRole($roleName){
		
		$model = RightsAuthitem::model()->find('name=:roleName', array(':roleName'=>$roleName));
		
		$modelRoleUrl = RoleController::model()->getRoleUrlList($roleName);

		//echo "<pre>";print_r($modelRoleUrl);
		//echo "<br />";
		$listControllerNRoleName = CHtml::listData($modelRoleUrl, 'controller', 'method');
		//echo "<pre>";print_r($listControllerNRoleName);die;
		
		if($model===null)
				throw new CHttpException(404,'The requested role does not exist.');

		Yii::app()->session['roleName'] = $model->name;
		Yii::app()->session['roleDescription'] = $model->description;
		Yii::app()->session['listControllerNRoleName'] = $listControllerNRoleName;

		$this->redirect(array('site/index'));
	
	}
	
	public function actionIndex() {

		$aktifitas = array();
		$berita = array();
		if(strtolower(Yii::app()->session['roleName']) == "pengelola_fakultas"){
			//aktifitas pengelola ambil dari audit
			//$aktifitas = Yii::app()->aktifitasModel->getAktifitasPengelolaFakultas('',Yii::app()->user->Id);
			//$berita = Yii::app()->beritaModel->getPaketBeasiswaAktif();
		}
$notifikasi = array();

		$dataRender = array(
			'notifikasi'=>$notifikasi,
			'aktifitas'=>$aktifitas,
			'berita'=>$berita
		);
		$this->layout = "main-simple";
		$this->pageTitle = "Home";
		$renderView = "home";
		$this->render($renderView,
			array(
				'dataRender'=>$dataRender
			)
		);
	
	}
	public function actionBeranda() {

		$roleName = Yii::app()->session['roleName'];
		$model = RoleController::model()->getRoleUrl($roleName, 'beranda');
		$url = $model->controller.'/'.$model->method;

		$this->redirect(Yii::app()->createUrl($url));
		
	}

	
}
