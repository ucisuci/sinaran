<div id="page-wrapper">
	<!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title"><?php echo CHtml::encode($this->pageTitle); ?></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--END TITLE & BREADCRUMB PAGE-->
	<!--BEGIN CONTENT-->
	<div class="page-content">
	
		<div class="row">
			<div class="col-lg-12">
				<ul class="nav nav-tabs ul-edit responsive">
					<li class="active"><a href="#">Pendonor ke UI</a></li>
					<li><a href="<?php echo Yii::app()->createUrl('/informasi/keuanganpembayaranuikemhs', array('nama_paket'=>$this->nama_paket, 'id'=>$this->id_paket)) ?>">UI ke Mahasiswa</a></li>
				</ul>
				
				<div class="tab-content responsive">
					<a class="btn btn-info" href="<?php echo Yii::app()->createUrl('/informasi/keuanganpembayarankeui', array('nama_paket'=>$this->nama_paket, 'id'=>$this->id_paket)) ?>">
						<i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Kembali
					</a>
					<div>&nbsp;</div>
					
					<div class="row">
						<div class="col-lg-12">
							<form>
								<fieldset>
									<legend>Form Buat Tagihan Baru Ke Pendonor</legend>
									<div class="form-group">
										<label>Nama Term/Periode</label>
										<select class="form-control">
											<option>Periode 1</option>
											<option>Periode 2</option>
											<option>Periode 3</option>
										</select>
									</div>
									<div class="form-group">
										<label>Nama Rencana</label>
										<input type="text" class="readonly form-control" readonly="readonly" value="100.000.000">
									</div>
									<div class="form-group">
										<label>Nama Dibayar</label>
										<input type="text" class="readonly form-control" readonly="readonly" value="0">
									</div>
									<div class="form-group">
										<label>Nomor Tagihan</label>
										<input type="text" class="form-control" value="Tag/1/1/2014">
									</div>
									<div class="form-group">
										<label>Mata Uang</label>
										<select class="form-control">
											<option>IDR</option>
											<option>USD</option>
											<option>Euro</option>
										</select>
									</div>
									<div class="form-group">
										<label>Rekening UI</label>
										<select class="form-control">
											<option>127.000.300</option>
											<option>000.000.001</option>
											<option>127.000.079</option>
										</select>
									</div>
									<div class="form-group">
										<label>Keterangan</label>
										<textarea class="form-control"></textarea>
									</div>
									<div class="action clearfix">
										<input type="submit" value="Simpan" class="btn btn-primary">
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>                            
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>