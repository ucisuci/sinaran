<form class="form-horizontal" action="#">
    <div class="form-body pal">
        <div class="form-group">
            <label class="col-md-3 control-label" for="inputJudul">Judul</label>
            <div class="col-md-5">
                <input id="inputJudul" class="form-control" type="text"></input>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="inputDeskripsi">Deskripsi</label>
            <div class="col-md-5">
                <textarea id="inputDeskripsi" class="form-control" type="text"></textarea> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="inputJenisPrestasi">Jenis Prestasi</label>
            <div class="col-md-5">
                <select id="selectJenisPrestasi" class="form-control">
                    <option value="">Akademik</option>
                    <option value="">Non Akademik</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="inputBerkas">Dokumen Pendukung</label>
            <div class="col-md-7">
                <div class="col-md-8">
                    <input id="inputBerkas" class="form-control" type="text"></input>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary" type="submit">Browse</button>&nbsp;
                    <button class="btn btn-primary" type="submit">+</button>
                </div>
            </div>
        </div>
        <div class="form-actions pll prl">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
        <div class="panel-body">
            <h5>Data Prestasi Akademik/Non Akademik</h5>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Jenis</th>
                        <th>Deskripsi</th>
                        <th>Tgl</th>
                        <th>Berkas</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>IPK Semester 1</td>
                        <td>Akademik</td>
                        <td>IPK Terakhir Sem 1 Th 2014</td>
                        <td>1 Jan 2014</td>
                        <td><ol><li><a href="#">IPK.jpg</a> (1 Jan 2014)</li>
                            <li><a href="#">xxx.pdf</a> (1 Jan 2014)</li></ol>
                        </td>
                        <td><button class="btn btn-primary" type="submit">Edit</button>&nbsp;<button class="btn btn-primary" type="submit">Hapus</button>&nbsp;</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>