<h5>Form Periode Pembayaran Pendonor ke UI</h5>
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
                <label class="col-md-3 control-label" for="inputJenisPeriode">Jenis Periode</label>
                <div class="col-md-5">
                    <select id="selectJenisPeriode" class="form-control">
                        <option value="">Pendonor ke UI</option>
                        <option value="">Pendonor ke ??</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="inputJenisBeasiswa">Jenis Beasiswa</label>
                <div class="col-md-5">
                    <input type="radio" name="jenisBeasiswa" value="male">&nbsp;Pendidikan&nbsp;&nbsp;
                    <input type="radio" name="jenisBeasiswa" value="female">&nbsp;Penunjang Pendidikan
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="inputJudul">Deskripsi</label>
                <div class="col-md-5">
                    <textarea id="inputJudul" class="form-control" type="text"></textarea>
                </div>
            </div>
            <div class="form-actions pll prl">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>