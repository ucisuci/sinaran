<div id="page-wrapper">
	<!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title"><?php echo CHtml::encode($this->pageTitle); ?></div>
        </div>
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
        <div class="clearfix"></div>
    </div>
    <!--END TITLE & BREADCRUMB PAGE-->
	<!--BEGIN CONTENT-->
	<div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <ul id="generalTab" class="nav nav-tabs ul-edit responsive">
                    <li class="active"><a href="#paket-beasiswa-tab" data-toggle="tab">Prestasi</a></li>
                    <li><a href="#laporan-tab" data-toggle="tab">Keuangan</a></li>
                </ul>
                
                
                <div id="generalTabContent" class="tab-content responsive">
                    <div id="paket-beasiswa-tab" class="tab-pane fade in active">
                        <div class="row">
                            <div class="panel-body">
                                <h5>Data Prestasi Akademik/Non Akademik</h5>
                                <?php 
                                    if (Yii::app()->session['role'] == 'pendaftar') {
                                        echo $this->renderPartial('_prestasi_unggah');
                                    } else {
                                        echo $this->renderPartial('_prestasi');
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div id="laporan-tab" class="tab-pane fade">
                        <div class="row">
                            <?php 
                                if (Yii::app()->session['role'] == 'pendaftar') {
                                    echo $this->renderPartial('_laporan_keuangan_unggah');
                                } else if (Yii::app()->session['role'] == 'kemahasiswaan' | Yii::app()->session['role'] == 'keuangan') {
                                    echo $this->renderPartial('_laporan_keuangan_kemahasiswaan');
                                } else {
                                    echo $this->renderPartial('_laporan_keuangan');
                                }
                            ?>
                        </div>
                    </div>
                </div>                            
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--END CONTENT-->
	<!--END PAGE WRAPPER-->
    </div>
</div>