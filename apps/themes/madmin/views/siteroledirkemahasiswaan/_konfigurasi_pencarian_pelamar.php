  					<?php
                    $message = Yii::app()->user->getFlash('successMessage');
                    if (isset($message)) { ?>
                        <div class="alert alert-success"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button
                            <p><?php echo $message; ?></p>
                        </div>
                    <?php
                    }
                    ?>
                      <?php
                    $message = Yii::app()->user->getFlash('errorMessage');
                    if (isset($message)) { ?>
                        <div class="alert alert-danger"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button
                            <p><?php echo $message; ?></p>
                        </div>
                    <?php
                    }
                    ?>
<div class="row">
	<div class="col-lg-12">
		<h4 class="text-blue"><i class="fa fa-list-ul"></i>&nbsp;&nbsp;Hasil Pencarian </h4>
		<hr class="mts mbm">
		<br />
<?php 
$action = $dataRender['action'];
$dataProvider = $dataRender['dataProvider'];
$searchPelamar = $dataRender['searchPelamar'];
//echo "<pre>";print_r($dataProvider);die();
?>
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
									'name' => 'Akun SSO',
									'type' => 'raw',
									'value'=>'CHtml::link($data[\'akun_sso\'], array("siteroledirkemahasiswaan/beranda", "akun_sso"=>$data[\'akun_sso\'],"action"=>"konfigurasiPaketBeasiswa","konfig"=>"detailpelamarbeasiswa"))'
								),
								array(
									'name' => 'nama',
									//'type' => 'raw',
									'value' => 'ucwords(strtolower($data[\'nama\']))',
									'htmlOptions'=>array('align'=>'left'),
								),
								
                                array(
                                    'name' => 'NPM',
                                    'type' => 'raw',
                                    'value' => '$data[\'npm\']',
                                    'htmlOptions'=>array('align'=>'left'),
                                ),

                                array(
                                    'name' => 'Email',
                                    'type' => 'raw',
                                    'value' => '$data[\'email\']',
                                    'htmlOptions'=>array('align'=>'left'),
                                ),
                                array(
                                    'name' => 'Program Studi',
                                    'type' => 'raw',
                                    'value' => '$data[\'nama_organisasi\']',
                                    'htmlOptions'=>array('align'=>'left'),
                                ),
                                array(
                                    'name' => 'Fakultas',
                                    'type' => 'raw',
                                    'value' => '$data[\'fakultas\']',
                                    'htmlOptions'=>array('align'=>'left'),
                                ),array(
                                    'name' => 'Status',
                                    'type' => 'raw',
                                    'value' => '$data[\'parameter_status\']',
                                    'htmlOptions'=>array('align'=>'left'),
                                ),
							),
						));
					?>
				</div>
			</div>
		</div>
	
	</div>	
</div>