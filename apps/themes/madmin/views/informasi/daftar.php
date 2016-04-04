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
        <?php 
            if (Yii::app()->session['role'] == 'pengelola') {
                echo $this->renderPartial('_daftar_pengelola');
            } else if (Yii::app()->session['role'] == 'kemahasiswaan' | Yii::app()->session['role'] == 'keuangan') {
                echo $this->renderPartial('_daftar_kemahasiswaan');
            } else if (Yii::app()->session['role'] == 'pendaftar') {
                if (!isset($action)) {
                    // cek lagi apakah dia tamu atau bukan
                    /*if (tamu) {
                        echo $this->renderPartial('_daftar_pendaftar_tamu', array('action'=>$action));
                    } else */
                    echo $this->renderPartial('_daftar_pendaftar', array('action'=>$action));
                } else {
                    // cek lagi apakah dia tamu atau bukan
                    /*if (tamu) {
                        echo $this->renderPartial('_data_pendaftar_tamu');
                    } else */
                    echo $this->renderPartial('_data_pendaftar');
                }
            } else {
                echo $this->renderPartial('_daftar_pendonor');
            }
        ?>
    </div>
    <!--END CONTENT-->
	<!--END PAGE WRAPPER-->
    </div>
</div>