<div id="page-wrapper">
	<!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title"><?php echo $this->nama_paket ?></div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i></li>
            <li>
            <?php
            $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>array(
                    'Paket Beasiswa' => array('site/beranda', 'action'=>'daftarPaketBeasiswa'),
                    'Informasi',
                ),
                'separator' => '&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;'
            ));
            ?>
            </li>
        </ol>
        <div class="clearfix"></div>
    </div>
    <!--END TITLE & BREADCRUMB PAGE-->
	<!--BEGIN CONTENT-->
	<div class="page-content">
		<ul class="nav nav-tabs ul-edit responsive">
			<li class="active">
				<a href="<?php echo $this->createUrl('informasiroledirkemahasiswaan/index', array('idPaket'=>$this->id_paket)); ?>">Informasi</a>
			</li>
			<li>
				<a href="<?php echo $this->createUrl('paketbeasiswaroledirkemahasiswaan/update', array('idPaket'=>$this->id_paket)); ?>">Ubah Paket Beasiswa</a>
			</li>
			<li>
				<a href="<?php echo $this->createUrl('paketbeasiswaroledirkemahasiswaan/rincianKomponenPaketBeasiswa', array('idPaket'=>$this->id_paket)); ?>">Rincian Komponen Paket Beasiswa</a>
			</li>
			<li>
				<a href="<?php echo $this->createUrl('paketbeasiswaroledirkemahasiswaan/pengelolaFakultas', array('idPaket'=>$this->id_paket)); ?>">Pengelola Fakultas</a>
			</li>
			<li>
				<a href="<?php echo $this->createUrl('paketbeasiswaroledirkemahasiswaan/keuanganFakultas', array('idPaket'=>$this->id_paket)); ?>">Keuangan Fakultas</a>
			</li>
		</ul>
		<div class="tab-content responsive">
		<?php echo $this->renderPartial($renderPartialView, array('dataRender'=>$dataRender)) ?>
		</div> 
    </div>
    <!--END CONTENT-->
	<!--END PAGE WRAPPER-->
    </div>
</div>