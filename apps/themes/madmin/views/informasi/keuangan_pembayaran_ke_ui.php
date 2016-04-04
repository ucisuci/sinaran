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
					<li><a href="<?php echo Yii::app()->createUrl('/informasi/keuanganpembayaranuikemhs', array('nama_paket'=>$this->nama_paket, 'id'=>$this->id_paket)) ?>">UI ke Penerima Beasiswa</a></li>
				</ul>
				
				<div class="tab-content responsive">
					<h4 class="mtn">Daftar Tagihan Ke Pendonor</h4>
					<a class="btn btn-danger" href="<?php echo Yii::app()->createUrl('/informasi/addtagihankeui', array('nama_paket'=>$this->nama_paket, 'id'=>$this->id_paket)) ?>"><i class="fa fa-plus"></i> Buat Tagihan Baru</a>
					<div>&nbsp;</div>
					
					<div class="row">
						<div class="col-md-6">
							<div class="input-group mbs">
								<span class="input-group-btn">
									<button class="btn btn-success">Filter Status</button>
								</span>
								<select class="form-control">
									<option value="all">- Pilih Status -</option>
									<option value="Rancangan">Rancangan</option>
									<option value="Diajukan">Diajukan</option>
									<option value="Dibayar">Dibayar</option>
								</select>
								<span class="input-group-btn">
									<input type="submit" value="Tampilkan" class="btn btn-primary">
								</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="tb-group-actions pull-right">
							<select class="table-group-action-input input-inline form-control ">
								<option value="all">- Pilih Aksi -</option>
								<option>Ajukan</option>
								<option>Batalkan</option>
							</select>
							<input type="submit" value="Simpan" class="btn btn-success">
							</div>
						</div>
					</div>
					<table class="table table-advanced table-hover table-striped table-bordered">
						<thead>
							<tr>
								<th><input type="checkbox" id="check_all"></th>
								<th>No.</th>
								<th>No. Tagihan</th>
								<th>Nama Term/Periode</th>
								<th>Total Tagihan</th>
								<th>Total Pembayaran</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="checkbox" value="" name="" class="checkbox_pembayaran_ke_ui"></td>
								<td>1</td>
								<td><a href="<?php echo Yii::app()->createUrl('/informasi/viewpembayarankeui', array('nama_paket'=>$this->nama_paket, 'id'=>$this->id_paket)) ?>">Tag/1/1/2014</a></td>
								<td>Periode 1</td>
								<td>100.000.000</td>
								<td>0</td>
								<td><span class="label label-danger">Rancangan</span></td>
								<td>
									<a class="btn btn-info btn-xs"><i class="fa fa-print mbs"></i> Cetak</a>
									<a class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Ubah</a>
								</td>
							</tr>
							<tr>
								<td><input type="checkbox" value="" name="" class="checkbox_pembayaran_ke_ui"></td>
								<td>2</td>
								<td>Tag/1/1/2014</td>
								<td>Periode 1</td>
								<td>100.000.000</td>
								<td>0</td>
								<td><span class="label label-warning">Diajukan</span></td>
								<td>
									<a class="btn btn-info btn-xs"><i class="fa fa-print mbs"></i> Cetak</a>
									<a class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Ubah</a>
								</td>
							</tr>
							<tr>
								<td><input type="checkbox" value="" name="" class="checkbox_pembayaran_ke_ui"></td>
								<td>3</td>
								<td>Tag/1/1/2014</td>
								<td>Periode 1</td>
								<td>100.000.000</td>
								<td>100.000.000</td>
								<td><span class="label label-success">Dibayar</span></td>
								<td>
									<a class="btn btn-info btn-xs"><i class="fa fa-print mbs"></i> Cetak</a>
									<a class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Ubah</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>                            
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>