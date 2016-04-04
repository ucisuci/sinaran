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
            if (Yii::app()->session['role'] == 'kemahasiswaan' | Yii::app()->session['role'] == 'keuangan') {
                echo $this->renderPartial('_info_kemahasiswaan');
           
			/*}else if(Yii::app()->session['role'] == 'pengelola') {
                 echo $this->renderPartial('_info_paket_beasiswa', 
						array(
							'detail_paket'=>$detail_paket,
							'syaratKetentuanBeasiswa'=>$syaratKetentuanBeasiswa,
							'fileSk'=>$fileSk,
									'fileDokumenPendukung'=>$fileDokumenPendukung
						));
			*/
			}else{
                //echo $this->renderPartial('_info_paket_beasiswa', array('detail_paket'=>$detail_paket));
				echo $this->renderPartial('_info_paket_beasiswa', 
						array(
							'detail_paket'=>$detail_paket,
							'syaratKetentuanBeasiswa'=>$syaratKetentuanBeasiswa,
							'fileSk'=>$fileSk,
							'fileDokumenPendukung'=>$fileDokumenPendukung
						));
			}
            
        ?>
    </div>
    <!--END CONTENT-->
	<!--END PAGE WRAPPER-->
    </div>
</div>