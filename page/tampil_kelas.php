
<?php

  $sql = "SELECT * FROM tkelas  ORDER BY id_kelas DESC";  

$query = mysql_query($sql);
$total = mysql_num_rows($query);

?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Kelas</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                            <li><a href="#">Kelas</a></li>
                            <li class="active">Data Kelas</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                       <div class="col-lg-2 col-sm-3 col-xs-12">
                          <a href="?page=tambah_user"> <button class="btn btn-block btn-primary btn-rounded"><i class="fa fa-plus"> Tambah</i></button></a>
                        </div>

                            <h3 class="box-title m-b-2">Data Kelas</h3>
                            <p class="text-muted m-b-30"> </p>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kelas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php
                    $no=1; {
      while ($data = mysql_fetch_array($query))  {?>  
                                        <tr>
                                            <td><?php echo $no.'.'; ?></td>
                                            <td><?php echo $data['nama_kelas']; ?></td>
                                            <td>
                                              <a href="?page=edit_penduduk&edit=true&id_penduduk=<?php echo $data['id_penduduk']; ?>">
                                                <button class="btn btn-warning btn-circle">
                                              <i class="fa fa-edit "></i>  
                                                </button>
                                                         </a>
                                                                    
                                            <a href="proses.php?tipe=Hapus_User&id_user=<?php echo $data['id_user']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data <?php echo $data['username']; ?>?')"> 
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