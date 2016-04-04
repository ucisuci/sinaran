<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-white">
		<?php 
			//echo "<pre>";print_r($detail_paket); 
		?>
        <?php foreach ($detail_paket as $key => $value) { 
                    //echo"<pre>";print_r($value);die(); 
                    ?>
					
			<?php 
				$todayDate = date_create(date('Y-m-d'));
				$dateAkhir = date_create(date('Y-m-d', strtotime($value['tgl_akhir_lamar'])));
				//echo $dateAwal;
				//echo $dateAkhir;
				//$diff=date_diff($todayDate,$dateAkhir);
				$isPendaftaranDitutup = false;
				$statusPendaftaran = "Terbuka";
				if ($todayDate > $dateAkhir) {
					$isPendaftaranDitutup = true;
					$statusPendaftaran = "Sudah Ditutup";
				}
				//echo $statusPendaftaran;
				//echo $diff->days;
				//echo $diff->format("%R%a days");
				
			?>
			
            <div class="panel-heading"><?php echo $value['nama_paket_beasiswa'] ?></div>
            <div class="panel-body pan">
                <form action="javascript:void(0)" class="form-horizontal form-bordered  dashed form-row-stripped">
                
               
                    <div class="form-body">
                        <div class="form-group">
                           <!-- <label for="inputFirstName" class="col-md-2 control-label">Nama Beasiswa :</label>
                            <div class="col-md-8"><?php //echo $value['nama_paket_beasiswa'] ?></div> -->
                            <div class="col-md-10">
                                <?php
                                    if (Yii::app()->session['role'] == 'pengelola')
                                    {
                                        if($value['is_published']){
                                            //echo "<button type=\"submit\" class=\"btn btn-primary\">Unpublish</button>";
											echo "<a class=\"btn btn-red\" href=\"".$this->createUrl('paketbeasiswa/unpublishPaketBeasiswa', array('id'=>$value['id']))."\">";
											echo "Unpublish";
											echo "</a>";
										}else{
                                            echo "<a class=\"btn btn-green\" href=\"".$this->createUrl('paketbeasiswa/publishPaketBeasiswa', array('id'=>$value['id']))."\">";
											echo "Publish";
											echo "</a>";
                                        }
                                    }
                                    //if (Yii::app()->session['role'] == 'pengelola' || Yii::app()->session['role'] == 'pendonor')
									if (Yii::app()->session['role'] == 'pendonor')
                                    {
                                        //echo "<button type=\"submit\" class=\"btn btn-primary\">Ubah</button>";
										echo "<a class=\"btn btn-yellow\" href=\"".$this->createUrl('site/beranda', array('idPaket'=>$value['id'], 'action'=>'updatePaketBeasiswa'))."\">";
										echo "Ubah";
										echo "</a>";
                                    }
                                    if (Yii::app()->session['role'] == 'pendaftar')
                                    {
										
										$critPelamar = new CDbCriteria();
										$critPelamar->condition = 'id_user_pelamar=:idUser AND id_paket_beasiswa=:idPaketBeasiswa AND is_submit=true';
										$critPelamar->params = array(':idUser'=>Yii::app()->user->id, ':idPaketBeasiswa'=>$value['id']);
										$userPelamarData = Pelamar::model()->find($critPelamar);		
										if (empty($userPelamarData)) {
											if (!$isPendaftaranDitutup) {
												echo "<a href=".Yii::app()->createUrl('/pendaftaran/index', array('idPaket'=>$this->id))." class=\"btn btn-primary\">Daftar</a>";
											}
										}else{
												$statusPelamar = TluStatusPelamarBeasiswa::model()->find('id=:idStatusPelamar', array(':idStatusPelamar'=>$userPelamarData->id_tlu_status_pelamar));
												echo "<a href=\"#\" class=\"btn btn-primary\">".$statusPelamar->label_status_pendaftar_ind."</a>";
										}
									}
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputFirstName" class="col-md-2 control-label">Deskripsi :</label>
                            <div class="col-md-10"><?php echo $value['deskripsi'] ?></div>
                        </div>

                        <div class="form-group">
                            <label for="inputFirstName" class="col-md-2 control-label">Periode Pendaftaran:</label>
                            <div class="col-md-10">
								<?php 
								echo date('d M Y', strtotime($value['tgl_awal_lamar']))." - ".date('d M Y', strtotime($value['tgl_akhir_lamar'])); 
								//echo "<br />";
								//echo $value['tgl_awal_lamar']." - ".$value['tgl_akhir_lamar'];
								//echo "<br />";
								//echo date('Y-m-d', strtotime($value['tgl_awal_lamar']))." - ".date('Y-m-d', strtotime($value['tgl_akhir_lamar']));
								?>
								
								</div>
                        </div>

                        <div class="form-group">
                            <label for="inputFirstName" class="col-md-2 control-label">Status Pendaftaran :</label>
                            <div class="col-md-10">
								<?php 
									echo $statusPendaftaran;
								?>
							</div>
                        </div>
						
						<div class="form-group">
                            <label for="inputFirstName" class="col-md-2 control-label">SK :</label>
                            <div class="col-md-10">
								<ol>
								<?php 
									$baseUrl = Yii::app()->getBaseUrl(true);
									foreach ($fileSk as $Sk) {
										
										$fileEkstension = $Sk->ekstensi;
										if (($fileEkstension=='jpg') || ($fileEkstension=='gif') || ($fileEkstension=='png')) {
											$thePath = Yii::app()->params['imageRetrieveOriginalPath'];
										}else{														
											$thePath = Yii::app()->params['pdfRetrievePath'];
										}
										$fileUrl = $baseUrl.$thePath.$Sk->nama_file;
								
								
								?>
										<li>
											<a href="<?php echo $fileUrl; ?>" target="_blank">
												<?php echo $Sk->nama_file; ?>
											</a>
										</li>	
								<?php
									}
								?>
								</ol>
							</div>
                        </div>

                        <div class="form-group">
                            <label for="inputFirstName" class="col-md-2 control-label">Syarat dan Ketentuan :</label>
                            <div class="col-md-10">
                                <ol>
									<?php 
										//echo "<pre>";
										//print_r($syaratKetentuanBeasiswa);
										foreach ($syaratKetentuanBeasiswa as $syarat) {
									?>
											<li><?php echo $syarat->deskripsi; ?></li>	
									<?php
										}
									?>
								</ol>
							</div>
                        </div>

                    </div>
                
                </form>
            </div>

            <div class="panel-heading">Data Pendonor</div>
            <div class="panel-body pan">
                <form action="#" class="form-horizontal form-bordered  dashed form-row-stripped">
                    <div class="form-body">
                        <div class="form-group">
                            <label for="inputFirstName" class="col-md-2 control-label">Nama Pendonor :</label>
                            <div class="col-md-10"><?php echo $value['nama_pendonor'] ?></div>
                        </div>
                    </div>
                </form>
            </div>
            <?php   } ?>

            <div class="panel-heading">Dokumen Pendukung</div>
            <div class="panel-body pan">
                <form action="#" class="form-horizontal form-bordered  dashed form-row-stripped">
                    <div class="form-body">
                        <div class="form-group">
							<div class="col-md-12">
								<ol>
										<?php 
										$baseUrl = Yii::app()->getBaseUrl(true);
										foreach($fileDokumenPendukung as $dokumenPendukung) {
	
											$fileEkstension = $dokumenPendukung->ekstensi;
											if (($fileEkstension=='jpg') || ($fileEkstension=='gif') || ($fileEkstension=='png')) {
												$thePath = Yii::app()->params['imageRetrieveOriginalPath'];
											}else{														
												$thePath = Yii::app()->params['pdfRetrievePath'];
											}
											$fileUrl = $baseUrl.$thePath.$dokumenPendukung->nama_file;
										?>
											<li>	
												<a href="<?php echo $fileUrl; ?>" target="_blank">
													<?php echo $dokumenPendukung->nama_file; ?>
												</a>
											</li>	
										<?php } ?>
									
								</ol>
							</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>