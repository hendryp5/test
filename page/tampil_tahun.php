
<?php

$sql1 = "SELECT * FROM ttahun ORDER BY id_tahun DESC"; 

$query1 = mysql_query($sql1);

?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Tahun</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                            <li><a href="#">Tahun</a></li>
                            <li class="active">Data Tahun</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                        <div class="col-lg-2 col-sm-3 col-xs-12">
                          <a href="?page=input_tahun"> <button class="btn btn-block btn-primary btn-rounded"><i class="fa fa-plus"> Tambah</i></button></a>
                        </div>
                 

                            <h3 class="box-title m-b-2">Data Tahun</h3>
                            <p class="text-muted m-b-30"> </p>
                            <div class="table-responsive">
                            

                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tahun</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php
                    $no=1; {
      while ($data1 = mysql_fetch_array($query1))  {?>  
                                        <tr>
                                            <td><?php echo $no.'.'; ?></td>
                                            <td><?php echo $data1['tahun']; ?></td>
                                            <td>
                                                 <?php if($data1['aktif']=='Y') { ?>
                                            <span class="label label-rouded label-info pull-center">Aktif</span>
                                            <?php } else { ?>
                                            <span class="label label-rouded label-danger pull-center">Tidak Aktif</span>
                                            <?php } ?>
                                            </td>
                                            <td>
                                             <?php if($data1['aktif']=='Y') { ?> 
                                             <a href="proses.php?tipe=Aktivasi_tahun_t&id_tahun=<?php echo $data1['id_tahun']; ?>" onclick="return confirm('Apakah anda yakin akan mengaktifkn')">                      
                                            
                                                <button class="btn btn-primary btn-circle">
                                              <i class="fa fa-times"></i> 
                                            </button>
                                            <?php } else { ?>
                                            <a href="proses.php?tipe=Aktivasi_tahun_y&id_tahun=<?php echo $data1['id_tahun']; ?>" onclick="return confirm('Apakah anda yakin akan mengaktifkn')">  
                                                <button class="btn btn-primary btn-circle">
                                              <i class="fa fa-check"></i> 
                                            </button>
                                            <?php } ?>
            
                                            <a href="?page=input_tahun&edit=true&id_tahun=<?php echo $data1['id_tahun']; ?>">
                                                <button class="btn btn-warning btn-circle">
                                              <i class="fa fa-edit "></i>  
                                                </button>
                                            </a>
                                                                    
                                            <a href="proses.php?tipe=Hapus_tahun&id_tahun=<?php echo $data1['id_tahun']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data <?php echo $data1['tahun']; ?>?')"> 
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