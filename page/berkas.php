
<?php

$sql1 = "SELECT * FROM tberkas left join tformulirpendaftaran on tformulirpendaftaran.nisn = tberkas.nisn ORDER BY id_berkas ASC";  
 $sql2 = mysql_query("SELECT * FROM tberkas WHERE nisn = '$_SESSION[nisn]'");


$query1 = mysql_query($sql1);
$data2 = mysql_fetch_array($sql2);
$total = mysql_num_rows($query);

?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Berkas</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                            <li><a href="#">Berkas</a></li>
                            <li class="active">Data Berkas</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                       <div class="col-lg-2 col-sm-3 col-xs-12">
                       
                        </div>

                            <h3>Pengecekan Berkas</h3>
                            <p class="text-muted m-b-30"> </p>
                            <div class="table-responsive">
                        
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php
                    $no=1; {
      while ($data = mysql_fetch_array($query1))  {?>  
                                        <tr>
                                            <td><?php echo $no.'.'; ?></td>
                                            <td><?php echo $data['nama_mahasiswa']; ?></td>
                                            <td>
                                              <a href="?page=tampil_cekberkas&id_berkas=<?php echo $data['id_berkas']; ?>&nisn=<?php echo $data['nisn']; ?>">
                                                <button class="btn btn-info">
                                              <i class="fa fa-edit "> Cek </i>  
                                                </button>
                                            </a>                  
                                            </td>
                                        </tr>
                         <?php $no++; } }?>
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