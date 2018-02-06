<?php
    $value = "Upload";  //modus input data baru
    $value2= "Tambah_Formulir_pendaftaran";
    
    $sql = mysql_query("select * from tberkas where nisn = '$_SESSION[nisn]'");
    $data = mysql_fetch_array($sql);
    
    $sql2 = mysql_query("select * from tberkas where nisn = '$_SESSION[nisn]'");
    $data2 = mysql_fetch_array($sql2);
?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Berkas</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                            <li><a href="#">Berkas</a></li>
                            <li class="active">Berkasr</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
               <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="m-b-0 box-title">Berkas-berkas</h3>
                            <div class="button-box">
                                    <?php getBerkas(); ?>
                                    
                                   
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box">

                         <div class="row">
                                <div class="col-md-12">
                                 
                                    <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Konfirmasi</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                         
                                        
                                         <tr>
                                            <td>1</td>
                                            <td>Pas Foto</td>
                                            <td>
                                            <?php if($data2['ket_pas_foto']=='Y') { ?>
                                            <span class="label label-rouded label-info pull-center">Sesuai</span>
                                            <?php } else { ?>
                                            <span class="label label-rouded label-danger pull-center">Tidak Sesuai</span>
                                            <?php } ?>
                                            </td> 
                                        </tr>
                                         <tr>
                                            <td>2</td>
                                            <td>Ijazah</td>
                                            <td>
                                            <?php if($data2['ket_ijazah']=='Y') { ?>
                                            <span class="label label-rouded label-info pull-center">Sesuai</span>
                                            <?php } else { ?>
                                            <span class="label label-rouded label-danger pull-center">Tidak Sesuai</span>
                                            <?php } ?>
                                            </td> 
                                        </tr>
                                         <tr>
                                            <td>3</td>
                                            <td>Rapor</td>
                                            <td>
                                            <?php if($data2['ket_rapor']=='Y') { ?>
                                            <span class="label label-rouded label-info pull-center">Sesuai</span>
                                            <?php } else { ?>
                                            <span class="label label-rouded label-danger pull-center">Tidak Sesuai</span>
                                            <?php } ?>
                                            </td> 
                                        </tr>
                                         <tr>
                                            <td>4</td>
                                            <td>Akta Kelahiran</td>
                                            <td>
                                            <?php if($data2['ket_akta']=='Y') { ?>
                                            <span class="label label-rouded label-info pull-center">Sesuai</span>
                                            <?php } else { ?>
                                            <span class="label label-rouded label-danger pull-center">Tidak Sesuai</span>
                                            <?php } ?>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Kartu Keluarga</td>
                                            <td>
                                            <?php if($data2['ket_kk']=='Y') { ?>
                                            <span class="label label-rouded label-info pull-center">Sesuai</span>
                                            <?php } else { ?>
                                            <span class="label label-rouded label-danger pull-center">Tidak Sesuai</span>
                                            <?php } ?>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>KTP Orang Tua</td>
                                            <td>
                                            <?php if($data2['ket_ktp_orangtua']=='Y') { ?>
                                            <span class="label label-rouded label-info pull-center">Sesuai</span>
                                            <?php } else { ?>
                                            <span class="label label-rouded label-danger pull-center">Tidak Sesuai</span>
                                            <?php } ?>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Slip Listrik</td>
                                            <td>
                                            <?php if($data2['ket_listrik']=='Y') { ?>
                                            <span class="label label-rouded label-info pull-center">Sesuai</span>
                                            <?php } else { ?>
                                            <span class="label label-rouded label-danger pull-center">Tidak Sesuai</span>
                                            <?php } ?>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Slip Gaji</td>
                                            <td>
                                            <?php if($data2['ket_gaji']=='Y') { ?>
                                            <span class="label label-rouded label-info pull-center">Sesuai</span>
                                            <?php } else { ?>
                                            <span class="label label-rouded label-danger pull-center">Tidak Sesuai</span>
                                            <?php } ?>
                                            </td> 
                                        </tr>
                                    </tbody>
                                </table>
                            
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
               
                    </div>
                    </div>

      <!-- /.row -->