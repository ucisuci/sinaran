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
	