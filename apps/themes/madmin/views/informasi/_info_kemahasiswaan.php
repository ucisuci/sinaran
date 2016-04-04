<div class="row">
    <div class="col-lg-12">
        <ul id="generalTab" class="nav nav-tabs ul-edit responsive">
            <li class="active"><a href="#rincian-beasiswa-tab" data-toggle="tab">Rincian Beasiswa</a></li>
            <li><a href="#periode-tab" data-toggle="tab">Periode Pembayaran</a></li>
            <li><a href="#rencana-tab" data-toggle="tab">Rencana Pembayaran</a></li>
        </ul>
        
        
        <div id="generalTabContent" class="tab-content responsive">
            <div id="rincian-beasiswa-tab" class="tab-pane fade in active">
                <div class="row">
                    <div class="col-lg-12">
                        <h5>Data Beasiswa</h5>
                        <div class="panel-body pan">
                            <form action="#" class="form-horizontal form-bordered  dashed form-row-stripped">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="inputFirstName" class="col-md-2 control-label">Nama Beasiswa :</label>
                                        <div class="col-md-8">Pertamina</div>
                                        <div class="col-md-2">
                                            <?php
                                                if (Yii::app()->session['role'] == 'pengelola')
                                                {
                                                    echo "<button type=\"submit\" class=\"btn btn-primary\">Publish</button>";
                                                }
                                                if (Yii::app()->session['role'] == 'pengelola' | Yii::app()->session['role'] == 'pendonor' | Yii::app()->session['role'] == 'kemahasiswaan')
                                                {
                                                    echo "<button type=\"submit\" class=\"btn btn-primary\">Ubah</button>";
                                                }
                                                if (Yii::app()->session['role'] == 'pendaftar')
                                                {
                                                    echo "<button type=\"submit\" class=\"btn btn-primary\">Daftar</button>";
                                                }
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputDeskripsi" class="col-md-2 control-label">Deskripsi :</label>
                                        <div class="col-md-10">Beasiswa untuk lalalala</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPeriode" class="col-md-2 control-label">Periode Pendaftaran:</label>
                                        <div class="col-md-10">1 Agustus 2014 - 30 Agustus 2014</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputStatus" class="col-md-2 control-label">Status :</label>
                                        <div class="col-md-10">Pendaftaran masih dibuka</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputSK" class="col-md-2 control-label">SK :</label>
                                        <div class="col-md-10">
                                            <ol>
                                                <li>1111</li>
                                                <li>2222</li>
                                            </ol>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputSyarat" class="col-md-2 control-label">Syarat dan Ketentuan :</label>
                                        <div class="col-md-10">
                                            <ol>
                                                <li>Mahasiswa S1 UI</li>
                                                <li>IPK minimal 3.00 (Skala 4)</li>
                                                <li>Tidak merokok</li>
                                                <li>Usia <= 22 tahun</li>
                                                <li>Tidak terlibat Narkoba</li>
                                            </ol>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNilaiTotal" class="col-md-2 control-label">Nilai Total Beasiswa:</label>
                                        <div class="col-md-10">1000</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputDibuat" class="col-md-2 control-label">Dibuat:</label>
                                        <div class="col-md-10">1 Agustus 2014 oleh <a href="#">Staff Fakultas FT UI</a></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputDipublish" class="col-md-2 control-label">Di<i>publish</i>:</label>
                                        <div class="col-md-10">2 Agustus 2014 oleh <a href="#">Dir. Kemahasiswaan UI</a></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="panel-heading">Dokumen Pendukung</div>
                    <div class="panel-body pan">
                        <form action="#" class="form-horizontal form-bordered  dashed form-row-stripped">
                            <div class="form-body">
                                <div class="form-group">
                                    <ol>
                                        <li>lbasdlasbdsa</li>
                                        <li>lbasdlasbdsa</li>
                                    </ol>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="panel-heading">Data Pendonor</div>
                    <div class="panel-body pan">
                        <form action="#" class="form-horizontal form-bordered  dashed form-row-stripped">
                            <div class="form-body">
                                <div class="form-group">
                                    <label for="inputFirstName" class="col-md-2 control-label">Nama Pendonor :</label>
                                    <div class="col-md-10">PT Pertamina</div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAlamat" class="col-md-2 control-label">Alamat :</label>
                                    <div class="col-md-10">Jl. ABC</div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel-heading">User Pengelola Khusus</div>
                        <div class="panel-body pan">
                            <form action="#" class="form-horizontal form-bordered  dashed form-row-stripped">
                                <div class="form-body">
                                    <ol>
                                        <li>user_fakultas1 (karyawan)</li>
                                        <li>user_sdm (karyawan)</li>
                                    </ol>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel-heading">User Pendonor</div>
                        <div class="panel-body pan">
                            <form action="#" class="form-horizontal form-bordered  dashed form-row-stripped">
                                <div class="form-body">
                                    <ol>
                                        <li>pendonor@gmail.com (tamu)</li>
                                        <li>pendonor2@gmail.com (tamu)</li>
                                        <li>user_kemahasiswaan (karyawan)</li>
                                    </ol>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="periode-tab" class="tab-pane fade">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                            if (Yii::app()->session['role'] == 'kemahasiswaan') {
                                $this->renderPartial('_info_periode_kemahasiswaan');
                            }
                        ?>
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <h5>Tabel Periode Pembayaran Pendonor ke UI</h5>
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
                                        <td>Periode 1A</td>
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
                                        <td>Periode 1B</td>
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
                                        <td>Periode 2A</td>
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
                                        <td>Periode 2B</td>
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
                                        <td>Periode 3A</td>
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
                                        <td>Periode 3B</td>
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
                            $this->renderPartial('_info_rencana_kemahasiswaan');
                        } else {
                            $this->renderPartial('_info_rencana_keuangan');
                        }
                    ?>
                </div>
            </div>
        </div>                            
    </div>
    <div class="clearfix"></div>
</div>