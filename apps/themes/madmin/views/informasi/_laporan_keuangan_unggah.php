<form class="form-horizontal" action="#">
    <div class="form-body pal">
        <h5>Penerimaan Beasiswa dari Pendonor</h5>
        <div class="form-group">
            <label class="col-md-3 control-label" for="inputNilaiBeasiswa">Nilai Beasiswa</label>
            <div class="col-md-5">
                <input id="inputNilaiBeasiswa" class="form-control" type="text"></input>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="inputDeskripsi">Deskripsi</label>
            <div class="col-md-5">
                <textarea id="inputDeskripsi" class="form-control" type="text"></textarea> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="inputJenisBeasiswa">Jenis Beasiswa</label>
            <div class="col-md-5">
                <select id="selectJenisBeasiswa" class="form-control">
                    <option value="">Pendidikan</option>
                    <option value="">Penunjang Pendidikan</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="inputPeriode">Periode</label>
            <div class="col-md-5">
                <select id="selectPeriode" class="form-control">
                    <option value="">Januari</option>
                    <option value="">Februari</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="inputTglTrsf">Tanggal Transfer</label>
            <div class="col-md-5">
                <input id="inputTglTrsf" class="form-control" type="text"></input>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="inputBuktiTrsf">Bukti Transfer</label>
            <div class="col-md-7">
                <div class="col-md-8">
                    <input id="inputBuktiTrsf" class="form-control" type="text"></input>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary" type="submit">Browse</button>
                </div>
            </div>
        </div>
        <div class="form-actions pll prl">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
        <div class="panel-body">
            <h5>Data Penerimaan Beasiswa</h5>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Dokumen</th>
                        <th>Jenis</th>
                        <th>Deskripsi</th>
                        <th>Tgl Upload</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Beasiswa Januari</td>
                        <td>Pendidikan</td>
                        <td>Telah dibayarkan sebesar....</td>
                        <td>1 Jan 2014</td>
                        <td><button class="btn btn-primary" type="submit">Hapus</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Beasiswa Januari</td>
                        <td>Penunjang Pendidikan</td>
                        <td>Telah dibayarkan sebesar....</td>
                        <td>1 Jan 2014</td>
                        <td><button class="btn btn-primary" type="submit">Hapus</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>