
<?php

$sql = "SELECT * FROM login left join tformulirpendaftaran on tformulirpendaftaran.nisn = login.nisn where not level='admin' and not level='superadmin'  ORDER BY id_user DESC";  
$sql1 = "SELECT * FROM login left join tformulirpendaftaran on tformulirpendaftaran.nisn = login.nisn where  not level='superadmin' and not level='admin' ORDER BY id_user DESC";  


$query = mysql_query($sql);
$query1 = mysql_query($sql1);
$total = mysql_num_rows($query);

?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Manajemen Member</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                            <li><a href="#">Manajemen Member</a></li>
                            <li class="active">Data Member</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                      

                            <h3 class="box-title m-b-2">Data Member</h3>
                            <p class="text-muted m-b-30"> </p>
                            <div class="table-responsive">
                            
                              
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Status</th>
                                            <th>Aktifasi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php
                    $no=1; {
      while ($data1 = mysql_fetch_array($query1))  {?>  
                                        <tr>
                                            <td><?php echo $no.'.'; ?></td>
                                            <td><?php echo $data1['username']; ?></td>
                                            <td><?php echo $data1['level']; ?></td>
                                            <td>
                                            <?php if($data1['aktifasi']=='Y') { ?>
                                            <span class="label label-rouded label-info pull-center">Aktif</span>
                                            <?php } else { ?>
                                            <span class="label label-rouded label-danger pull-center">Tidak Aktif</span>
                                            <?php } ?>
                                            </td>
                                            <td>

                                             <?php if($data1['aktifasi']=='Y') { ?>                       
                                            
                                                <button class="btn btn-warning btn-circle" disabled="">
                                              <i class="fa fa-edit"></i> 
                                            </button>
                                            <?php } else { ?>
                                            <a href="aktivasi.php?tipe=Aktivasi&id_user=<?php echo $data1['id_user']; ?>&email=<?php echo $data1['email']; ?>" onclick="return confirm('Apakah anda yakin akan mengaktifkn data <?php echo $data1['username']; ?>?')"> 
                                                <button class="btn btn-warning btn-circle">
                                              <i class="fa fa-edit"></i> 
                                            </button>
                                            <?php } ?>

                                      
                                            <a href="proses.php?tipe=Hapus_member&id_user=<?php echo $data1['id_user']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data <?php echo $data1['username']; ?>?')"> 
                                                <button class="btn btn-danger btn-circle">
                                              <i class="fa fa-trash-o"></i> 
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