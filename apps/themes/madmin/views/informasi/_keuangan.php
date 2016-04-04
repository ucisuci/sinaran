<div class="row">
    <div class="col-lg-12">
        <ul id="generalTab" class="nav nav-tabs ul-edit responsive">
            <li class="active"><a href="#pendonor-ui-tab" data-toggle="tab">Pendonor ke UI</a></li>
            <li><a href="#ui-mhs-tab" data-toggle="tab">UI ke Mahasiswa</a></li>
            <li><a href="#pendonor-mhs-tab" data-toggle="tab">Pendonor ke Mahasiswa</a></li>
        </ul>
        
        
        <div id="generalTabContent" class="tab-content responsive">
            <div id="pendonor-ui-tab" class="tab-pane fade in active">
                <div class="row">
                    <div class="panel-body">
                        <form class="form-horizontal" action="#">
                            <div class="form-body pal">
                                <h5>Form Penerimaan UI</h5>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputKode">Kode</label>
                                    <div class="col-md-5">
                                        <input id="inputKode" class="form-control" type="text"></input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputBank">Bank</label>
                                    <div class="col-md-5">
                                        <input id="inputBank" class="form-control" type="text"></input> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputNoRek">No Rek</label>
                                    <div class="col-md-5">
                                        <input id="inputNoRek" class="form-control" type="text"></input> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputNilai">Nilai</label>
                                    <div class="col-md-5">
                                        <input id="inputNilai" class="form-control" type="text"></input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputTgl">Tanggal</label>
                                    <div class="col-md-5">
                                        <input id="inputTgl" class="form-control" type="text"></input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputBerkas">Berkas</label>
                                    <div class="col-md-5">
                                        <div class="col-md-9">
                                            <input id="inputBerkas" class="form-control" type="text"></input>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-primary" type="submit">Browse</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions pll prl">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                                <h5>Data Keuangan yang Diterima UI</h5>
                                <div class="col-lg-9">
                                    <div class="col-lg-1">
                                        <h5>Filter:</h5>
                                    </div>
                                    <div class="col-lg-1">
                                        <h5>Periode:</h5>
                                    </div>
                                    <div class="col-lg-3">
                                        <select id="jenisAksi" class="form-control">
                                            <option value="Setujui">Jan</option>
                                            <option value="Tolak">Feb</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="prl">
                                            <button class="btn btn-primary" type="submit">Cari</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Kode</th>
                                                <th>Bank</th>
                                                <th>No Rek</th>
                                                <th>Nilai</th>
                                                <th>Tgl</th>
                                                <th>Berkas</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>xxxxxxxx</td>
                                                <td>BNI</td>
                                                <td>1212121212</td>
                                                <td>Rp1.000.000</td>
                                                <td>1 Jan 2014</td>
                                                <td><a href="#">bukti transfer biaya pend.pdf</a></td>
                                                <td><button class="btn btn-primary" type="submit">X</button></td>
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
            <div id="ui-mhs-tab" class="tab-pane fade">
                <div class="row">
                    <div class="panel-body">
                        <form class="form-horizontal" action="#">
                            <div class="form-body pal">
                                <h5>Form Pengeluaran UI</h5>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputKode">Kode</label>
                                    <div class="col-md-5">
                                        <input id="inputKode" class="form-control" type="text"></input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputBank">Bank</label>
                                    <div class="col-md-5">
                                        <input id="inputBank" class="form-control" type="text"></input> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputNoRek">No Rek</label>
                                    <div class="col-md-5">
                                        <input id="inputNoRek" class="form-control" type="text"></input> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputNilai">Nilai</label>
                                    <div class="col-md-5">
                                        <input id="inputNilai" class="form-control" type="text"></input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputTgl">Tanggal</label>
                                    <div class="col-md-5">
                                        <input id="inputTgl" class="form-control" type="text"></input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputBerkas">Berkas</label>
                                    <div class="col-md-5">
                                        <div class="col-md-9">
                                            <input id="inputBerkas" class="form-control" type="text"></input>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-primary" type="submit">Browse</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions pll prl">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                                <h5>Data Keuangan yang Dikeluarkan UI</h5>
                                <div class="col-lg-9">
                                    <div class="col-lg-1">
                                        <h5>Filter:</h5>
                                    </div>
                                    <div class="col-lg-1">
                                        <h5>Periode:</h5>
                                    </div>
                                    <div class="col-lg-3">
                                        <select id="jenisAksi" class="form-control">
                                            <option value="Setujui">Jan</option>
                                            <option value="Tolak">Feb</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="prl">
                                            <button class="btn btn-primary" type="submit">Cari</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Kode</th>
                                                <th>Bank</th>
                                                <th>No Rek</th>
                                                <th>Nilai</th>
                                                <th>Tgl</th>
                                                <th>Berkas</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>xxxxxxxx</td>
                                                <td>BNI</td>
                                                <td>1212121212</td>
                                                <td>Rp1.000.000</td>
                                                <td>1 Jan 2014</td>
                                                <td><a href="#">bukti transfer biaya pend.pdf</a></td>
                                                <td><button class="btn btn-primary" type="submit">X</button></td>
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
            <div id="pendonor-mhs-tab" class="tab-pane fade">
                <div class="row">
                    <div class="panel-body">
                        <form class="form-horizontal" action="#">
                            <div class="form-body pal">
                                <h5>Form Penerimaan Mahasiswa</h5>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputKode">Kode</label>
                                    <div class="col-md-5">
                                        <input id="inputKode" class="form-control" type="text"></input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputBank">Bank</label>
                                    <div class="col-md-5">
                                        <input id="inputBank" class="form-control" type="text"></input> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputNoRek">No Rek</label>
                                    <div class="col-md-5">
                                        <input id="inputNoRek" class="form-control" type="text"></input> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputNilai">Nilai</label>
                                    <div class="col-md-5">
                                        <input id="inputNilai" class="form-control" type="text"></input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputTgl">Tanggal</label>
                                    <div class="col-md-5">
                                        <input id="inputTgl" class="form-control" type="text"></input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="inputBerkas">Berkas</label>
                                    <div class="col-md-5">
                                        <div class="col-md-9">
                                            <input id="inputBerkas" class="form-control" type="text"></input>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-primary" type="submit">Browse</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions pll prl">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                                <h5>Data Keuangan yang Diterima Mahasiswa</h5>
                                <div class="col-lg-9">
                                    <div class="col-lg-1">
                                        <h5>Filter:</h5>
                                    </div>
                                    <div class="col-lg-1">
                                        <h5>Periode:</h5>
                                    </div>
                                    <div class="col-lg-3">
                                        <select id="jenisAksi" class="form-control">
                                            <option value="Setujui">Jan</option>
                                            <option value="Tolak">Feb</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="prl">
                                            <button class="btn btn-primary" type="submit">Cari</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Kode</th>
                                                <th>Bank</th>
                                                <th>No Rek</th>
                                                <th>Nilai</th>
                                                <th>Tgl</th>
                                                <th>Berkas</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>xxxxxxxx</td>
                                                <td>BNI</td>
                                                <td>1212121212</td>
                                                <td>Rp1.000.000</td>
                                                <td>1 Jan 2014</td>
                                                <td><a href="#">bukti transfer biaya pend.pdf</a></td>
                                                <td><button class="btn btn-primary" type="submit">X</button></td>
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
    <div class="clearfix"></div>
    </div>