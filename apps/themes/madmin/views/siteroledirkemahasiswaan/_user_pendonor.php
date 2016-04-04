<?php 
$message = Yii::app()->user->getFlash('userPendonorMessage');
if (isset($message)) { ?> 
	<div class="alert alert-success">
		<p><?php echo $message; ?></p>
	</div>
<?php 
//Yii::app()->user->setFlash('userPendonorMessage', "");
} 
?>
<?php 
$message = Yii::app()->user->getFlash('userPendonorErrorMessage');
if (isset($message)) { ?> 
	<div class="alert alert-danger">
		<p><?php echo $message; ?></p>
	</div>
<?php 
//Yii::app()->user->setFlash('userPendonorMessage', "");
} 
?>
<?php
	/*
	$dataRender = array(
		'action'=>$action,
		'listPendonor'=>$listPendonor,
		'userPendonorDataProvider'=>$userPendonorDataProvider
	);
	*/
	$action = $dataRender['action'];
	$userPendonorDataProvider = $dataRender['userPendonorDataProvider'];
	$searchPendonor = $dataRender['searchPendonor'];
	$searchUsername = $dataRender['searchUsername'];
	


	//echo "IP Address : ".Yii::app()->request->userHostAddress;
	
	//echo "<pre>";print_r($_SERVER);
	
?>
<div class="row">
	<div class="col-lg-12">
		<h4 class="text-blue"><i class="fa fa-list-ul"></i>&nbsp;&nbsp;Daftar User Pendonor</h4>
		<hr class="mts mbm">
			<?php
				$form=$this->beginWidget('CActiveForm', array(
				'id'=>'cari-user-pendonor-form',
				'method'=>'get',
				'action'=>Yii::app()->createUrl("siteroledirkemahasiswaan/userPendonor"),
				// Please note: When you enable ajax validation, make sure the corresponding
				// controller action is handling ajax validation correctly.
				// There is a call to performAjaxValidation() commented in generated controller code.
				// See class documentation of CActiveForm for details on this.
				'enableAjaxValidation'=>false,
				//'htmlOptions'=>array('enctype' => 'multipart/form-data', 'class'=>'form-horizontal')
				)); 
			?>
			
				<div class="col-md-12">
					<?php echo CHtml::label('Username', '', array('class'=>'col-md-3 control-label')); ?>
					<div class="col-md-6">
					
					<?php
									
						echo CHtml::textField('Search[Username]', $searchUsername, 
							array('class'=>'form-control', 'placeholder'=>'')
						);
							
					?>
	
					</div>
					<div class="col-md-1">
		
					</div>
					<div class="col-md-2 no-padding" align="right">
						
						<a class="btn btn-blue" href="<?php echo $this->createUrl('siteroledirkemahasiswaan/tambahPendonor');?>">
							+ Pendonor Baru
						</a>
						
					</div>
				</div>

				<div class="col-md-12">
				&nbsp;
				</div>	
				
				<div class="col-md-12">
					<?php echo CHtml::label('Nama Pendonor', '', array('class'=>'col-md-3 control-label')); ?>
					<div class="col-md-6">
						<div class="input-group">
						
							<?php
								
								echo CHtml::textField('Search[Pendonor]', $searchPendonor, 
									array('class'=>'form-control', 'placeholder'=>'')
								);
								
							?>
							
							<span class="input-group-btn">
								<button type="submit" class="btn btn-default"><i class="fa fa-search"></i> Cari</button>
							</span>
						
						</div>
					
					</div>
					
					<div class="col-md-1">
		
					</div>
					<div class="col-md-2 no-padding" align="right">
						
						<a class="btn btn-red" href="<?php echo $this->createUrl('siteroledirkemahasiswaan/tambahUserPendonor');?>">
							+ User Pendonor Baru
						</a>
						
					</div>

				</div>
				
				
			<?php $this->endWidget(); ?>
	</div>
	<div class="col-md-12">
        &nbsp;
    </div>
	<div class="col-lg-12">
		<div class="panel panel-green">
			<div class="panel-heading">Daftar User Pendonor</div>
			<div class="panel-body">
				<div class="table-responsive">
					
					<?php
					
						echo CHtml::hiddenField('delUrl', '', array('id'=>'delUrl'));
					
						$this->widget('zii.widgets.grid.CGridView', array(
							'dataProvider' => $userPendonorDataProvider,
							'pager'=>array(
								'header'=>'<div class="col-lg-12 mts no-padding" align="right">',
								'selectedPageCssClass'=>'active',
								'maxButtonCount'=>5,
								'nextPageLabel'=>'>>',
								'prevPageLabel'=>'<<',
								'lastPageLabel'=> 'Last >>',
								'firstPageLabel'=> '<< First',
								'htmlOptions'=>array('class'=>'pagination mtm mbm')
							),
							'pagerCssClass'=>'',
							'itemsCssClass'=>'table table-advanced table-striped table-bordered table-hover tablesorter tb-sticky-header',
							'summaryText'=>'Menampilkan {start} - {end} dari {count} data',
							//'tagName'=>'',
							'columns' => array(
								array(
									'name' => 'No',
									'type' => 'raw',
									//'value' =>'$row+1'
									'value' =>'CHtml::tag(\'div\', array(\'align\'=>\'center\'), 
										($row+1) + ($this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize)
									)'
								),
								array(
									'name' => 'Username',
									//'type' => 'raw',
									'value' => 'CHtml::encode($data[\'username\'])'
								),
								array(
									'name' => 'Nama',
									//'type' => 'raw',
									'value' => '$data[\'nama\']',
								),
								array(
									'name' => 'Email',
									//'type' => 'raw',
									'value' => '$data[\'email\']',
								),
								array(
									'name' => 'Nama Pendonor',
									'type' => 'raw',
									//'value' => '$data[\'nama_pendonor\']',
									'value' =>'CHtml::link(ucwords(strtolower($data["nama_pendonor"])), array("siteroledirkemahasiswaan/editPendonor", "nama_pendonor"=>$data["nama_pendonor"]))',
                            
								),	
								array(
									'name' => 'Status',
									//'type' => 'raw',
									    'value'=>function($data, $row) {

                                    if ($data['status']==1) {
                                        echo "<span class=\"label label label-success\">Aktif</span>";
                                    }else{
                                        echo "<span class=\"label label label-danger\">Tidak Aktif</span>";
                                    }

                                }
								),	
								array(
									'header'=>'Aksi',
									'class'=>'CButtonColumn',
									'template'=>'{edit}  {hapus}',
									'htmlOptions'=>array('align'=>'center', 'width'=>'20%'),
									'buttons'=>array(
										'edit'=>array(
											'label'=>'<i class="fa fa-edit"></i> Edit',
											'url'=>'Yii::app()->createUrl("siteroledirkemahasiswaan/editUserPendonor", array("id"=>$data[\'id\']))',
											'options'=>array("class"=>"btn btn-success btn-xs", 'title'=>"Edit")
										),
										'hapus'=>array(
											'label'=>'<i class="fa fa-trash-o"></i> Hapus',
											'url'=>'Yii::app()->createUrl("siteroledirkemahasiswaan/hapusUserPendonor", array("id"=>$data[\'id\']))',
											'options'=>array("class"=>"delete-data btn btn-danger btn-xs", 'title'=>'Hapus')
										)
									)
								)
								
							),
						));
					
					?>
					
				</div>
			</div>
		</div>	
	</div>	
