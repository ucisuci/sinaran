<?php 
$message = Yii::app()->user->getFlash('errorMessages');
if (isset($message)) { ?> 
    <div class="alert alert-danger">
       <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button> 
        <p><?php echo $message; ?></p>
    </div>
<?php 
} ?>
<?php
/*
echo $this->render('informasi_paket_beasiswa_role_pengelola',
    array(
        'detailPaket'=>$detailPaket,
        'syaratKetentuanBeasiswa'=>$syaratKetentuanBeasiswa,
        'fileSk'=>$fileSk,
        'fileDokumenPendukung'=>$fileDokumenPendukung,
        'action'=>$action
    ));
*/

//echo "<pre>";print_r(Yii::app()->session['detailPaketBeasiswa']);

$detailPaket = $dataRender['detailPaket'];
$syaratKetentuanBeasiswa = $dataRender['syaratKetentuanBeasiswa'];
$fileSk = $dataRender['fileSk'];
$fileDokumenPendukung = $dataRender['fileDokumenPendukung'];
$fileDokumenInternal = $dataRender['fileDokumenInternal'];
$action = $dataRender['action'];
$komponenPaket = $dataRender['komponenPaket'];



//echo "<pre>";print_r($detailPaket);die();
?>

<?php if($komponenPaket == ""){ ?>
<div class="alert alert-danger">
    <!-- <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button> -->
        <p>Anda Belum Membuat Rincian Komponen Beasiswa Untuk Paket ini</p>
    </div>
<?php } ?>
<div class="row">
    <div class="col-lg-12">
        <?php foreach ($detailPaket as $key => $value) { ?>
            <?php
            $todayDate = date_create(date('Y-m-d'));
            $dateAkhir = date_create(date('Y-m-d', strtotime($value['tgl_akhir_lamar'])));
            //echo $dateAwal;
            //echo $dateAkhir;
            //$diff=date_diff($todayDate,$dateAkhir);
            $isPendaftaranDitutup = false;
            $statusPendaftaran = "Terbuka";
            if ($todayDate > $dateAkhir) {
                $isPendaftaranDitutup = true;
                $statusPendaftaran = "Sudah Ditutup";
            }
            //echo $statusPendaftaran;
            //echo $diff->days;
            //echo $diff->format("%R%a days");
            ?>
            <h4 class="text-blue"><i class="fa fa-graduation-cap"></i>&nbsp;&nbsp;Data Beasiswa</h4>
            <hr class="mts mbm">
            <form action="javascript:void(0)" class="form-horizontal">
                <div class="form-body">
                    <div class="form-group">
                        <div class="col-md-8">
                            <?php
                            if($value['is_published']){
                                echo "<button type=\"button\" data-target=\"#modal-unpublish\" data-toggle=\"modal\" class=\"btn btn-red\">";
                                echo "<i class='fa fa-ban'></i>&nbsp;&nbsp;Unpublish";
                                echo "</button>";
                            }else{
                                echo "<button type=\"button\" data-target=\"#modal-publish\" data-toggle=\"modal\" class=\"btn btn-green\">";
                                echo "<i class='fa fa-rocket'></i>&nbsp;&nbsp;Publish";
                                echo "</button>";
                            }

                            echo "&nbsp;&nbsp;<a class=\"btn btn-yellow\" href=\"".$this->createUrl('paketbeasiswa/index', array('idPaket'=>$value['id'], 'action'=>'updatePaketBeasiswa'))."\">";
                            echo "<i class='fa fa-pencil-square-o'></i>&nbsp;&nbsp;Ubah";
                            echo "</a>";

                             echo "&nbsp;&nbsp;<a class=\"btn btn-grey\" href=\"".$this->createUrl('paketbeasiswa/index', array('idPaket'=>$value['id'], 'action'=>'previewDaftar'))."\">";
                            echo "<i class='fa fa-desktop'></i>&nbsp;&nbsp;Preview";
                            echo "</a>";

                            ?>
                        </div>
                        <div class="col-md-3">
                            <?php
                            if($value['announce_result']){
                                //echo "<button type=\"submit\" class=\"btn btn-primary\">Unpublish</button>";
                                echo "<p class=\"text-success\">
                                      <strong >Penerima beasiswa sudah dipublikasi</strong>
                                      </p>";
                                echo "<button type=\"button\" data-target=\"#modal-default-batal\" data-toggle=\"modal\" class=\"btn btn-red\">";
                                echo "<i class='fa fa-rocket'></i>&nbsp;&nbsp;Batalkan Publikasi Penerima Beasiswa";
                                echo "</button>";
                            }else{
                                echo "<button type=\"button\" data-target=\"#modal-default\" data-toggle=\"modal\" class=\"btn btn-green\">";
                                echo "<i class='fa fa-rocket'></i>&nbsp;&nbsp;Publikasi Penerima Beasiswa";
                                echo "</button>";
                            }
                            ?>
                        </div>
                    </div>
                    <hr class="mts mbm">
                    <div class="form-group">
                        <label class="col-sm-2">Nama Beasiswa :</label>
                        <div class="col-sm-8"><?php echo $value['nama_paket_beasiswa'] ?></div>
                    </div>
                    <div class="form-group">
                        <label for="inputFirstName" class="col-md-2">Deskripsi :</label>
                        <div class="col-md-10"><?php echo $value['deskripsi'] ?></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2">Besaran Total Beasiswa :</label>
                        <div class="col-sm-8"><?php echo $value['simbol']." ".number_format($value['besaran_total']) ?></div>
                    </div>
                    <div class="form-group">
                        <label for="inputFirstName" class="col-md-2">Periode Pendaftaran:</label>
                        <div class="col-md-10">
                            <?php
                            echo "<strong>";
                            echo date('d F Y', strtotime($value['tgl_awal_lamar']));
                            echo "</strong>";
                            echo " s.d. ";
                            echo "<strong>";
                            echo date('d F Y', strtotime($value['tgl_akhir_lamar']));
                            echo "</strong>";
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputFirstName" class="col-md-2">Status Pendaftaran :</label>
                        <div class="col-md-10">
                            <?php
                            echo $statusPendaftaran;
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputFirstName" class="col-md-2">SK :</label>
                        <div class="col-md-10">
                            <?php if(!empty($fileSk)) { ?>
                                <ol class="pll">
                                    <?php
                                    $baseUrl = Yii::app()->getBaseUrl(true);
                                    foreach ($fileSk as $Sk) {
                                        /*
                                        $fileEkstension = $Sk->ekstensi;
                                        if (($fileEkstension=='jpg') || ($fileEkstension=='gif') || ($fileEkstension=='png')) {
                                            $thePath = Yii::app()->params['imageRetrieveOriginalPath'];
                                        }else{
                                            $thePath = Yii::app()->params['pdfRetrievePath'];
                                        }
                                        $fileUrl = $baseUrl.$thePath.$Sk->nama_file;
                                        */



                                        $fileUrl = FileAttachments::getUrlDownload($Sk->path, $Sk->nama_file);
                                        ?>
                                        <li>
                                            <a href="<?php echo $fileUrl; ?>" target="_blank">
                                                <?php echo $Sk->nama_file; ?>
                                            </a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ol>
                            <?php } else { ?>
                                -
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputFirstName" class="col-md-2">Syarat dan Ketentuan :</label>
                        <div class="col-md-10">
                            <?php if(!empty($syaratKetentuanBeasiswa)) { ?>
                                <ol class="pll">
                                    <?php
                                    foreach ($syaratKetentuanBeasiswa as $syarat) {
                                        ?>
                                        <li><?php echo $syarat->deskripsi; ?></li>
                                    <?php
                                    }
                                    ?>
                                </ol>
                            <?php } else { ?>
                                -
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </form>
            <br>
            <h4 class="text-blue"><i class="fa fa-building-o"></i>&nbsp;&nbsp;Data Pendonor</h4>
            <hr class="mts mbm">
            <form action="#" class="form-horizontal">
                <div class="form-body">
                    <div class="form-group">
                        <label for="inputFirstName" class="col-md-2">Nama Pendonor :</label>
                        <div class="col-md-10"><?php echo $value['nama_pendonor'] ?></div>
                    </div>
                </div>
            </form>
        <?php } ?>

        <?php if(!empty($fileDokumenPendukung)) { ?>
            <br>
            <h4 class="text-blue"><i class="fa fa-files-o"></i>&nbsp;&nbsp;Dokumen Pendukung</h4>
            <hr class="mts mbm">
            <form action="#" class="form-horizontal">
                <div class="form-body">
                    <div class="form-group">
                        <div class="col-md-12">
                            <ol class="pll">
                                <?php
                                $baseUrl = Yii::app()->getBaseUrl(true);
                                foreach($fileDokumenPendukung as $dokumenPendukung) {
                                    /*
                                    $fileEkstension = $dokumenPendukung->ekstensi;
                                    if (($fileEkstension=='jpg') || ($fileEkstension=='gif') || ($fileEkstension=='png')) {
                                        $thePath = Yii::app()->params['imageRetrieveOriginalPath'];
                                    }else{
                                        $thePath = Yii::app()->params['pdfRetrievePath'];
                                    }
                                    $fileUrl = $baseUrl.$thePath.$dokumenPendukung->nama_file;
                                    */
                                    $fileUrl = FileAttachments::getUrlDownload($dokumenPendukung->path, $dokumenPendukung->nama_file);
                                    ?>
                                    <li>
                                        <p style="color:#333;"><i><?php echo $dokumenPendukung->deskripsi; ?></i></p>

                                        <a href="<?php echo $fileUrl; ?>" target="_blank">
                                            <?php echo $dokumenPendukung->nama_file; ?>
                                        </a>
                                        <hr class="mts mbm">
                                    </li>
                                <?php } ?>

                            </ol>
                        </div>
                    </div>
                </div>
            </form>
        <?php } ?>
        <?php if(!empty($fileDokumenInternal)) { ?>
            <br>
            <h4 class="text-blue"><i class="fa fa-files-o"></i>&nbsp;&nbsp;Dokumen Internal Paket Beasiswa</h4>
            <hr class="mts mbm">
            <form action="#" class="form-horizontal">
                <div class="form-body">
                    <div class="form-group">
                        <div class="col-md-12">
                            <ol class="pll">
                                <?php
                                $baseUrl = Yii::app()->getBaseUrl(true);
                                foreach($fileDokumenInternal as $dokumenInternal) {
                                    /*
                                    $fileEkstension = $dokumenPendukung->ekstensi;
                                    if (($fileEkstension=='jpg') || ($fileEkstension=='gif') || ($fileEkstension=='png')) {
                                        $thePath = Yii::app()->params['imageRetrieveOriginalPath'];
                                    }else{
                                        $thePath = Yii::app()->params['pdfRetrievePath'];
                                    }
                                    $fileUrl = $baseUrl.$thePath.$dokumenPendukung->nama_file;
                                    */
                                    $fileUrl = FileAttachments::getUrlDownload($dokumenInternal->path, $dokumenInternal->nama_file);
                                    ?>
                                    <li>
                                        <p style="color:#333;"><i><?php echo $dokumenInternal->deskripsi; ?></i></p>

                                        <a href="<?php echo $fileUrl; ?>" target="_blank">
                                            <?php echo $dokumenInternal->nama_file; ?>
                                        </a>
                                        <hr class="mts mbm">
                                    </li>
                                <?php } ?>

                            </ol>
                        </div>
                    </div>
                </div>
            </form>
        <?php } ?>
    </div>
</div>
</div>
<div style="display: none;" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default-label" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                    <h4 id="modal-default-label" class="modal-title">Publikasi hasil seleksi beasiswa</h4>
                </div>
                <div class="modal-body"><strong>Beritahu hasil seleksi beasiswa ke pelamar. <br />
                            fitur ini akan mengaktifkan notifikasi diterima atau tidaknya pelamar beasiswa.
                </strong></div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                    <a href="<?php echo $this->createUrl('paketbeasiswaroledirkemahasiswaan/publikasiHasil', array('idPaket'=>$value['id'])); ?>" >
                    <button type="button" class="btn btn-primary">Proses</button>
                    </a>
                </div>
        </div>
    </div>
</div>
<div style="display: none;" id="modal-default-batal" tabindex="-1" role="dialog" aria-labelledby="modal-default-label" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                    <h4 id="modal-default-label" class="modal-title">Batalkan Publikasi hasil seleksi beasiswa</h4>
                </div>
                <div class="modal-body"><strong>Notifikasi ke pelamar akan dihilangkan!!. <br />
                            fitur ini akan menghilangkan notifikasi diterima atau tidaknya pelamar beasiswa.
                </strong></div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                    <a href="<?php echo $this->createUrl('paketbeasiswaroledirkemahasiswaan/batalkanPublikasiHasil', array('idPaket'=>$value['id'])); ?>" >
                    <button type="button" class="btn btn-primary">Proses</button>
                    </a>
                </div>
        </div>
    </div>
</div>
<div style="display: none;" id="modal-publish" tabindex="-1" role="dialog" aria-labelledby="modal-default-label" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                    <h4 id="modal-default-label" class="modal-title">Publish Paket Beasiswa</h4>
                </div>
                <div class="modal-body">Anda akan mempublish <strong><?php echo $value['nama_paket_beasiswa']; ?></strong> <br />
                            pastikan <strong>Nama, Periode Pendaftaran, Syarat dan Ketentuan </strong> telah sesuai.
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                    <a href="<?php echo $this->createUrl('paketbeasiswaroledirkemahasiswaan/publishPaketBeasiswa', array('idPaket'=>$value['id'])); ?>" >
                    <button type="button" class="btn btn-primary">Publish</button>
                    </a>
                </div>
        </div>
    </div>
</div>
<div style="display: none;" id="modal-unpublish" tabindex="-1" role="dialog" aria-labelledby="modal-default-label" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                    <h4 id="modal-default-label" class="modal-title">Unpublish Paket Beasiswa</h4>
                </div>
                <div class="modal-body">Anda akan unpublish <strong><?php echo $value['nama_paket_beasiswa']; ?></strong> <br />
                            jika beasiswa ini diunpublish maka pelamar tidak akan dapat melihat informasi tentang beasiswa ini.
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                    <a href="<?php echo $this->createUrl('paketbeasiswaroledirkemahasiswaan/unpublishPaketBeasiswa', array('idPaket'=>$value['id'])); ?>" >
                    <button type="button" class="btn btn-primary">Unpublish</button>
                    </a>
                </div>
        </div>
    </div>
</div>
