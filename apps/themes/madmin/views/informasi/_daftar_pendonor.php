<div class="panel">
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