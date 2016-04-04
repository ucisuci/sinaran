<div class="row">
    <div class="col-lg-12">
        <ul id="generalTab" class="nav nav-tabs ul-edit responsive">
            <li class="active"><a href="#paket-beasiswa-tab" data-toggle="tab">Data Pendaftar</a></li>
            <li><a href="#periode-tab" data-toggle="tab">Periode Pembayaran</a></li>
            <li><a href="#rencana-tab" data-toggle="tab">Rencana Pembayaran</a></li>
        </ul>
        
        
        <div id="generalTabContent" class="tab-content responsive">
            <div id="paket-beasiswa-tab" class="tab-pane fade in active">
                <div class="row">
                    <div class="panel-body pan">
                        <form class="form-horizontal" action="#">
                            <div class="form-body pal">
                                <div class="form-group col-lg-12">
                                    <div class="col-lg-3">
                                        <h5>Data Pendaftar Diterima</h5>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                                <span class="input-group-btn"><button class="btn btn-primary" type="button">Go!</button></span>
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
                                                <?php
                                                    if (Yii::app()->session['role'] == 'kemahasiswaan') {
                                                        echo "<th>Klaim Masuk UI</th>
                                                              <th>Aksi</th>";
                                                    }
                                                ?>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>tamu 1</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>abc</td>
                                                <td><p>Pendaftaran: 21 Agu 2014</p>
                                                    <p>Diusulkan: 22 Agu 2014</p>
                                                    <p>Disetujui: 23 Agu 2014</p>
                                                </td>
                                                <td>disetujui</td>
                                                <?php
                                                    if (Yii::app()->session['role'] == 'kemahasiswaan') {
                                                        echo "<td>Ya</td>
                                                            <th>
                                                                <button class=\"btn btn-primary\" type=\"button\">Lihat</button>
                                                                <button class=\"btn btn-primary\" type=\"button\">Setujui</button>
                                                            </th>";
                                                    }
                                                ?>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Ardi bukan mhs</td>
                                                <td>1213</td>
                                                <td>1313</td>
                                                <td>xxxxx</td>
                                                <td><p>Pendaftaran: 21 Agu 2014</p>
                                                    <p>Diusulkan: 22 Agu 2014</p>
                                                    <p>Disetujui: 23 Agu 2014</p>
                                                </td>
                                                <td>disetujui</td>
                                                <?php
                                                    if (Yii::app()->session['role'] == 'kemahasiswaan') {
                                                        echo "<td>-</td>
                                                             <th>-</th>";
                                                    }
                                                ?>
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
                    <div class="col-lg-12">
                        <?php
                            if (Yii::app()->session['role'] == 'kemahasiswaan') {
                                $this->renderPartial('_daftar_periode_kemahasiswaan');
                            }
                        ?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <h5>Tabel Periode Pembayaran UI ke Mahasiswa</h5>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Term</th>
                                        <th>Jenis</th>
                                        <th>Tgl Awal</th>
                                        <th>Tgl Akhir</th>
                                        <th>Deskripsi</th>
                                        <?php
                                            if (Yii::app()->session['role'] == 'kemahasiswaan') {
                                                echo "<th>Aksi</th>";
                                            }
                                        ?>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Periode 1M</td>
                                        <td>Pendidikan</td>
                                        <td>1 Agu 2014</td>
                                        <td>1 Sep 2014</td>
                                        <td>XXXX</td>
                                        <?php
                                            if (Yii::app()->session['role'] == 'kemahasiswaan') {
                                                echo "<td><button class=\"btn btn-primary\" type=\"submit\">X</button></td>";
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Periode 1N</td>
                                        <td>Penunjang</td>
                                        <td>1 Agu 2014</td>
                                        <td>1 Sep 2014</td>
                                        <td>XXXX</td>
                                        <?php
                                            if (Yii::app()->session['role'] == 'kemahasiswaan') {
                                                echo "<td><button class=\"btn btn-primary\" type=\"submit\">X</button></td>";
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Periode 2M</td>
                                        <td>Pendidikan</td>
                                        <td>2 Sep 2014</td>
                                        <td>1 Okt 2014</td>
                                        <td>XXXX</td>
                                        <?php
                                            if (Yii::app()->session['role'] == 'kemahasiswaan') {
                                                echo "<td><button class=\"btn btn-primary\" type=\"submit\">X</button></td>";
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Periode 2N</td>
                                        <td>Penunjang</td>
                                        <td>2 Sep 2014</td>
                                        <td>1 Okt 2014</td>
                                        <td>XXXX</td>
                                        <?php
                                            if (Yii::app()->session['role'] == 'kemahasiswaan') {
                                                echo "<td><button class=\"btn btn-primary\" type=\"submit\">X</button></td>";
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Periode 3M</td>
                                        <td>Pendidikan</td>
                                        <td>2 Okt 2014</td>
                                        <td>1 Nov 2014</td>
                                        <td>XXXX</td>
                                        <?php
                                            if (Yii::app()->session['role'] == 'kemahasiswaan') {
                                                echo "<td><button class=\"btn btn-primary\" type=\"submit\">X</button></td>";
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Periode 3N</td>
                                        <td>Penunjang</td>
                                        <td>2 Okt 2014</td>
                                        <td>1 Nov 2014</td>
                                        <td>XXXX</td>
                                        <?php
                                            if (Yii::app()->session['role'] == 'kemahasiswaan') {
                                                echo "<td><button class=\"btn btn-primary\" type=\"submit\">X</button></td>";
                                            }
                                        ?>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="rencana-tab" class="tab-pane fade">
                <div class="row">
                    <?php
                        if (Yii::app()->session['role'] == 'kemahasiswaan') {
                            $this->renderPartial('_daftar_rencana_kemahasiswaan');
                        } else {
                            $this->renderPartial('_daftar_rencana_keuangan');
                        }
                    ?>
                </div>
            </div>
        </div>  
    </div>
    <div class="clearfix"></div>
</div>