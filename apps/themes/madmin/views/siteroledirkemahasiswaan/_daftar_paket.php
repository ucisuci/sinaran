<div class="row">
	<div class="col-lg-12">
		<h4 class="text-blue"><i class="fa fa-list-ul"></i>&nbsp;&nbsp;Daftar Paket Beasiswa</h4>
		<hr class="mts mbm">
		<br />
		<?php
		
		/*
		$dataRender = array(
			'action'=>$action,
			'daftarPaketDataProvider'=>$daftarPaketDataProvider,
			'searchNamaPaketBeasiswa'=>$searchNamaPaketBeasiswa,
		);	
		*/
		
		$action = $dataRender['action'];
		$dataProvider = $dataRender['dataProvider'];
		$searchNamaPaketBeasiswa = $dataRender['searchNamaPaketBeasiswa'];
		
		$form=$this->beginWidget('CActiveForm', array(
		'id'=>'cari-paket-beasiswa-form',
		'action'=>$this->createUrl('daftarPaketBeasiswa'),
		'method'=>'get',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
		//'htmlOptions'=>array('enctype' => 'multipart/form-data', 'class'=>'form-horizontal')
		)); 
		?>
		<div class="row">
			<div class="col-md-6 mbs">
				<div class="input-group">
					<span class="input-group-btn">
						<button class="btn btn-blue dropdown-toggle" type="button">Filter :</button>
					</span>
					<input type="search" name="Search[NamaPaketBeasiswa]" class="form-control" placeholder="masukkan nama beasiswa..." size="50" value="<?php echo $searchNamaPaketBeasiswa; ?>">
					<span class="input-group-btn">
						<button class="btn btn-blue dropdown-toggle" type="submit"><i class="fa fa-search"></i>&nbsp;Cari</button>
					</span>
				</div>
			</div>
		</div>
		<?php $this->endWidget(); ?>
	
		<div class="row">
			<div class="col-lg-12 mts">				
				<div class="table-responsive">
					<?php
						//$this->widget('zii.widgets.grid.CGridView', array(
						$this->widget('ext.myGridView', array(
							'dataProvider' => $dataProvider,
							'pager'=>array(
								'header'=>'<div class="col-lg-12 mts no-padding" align="left">',
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
							//'summaryText'=>'Menampilkan {start} - {end} dari {count} data',
							'summaryText'=>'',
							//'summaryTagName'=>'',
							'summaryCssClass'=>'',
							//'tagName'=>'',
							'theadCss'=>'blue',
							'columns' => array(
								array(
									'name' => 'No',
									'type' => 'raw',
									//'value' =>'$row+1'
									'value' =>'CHtml::tag(\'div\', array(\'align\'=>\'center\'), 
										($row+1) + ($this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize)
									)',
									//'headerHtmlOptions'=>array(
											//'class'=>'blue',
									//),
								),
								array(
									'name' => 'Nama Paket',
									'type' => 'raw',
									'value'=>'CHtml::link($data[\'nama_paket_beasiswa\'], array("informasi/index", "idPaket"=>$data[\'id\']))'
								),
                                array(
                                    'name' => 'Fakultas',
                                    'type' => 'raw',
                                    'value' => '$data[\'nama_organisasi\']',
                                    'htmlOptions'=>array('align'=>'center'),
                                ),
								array(
									'name' => 'Kategori',
									//'type' => 'raw',
									'value' => '$data[\'id_tlu_jenis_beasiswa\'] == "1" ? "BPP" : $data[\'id_tlu_jenis_beasiswa\'] == "2" ? "BPP" : "BP & BPP"',
								),
								array(
									'name' => 'Tahun Term Awal',
									//'type' => 'raw',
									'value' => '$data[\'tahun_term_akademik_awal\']',
									'htmlOptions'=>array('align'=>'center'),
								),
								array(
									'name' => 'Tahun Term Akhir',
									//'type' => 'raw',
									'value' => '$data[\'tahun_term_akademik_akhir\']',
									'htmlOptions'=>array('align'=>'center'),
								),
								array(
									'name' => 'Periode Pendaftaran',
									'type' => 'raw',
									'value' => 'date("d/m/Y", strtotime($data[\'tgl_awal_lamar\']))."<br />"." s.d "."<br />".date("d/m/Y", strtotime($data[\'tgl_akhir_lamar\']))',
									'htmlOptions'=>array('align'=>'center'),
								),		
								array(
									'name' => 'Informasi Pendaftaran',
									'type' => 'raw',
									'value' => '"Kuota : ".number_format($data[\'kuota_penerima\'], 0, ",", ".")',
								),	
								array(
									'name' => 'Informasi Keuangan',
									'type' => 'raw',
									'value' => '"Rencana : ".number_format($data[\'besaran_total\'], 0, ",", ".")',
								),
								array(
									'name' => 'Status',
									'type' => 'raw',
									'value' => '$data[\'is_published\'] == "1" ? "<span class=\"label label-success\">Published</span>" : "<span class=\"label label-danger\">Not Publish</span>"',
								),
								array(
									'name' => 'Notice',
									'type' => 'raw',
									'value' => '$data[\'announce_result\'] == "1" ? "<span class=\"label label-success\">Notice</span>" : "<span class=\"label label-danger\">Not Notice</span>"',
								),
								
							),
						));
					
					?>
				</div>
			</div>
		</div>
	
	</div>	
</div>