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

	
	<h4 class="text-blue"><i class="fa fa-user"></i>&nbsp;&nbsp;Tambah Pendonor</h4>
		<hr class="mts mbm">
	
	<div class="col-lg-12">
		&nbsp;
	</div>
	
	<?php 
		$stateError="";
		if (!empty($errorsMessage['nama_pendonor'][0])) {
			$stateError="state-error";
		}
	?>
	<div class="form-group <?php echo $stateError; ?>">
		<label class="col-md-3 control-label" for="inputNama">Nama Pendonor<span class='require'>*</span></label>
		<div class="col-md-5">
			<?php 
				echo CHtml::hiddenField('Pendonor[id]', $model->id);
				$this->widget('zii.widgets.jui.CJuiAutoComplete',array(
					'model'=>$model,
					'attribute'=>'nama_pendonor',
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
						//'value'=>$searchUsername
					),
					'scriptFile'=>''
				));
			
			?>

			<div class="errDiv">
				<em class="invalid" for="text">
					<?php echo $form->error($model,'nama_pendonor'); ?> 											
				</em>
			</div>
		</div>
	</div>
		<?php 
		$stateError="";
		if (!empty($errorsMessage['alamat'][0])) {
			$stateError="state-error";
		}
	?>
	<div class="form-group <?php echo $stateError; ?>">
		<label class="col-md-3 control-label" for="inputNama">Alamat<span class='require'>*</span></label>
		<div class="col-md-5">
			<?php echo $form->textArea($model, 'alamat', array('class'=>'form-control', 'rows'=>'4', 'cols'=>'30')); ?>
											
			<div class="errDiv">
				<em class="invalid" for="text">
					<?php echo $form->error($model,'alamat'); ?> 											
				</em>
			</div>
		</div>
	</div>	
	<div class="form-group <?php echo $stateError; ?>">
		<label class="col-md-3 control-label" for="inputNama">No Telp Kantor<span class='require'>*</span></label>
		<div class="col-md-5">
			<?php echo $form->textField($model, 'no_telp_kantor', array('class'=>'form-control', 'placeholder'=>'No Telp Kantor')); ?>
											
			<div class="errDiv">
				<em class="invalid" for="text">
					<?php echo $form->error($model,'no_telp_kantor'); ?> 											
				</em>
			</div>
		</div>
	</div>	
	<div class="form-group <?php echo $stateError; ?>">
		<label class="col-md-3 control-label" for="inputNama">Fax<span class='require'>*</span></label>
		<div class="col-md-5">
			<?php echo $form->textField($model, 'fax', array('class'=>'form-control', 'placeholder'=>'No Fax')); ?>
											
			<div class="errDiv">
				<em class="invalid" for="text">
					<?php echo $form->error($model,'fax'); ?> 											
				</em>
			</div>
		</div>
	</div>	
	<div class="form-group <?php echo $stateError; ?>">
		<label class="col-md-3 control-label" for="inputNama">Kategori Pendonor<span class='require'>*</span></label>
		<div class="col-md-5">
			<?php
				echo $form->dropDownList($model, 'id_tlu_kategori_pendonor', CHtml::listData(TluKategoriPendonor::model()->findAll(),'id','kategori'), array('prompt'=>'[- Pilih Kategori -]', 'class'=>'form-control'));
			?>
			<div class="errDiv">
				<em class="invalid" for="text">
					<?php echo $form->error($model,'id_tlu_kategori_pendonor'); ?> 											
				</em>
			</div>
		</div>
	</div>	
	
	<div class="form-actions text-right pal">
		<button type="submit" class="btn btn-primary" id="btnSubmit">Simpan</button>
		&nbsp;
		
		<a class="btn btn-yellow" href="<?php echo $this->createUrl('siteroledirkemahasiswaan/UserPendonor');?>">
			Batal
		</a>
		
	</div>
	
<?php $this->endWidget(); ?>
