
<?php

$sql1 = "SELECT * FROM tjurusan ORDER BY id_jurusan DESC";  



$query1 = mysql_query($sql1);
$query2 = mysql_query($sql2);
$total = mysql_num_rows($query);

?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Program Studi</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                            <li><a href="#">Program Studi</a></li>
                            <li class="active">Data Program Studi</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                        <div class="col-lg-2 col-sm-3 col-xs-12">
                          <a href="?page=input_jurusan"> <button class="btn btn-block btn-primary btn-rounded"><i class="fa fa-plus"> Tambah</i></button></a>
                        </div>
                 

                            <h3 class="box-title m-b-2">Data Program Studi</h3>
                            <p class="text-muted m-b-30"> </p>
                            <div class="table-responsive">
                            

                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Program Studi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php
                    $no=1; {
      while ($data1 = mysql_fetch_array($query1))  {?>  
                                        <tr>
                                            <td><?php echo $no.'.'; ?></td>
                                            <td><?php echo $data1['nama_jurusan']; ?></td>
                                            <td>
                                              <a href="?page=input_jurusan&edit=true&id_jurusan=<?php echo $data1['id_jurusan']; ?>">
                                                <button class="btn btn-warning btn-circle">
                                              <i class="fa fa-edit "></i>  
                                                </button>
                                                         </a>
                                                                    
                                            <a href="proses.php?tipe=Hapus_Jurusan&id_jurusan=<?php echo $data1['id_jurusan']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data <?php echo $data1['nama_jurusan']; ?>?')"> 
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