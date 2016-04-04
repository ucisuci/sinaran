<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-white">
            <div class="panel-heading">Informasi Beasiswa</div>
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
                                    if (Yii::app()->session['role'] == 'pengelola' | Yii::app()->session['role'] == 'pendonor')
                                    {
                                        echo "<button type=\"submit\" class=\"btn btn-primary\">Ubah</button>";
                                    }
                                    if (Yii::app()->session['role'] == 'pendaftar')
                                    {
                                        echo "<a href=".Yii::app()->createUrl('/pendaftaran/daftar', array('nama_paket'=>$this->nama_paket, 'id'=>$this->id))." class='btn btn-primary'>Daftar</a>";
                                    }
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputFirstName" class="col-md-2 control-label">Deskripsi :</label>
                            <div class="col-md-10">Beasiswa untuk lalalala</div>
                        </div>

                        <div class="form-group">
                            <label for="inputFirstName" class="col-md-2 control-label">Periode Pendaftaran:</label>
                            <div class="col-md-10">1 Agustus 2014 - 30 Agustus 2014</div>
                        </div>

                        <div class="form-group">
                            <label for="inputFirstName" class="col-md-2 control-label">Status :</label>
                            <div class="col-md-10">Pendaftaran masih dibuka</div>
                        </div>

                        <div class="form-group">
                            <label for="inputFirstName" class="col-md-2 control-label">Syarat dan Ketentuan :</label>
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
                            <label for="inputFirstName" class="col-md-2 control-label">Deskripsi :</label>
                            <div class="col-md-10">Beasiswa untuk lalalala</div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="panel-heading">Informasi Pendonor</div>
            <div class="panel-body pan">
                <form action="#" class="form-horizontal form-bordered  dashed form-row-stripped">
                    <div class="form-body">
                        <div class="form-group">
                            <label for="inputFirstName" class="col-md-2 control-label">Nama Pendonor :</label>
                            <div class="col-md-10">PT Pertamina</div>
                        </div>
                    </div>
                </form>
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
        </div>
    </div>
</div>