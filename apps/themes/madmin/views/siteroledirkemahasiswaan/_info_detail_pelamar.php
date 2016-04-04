
<?php
	/*
	echo $this->render('informasi_paket_beasiswa_role_pengelola', 
		array(
			'detailPaket'=>$detailPaket,
			'syaratKetentuanBeasiswa'=>$syaratKetentuanBeasiswa,
			'fileSk'=>$fileSk,
			'fileDokumenPendukung'=>$fileDokumenPendukung,
			'action'=>$action
		));
	*/

	//echo "<pre>";print_r(Yii::app()->session['detailPaketBeasiswa']);
    $detailPelamar = array();
    if(isset($dataRender['detailPelamar'][0])){
             $detailPelamar = $dataRender['detailPelamar'][0];
    }
    $historyPelamar = array();
    if(isset($dataRender['historyPelamar'])){
        $historyPelamar = $dataRender['historyPelamar'];
    }
$diusulkan=0;
	if($detailPelamar['id_tlu_status_pelamar'] == "21")
    {
        $statusPendaftaran = "Diusulkan";
    }else if($detailPelamar['id_tlu_status_pelamar'] == "1"){
        $statusPendaftaran = "Diterima";
    }else if($detailPelamar['id_tlu_status_pelamar'] < 99 && $detailPelamar['id_tlu_status_pelamar'] != 88){
        $statusPendaftaran = "Proses";
    }else{
        $statusPendaftaran = "Pelamar";
        $diusulkan = "2";
    }




    $dokumenPendukung = $dataRender['dokumenPendukung'];
	
    //echo "<pre>";print_r($detailPelamar);die();
	
?>
<div class="row">
	<div class="col-lg-12">

			<h4 class="text-blue"><i class="fa fa-graduation-cap"></i>&nbsp;&nbsp;Data Pelamar Beasiswa</h4>
			<hr class="mts mbm">
			<div class="form-horizontal">
				<div class="form-body">
                    <div class="form-group">
                        <label for="inputFirstName" class="col-md-3">Nama :</label>
                        <div class="col-md-9"><?php echo $detailPelamar['nama']; ?></div>
                    </div>
					<div class="form-group">
						<label for="inputFirstName" class="col-md-3">NPM :</label>
						<div class="col-md-9"><?php echo $detailPelamar['npm']; ?></div>
					</div>
                    <div class="form-group">
                        <label for="inputFirstName" class="col-md-3">IPK :</label>
                        <div class="col-md-9"><?php echo $detailPelamar['ipk']; ?></div>
                    </div>
                    <div class="form-group">
                        <label for="inputFirstName" class="col-md-3">No Identitas/KTP :</label>
                        <div class="col-md-9"><?php echo $detailPelamar['ktp']; ?></div>
                    </div>
                    <div class="form-group">
                        <label for="inputFirstName" class="col-md-3">Email :</label>
                        <div class="col-md-9"><?php echo $detailPelamar['email']; ?></div>
                    </div>
                    <div class="form-group">
                        <label for="inputFirstName" class="col-md-3">No Rekening :</label>
                        <div class="col-md-9"><?php echo $detailPelamar['no_rekening']; ?></div>
                    </div>
                    <div class="form-group">
                        <label for="inputFirstName" class="col-md-3">Nama Pemilik Rekening :</label>
                        <div class="col-md-9"><?php echo $detailPelamar['nama_pemilik_rekening']; ?></div>
                    </div>
                    <div class="form-group">
                        <label for="inputFirstName" class="col-md-3">Alamat :</label>
                        <div class="col-md-9"><?php echo $detailPelamar['alamat']; ?></div>
                    </div>
                    <div class="form-group">
                        <label for="inputFirstName" class="col-md-3">No Telp :</label>
                        <div class="col-md-9"><?php echo $detailPelamar['no_telp']; ?></div>
                    </div>
                    <div class="form-group">
                        <label for="inputFirstName" class="col-md-3">No HP :</label>
                        <div class="col-md-9"><?php echo $detailPelamar['no_hp']; ?></div>
                    </div>
                    <div class="form-group">
                        <label for="inputFirstName" class="col-md-3">Penghasilan Orang Tua :</label>
                        <div class="col-md-9"><?php echo $detailPelamar['penghasilan_orang_tua']; ?></div>
                    </div>
                    
				</div>
            </div>
	</div>
     <div class="col-lg-12">

        <h4 class="text-blue"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;Sejarah Beasiswa</h4>
        <hr class="mts mbm">
        <div class="form-group">
                        <label for="inputFirstName" class="col-md-2"></label>
                        <div class="col-md-10">
                            <?php if(!empty($historyPelamar)) { ?>

                                <?php
                                echo "<table class='table table-advanced table-striped table-bordered table-hover tb-sticky-header'>";
                                echo "<thead class='blue'><tr><th>Nama</th><th>Paket Beasiswa</th><th>Status</th></tr>";
                                echo "</thead><tbody>";
                                foreach($historyPelamar as $history) {
                                    //echo "<pre>";print_r($history);die();
                                    ?>
                                    <tr>
                                        <td class="blue"><?php echo ucwords(strtolower($history['nama'])); ?></td>
                                        <td class="blue"><a href="<?php echo $this->createUrl('informasi/index', array('idPaket'=>$history['id_paket_beasiswa'])); ?>"><?php echo ucwords(strtolower($history['nama_paket_beasiswa'])); ?></a></td>
                                        <td class="blue"><?php echo ucwords(strtolower($history['nama_status'])); ?></td>
                                        
                                    </tr>
                                <?php }
                                echo "</tbody></table>";
                                ?>
                            <?php } else { ?>
                            -
                            <?php } ?>
                        </div>
                    </div>
    </div>
</div>