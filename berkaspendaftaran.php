<?php
$sql = mysql_query("select * from tberkas where nisn = '$_SESSION[nisn]'");
    $data = mysql_fetch_array($sql);
    
    $sql2 = mysql_query("select * from tberkas where nisn = '$_SESSION[nisn]'");
    $data2 = mysql_fetch_array($sql2);



 ?>


<div class="button-box">
                                 
                                    <a href="?page=tampil_berkas_pas_foto"><button class="btn btn-block btn-danger">Pas Foto</button></a>
                               
                                     <?php if($data['pas_foto']!="") { ?>
                                    <a href="?page=tampil_berkas_ijazah"><button class="btn btn-block btn-warning">Ijazah</button></a>
                                    <?php } else { ?>
                                    <a href="?page=tampil_berkas_ijazah"><button class="btn btn-block btn-warning" disabled="">Ijazah</button></a> <?php } ?>
                                     <?php if($data['ijazah']!="") { ?>
                                    <a href="?page=tampil_berkas_rapor"><button class="btn btn-block btn-default">Rapor</button></a>
                                    <?php } else { ?>
                                    <a href="?page=tampil_berkas_rapor"><button class="btn btn-block btn-default" disabled="">Rapor</button></a>
                                     <?php } ?>
                                     <?php if($data['rapor']!="") { ?>
                                    <a href="?page=tampil_berkas_akta"><button class="btn btn-block btn-success">Akta Kelahiran</button></a>
                                    <?php } else { ?>
                                   <a href="?page=tampil_berkas_akta"><button class="btn btn-block btn-success" disabled="">Akta Kelahiran</button></a> <?php } ?>

                                    <?php if($data['akta']!="") { ?>
                                    <a href="?page=tampil_berkas_kk"><button class="btn btn-block btn-warning">Kartu Keluarga</button></a>
                                    <?php } else { ?>
                                   <a href="?page=tampil_berkas_kk"><button class="btn btn-block btn-warning" disabled="">Kartu Keluarga</button></a> <?php } ?>

                                   <?php if($data['kk']!="") { ?>
                                    <a href="?page=tampil_berkas_ktp_orangtua"><button class="btn btn-block btn-danger">KTP Orang Tua</button></a>
                                    <?php } else { ?>
                                   <a href="?page=tampil_berkas_ktp_orangtua"><button class="btn btn-block btn-danger" disabled="">KTP Orang Tua</button></a> <?php } ?>

                                   <?php if($data['ktp_orangtua']!="") { ?>
                                    <a href="?page=tampil_berkas_slip_listrik"><button class="btn btn-block btn-primary">Slip Listrik / Biaya Penggunaan Listrik</button></a>
                                    <?php } else { ?>
                                   <a href="?page=tampil_berkas_slip_listrik"><button class="btn btn-block btn-primary" disabled="">Slip Listrik / Biaya Penggunaan Listrik</button></a> <?php } ?>

                                   <?php if($data['listrik']!="") { ?>
                                    <a href="?page=tampil_berkas_gaji"><button class="btn btn-block btn-default">Slip Gaji / Surat Keterangan Penghasilan Orang Tua</button></a>
                                    <?php } else { ?>
                                   <a href="?page=tampil_berkas_gaji"><button class="btn btn-block btn-default" disabled="">Slip Gaji / Surat Keterangan Penghasilan Orang Tua</button></a> <?php } ?>

                                   <?php if($data['gaji']!="") { ?>
                                    <a href="?page=tampil_berkas_skm"><button class="btn btn-block btn-success">Surat Keterangan Miskin (Jika Tidak Mampu)</button></a>
                                    <?php } else { ?>
                                   <a href="?page=tampil_berkas_skm"><button class="btn btn-block btn-success" disabled="">Surat Keterangan Miskin (Jika Tidak Mampu)</button></a> <?php } ?>

                                   <?php if($data['gaji']!="") { ?>
                                    <a href="?page=tampil_berkas_kip"><button class="btn btn-block btn-default">Kartu Indonesia Pintar (KIP) (Jika ada)</button></a>
                                    <?php } else { ?>
                                   <a href="?page=tampil_berkas_kip"><button class="btn btn-block btn-default" disabled="">Kartu Indonesia Pintar (KIP) (Jika ada)</button></a> <?php } ?>

                                   <?php if($data['gaji']!="") { ?>
                                    <a href="?page=tampil_berkas_sertifikat"><button class="btn btn-block btn-danger">Sertifikat Prestasi (Jika ada)</button></a>
                                    <?php } else { ?>
                                   <a href="?page=tampil_berkas_sertifikat"><button class="btn btn-block btn-danger" disabled="">Sertifikat Prestasi (Jika ada)</button></a> <?php } ?>

                                   <?php if($data['gaji']!="") { ?>
                                    <a href="?page=pengecekan_berkas"><button class="btn btn-block btn-primary">Konfirmasi Berkas</button></a>
                                    <?php } else { ?>
                                   <a href="?page=pengecekan_berkas"><button class="btn btn-block btn-primary" disabled="">Konfirmasi Berkas</button></a> <?php } ?>
                                    
                                   
                            </div>