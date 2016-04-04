<?php
	
		$action = $dataRender['action'];
		$dataProvider = $dataRender['dataProvider'];
		$paketBeasiswa = $dataProvider['paketBeasiswa'];
		$penerima = $dataProvider['penerima'];
		$anotherPaketBeasiswa = $dataProvider['anotherPaketBeasiswa'];
		//print_r($paketBeasiswa);die();
?>
<div class="row">
	<div class="col-lg-12">
		<h4 class="text-blue"><i class="fa fa-list-ul"></i>&nbsp;&nbsp;Paket Beasiswa <?php echo $paketBeasiswa[0]['nama_paket_beasiswa'] ?></h4>
		<hr class="mts mbm">
		<div class="form-group">
			<div class="col-md-10"><?php echo $paketBeasiswa[0]['deskripsi'] ?></div>
		</div>	
	</div>
</div>
<br />
<div class="row">

	<div class="col-lg-12 mts">		
	<h4 class="text-blue"><i class="fa fa-list-ul"></i>&nbsp;&nbsp; Pindahkan Penerima Beasiswa </h4>
		<hr class="mts mbm">

		<div class="table-responsive">
			<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'cari-pelamar-form',
			'action'=>$this->createUrl("siteroledirkemahasiswaan/PindahkanPenerimaBeasiswa", array('idPaket'=>$paketBeasiswa[0]['id'], 'action'=>$action,'konfig'=>'pindahkanPenerimaBeasiswa')),
			// Please note: When you enable ajax validation, make sure the corresponding
			// controller action is handling ajax validation correctly.
			// There is a call to performAjaxValidation() commented in generated controller code.
			// See class documentation of CActiveForm for details on this.
			'enableAjaxValidation'=>false,
			//'htmlOptions'=>array('enctype' => 'multipart/form-data', 'class'=>'form-horizontal')
			'htmlOptions' => array('class' => 'form-horizontal')
			)); 
		?>
			<table class="table table-advanced table-striped table-bordered table-hover tablesorter tb-sticky-header">
			<thead class="blue" >
			<tr>
				<th>No</th>
				<th>ID Paket Beasiswa</th>
				<th>Paket Beasiswa</th>
				<th>Pendonor</th>
				<th>Status Beasiswa</th>
				<th>Pilih</th>
			</tr>
			</thead>
			<tbody>
			<?php 
				$x=1;
				foreach($anotherPaketBeasiswa as $k=>$v): ?>
				<tr>
					<td><?php echo $x;$x++; ?></td>
					<td><?php echo $v['id']  ?></td>
					<td><?php echo $v['nama_paket_beasiswa'] ?></td>
					<td><?php echo $v['nama_pendonor'] ?></td>
					<?php 
					echo "<td align=\"center\">";
					if ($v['is_published']==1) {
						echo "<span class=\"label label label-success\">Published</span>";
					}else{
						echo "<span class=\"label label label-danger\">Not Published</span>";	
					}
					echo "</td>";
					?>
					<td align="center"><?php echo CHtml::checkBox('pindahBeasiswa[another_beasiswa][]','', array('value'=>$v['id'])); ?></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
			</table>
				<span class="input-group-btn">
						<button class="btn btn-success dropdown-toggle" type="submit"><i class="fa fa-save"></i>&nbsp;&nbsp;Pindahkan</button>
				</span>
			<?php $this->endWidget(); ?>	
		</div>
	</div>
</div>
