<div class="panel">
    <div class="panel-body">
        <form class="form-horizontal" action="#">
            <div class="form-body pal">
                <h5>Data Pendaftar</h5>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="inputUsername">Username</label>
                    <div class="col-md-5">
                        <p class="form-control-static">username.sistem</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="inputNama">Nama&#42;</label>
                    <div class="col-md-5">
                        <p class="form-control-static">Seorang Mahasiswa</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="inputNPM">NPM</label>
                    <div class="col-md-5">
                        <p class="form-control-static">123456789</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="inputKTP">No. KTP&#42;</label>
                    <div class="col-md-5">
                        <p class="form-control-static">123456789123456</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="inputAlamat">Alamat&#42;</label>
                    <div class="col-md-5">
                        <p class="form-control-static">Jl. ABS No.1 RT0XX/RW0X Kel.SS Kec.AA</p>
                        <p class="form-control-static">DKI Jakarta</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="inputStatus">Status</label>
                    <div class="col-md-5">
                        <p class="form-control-static">Disetujui (Telah diterima oleh pendonor sebagai penerima beasiswa)</p>
                    </div>
                </div>
                <div class="form-actions pll prl">
                    <a class="btn btn-primary" href="<?php echo $this->createUrl('informasi/daftar', array('action'=>"form")); ?>">
                            Klaim Telah Diterima Ujian Masuk
                        </a>
                </div>
            </div>
        </form>
    </div>
</div>