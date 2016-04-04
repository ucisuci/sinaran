<?php
class InformasiroledirkemahasiswaanController extends Controller
{			
	public $id_paket="";
	public $nama_paket="";
	
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
	
	public function beforeAction($action) {
		if (parent::beforeAction($action)) {
			$cs = Yii::app()->clientScript;
			$cs->registerCoreScript('jquery');
			return true;
		}
		return false;
	}
	
	
	//Informasi Paket Beasiswa Role Direktorat Kemahasiswaan
	public function actionIndex($idPaket) {
		
		$detailPaket = Yii::app()->beasiswaModel->getPaketById($idPaket);
		//echo "<pre>";print_r($detailPaket);die;
		$syaratKetentuanBeasiswa = SyaratKetentuanBeasiswa::model()->findAll(array('condition'=>'id_paket_beasiswa=:idPaketBeasiswa',  'params'=>array(':idPaketBeasiswa'=>$idPaket), 'order'=>'id, id_paket_beasiswa'));
		$fileSk = FileAttachments::model()->findAll('tipe_file=:tipe AND id_fk=:idPaketBeasiswa AND is_delete=false', array(':idPaketBeasiswa'=>$idPaket, ':tipe'=>'SK Paket Beasiswa'));
		$fileDokumenPendukung = FileAttachments::model()->findAll('tipe_file=:tipe AND id_fk=:idPaketBeasiswa AND is_delete=false', array(':idPaketBeasiswa'=>$idPaket, ':tipe'=>'Dokumen Paket Beasiswa'));
		$fileDokumenInternal = FileAttachments::model()->findAll('tipe_file=:tipe AND id_fk=:idPaketBeasiswa AND is_delete=false', array(':idPaketBeasiswa'=>$idPaket, ':tipe'=>'Dokumen Internal Paket Beasiswa'));
		$this->pageTitle = "Informasi Paket Beasiswa";
		
		//$setDetailPaketToSession = PaketBeasiswa::model()->setDetailPaketBeasiswaToSession($idPaket);
		//$this->id_paket = Yii::app()->session[$idPaket]['id'];
		//$this->nama_paket = Yii::app()->session[$idPaket]['nama_paket_beasiswa'];
        if(empty($detailPaket))
        {
            throw new CHttpException(404,'Beasiswa not found., Pendonor tidak ditemukan atau Mata uang tidak ditemukan.');
        }
		$paketBeasiswaDetail = PaketBeasiswa::model()->findByPk($idPaket);
		$this->id_paket = $paketBeasiswaDetail->id;
		$this->nama_paket = $paketBeasiswaDetail->nama_paket_beasiswa; 
		$isPublished =  $paketBeasiswaDetail->is_published; 
		
		//cek dahulu apakah rincian komponen sudah dibuat atau belum, dan pengelola fakultas sudah di set belum
		$komponenPaket = Yii::app()->beasiswaModel->getRincianKomponenPaketBeasiswaByIdPaket($idPaket);


		$action = 'informasi';
		$renderPartialView = "_info_detail_paket_beasiswa";	
			
		$dataRender = array(			
			'detailPaket'=>$detailPaket,
			'syaratKetentuanBeasiswa'=>$syaratKetentuanBeasiswa,
			'fileSk'=>$fileSk,
			'komponenPaket' => $komponenPaket,
			'fileDokumenPendukung'=>$fileDokumenPendukung,
			'fileDokumenInternal'=>$fileDokumenInternal,
			'action'=>$action,
		);
		
		
		$this->render('informasi_paket_beasiswa',
			array(
				'renderPartialView'=>$renderPartialView,
				'dataRender'=>$dataRender,
				'isPublished'=>$isPublished
			)
		);		
				
				
		
	}
	//End Informasi Paket Beasiswa Role Direktorat Kemahasiswaan
	
	
}
