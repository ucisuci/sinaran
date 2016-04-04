
<h4 class="text-blue"><i class="fa fa-gears"></i>&nbsp;&nbsp;Konfigurasi Paket Beasiswa</h4>
<hr class="mts mbm">
<?php
		$message = Yii::app()->user->getFlash('successMessage');
		if (isset($message)) { ?>
		<div class="alert alert-success"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button
		    <p><?php echo $message; ?></p>
		</div>
		<?php
		}
		?>
		<?php
		$message = Yii::app()->user->getFlash('errorMessage');
		if (isset($message)) { ?>
		<div class="alert alert-danger"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button
		    <p><?php echo $message; ?></p>
		</div>
		<?php
		}
		?>
		<?php
		$message = Yii::app()->user->getFlash('infoMessage');
		if (isset($message)) { ?>
		<div class="alert alert-info"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button
		    <p><?php echo $message; ?></p>
		</div>
		<?php
		}
		?>
<div class="row">

		
		<div class="col-lg-6">
			<div class="panel panel-primary">
				<div class="panel-heading">Pemindahan Penerima Beasiswa </div>
				<div class="panel-body">Konfigurasi ini digunakan untuk memindahkan penerima beasiswa dari Beasiswa A ke Beasiswa B.
				 penerima yang di pindahkan secara default akan menjadi pelamar di beasiswa baru.
				 <hr class="mts mbm">
				 <a href="<?php echo Yii::app()->createUrl("siteroledirkemahasiswaan/beranda",  array('action'=>'konfigurasiPaketBeasiswa','konfig'=>'pemindahanpenerima')) ?>" class="btn btn-orange btn-outlined btn-square right">Masuk</a>
				 </div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="panel panel-green">
				<div class="panel-heading">Pengecekan Penerima Beasiswa </div>
				<div class="panel-body">Konfigurasi ini digunakan untuk memindahkan data penerima dar1 table pelamar kedalam table penerima
				 <hr class="mts mbm">
				 <a href="<?php echo Yii::app()->createUrl("siteroledirkemahasiswaan/beranda",  array('action'=>'konfigurasiPaketBeasiswa','konfig'=>'pelamarkepenerima')) ?>" class="btn btn-green btn-outlined btn-square right">Cek Sekarang</a>
				 </div>
			</div>
		</div>
</div>
<div class="row">

		
		<div class="col-lg-6">
			<div class="panel panel-blue">
				<div class="panel-heading">Pencarian Pelamar Beasiswa</div>
				<div class="panel-body">Konfigurasi ini digunakan untuk mencari pelamar beasiswa sehingga data2 pelamar dan <i>history</i> pelamar dapat dilihat.
				 <hr class="mts mbm">
				 
				 <div class="row">
				 <form action="<?php echo Yii::app()->createUrl("siteroledirkemahasiswaan/KonfigurasiPencarianPelamar",  array('action'=>'konfigurasiPaketBeasiswa','konfig'=>'pencarianpelamarbeasiswa')) ?>" method="post">
				 <label class="col-md-2 control-label" for="">Username</label>		
				 <div class="col-md-4">
					
				  <input class="form-control" placeholder="" type="text" value="" name="Search[Username]" id="Search_Username" />	
				  </div>
				  <div class="col-md-2">
				  <input type="submit" class="btn btn-blue btn-outlined btn-square right" value="Cari"/>
				  </div>
				 </form>
				 </div>
				 </div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="panel panel-yellow">
				<div class="panel-heading">Cek Prodi di SIAK NG </div>
				<div class="panel-body">Konfigurasi ini digunakan untuk mengecek prodi yang ada di SIAK NG dan memasukkannya kedalam Sistem Beasiswa.
				 <hr class="mts mbm">
				 <a href="<?php echo Yii::app()->createUrl("siteroledirkemahasiswaan/beranda",  array('action'=>'konfigurasiPaketBeasiswa','konfig'=>'prodisiak')) ?>" class="btn btn-yellow btn-outlined btn-square right">Cek Sekarang</a>
				 </div>
			</div>
		</div>
		</div>
		
		
</div>