
<?php

$sql1 = "SELECT * FROM tkabupaten where id_provinsi = '$_GET[id_provinsi]'  ORDER BY id_kabupaten DESC"; 
$sql2 = "SELECT * FROM tprovinsi where id_provinsi = '$_GET[id_provinsi]' "; 




$query1 = mysql_query($sql1);
$query2 = mysql_query($sql2);
$total = mysql_num_rows($query);
$kota = mysql_fetch_array($query2);

?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Kabupaten / Kota</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                            <li><a href="#">Kabupaten / Kota</a></li>
                            <li class="active">Data Kabupaten / Kota</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                        <div class="col-lg-2 col-sm-3 col-xs-12">
                          <a href="?page=input_kabupaten&id_provinsi=<?php echo $_GET['id_provinsi']; ?>"> <button class="btn btn-block btn-primary btn-rounded"><i class="fa fa-plus"> Tambah</i></button></a>
                        </div>
                 

                            <h3 class="box-title m-b-2">Data Kabupaten / Kota (<?php echo $kota['nama_provinsi']; ?>)</h3>
                            <p class="text-muted m-b-30"> </p>
                            <div class="table-responsive">
                            

                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kabupaten / Kota</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php
                    $no=1; {
      while ($data1 = mysql_fetch_array($query1))  {?>  
                                        <tr>
                                            <td><?php echo $no.'.'; ?></td>
                                            <td><?php echo $data1['nama_kabupaten']; ?></td>
                                            <td>
                                              <a href="?page=tampil_kecamatan&id_kabupaten=<?php echo $data1['id_kabupaten']; ?>">
                                                <button class="btn btn-info btn-circle">
                                              <i class="fa fa-plus "></i>  
                                                </button>
                                            </a>
                                            <a href="?page=input_kabupaten&edit=true&id_kabupaten=<?php echo $data1['id_kabupaten']; ?>&id_provinsi=<?php echo $_GET['id_provinsi']; ?>">
                                                <button class="btn btn-warning btn-circle">
                                              <i class="fa fa-edit "></i>  
                                                </button>
                                            </a>
                                                                    
                                            <a href="proses.php?tipe=Hapus_kabupaten&id_kabupaten=<?php echo $data1['id_kabupaten']; ?>&id_provinsi=<?php echo $_GET['id_provinsi']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data <?php echo $data1['nama_kabupaten']; ?>?')"> 
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