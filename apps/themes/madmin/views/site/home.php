<?php 
	$notifikasi = $dataRender['notifikasi'];	
	$aktifitas = $dataRender['aktifitas'];	
	$berita = $dataRender['berita'];	
	//echo "<pre>";print_r($berita);die();
?>

<div id="page-wrapper-simple">
	<!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title"><?php echo CHtml::encode($this->pageTitle); ?></div>
        </div>

<!--
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li>
            <?php
            $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>array(
                    'Sample post'=>array('post/view', 'id'=>12),
                    'Edit',
                ),
                'separator' => '&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;'
            ));
            ?>
            </li>
        </ol>
-->
        <div class="clearfix"></div>
    </div>
    <!--END TITLE & BREADCRUMB PAGE-->
		<!--BEGIN CONTENT-->
        <div class="page-content">
			<?php
			$message = Yii::app()->user->getFlash('errorMessage');
			if (isset($message)) { ?>
			<div class="alert alert-danger">
				<p><?php echo $message; ?></p>
			</div>
			<?php } ?>
            <div class="row">
                <!--
				<div class="col-lg-12">
					<h2>Nam massa eros</h2>
				-->
					<div class="col-lg-6">
						<div class="panel panel-red">
							<div class="panel-heading clearfix"><span class="mts pull-left">Notifikasi</span>
								<!--
								<div class="toolbars">
									<div class="input-icon right"><i class="fa fa-search"></i><input type="text" placeholder="Search" class="form-control input-medium"/></div>
								</div>
								-->
							</div>

                        <div class="panel-body">
                        <?php 
                        if(empty($notifikasi)){
                        	echo "<p><i>Belum ada Notifikasi</i></p>";
                        }else{
                        	?>
                        	<table class="table table-hover table-striped table-bordered table-advanced tb-sticky-header">
                                            <tbody>
                                            	<?php
                        	foreach ($notifikasi as $key => $value) {
                        		
                        		?>
								<tr>
								
								<td><?php echo"<a href='".Yii::app()->createUrl($value->link_url)."'>".$value->keterangan."</a> - ".date('d M Y', strtotime($value->created_at)); ?></td>
								</tr>
							<?php
                        	} ?>

                        	</tbody>
                                    </table>
                        	<?php
                        }
                        ?>
				
                        </div>
						</div>
					</div>
					
					<div class="col-lg-6">
						<div class="panel panel-yellow">
							<div class="panel-heading clearfix"><span class="mts pull-left">Aktifitas Terakhir</span>
								<!--
								<div class="toolbars">
									<div class="input-icon right"><i class="fa fa-search"></i><input type="text" placeholder="Search" class="form-control input-medium"/></div>
								</div>
								-->
								
							</div>

                        <div class="panel-body">
                         <?php 
                        if(empty($aktifitas)){
                        	echo "<p><i>Belum ada Aktifitas</i></p>";
                        }else{ ?>
                        <table class="table table-hover table-striped table-bordered table-advanced tb-sticky-header">
                                            
                                            <tbody>

                            <?php
                        	foreach ($aktifitas as $key => $value) {
								if(strtolower($value['aksi']) == "u"){
                        			$aksi = "Update";
                        		}else if(strtolower($value['aksi']) == "i"){
									$aksi = "Insert";
                        		}else{
                        			$aksi = "Delete";
                        		}
                        		?>
								<tr>
								<td>
								<?php echo "<a href='".Yii::app()->createUrl("detailpelamar/index",array("idPelamar"=>$value['id_pelamar'],"idPaket"=>$value['id_paket_beasiswa']))."'>".$aksi."</a>"; ?>
								</td>
								<td><?php echo"<b> ".$value['nama']."</b> menjadi <i>".$value['nama_status']."</i> pada <b>".$value['nama_paket_beasiswa']."</b> - ".date('d M Y H:i:s', strtotime($value['ts'])); ?></td>
								</tr>
							<?php
                        	} ?>
                        	</tbody>
                                    </table>
                        <?php
                        	echo"<p>Aktifitas Selengkapnya...</p>";
                        }
                        ?>
				
                        </div>
						</div>
					</div>
					
					<div class="col-lg-12">
						<div class="panel panel-green">
							<div class="panel-heading clearfix"><span class="mts pull-left">Berita</span>
								
								<div class="toolbars">
									<!-- <div class="input-icon right"><i class="fa fa-search"></i><input type="text" placeholder="Cari" class="form-control input-medium"/></div>
								-->
								</div>
								
							</div>

                        <div class="panel-body">
                        <?php 
                        if(empty($berita)){
                        	echo "<p><i>Belum ada Berita</i></p>";
                        }else{?>
                        <table class="table table-hover table-striped table-bordered table-advanced tb-sticky-header">
                                            <tbody>
                                            	 <?php
                        	foreach ($berita as $key => $value) {

                        		 $tgl_skarang = date('y-m-d');
                                 $tgl_akhir_beasiswa = date('d F Y', strtotime($value['tgl_akhir_lamar']));
                        		//echo "<pre>";print_r($value);die();
                        		//http://localhost/ui/beasiswa/public_html/apps/detailpelamar/index?idPelamar=7827&idPaket=87
                        		?>
                        		
	                        	  <tr>
                                               <td>
                                               		<a href='javascript:void(0)'>Dibuka</a>
                                                </td>
                                                <td><?php echo "<b> ".$value['nama_paket_beasiswa']."</b> untuk <b>".$value['kuota_penerima']."</b> orang, dengan jumlah beasiswa <b>Rp. ".str_replace(",",".",number_format($value['besaran_total']))."</b> - Periode Pendaftaran: <b>".date("d/m/y", strtotime($value['tgl_awal_lamar']))." s.d. ".date("d/m/y", strtotime($value['tgl_akhir_lamar']))."</b>" ?></td>
                                            </tr>
                                        
							<?php
                        	} ?>
                        	</tbody>
                                    </table>
                        	<?php
                        	echo"<p>Aktifitas Selengkapnya...</p>";
                        }
                        ?>
