<div class="row">
    <div class="col-lg-12">
        <ul id="generalTab" class="nav nav-tabs ul-edit responsive">
            <li class="active"><a href="#pendonor-ui-tab" data-toggle="tab">Pendonor ke UI</a></li>
            <li><a href="#ui-mhs-tab" data-toggle="tab">UI ke Mahasiswa</a></li>
        </ul>
        
        
        <div id="generalTabContent" class="tab-content responsive">
            <div id="pendonor-ui-tab" class="tab-pane fade in active">
                <div class="row">
                    <div class="col-lg-12">
                        <ul id="generalTab" class="nav nav-tabs ul-edit responsive">
                            <li class="active"><a href="#tagihan-tab" data-toggle="tab">Tagihan ke Pendonor</a></li>
                            <li><a href="#status-tab" data-toggle="tab">Status Pembayaran</a></li>
                        </ul>
                        
                        
                        <div id="generalTabContent" class="tab-content responsive">
                            <div id="tagihan-tab" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-lg-12"><h5>Form Tagihan ke Pendonor</h5>
                                        <form class="form-horizontal" action="#">
                                            <div class="form-body pal">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputNoTagihan">No Tagihan</label>
                                                    <div class="col-md-5">
                                                        <input id="inputNoTagihan" class="form-control" type="text"></input>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputPeriode">Pilih Periode</label>
                                                    <div class="col-md-5">
                                                        <select id="selectPeriode" class="form-control">
                                                            <option value="">Periode 1A</option>
                                                            <option value="">Periode 1B</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputJenisBeasiswa">Jenis Beasiswa</label>
                                                    <div class="col-md-5">
                                                        <input id="inputJenisBeasiswa" class="form-control" type="text"></input>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputNilaiRencana">Nilai Rencana</label>
                                                    <div class="col-md-5">
                                                        <input id="inputNilaiRencana" class="form-control" type="text"></input>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputNilaiDibayarkan">Nilai Dibayarkan</label>
                                                    <div class="col-md-5">
                                                        <input id="inputNilaiDibayarkan" class="form-control" type="text"></input>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputTotalTagihan">Total Tagihan</label>
                                                    <div class="col-md-5">
                                                        <input id="inputTotalTagihan" class="form-control" type="text"></input>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputCatatan">Catatan</label>
                                                    <div class="col-md-5">
                                                        <textarea id="inputJudul" class="form-control" type="text"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-actions pll prl">
                                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <h5>Data Tagihan ke Pendonor</h5>
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>No. Tagihan</th>
                                                                <th>Periode</th>
                                                                <th>Jenis</th>
                                                                <th>Total Tagihan</th>
                                                                <th>Status</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Tag/1/8/2014</td>
                                                                <td>Periode 1A</td>
                                                                <td>Pendidikan</td>
                                                                <td>10.000.000</td>
                                                                <td>....</td>
                                                                <td>
                                                                    <button class="btn btn-primary" type="submit">Cetak</button>
                                                                    <button class="btn btn-primary" type="submit">Hapus</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Tag/2/8/2014</td>
                                                                <td>Periode 1B</td>
                                                                <td>Penunjang</td>
                                                                <td>1.000.000</td>
                                                                <td>....</td>
                                                                <td>
                                                                    <button class="btn btn-primary" type="submit">Cetak</button>
                                                                    <button class="btn btn-primary" type="submit">Hapus</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Tag/3/8/2014</td>
                                                                <td>Periode 2A</td>
                                                                <td>Pendidikan</td>
                                                                <td>10.000.000</td>
                                                                <td>....</td>
                                                                <td>
                                                                    <button class="btn btn-primary" type="submit">Cetak</button>
                                                                    <button class="btn btn-primary" type="submit">Hapus</button>
                                                                </td>
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
                            <div id="status-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-12"><h5>Form Pelunasan Tagihan Pendonor</h5>
                                        <form class="form-horizontal" action="#">
                                            <div class="form-body pal">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="inputNoTagihan">Pilih No Tagihan</label>
                                                        <div class="col-md-7">
                                                            <select id="selectNoTagihan" class="form-control">
                                                                <option value="">Tag/1/8/2014</option>
                                                                <option value="">Tag/2/8/2014</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="inputPeriode">Periode</label>
                                                        <div class="col-md-7">
                                                            <input id="inputPeriode" class="form-control" type="text"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="inputJenisBeasiswa">Jenis Beasiswa</label>
                                                        <div class="col-md-7">
                                                            <input id="inputJenisBeasiswa" class="form-control" type="text"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="inputNilaiRencana">Nilai Rencana</label>
                                                        <div class="col-md-7">
                                                            <input id="inputNilaiRencana" class="form-control" type="text"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="inputNilaiDibayarkan">Nilai Dibayarkan</label>
                                                        <div class="col-md-7">
                                                            <input id="inputNilaiDibayarkan" class="form-control" type="text"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="inputTotalTagihan">Total Tagihan</label>
                                                        <div class="col-md-7">
                                                            <input id="inputTotalTagihan" class="form-control" type="text"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="inputPembayaran">Total Pembayaran</label>
                                                        <div class="col-md-7">
                                                            <input id="inputPembayaran" class="form-control" type="text"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions pll prl">
                                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="inputKodeJurnal">Kode Jurnal Bank</label>
                                                        <div class="col-md-7">
                                                            <input id="inputKodeJurnal" class="form-control" type="text"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="inputNamaBank">Nama Bank Pendonor</label>
                                                        <div class="col-md-7">
                                                            <input id="inputNamaBank" class="form-control" type="text"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="inputNoRek">No. Rek. Pendonor</label>
                                                        <div class="col-md-7">
                                                            <input id="inputNoRek" class="form-control" type="text"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="inputTglBayar">Tgl Pembayaran</label>
                                                        <div class="col-md-7">
                                                            <input id="inputNilaiRencana" class="form-control" type="text"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="inputRekUI">Rekening UI</label>
                                                        <div class="col-md-7">
                                                            <select id="selectRekUI" class="form-control">
                                                                <option value="">Rekening 24</option>
                                                                <option value="">Rekening 25</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="inputMataUang">Mata Uang</label>
                                                        <div class="col-md-7">
                                                            <select id="selectMataUang" class="form-control">
                                                                <option value="">IDR</option>
                                                                <option value="">USD</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 control-label" for="inputBuktiBayar">Bukti Bayar</label>
                                                        <div class="col-md-7">
                                                            <div class="col-md-5">
                                                                <input id="inputBuktiBayar" class="form-control" type="text"></input>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <button class="btn btn-primary" type="submit">Browse</button>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <button class="btn btn-primary" type="submit">+</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-body col-lg-12">
                                                    <div class="table-responsive">
                                                        <h5>Tabel Pelunasan Tagihan Pendonor</h5>
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>No. Tagihan</th>
                                                                <th>Periode</th>
                                                                <th>Jenis</th>
                                                                <th>Total Tagihan</th>
                                                                <th>Pembayaran</th>
                                                                <th>Status</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Tag/1/8/2014</td>
                                                                <td>Periode 1A</td>
                                                                <td>Pendidikan</td>
                                                                <td>10.000.000</td>
                                                                <td>10.000.000</td>
                                                                <td>Rancangan</td>
                                                                <td>
                                                                    <button class="btn btn-primary" type="submit">Ajukan</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Tag/2/8/2014</td>
                                                                <td>Periode 2A</td>
                                                                <td>Pendidikan</td>
                                                                <td>10.000.000</td>
                                                                <td>10.000.000</td>
                                                                <td>Diajukan</td>
                                                                <td>
                                                                    -
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Tag/2/8/2014</td>
                                                                <td>Periode 2B</td>
                                                                <td>Pendidikan</td>
                                                                <td>10.000.000</td>
                                                                <td>10.000.000</td>
                                                                <td>Disetujui</td>
                                                                <td>
                                                                    -
                                                                </td>
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
                        </div>
                    </div>
                </div>
            </div>
            <div id="ui-mhs-tab" class="tab-pane fade">
                <div class="row">
                    <div class="col-lg-12">
                        <ul id="generalTab" class="nav nav-tabs ul-edit responsive">
                            <li class="active"><a href="#tagihan-dir-tab" data-toggle="tab">Tagihan ke Dir. Keuangan</a></li>
                            <li><a href="#status-ui-mhs-tab" data-toggle="tab">Status Pembayaran</a></li>
                        </ul>
                        
                        
                        <div id="generalTabContent" class="tab-content responsive">
                            <div id="tagihan-dir-tab" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-lg-12"><h5>Form Tagihan ke Dir. Keuangan</h5>
                                        <form class="form-horizontal" action="#">
                                            <div class="form-body pal">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputBatch">Batch No.</label>
                                                    <div class="col-md-5">
                                                        <input id="inputBatch" class="form-control" type="text"></input>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputNoTagihan">No Tagihan</label>
                                                    <div class="col-md-5">
                                                        <input id="inputNoTagihan" class="form-control" type="text"></input>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputDataPembayaran">Pilih Data Pembayaran ke UI</label>
                                                    <div class="col-md-5">
                                                        <button class="btn btn-primary" type="submit">Pilih</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputSaldoPembayaran">Pilih Saldo Pembayaran Pendonor ke UI</label>
                                                    <div class="col-md-5">
                                                        <input id="inputSaldoPembayaran" class="form-control" type="text"></input>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputPeriode">Pilih Periode</label>
                                                    <div class="col-md-5">
                                                        <select id="selectPeriode" class="form-control">
                                                            <option value="">Periode 1M</option>
                                                            <option value="">Periode 2M</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputJenisBeasiswa">Jenis Beasiswa</label>
                                                    <div class="col-md-5">
                                                        <input id="inputJenisBeasiswa" class="form-control" type="text"></input>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="inputNilaiTotal">Nilai Total</label>
                                                    <div class="col-md-5">
                                                        <input id="inputNilaiTotal" class="form-control" type="text"></input>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Nama Penerima</th>
                                                                <th>NPM</th>
                                                                <th>Nilai Rencana</th>
                                                                <th>Nilai Pembayaran</th>
                                                                <th>Kekurangan</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td colspan="3"><center>Total Uang Masuk dari Pendonor ke UI</center></td>
                                                                <td>10.000.000</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td colspan="3"><center>Total Distribusi</center></td>
                                                                <td>10.000.000</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Ardi mhs</td>
                                                                <td>1212</td>
                                                                <td>10.000.000</td>
                                                                <td><input id="inputNilai" class="form-control" type="text" value="5.000.000"></input></td>
                                                                <td>5.000.000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Ardi mhs abadi</td>
                                                                <td>1213</td>
                                                                <td>10.000.000</td>
                                                                <td><input id="inputNilai" class="form-control" type="text" value="5.000.000"></input></td>
                                                                <td>5.000.000</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                            <button class="btn btn-primary" type="submit">Simpan & Ajukan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="status-ui-mhs-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-12"><h5>Tabel Status Pembayaran UI ke Mahasiswa</h5>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>No. Tagihan</th>
                                                    <th>Batch</th>
                                                    <th>Tagihan</th>
                                                    <th>Realisasi</th>
                                                    <th>Kekurangan</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>AXAXAXA</td>
                                                    <td>1</td>
                                                    <td>10.000.000</td>
                                                    <td>10.000.000</td>
                                                    <td>0</td>
                                                    <td>Dibayar</td>
                                                    <td>
                                                        -
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>ZAZAZA</td>
                                                    <td>1</td>
                                                    <td>10.000.000</td>
                                                    <td>-</td>
                                                    <td>10.000.000</td>
                                                    <td>Rancangan</td>
                                                    <td>
                                                        <button class="btn btn-primary" type="submit">Ajukan</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>ddddddd</td>
                                                    <td>1</td>
                                                    <td>1.000.000</td>
                                                    <td>-</td>
                                                    <td>1.000.000</td>
                                                    <td>diajukan</td>
                                                    <td>
                                                        -
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                            
    </div>
    <div class="clearfix"></div>
    </div>