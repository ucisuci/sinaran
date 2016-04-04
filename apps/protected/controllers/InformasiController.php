<?php

class InformasiController extends Controller
{

	/**
	 * @return array action filters
	 */
	
	public function filters()
	{
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
	}
	
	/*
	public function beforeAction($action) {
		if(parent::beforeAction($action)) {
			$cs = Yii::app()->clientScript;
			$cs->registerCoreScript('jquery');
			return true;
		}
		return false;
	}
	*/

	
	public function actionIndex($idPaket) {
		
		$roleName = Yii::app()->session['roleName'];
		$model = RoleController::model()->getRoleUrl($roleName, 'informasi');
		$url = $model->controller.'/'.$model->method;
		//echo $url;die;
		$params = array('idPaket'=>$idPaket);
		//print_r($url);die();
		$this->redirect(Yii::app()->createUrl($url, $params));
		
	}

}