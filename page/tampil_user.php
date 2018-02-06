
<?php

$sql1 = "SELECT * FROM login where  not level='admin' and not level='superadmin' ORDER BY id_user DESC";  
$sql2 = "SELECT * FROM login where not level='superadmin' ORDER BY id_user DESC";  


$query1 = mysql_query($sql1);
$query2 = mysql_query($sql2);
$total = mysql_num_rows($query);

?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Manajemen User</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                            <li><a href="#">Manajemen User</a></li>
                            <li class="active">Data User</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                       <div class="col-lg-2 col-sm-3 col-xs-12">
                        <?php if ($_SESSION['level']=="admin") { ?>
                       
                        </div>

                            <h3 class="box-title m-b-2">Data Pengguna</h3>
                            <p class="text-muted m-b-30"> </p>
                            <div class="table-responsive">
                            

                               
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Level</th>
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
                                            <td><?php echo $data1['password']; ?></td>
                                            <td><?php echo $data1['level']; ?></td>
                                            <td>
                                              <a href="?page=input_user&edit=true&id_user=<?php echo $data1['id_user']; ?>">
                                                <button class="btn btn-warning btn-circle">
                                              <i class="fa fa-edit "></i>  
                                                </button>
                                                         </a>
                                                                    
                                            <a href="proses.php?tipe=Hapus_User&id_user=<?php echo $data1['id_user']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data <?php echo $data1['username']; ?>?')"> 
                                                <button class="btn btn-danger btn-circle">
                                              <i class="fa fa-trash-o"></i> 
                                            </button>
                                </a>
                                            </td>
                                        </tr>
                         <?php $no++; } }?>
                                    </tbody>
                                </table>
                                <?php } ?>

                                 <?php if ($_SESSION['level']=="superadmin") { ?>
                                <a href="?page=input_user"> <button class="btn btn-block btn-primary btn-rounded"><i class="fa fa-plus"> Tambah</i></button></a>
                        </div>

                            <h3 class="box-title m-b-2">Data Pengguna</h3>
                            <p class="text-muted m-b-30"> </p>
                            <div class="table-responsive">
                            

                               
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php
                    $no=1; {
      while ($data2 = mysql_fetch_array($query2))  {?>  
                                        <tr>
                                            <td><?php echo $no.'.'; ?></td>
                                            <td><?php echo $data2['username']; ?></td>
                                            <td><?php echo $data2['password']; ?></td>
                                            <td><?php echo $data2['level']; ?></td>
                                            <td>
                                              <a href="?page=input_user&edit=true&id_user=<?php echo $data2['id_user']; ?>">
                                                <button class="btn btn-warning btn-circle">
                                              <i class="fa fa-edit "></i>  
                                                </button>
                                                         </a>
                                                                    
                                            <a href="proses.php?tipe=Hapus_User&id_user=<?php echo $data2['id_user']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data <?php echo $data2['username']; ?>?')"> 
                                                <button class="btn btn-danger btn-circle">
                                              <i class="fa fa-trash-o"></i> 
                                            </button>
                                </a>
                                            </td>
                                        </tr>
                         <?php $no++; } }?>
                                    </tbody>
                                </table>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>

      <!-- /.row -->