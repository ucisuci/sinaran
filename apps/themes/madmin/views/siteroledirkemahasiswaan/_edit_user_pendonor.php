<?php 
	/*
	$dataRender = array(			
		'model'=>$model,			
	);
	*/
	
	$model = $dataRender['model'];
	
	$form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-pendonor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array(/*'enctype' => 'multipart/form-data',*/ 'class'=>'form-horizontal')
	)); 
	
	$errorsMessage = $model->getErrors();
	//print_r($model);
?>

	<?php 
		$stateError="";
		if (!empty($errorsMessage['id_user'][0])) {
			$stateError="state-error";
		}
	?>
	<h4 class="text-blue"><i class="fa fa-user"></i>&nbsp;&nbsp;Edit User Pendonor</h4>
		<hr class="mts mbm">
	<div class="col-lg-12">
		&nbsp;
	</div>
	<div class="form-group <?php echo $stateError; ?>">
		<label class="col-md-3 control-label" for="inputNama">Username<span class='require'>*</span></label>
		<div class="col-md-5">
			<?php 
				
				$this->widget('zii.widgets.jui.CJuiAutoComplete',array(
					'model'=>$model,
					'attribute'=>'id_user',
					//'value'=>$request,
					//'source'=>array('ac1','ac2','ac3','ronda','kuman'),
					'source'=>$this->createUrl('siteroledirkemahasiswaan/searchUsername'),
					// additional javascript options for the autocomplete plugin
					'options'=>array(
						//'minLength'=>'1',
					),
					'htmlOptions'=>array(
						'placeholder'=>'Ketikan Username',
						'class'=>'form-control',
						'value'=>$model->User->username
					),
					'scriptFile'=>''
				));
			
			?>
			<div class="errDiv">
				<em class="invalid" for="text">
					<?php echo $form->error($model,'id_user'); ?> 											
				</em>
			</div>
		</div>
	</div>

	<?php 
		$stateError="";
		if (!empty($errorsMessage['id_pendonor'][0])) {
			$stateError="state-error";
		}
	?>
	<div class="form-group <?php echo $stateError; ?>">
		<label class="col-md-3 control-label" for="inputNama">Nama Pendonor<span class='require'>*</span></label>
		<div class="col-md-5">
			<?php 
				
				$this->widget('zii.widgets.jui.CJuiAutoComplete',array(
					'model'=>$model,
					'attribute'=>'id_pendonor',
					//'value'=>$request,
					//'source'=>array('ac1','ac2','ac3','ronda','kuman'),
					'source'=>$this->createUrl('siteroledirkemahasiswaan/searchPendonor'),
					// additional javascript options for the autocomplete plugin
					'options'=>array(
						//'minLength'=>'1',
					),
					'htmlOptions'=>array(
						'placeholder'=>'Ketikan Nama Pendonor',
						'class'=>'form-control',
						'value'=>$model->Pendonor->nama_pendonor
					),
					'scriptFile'=>''
				));
			
			?>
			<div class="errDiv">
				<em class="invalid" for="text">
					<?php echo $form->error($model,'id_pendonor'); ?> 											
				</em>
			</div>
		</div>
	</div>	
	
	<div class="form-actions text-right pal">
		<button type="submit" class="btn btn-primary" id="btnSubmit">Simpan</button>
		&nbsp;
		
		<?php
			//echo $form->hiddenField($model, 'id');
		?>
		
		<a class="btn btn-yellow" href="<?php echo $this->createUrl('siteroledirkemahasiswaan/UserPendonor');?>">
			Batal
		</a>
		
	</div>
	
<?php $this->endWidget(); ?>
