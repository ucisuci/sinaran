<div id="page-wrapper-simple">
	<!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title"><?php echo CHtml::encode($this->pageTitle); ?></div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
		  <li><i class="fa fa-dashboard"></i></li>
            <li>
            <?php
			$this->widget('zii.widgets.CBreadcrumbs', array(
				'homeLink'=>CHtml::link('Beranda', Yii::app()->createUrl('siteroledirkemahasiswaan/beranda')),
                'links'=>$breadcrumbs,
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
        <div class="row">
            <div class="col-lg-12">
			<ul class="nav nav-tabs ul-edit responsive">
                <li <?php echo $this->daftarPaketBeasiswaCssTab; ?> >
					<a id="daftar-paket-beasiswa-link"  href="<?php echo Yii::app()->createUrl("siteroledirkemahasiswaan/beranda",  array('action'=>'daftarPaketBeasiswa')) ?>">Paket Beasiswa</a>
				</li>
                <li <?php echo $this->userPendonorCssTab; ?>>
					<a id="user-pendonor-link" href="<?php echo Yii::app()->createUrl("siteroledirkemahasiswaan/beranda",  array('action'=>'userPendonor')) ?>">User Pendonor</a>
				</li>
				<li <?php echo $this->laporanPaketBeasiswaCssTab; ?>>
					<a id="laporan-paket-beasiswa-link" href="<?php echo Yii::app()->createUrl("siteroledirkemahasiswaan/beranda",  array('action'=>'laporanPaketBeasiswa')) ?>">Laporan</a>
				</li>
                
				<li <?php echo $this->konfigurasiPaketBeasiswaCssTab; ?>>
					<a id="konfigurasi-paket-beasiswa-link" href="<?php echo Yii::app()->createUrl("siteroledirkemahasiswaan/beranda",  array('action'=>'konfigurasiPaketBeasiswa')) ?>">Konfigurasi</a>
				</li>
			
			</ul>
			<div class="tab-content responsive">
			<?php echo $this->renderPartial($renderPartialView, array('dataRender'=>$dataRender)) ?>
			</div>        
		</div>
		<div class="clearfix"></div>
        </div>
    </div>
    <!--END CONTENT-->	
	<!--END PAGE WRAPPER-->
</div>