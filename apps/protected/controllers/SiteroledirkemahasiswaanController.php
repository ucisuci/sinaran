<?php
//Yii::import('application.controllers.SiteController');
class SiteroledirkemahasiswaanController extends Controller {
	
	public $daftarPaketBeasiswaCssTab = "";
	public $userPendonorCssTab = "";
	public $laporanPaketBeasiswaCssTab = "";
	public $konfigurasiPaketBeasiswaCssTab = "";
	
	
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
		if(parent::beforeAction($action)) {
			$cs = Yii::app()->clientScript;
			$cs->registerCoreScript('jquery');
			return true;
		}
		return false;
	}

	
	//Untuk mengeset posisi dari tab
	private function setTabPosition($action) {
		
		if ($action == "daftarPaketBeasiswa") {
			$this->daftarPaketBeasiswaCssTab = "class=\"active\"";
			$this->userPendonorCssTab = "";
			$this->laporanPaketBeasiswaCssTab = "";
			$this->konfigurasiPaketBeasiswaCssTab = "";
		}

		if ($action == "userPendonor") {
			$this->daftarPaketBeasiswaCssTab = "";
			$this->userPendonorCssTab = "class=\"active\"";
			$this->laporanPaketBeasiswaCssTab = "";
			$this->konfigurasiPaketBeasiswaCssTab = "";
		}
		
		if ($action == "laporanPaketBeasiswa") {
			$this->daftarPaketBeasiswaCssTab = "";
			$this->userPendonorCssTab = "";
			$this->laporanPaketBeasiswaCssTab = "class=\"active\"";
			$this->konfigurasiPaketBeasiswaCssTab = "";
		}
		
		if ($action == "konfigurasiPaketBeasiswa") {
			$this->daftarPaketBeasiswaCssTab = "";
			$this->userPendonorCssTab = "";
			$this->laporanPaketBeasiswaCssTab = "";
			$this->konfigurasiPaketBeasiswaCssTab = "class=\"active\"";
		}

	
	}
	
	public function actionBeranda($action="",$konfig="") {
	
		if (empty($action)) {
			$action = "daftarPaketBeasiswa";
		}
	
		if ($action=="daftarPaketBeasiswa") {
			$this->redirect($this->createUrl('daftarPaketBeasiswa'));
		}
		
		if ($action=="userPendonor") {
			$this->redirect($this->createUrl('userPendonor'));
		}
		
		if ($action=="laporanPaketBeasiswa") {
			$this->redirect($this->createUrl('laporan'));
		}
		if ($action == "konfigurasiPaketBeasiswa")
		{
			if(empty($konfig))
			{
				$this->redirect($this->createUrl('konfigurasi'));
			}
			if($konfig == "pemindahanpenerima")
			{
				$this->redirect($this->createUrl('konfigurasiPemindahanPenerima'));
			}
			if($konfig == "pelamarkepenerima")
			{
				$this->redirect($this->createUrl('konfigurasiPelamarKePenerima'));
			}
			if($konfig == "detailpemindahanpenerima")
			{
				$this->redirect($this->createUrl('detailPemindahanPenerima', array('idPaket'=>$_GET['idPaket'])));
			}
			if($konfig == "pindahkanPenerimaBeasiswa")
			{
				if(isset($_POST['pindahBeasiswa']) && !empty($_POST['pindahBeasiswa']))
				{
					$this->redirect($this->createUrl('pindahkanPenerimaBeasiswa', array('idPaket'=>$_GET['idPaket'])));
				}else{
					$this->redirect($this->createUrl('detailPemindahanPenerima', array('idPaket'=>$_GET['idPaket'])));
				}
			}
			if($konfig == "pencarianpelamarbeasiswa")
			{
				$this->redirect($this->createUrl('konfigurasiPencarianPelamar'));
			}
			if($konfig == "detailpelamarbeasiswa")
			{
				$this->redirect($this->createUrl('detailPelamarBeasiswa',array('akun_sso'=>$_GET['akun_sso'])));
			}
			if($konfig == "prodisiak")
			{
				$this->redirect($this->createUrl('konfigurasiProdiSiak'));
			}
		}
		
	}
	
	public function actionDaftarPaketBeasiswa() {
	
	echo "asasa";die();
		$searchNamaPaketBeasiswa = "";
		if (isset($_GET['Search'])) {
			$searchNamaPaketBeasiswa = strtolower($_GET['Search']['NamaPaketBeasiswa']);			
		}
	
		$searchNamaPaketBeasiswaParam = '%'.$searchNamaPaketBeasiswa.'%';
	
		$sqlQuery = "SELECT  
			 a.id, a.nama_paket_beasiswa, a.id_tlu_jenis_beasiswa,
			 to_char(tgl_awal_lamar, 'YYYY-mm-dd') as tgl_awal_lamar, 
			 to_char(tgl_akhir_lamar, 'YYYY-mm-dd') as tgl_akhir_lamar,
			 a.kuota_penerima, 
			 a.id_tlu_tahun_term_akademik_awal, b.label AS tahun_term_akademik_awal, 
			 a.id_tlu_tahun_term_akademik_akhir, c.label AS tahun_term_akademik_akhir,
			 unitorg.nama_org_ind as nama_organisasi,
			 d.simbol, a.besaran_total, a.is_published,a.announce_result
			 FROM 
			 beasiswa.paket_beasiswa a 
			 INNER JOIN 
			 beasiswa.tlu_tahun_term_akademik b 
			 ON a.id_tlu_tahun_term_akademik_awal = b.id 
			 INNER JOIN
			 beasiswa.tlu_tahun_term_akademik c 
			 ON a.id_tlu_tahun_term_akademik_akhir = c.id
			 INNER JOIN
             beasiswa.paket_beasiswa_unit_organisasi paket
             ON a.id = paket.id_paket_beasiswa
             INNER JOIN
             beasiswa.tlu_unit_organisasi unitorg
             ON paket.kode_organisasi = unitorg.kode_organisasi
			 INNER JOIN
			 beasiswa.tlu_mata_uang d
			 ON a.id_tlu_mata_uang = d.id
			 WHERE lower(a.nama_paket_beasiswa) LIKE :namaPaketBeasiswa 
			 ORDER BY a.tgl_akhir_lamar DESC ";
			
			$sql = Yii::app()->db->createCommand($sqlQuery);
			$sql->bindParam(":namaPaketBeasiswa", $searchNamaPaketBeasiswaParam, PDO::PARAM_STR); 	
			$rawData = $sql->queryAll();
			
			$dataProvider = new CArrayDataProvider($rawData,
				array(
					
					//'totalItemCount'=>$count,
					'pagination'=>array(
						'pageSize'=>Yii::app()->params['listPerPage'],
					),
				)	
			);
			 
			$this->pageTitle = "Beranda"; 
			$renderPartialView = "_daftar_paket";
			$action = "daftarPaketBeasiswa";
			$this->setTabPosition($action);
			
			$breadcrumbs = array(
				'Paket Beasiswa'
			);
			
			$dataRender = array(
				'action'=>$action,
				'dataProvider'=>$dataProvider,
				'searchNamaPaketBeasiswa'=>$searchNamaPaketBeasiswa
			);
		
			$this->render('beranda',
				array(
					'renderPartialView'=>$renderPartialView,
					'dataRender'=>$dataRender,
					'breadcrumbs'=>$breadcrumbs
				)
			); 
			 
			 
	
	}
	
	//User Pendonor menggunakan CArrayDataProvider dengan sanitize parameter
	public function actionUserPendonor() {
		
		$searchPendonor = "";
		$searchUsername = "";
		
		if (isset($_GET['Search'])) {
			
			$searchPendonor = strtolower($_GET['Search']['Pendonor']);
			$searchUsername = strtolower($_GET['Search']['Username']);
			
		}
		
		
		$searchPendonorParam = '%'.$searchPendonor.'%';
		$searchUsernameParam = '%'.$searchUsername.'%';
		
		$sqlQuery = "
			SELECT
			a.id_user, a.id_pendonor, a.id,
			b.username, b.nama, b.email,
			c.nama_pendonor,a.status
			FROM
			beasiswa.user_pendonor a
			INNER JOIN
			beasiswa.user b
			ON a.id_user = b.id
			INNER JOIN 
			beasiswa.pendonor c
			ON a.id_pendonor = c.id
			WHERE
			lower(c.nama_pendonor) LIKE :searchPendonor
			AND
			lower(b.username) LIKE :searchUsername
			ORDER BY b.username
		";
		
		$sql = Yii::app()->db->createCommand($sqlQuery);
		$sql->bindParam(":searchPendonor", $searchPendonorParam, PDO::PARAM_STR); 	
		$sql->bindParam(":searchUsername", $searchUsernameParam, PDO::PARAM_STR);	

		$rawData = $sql->queryAll();
		
		$userPendonorDataProvider = new CArrayDataProvider($rawData,
			array(
				
				//'totalItemCount'=>$count,
				'pagination'=>array(
					'pageSize'=>Yii::app()->params['listPerPage'],
				),
			)	
		);
		
		$this->pageTitle = "Beranda"; 
		$renderPartialView = "_user_pendonor";
		$action = "userPendonor";
		$this->setTabPosition($action);
	
		$breadcrumbs = array(
				'User Pendonor',
			);
	
		$dataRender = array(
			'action'=>$action,
			'userPendonorDataProvider'=>$userPendonorDataProvider,
			'searchPendonor'=>$searchPendonor,
			'searchUsername'=>$searchUsername
		);
		
		$theme = Yii::app()->theme;
		//Yii::app()->clientScript->registerScriptFile($theme->getBaseUrl().'/js/beranda-update-paket-beasiswa-role-pengelola.js',CClientScript::POS_END);
		Yii::app()->clientScript->registerScriptFile($theme->getBaseUrl().'/js/autoNumeric.js',CClientScript::POS_HEAD);	
		
		$this->render('beranda',
			array(
				'renderPartialView'=>$renderPartialView,
				'dataRender'=>$dataRender,
				'breadcrumbs'=>$breadcrumbs
			)
		);
		
	
	}
	//End User Pendonor menggunakan CArrayDataProvider dengan sanitize parameter
	
	public function actionTambahUserPendonor() {
		
		$model = new UserPendonor;
		//print_r($model);die;
		
		if (isset($_POST['UserPendonor'])) {
			
			$pendonor = Pendonor::model()->find('nama_pendonor=:namaPendonor', array(':namaPendonor'=>$_POST['UserPendonor']['id_pendonor']));
			//echo "<pre>";print_r($pendonor);die;
			//echo "<pre>";print_r($_POST);die();
			if(empty($pendonor)){
				//masukkan pendonor baru
				$modelPendonor = new Pendonor;
				$pendonor['nama_pendonor'] = $_POST['UserPendonor']['id_pendonor'];
				$modelPendonor->attributes = $pendonor;
				$modelPendonor->save();
			}
			//cek apakah user terlah terdaftar didalam table user
			$user = User::model()->find('username=:username', array(':username'=>$_POST['UserPendonor']['id_user']));
			if(empty($user)){
				//masukkan pendonor baru
				$modelUser = new User;
				$user['username'] = $_POST['UserPendonor']['id_user'];
				$user['nama'] = $_POST['UserPendonor']['id_user'];
				$user['email'] = $_POST['UserPendonor']['id_user'];
				$modelUser->attributes = $user;
				$modelUser->save();
			}
			//print_r($_POST['UserPendonor']);die();
			$model->attributes = $_POST['UserPendonor'];
			if ($model->save()) {
				//get id user from username
				$user = User::model()->find('username=:userName', array(':userName'=>$_POST['UserPendonor']['id_user']));
				$userid = (string)$user->id;
				$role = "pendonor";
				 $cekright = RightsAuthassignment::model()->find('itemname=:itemName AND userid=:userId', array(':itemName'=>$role,':userId'=>$userid));
			    //print_r($cekright);die();
				if(empty($cekright)){
					$assignUserToRolePendaftar = New RightsAuthassignment;
					$assignUserToRolePendaftar->itemname = $role;
					$assignUserToRolePendaftar->userid = $userid;
					$assignUserToRolePendaftar->data = "N;";
					$assignUserToRolePendaftar->save();
				}


				Yii::app()->user->setFlash('userPendonorMessage', "Data berhasil disimpan");
				$this->redirect($this->createUrl('userPendonor'));
			}
			
			//if($model->validate()) {	
				//print_r($model->attributes);
			//}
		}
		
		$this->pageTitle = "Beranda";
		$renderPartialView = "_tambah_user_pendonor";
		$action = "userPendonor";
		$this->setTabPosition($action);	
		
		$breadcrumbs = array(
				'User Pendonor'=>array('siteroledirkemahasiswaan/userPendonor'),
				'Tambah User Pendonor',
		);
		
		$dataRender = array(
			'model'=>$model
		);	
		
		Yii::app()->getClientScript()->registerCoreScript('jquery.ui');
		
		$this->render('beranda',
			array(
				'renderPartialView'=>$renderPartialView,
				'dataRender'=>$dataRender,
				'breadcrumbs'=>$breadcrumbs
			)
		);
		
	}
	public function actionTambahPendonor() {
		
		$model = new Pendonor;
		//print_r($model);die;
		
		if (isset($_POST['Pendonor'])) {
			//echo "<pre>";print_r($_POST);die;
			$pendonor = Pendonor::model()->find('nama_pendonor=:namaPendonor', array(':namaPendonor'=>$_POST['Pendonor']['nama_pendonor']));
			if(empty($pendonor)){
				//masukkan pendonor baru
				$modelPendonor = new Pendonor;
				$modelPendonor->attributes = $_POST['Pendonor'];
				$modelPendonor->save();
				Yii::app()->user->setFlash('userPendonorMessage', "Data Pendonor berhasil disimpan");
				$this->redirect($this->createUrl('userPendonor'));
			}else{
				Yii::app()->user->setFlash('userPendonorErrorMessage', "Data Pendonor sudah ada");
				$this->redirect($this->createUrl('userPendonor'));
			}
			
		}
		
		$this->pageTitle = "Beranda";
		$renderPartialView = "_tambah_pendonor";
		$action = "userPendonor";
		$this->setTabPosition($action);	
		
		$breadcrumbs = array(
				'Tambah Pendonor'=>array('siteroledirkemahasiswaan/tambahPendonor'),
				'Tambah Pendonor',
		);
		
		$dataRender = array(
			'model'=>$model
		);	
		
		Yii::app()->getClientScript()->registerCoreScript('jquery.ui');
		
		$this->render('beranda',
			array(
				'renderPartialView'=>$renderPartialView,
				'dataRender'=>$dataRender,
				'breadcrumbs'=>$breadcrumbs
			)
		);
		
	}
	public function actionEditPendonor() {
		$model = Pendonor::model()->find('nama_pendonor=:namaPendonor', array(':namaPendonor'=>$_GET['nama_pendonor']));

		if (isset($_POST['Pendonor'])) {
			//echo "<pre>";print_r($_POST['Pendonor']);die();
			$pendonor = Pendonor::model()->find('id=:id', array(':id'=>$_POST['Pendonor']['id']));
			//masukkan pendonor baru
			//$modelPendonor = new Pendonor;
			$pendonor->attributes = $_POST['Pendonor'];
			$pendonor->save();
			Yii::app()->user->setFlash('userPendonorMessage', "Data Pendonor berhasil diupdate");
			$this->redirect($this->createUrl('userPendonor'));
		}
		//print_r($pendonor);die();
		$this->pageTitle = "Beranda";
		$renderPartialView = "_edit_pendonor";
		$action = "userPendonor";
		$this->setTabPosition($action);
		$breadcrumbs = array(
				'Pendonor'=>array('siteroledirkemahasiswaan/userPendonor'),
				'Edit Pendonor',
		);
		$dataRender = array(
			'model'=>$model
		);
		Yii::app()->getClientScript()->registerCoreScript('jquery.ui');

		$this->render('beranda',
			array(
				'renderPartialView'=>$renderPartialView,
				'dataRender'=>$dataRender,
				'breadcrumbs'=>$breadcrumbs
			)
		);
		
	}
	
	public function actionEditUserPendonor($id) {
		
		
		//echo "id : ".$id;die;
		//$post=Post::model()->findByPk(10);
		//$model = UserPendonor::model()->findByPk($id):
		
		$criteria = new CDbCriteria();
		$criteria->condition = 't.id=:id';
		$criteria->params = array(':id'=>$id); 
		
		$model = UserPendonor::model()->with('User', 'Pendonor')->find($criteria);
		
		if (isset($_POST['UserPendonor'])) {
			
			$model->attributes = $_POST['UserPendonor'];
			if ($model->save()) {
				Yii::app()->user->setFlash('userPendonorMessage', "Data berhasil disimpan");
				$this->redirect($this->createUrl('userPendonor'));
			}
			
			//if($model->validate()) {	
				//print_r($model->attributes);
			//}
		}
		
		
		$this->pageTitle = "Beranda";
		$renderPartialView = "_edit_user_pendonor";
		$action = "userPendonor";
		$this->setTabPosition($action);	
		
		$breadcrumbs = array(
			'User Pendonor'=>array('siteroledirkemahasiswaan/userPendonor'),
			'Edit User Pendonor',
		);
		
		$dataRender = array(
			'model'=>$model
		);	
		
		Yii::app()->getClientScript()->registerCoreScript('jquery.ui');
		
		$this->render('beranda',
			array(
				'renderPartialView'=>$renderPartialView,
				'dataRender'=>$dataRender,
				'breadcrumbs'=>$breadcrumbs
			)
		);

		
	}
	
	public function actionHapusUserPendonor($id) {
		
		$userPendonor = UserPendonor::model()->find('id=:id', array(':id'=>$id));
		//get user data
		

		$user = User::model()->find('id=:idUser', array(':idUser'=>$userPendonor->id_user));
		$pendonor = Pendonor::model()->find('id=:idPendonor', array(':idPendonor'=>$userPendonor->id_pendonor));
		//echo "<pre>";print_r($user);die();
		$data['id_pendonor'] = $pendonor->nama_pendonor;
		$data['id_user'] = $user->username;
		$data['status'] = FALSE;
		$userPendonor->attributes = $data;
		//echo "<pre>";print_r($userPendonor);die();
		if ($userPendonor->save()) {
			Yii::app()->user->setFlash('userPendonorMessage', "Data berhasil dihapus");
			$this->redirect($this->createUrl("userPendonor"));	
		}
			
	}	
	
	//Search Username using Ajax 
	public function actionSearchUsername() {
		
		$this->layout='';
		$request=strtolower(trim($_GET['term']));
	
		if($request!=''){
			//$model=User::model()->findAll(array("condition"=>"lower(username) like '".$request."%'"));
			$model=User::model()->findAll(array(
				'condition'=>'lower (username) like :request', 
				'params'    => array(':request' => "%$request%")	
			));
			$data=array();
			foreach($model as $get){
				//$data[]=$get->username." (".$get->nama.")";
				$data[]=$get->username;
			}
	
			$this->layout='empty';
			//echo json_encode($data);
			echo CJSON::encode($data);
			Yii::app()->end();
			//exit();
		}
		
	}
	
	//Search Pendonor using Ajax 
	public function actionSearchPendonor() {
		
		$this->layout='';
		$request=strtolower(trim($_GET['term']));
	
		if($request!=''){
			//$model=Pendonor::model()->findAll(array("condition"=>"lower(nama_pendonor) like '$request%'"));
			$model=Pendonor::model()->findAll(array(
				'condition'=>'lower (nama_pendonor) like :request', 
				'params'    => array(':request' => "%$request%")	
			));
			$data=array();
			foreach($model as $get){
				$data[]=$get->nama_pendonor;
			}
	
			$this->layout='empty';
			//echo json_encode($data);
			echo CJSON::encode($data);
			Yii::app()->end();
			//exit();
		}
	}
	
	public function actionLaporan() {
	
		$this->pageTitle = "Beranda";
		$renderPartialView = "_laporan";
		$action = "laporanPaketBeasiswa";
		$this->setTabPosition($action);	
		
		$breadcrumbs = array(
			'Laporan',
		);
		
		$dataRender = array(
			//'model'=>$model
		);	
		
		$this->render('beranda',
			array(
				'renderPartialView'=>$renderPartialView,
				'dataRender'=>$dataRender,
				'breadcrumbs'=>$breadcrumbs
			)
		);
	}

	public function actionKonfigurasi()
	{
		$this->pageTitle = "Beranda";
		$renderPartialView = "_konfigurasi";
		$action = "konfigurasiPaketBeasiswa";
		$this->setTabPosition($action);	
		
		$breadcrumbs = array(
			'Konfigurasi',
		);
		
		$dataRender = array(
			//'model'=>$model
		);	
		
		$this->render('beranda',
			array(
				'renderPartialView'=>$renderPartialView,
				'dataRender'=>$dataRender,
				'breadcrumbs'=>$breadcrumbs
			)
		);
	}
	public function actionKonfigurasiPemindahanPenerima()
	{

		$searchNamaPaketBeasiswa = "";
		if (isset($_GET['Search'])) {
			$searchNamaPaketBeasiswa = strtolower($_GET['Search']['NamaPaketBeasiswa']);			
		}
	
		$searchNamaPaketBeasiswaParam = '%'.$searchNamaPaketBeasiswa.'%';
	
		$sqlQuery = "SELECT  
			 a.id, a.nama_paket_beasiswa, a.id_tlu_jenis_beasiswa,
			 to_char(tgl_awal_lamar, 'YYYY-mm-dd') as tgl_awal_lamar, 
			 to_char(tgl_akhir_lamar, 'YYYY-mm-dd') as tgl_akhir_lamar,
			 a.kuota_penerima, 
			 a.id_tlu_tahun_term_akademik_awal, b.label AS tahun_term_akademik_awal, 
			 a.id_tlu_tahun_term_akademik_akhir, c.label AS tahun_term_akademik_akhir,
			 unitorg.nama_org_ind as nama_organisasi,
			 d.simbol, a.besaran_total, a.is_published,a.announce_result
			 FROM 
			 beasiswa.paket_beasiswa a 
			 INNER JOIN 
			 beasiswa.tlu_tahun_term_akademik b 
			 ON a.id_tlu_tahun_term_akademik_awal = b.id 
			 INNER JOIN
			 beasiswa.tlu_tahun_term_akademik c 
			 ON a.id_tlu_tahun_term_akademik_akhir = c.id
			 INNER JOIN
             beasiswa.paket_beasiswa_unit_organisasi paket
             ON a.id = paket.id_paket_beasiswa
             INNER JOIN
             beasiswa.tlu_unit_organisasi unitorg
             ON paket.kode_organisasi = unitorg.kode_organisasi
			 INNER JOIN
			 beasiswa.tlu_mata_uang d
			 ON a.id_tlu_mata_uang = d.id
			 WHERE lower(a.nama_paket_beasiswa) LIKE :namaPaketBeasiswa 
			 ORDER BY a.tgl_akhir_lamar DESC ";
			
			$sql = Yii::app()->db->createCommand($sqlQuery);
			$sql->bindParam(":namaPaketBeasiswa", $searchNamaPaketBeasiswaParam, PDO::PARAM_STR); 	
			$rawData = $sql->queryAll();
			
			$dataProvider = new CArrayDataProvider($rawData,
				array(
					
					//'totalItemCount'=>$count,
					'pagination'=>array(
						'pageSize'=>Yii::app()->params['listPerPage'],
					),
				)	
			);
			 
			

		$this->pageTitle = "Beranda";
		$renderPartialView = "_konfigurasi_pemindahan_penerima";
		$action = "konfigurasiPaketBeasiswa";
		$this->setTabPosition($action);	
		
		$breadcrumbs = array(
			'Konfigurasi > Pemindahan Penerima',
		);
		
		$dataRender = array(
				'action'=>$action,
				'dataProvider'=>$dataProvider,
				'searchNamaPaketBeasiswa'=>$searchNamaPaketBeasiswa
			);
		
		$this->render('beranda',
			array(
				'renderPartialView'=>$renderPartialView,
				'dataRender'=>$dataRender,
				'breadcrumbs'=>$breadcrumbs
			)
		);
	}

	public function actionDetailPemindahanPenerima($idPaket = "")
	{
		$dataProvider = array();
		if($idPaket != "")
		{
			//ambil detail paket beasiswa
			$dataProvider['paketBeasiswa'] = Yii::app()->beasiswaModel->getPaketById($idPaket);
			//ambil penerima beasiswa dari paket yang ada
			$dataProvider['penerima'] = Yii::app()->pelamarModel->getPenerimaPaketBeasiswaRolePendaftar($idPaket);
			
			//ambil paket lain selain paket beasiswa yang terpilih
			$dataProvider['anotherPaketBeasiswa'] = Yii::app()->beasiswaModel->getAnotherPaket($idPaket);
		}

		$this->pageTitle = "Beranda";
		$renderPartialView = "_detail_konfigurasi_pemindahan_penerima";
		$action = "konfigurasiPaketBeasiswa";
		$this->setTabPosition($action);	
		
		$breadcrumbs = array(
			'Konfigurasi > Pemindahan Penerima > Detail Pemindahan',
		);
		$dataRender = array(
				'action'=>$action,
				'dataProvider'=>$dataProvider
			);
		
		$this->render('beranda',
			array(
				'renderPartialView'=>$renderPartialView,
				'dataRender'=>$dataRender,
				'breadcrumbs'=>$breadcrumbs
			)
		);
	}

	public function actionPindahkanPenerimaBeasiswa($idPaket = "")
	{
		$dataProvider = array();
		if(isset($_POST['pindahBeasiswa']) && $_GET['idPaket'] != "")
		{
			//pindahkan penerima beasiswa
			$pindah = Yii::app()->beasiswaModel->pindahkanPenerimaBeasiswa($_GET['idPaket'],$_POST['pindahBeasiswa']);
			if($pindah)
			{
				Yii::app()->user->setFlash('successMessage', "Data berhasil dipindahkan");
				$this->redirect($this->createUrl('konfigurasiPemindahanPenerima'));
			}
			else{
				Yii::app()->user->setFlash('errorMessage', "Data gagal dipindahkan");
				$this->redirect($this->createUrl('konfigurasiPemindahanPenerima'));
			}
		}
		$this->pageTitle = "Beranda";
		$renderPartialView = "_detail_konfigurasi_pemindahan_penerima";
		$action = "konfigurasiPaketBeasiswa";
		$this->setTabPosition($action);	
		
		$breadcrumbs = array(
			'Konfigurasi > Pemindahan Penerima > Detail Pemindahan',
		);
		$dataRender = array(
				'action'=>$action,
				'dataProvider'=>$dataProvider
			);
		
		$this->render('beranda',
			array(
				'renderPartialView'=>$renderPartialView,
				'dataRender'=>$dataRender,
				'breadcrumbs'=>$breadcrumbs
			)
		);
	}

	public function actionKonfigurasiPelamarKePenerima()
	{
		//ambil pelamar yang diterima tapi belum masuk ke table penerima
		$pelamarditerima = Yii::app()->pelamarModel->getPelamarDiTerima();
		//masukkan kedalam table penerima
		if(!empty($pelamarditerima))
		{
			foreach ($pelamarditerima as $key => $value) {
				//echo"<pre>";print_r($value);die();
				$criteria = new CDbCriteria();
				$criteria->condition = 'id_pelamar_beasiswa=:pelamar AND id_paket_beasiswa=:id_paket_beasiswa';
				$criteria->params = array(':pelamar'=>$value['id_pelamar'], ':id_paket_beasiswa'=>$value['id_paket_beasiswa']);
				$modelPelamar = PenerimaPaketBeasiswa::model()->find($criteria);
				$countRecord = count($modelPelamar);
				if($countRecord == ""){
					$penerima = new PenerimaPaketBeasiswa;
					$penerima->id_pelamar_beasiswa = $value['id_pelamar'];
					$penerima->id_paket_beasiswa = $value['id_paket_beasiswa'];
					$penerima->kode_organisasi = $value['kode_organisasi'];
					$penerima->id_tlu_status_aplikasi = "31";
					$penerima->save();
				}
			}
			Yii::app()->user->setFlash('successMessage', "Pelamar yang diterima sudah masuk kedalam table Penerima");
			$this->redirect($this->createUrl('konfigurasi'));
		}else{
			Yii::app()->user->setFlash('infoMessage', "Semua Pelamar Sudah masuk ke table Penerima");
			$this->redirect($this->createUrl('konfigurasi'));
		}
	}

	public function actionKonfigurasiPencarianPelamar()
	{
		$username = $_POST['Search']['Username'];
		
		//cari di table pelamar
		$hasilpencarian = Yii::app()->pelamarModel->cariPelamarByKataKunci($username);
		
			$dataProvider = new CArrayDataProvider($hasilpencarian,
				array(
					
					//'totalItemCount'=>$count,
					'pagination'=>array(
						'pageSize'=>Yii::app()->params['listPerPage'],
					),
				)	
			);
		$this->pageTitle = "Beranda";
		$renderPartialView = "_konfigurasi_pencarian_pelamar";
		$action = "konfigurasiPaketBeasiswa";
		$this->setTabPosition($action);	
		
		$breadcrumbs = array(
			'Konfigurasi > Pencarian Pelamar',
		);
		$dataRender = array(
				'action'=>$action,
				'dataProvider'=>$dataProvider,
				'searchPelamar'=>$username
			);
		
		$this->render('beranda',
			array(
				'renderPartialView'=>$renderPartialView,
				'dataRender'=>$dataRender,
				'breadcrumbs'=>$breadcrumbs
			)
		);
	}
	public function actionDetailPelamarBeasiswa($akun_sso)
	{
		
		//echo "<pre>";print_r($akun_sso);die();
		
		//cari di table pelamar
		$detailPelamar = Yii::app()->pelamarModel->getpelamarBySSO($akun_sso);
		$historyPelamar = YII::app()->pelamarModel->getHistoryPelamarByAkunSSO($akun_sso);
		$this->pageTitle = "Beranda";
		$renderPartialView = "_info_detail_pelamar";
		$action = "konfigurasiPaketBeasiswa";
		$this->setTabPosition($action);	

		$dokumenPendukung = array();
		$breadcrumbs = array(
			'Konfigurasi > Pencarian Pelamar > Detail Pelamar',
		);
		$dataRender = array(
				'action'=>$action,
				 'detailPelamar'=>$detailPelamar,
				 'historyPelamar'=>$historyPelamar,
				 'dokumenPendukung'=>$dokumenPendukung
			);
		$this->render('beranda',
			array(
				'renderPartialView'=>$renderPartialView,
				'dataRender'=>$dataRender,
				'breadcrumbs'=>$breadcrumbs
			)
		);
	}
	public function actionKonfigurasiProdiSiak()
	{
		 $dataProdi = Yii::app()->siakngService->getDataProdi();
		// print_r($dataProdi);die();
		
		
		$this->pageTitle = "Prodi dalam SIAK NG";
		$renderPartialView = "_daftar_prodi_siak";
		$action = "konfigurasiPaketBeasiswa";
		$this->setTabPosition($action);	

		$dokumenPendukung = array();
		$breadcrumbs = array(
			'Konfigurasi > Prodi SIAK NG',
		);
		$dataRender = array(
				'action'=>$action,
				 'dataprodi'=>$dataProdi
			);
		
		$this->render('beranda',
			array(
				'renderPartialView'=>$renderPartialView,
				'dataRender'=>$dataRender,
				'breadcrumbs'=>$breadcrumbs
			)
		);
	}
	public function actionRapihkanUsername()
	{
			$sqlQuery = "SELECT  * from beasiswa.user";
			$sql = Yii::app()->db->createCommand($sqlQuery);
			$rawData = $sql->queryAll();
			foreach ($rawData as $key => $value) {
				//print_r($value);die();
				$user = User::model()->find('id=:idUser', array(':idUser'=>$value['id']));
				$data['username'] = strtolower($value['username']);
				$user->attributes = $data;
				$user->save();
			}
	}
}