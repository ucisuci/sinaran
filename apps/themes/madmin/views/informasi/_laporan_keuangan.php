<div class="panel-body">
    <h5>Data Keuangan yang Diterima UI</h5>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>No.</th>
                <th>Periode</th>
                <th>Deskripsi</th>
                <th>Tgl</th>
                <th>Berkas</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Bulan Januari</td>
                <td>Telah diterima sebesar...</td>
                <td>1 Jan 2014</td>
                <td><a href="#">bukti transfer jan.pdf</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Bulan Februari</td>
                <td>Telah diterima sebesar...</td>
                <td>1 Feb 2014</td>
                <td><a href="#">bukti transfer feb.pdf</a></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<form class="form-horizontal" action="#">
    <div class="form-body pal">
        <div class="form-group col-lg-12">
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
            <div class="col-lg-3">
                <div class="col-lg-2">
                    <h5>Aksi:</h5>
                </div>
                <div class="col-lg-7">
                    <select id="jenisAksi" class="form-control">
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
                        <th>Nama</th>
                        <th>Periode</th>
                        <th>Jenis</th>
                        <th>Nilai</th>
                        <th>Tgl</th>
                        <th>Berkas</th>
                        <th><input type="checkbox" name="checkall"></input></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ardi mhs</td>
                        <td>Jan</td>
                        <td>Pendidikan</td>
                        <td>Rp1.000.000</td>
                        <td>1 Jan 2014</td>
                        <td><a href="#">bukti transfer biaya pend.pdf</a></td>
                        <td><input type="checkbox" name="checkall"></input></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Penunjang Pend.</td>
                        <td>Rp100.000</td>
                        <td>1 Jan 2014</td>
                        <td><a href="#">bukti transfer biaya penunjang.pdf</a></td>
                        <td><input type="checkbox" name="checkall"></input></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>