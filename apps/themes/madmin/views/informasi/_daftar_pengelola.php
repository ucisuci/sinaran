<div class="row">
    <div class="col-lg-12">
        <ul id="generalTab" class="nav nav-tabs ul-edit responsive">
            <li class="active"><a href="#paket-beasiswa-tab" data-toggle="tab">Data Pendaftar</a></li>
            <li><a href="#periode-tab" data-toggle="tab">Periode Pembayaran</a></li>
            <li><a href="#rencana-tab" data-toggle="tab">Rencana Pembayaran</a></li>
            <li><a href="#finalisasi-tab" data-toggle="tab">Finalisasi</a></li>
        </ul>
        
        
        <div id="generalTabContent" class="tab-content responsive">
            <div id="paket-beasiswa-tab" class="tab-pane fade in active">
                <div class="row">
                    <div class="panel-body pan">
                        <form class="form-horizontal" action="#">
                            <div class="form-body pal">
                                <div class="form-group col-lg-12">
                                    <div class="col-lg-3">
                                        <h5>Data Pendaftar</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                                <span class="input-group-btn"><button class="btn btn-primary" type="button">Go!</button></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="col-lg-2">
                                            <h5>Aksi:</h5>
                                        </div>
                                        <div class="col-lg-7">
                                            <select id="jenisAksi" class="form-control">
                                                <?php
                                                    if (Yii::app()->session['role'] == 'pengelola')
                                                    {
                                                        echo "<option value=\"Usulkan\">Usulkan</option>";
                                                    }
                                                ?>
                                                <option value="Setujui">Setujui</option>
                                                <option value="Tolak">Tolak</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="prl">
                                                <button class="btn btn-primary" type="submit">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Pendaftar</th>
                                                <th>NPM</th>
                                                <th>Kd Org</th>
                                                <th>Id Lain</th>
                                                <th>Informasi</th>
                                                <th>Status</th>
                                                <th><input type="checkbox" name="checkall"></input></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Ardi bukan mhs</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>xxxxx</td>
                                                <td><p>Pendaftaran: 21 Agu 2014</p>
                                                </td>
                                                <td>Mendaftar</td>
                                                <th><input type="checkbox" name="check1"></input></th>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Ardi mhs</td>
                                                <td>1212</td>
                                                <td>1212</td>
                                                <td>xxxxx</td>
                                                <td>
                                                    <p>Pendaftaran: 21 Agu 2014</p>
                                                    <p>Diusulkan: 22 Agu 2014</p>
                                                </td>
                                                <td>Diusulkan</td>
                                                <th><input type="checkbox" name="check1"></input></th>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Ardi mhs abadi</td>
                                                <td>1213</td>
                                                <td>1213</td>
                                                <td>xxxxx</td>
                                                <td>
                                                    <p>Pendaftaran: 21 Agu 2014</p>
                                                    <p>Diusulkan: 22 Agu 2014</p>
                                                    <p>Disetujui: 23 Agu 2014</p>
                                                </td>
                                                <td>Disetujui</td>
                                                <th><input type="checkbox" name="check1"></input></th>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <ul class="pagination mtm mbm">
                                        <li class="disabled"><a href="#">«</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">»</a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="periode-tab" class="tab-pane fade">
                <div class="row">
                    <div class="col-lg-12"><h5>Form Periode Pembayaran</h5>
                        <form class="form-horizontal" action="#">
                            <div class="form-body pal">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputTerm">Nama Term</label>
                                    <div class="col-md-5">
                                        <input id="inputTerm" class="form-control" type="text"></input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputTglAwal">Tanggal Awal</label>
                                    <div class="col-md-5">
                                        <div class="input-group datetimepicker-disable-time date"><input class="form-control" type="text"><span class="input-group-addon"><i class="fa fa-calendar"></i></span></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputTglAkhir">Tanggal Akhir</label>
                                    <div class="col-md-5">
                                        <div class="input-group datetimepicker-disable-time date"><input class="form-control" type="text"><span class="input-group-addon"><i class="fa fa-calendar"></i></span></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputJudul">Deskripsi</label>
                                    <div class="col-md-5">
                                        <input id="inputJudul" class="form-control" type="text"></input>
                                    </div>
                                </div>
                                <div class="form-actions pll prl">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Term</th>
                                                <th>Tgl Awal</th>
                                                <th>Tgl Akhir</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Perioode 1</td>
                                                <td>1 Agu 2014</td>
                                                <td>1 Sep 2014</td>
                                                <td>XXXX</td>
                                                <td><input type="checkbox" name="checkperiode1"></input></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Perioode 2</td>
                                                <td>2 Sep 2014</td>
                                                <td>1 Okt 2014</td>
                                                <td>XXXX</td>
                                                <td><input type="checkbox" name="checkperiode1"></input></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Perioode 3</td>
                                                <td>2 Okt 2014</td>
                                                <td>1 Nov 2014</td>
                                                <td>XXXX</td>
                                                <td><input type="checkbox" name="checkperiode1"></input></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="rencana-tab" class="tab-pane fade">
                <div class="row">
                    <div class="col-lg-12"><h5>Rencana Pembayaran</h5>
                        <form class="form-horizontal" action="#">
                            <div class="form-body pal">
                                <div class="form-actions pll prl">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Penerima</th>
                                                <th>Periode 1</th>
                                                <th>Periode 2</th>
                                                <th>Periode 3</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Ardi mhs</td>
                                                <td>100</td>
                                                <td>100</td>
                                                <td>100</td>
                                                <td><button class="btn btn-primary" type="submit">Ubah</button></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Ardi mhs abadi</td>
                                                <td>100</td>
                                                <td>100</td>
                                                <td>100</td>
                                                <td><button class="btn btn-primary" type="submit">Ubah</button></td>
                                            </tr>
                                            <tr>
                                                <td colspan = "2">Total</td>
                                                <td>300</td>
                                                <td>300</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td colspan = "2">Total</td>
                                                <td colspan = "3">900</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="finalisasi-tab" class="tab-pane fade">
                <div class="row">
                    <div class="col-lg-12"><h5>Finalisasi Paket Beasiswa</h5>
                        <form class="form-horizontal" action="#">
                            <div class="form-body pal">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            Rencana Pembayaran
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Penerima</th>
                                                <th>Periode 1</th>
                                                <th>Periode 2</th>
                                                <th>Periode 3</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Ardi mhs</td>
                                                <td>100</td>
                                                <td>100</td>
                                                <td>100</td>
                                                <td><button class="btn btn-primary" type="submit">Ubah</button></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Ardi mhs abadi</td>
                                                <td>100</td>
                                                <td>100</td>
                                                <td>100</td>
                                                <td><button class="btn btn-primary" type="submit">Ubah</button></td>
                                            </tr>
                                            <tr>
                                                <td colspan = "2">Total</td>
                                                <td>300</td>
                                                <td>300</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td colspan = "2">Total</td>
                                                <td colspan = "3">900</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="form-actions pll prl">
                                            <button class="btn btn-primary" type="submit">Selesai</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>                            
    </div>
    <div class="clearfix"></div>
</div>