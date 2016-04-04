<?php
$dataprodi = $dataRender['dataprodi'];
?>
<div class="row">

     <div class="col-lg-12">

        <h4 class="text-blue"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;Program Studia Dalam SIAKNG</h4>
        <hr class="mts mbm">
        <div class="form-group">
                        <label for="inputFirstName" class="col-md-2"></label>
                        <div class="col-md-10">
                            <?php if(!empty($dataprodi)) { ?>

                                <?php
                                echo "<table class='table table-advanced table-striped table-bordered table-hover tb-sticky-header'>";
                                echo "<thead class='blue'><tr><th>No</th><th>Kode Fakultas</th><th>Fakultas</th><th>Kode Prodi</th><th>Prodi</th><th>Program Pendidikan</th></tr>";
                                echo "</thead><tbody>";
                                $x=1;
                                foreach($dataprodi as $daftar) {
                                    ?>
                                    <tr>
                                        <td class="blue"><?php echo $x; $x++; ?></td>
                                        <td class="blue"><?php echo ucwords(strtolower($daftar->KODE_FAKULTAS)); ?></td>
                                        <td class="blue"><?php echo ucwords(strtolower($daftar->FAKULTAS)); ?></td>
                                        <td class="blue"><?php echo ucwords(strtolower($daftar->KODE_PRODI)); ?></td>
                                        <td class="blue"><?php echo ucwords(strtolower($daftar->PRODI)); ?></td>
                                        <td class="blue"><?php echo ucwords(strtolower($daftar->PROGRAM_PENDIDIKAN)); ?></td>
                                    </tr>
                                <?php }
                                echo "</tbody></table>";
                                ?>
                            <?php } else { ?>
                            -
                            <?php } ?>
                        </div>
                    </div>
    </div>
</div>