</div>

<div class="dialog-container" style="display:none;">
<?php

$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
	'id'=>'delete-confirm-dialog',
	// additional javascript options for the dialog plugin
	'options'=>array(
		'title'=>'Delete Confirmation',
		'autoOpen'=>false,
		'modal'=>true,	
		'width'=>'30%',
		'resizable'=>false,
		'draggable'=>false,
		'show'=>array(
                'effect'=>'blind',
                'duration'=>600,
            ),
        'hide'=>array(
                'effect'=>'blind',
                'duration'=>600,
            ),     
		'buttons'=>array(
			//'Ok'=>'js:processConfirm',
			'Ok'=>'js:function(){
				
				url = $("#delUrl").val();
				//alert(url);	
				$("#delUrl").val("");
				window.location = url;
				//$(this).dialog("close");
			}
			',
			'Cancel'=>'js:function(){
				$("#delUrl").val("");
				$(this).dialog("close");	
			}'
		),
	),
));

//echo '<div class="dialog_input">Apakah anda yakin akan menghapus data ini ??? </div>';

echo 'Apakah anda yakin akan menghapus data ini ??? ';

$this->endWidget('zii.widgets.jui.CJuiDialog');	

?>
</div>


<?php	
	
	$script = "
		
	function processConfirm() {
		$('#delete-confirm-dialog').dialog('close');
		//alert('DeleteOk');
	}	
	
	
	$(document).ready(function() {
		//$('#delete-confirm-dialog').hide();
		//$('#delete-confirm-dialog').remove();
	});	
	
	 
	$('.delete-data').click(function(e){
		
		e.preventDefault();
		var index = $('.delete-data').index(this);
		//alert(index);
		
		url = $(this).attr('href');
		$('#delUrl').val(url);
		//alert(url);
		$('#delete-confirm-dialog').dialog('open');
		
	});
	";

	$cs = Yii::app()->getClientScript();  
	$cs->registerScript(
	'js',
	$script,
	CClientScript::POS_END);
	
?>