<!--
							<p>
								<ol>
									<li>Breadcrumb masih belum bisa saya betulin, Pak.</li>
									<li>Masuk lewat dev.beasiswa.ui.ac.id/apps/ sudah bisa saya redirect ke SSO</li>
									<li>Log Out sudah bisa</li>
									<li>Role di menu bar sebagai simulasi role apa saja yang bisa dipilih (saya tidak pakai session)</li>
									<li>Secara default pas pertama kali login saya set cuma pendaftar aja</li>
									<li>Setiap halaman di-custom berdasarkan role apa yg sedang dipilih, masih kasar karena cuma buat simulasi aja</li>
									<li>Semua halaman yang ada di mock-up yang dikirim kak Ardi via email sudah saya selesaikan semua, Pak</li>
									<li>Keuangan belum saya bikin sama sekali, Pak. Karena gak ada mockupnya jadi gak saya bikin</li>
								</ol>
							</p>
-->
						<?php
							echo "Role Aktif : ".Yii::app()->session['roleName'];
							/*
							$sqlQuery = "
								SELECT
								a.name, a.type, a.description, b.priority
								FROM
								beasiswa.rights_authitem a
								INNER JOIN
								beasiswa.role_priority b
								ON a.name = b.itemname
								ORDER BY
								priority							
							";
							
							$sql = Yii::app()->db->createCommand($sqlQuery);
							$datas = $sql->queryAll();
							echo "Count : ".count($datas);
							echo "<br />";
							
							echo "<pre>";print_r($datas);
						
							
							foreach($datas as $data) {
								echo "<pre>";
								print_r($data);
								echo "<br />";
							}
							*/
						?>		
						</div>
						</div>
					</div>
				
				
					<div class="clearfix"></div>
                <!--
				</div>
				-->
            </div>
        </div>
        <!--END CONTENT-->
	
	<!--END PAGE WRAPPER-->
    </div>
</div>
