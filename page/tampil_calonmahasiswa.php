
<?php

$sql1 = "SELECT * FROM tformulirpendaftaran ORDER BY id_formulir DESC";  



$query1 = mysql_query($sql1);
$status = mysql_fetch_array($query1);
$query2 = mysql_query($sql2);
$total = mysql_num_rows($query);

?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Calon Mahasiswa Baru</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                            <li><a href="#">Calon Mahasiswa Baru</a></li>
                            <li class="active">Data Calon Mahasiswa Baru</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                 

                            <h3 class="box-title m-b-2">Data Calon Mahasiswa Baru</h3>
                            <p class="text-muted m-b-30"> </p>
                            <div class="table-responsive">
                         <form action="index.php?page=tampil_calonmahasiswa" method="post" data-parsley-validate novalidate enctype="multipart/form-data" >
                               <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Tahun</label>
                                                         <select class="form-control select2" name="id_tahun" id="id_provinsi" onchange="form.submit()">
                                                            <option value="">--Pilih Tahun--</option>
                                                             <?php
                                                            
                                                                $query = mysql_query("select * from ttahun");
                                                            
                                                                while($prov=mysql_fetch_array($query)){
                                                            
                                                                 
                                                                echo "<option value=\"$prov[id_tahun]\">$prov[tahun]</option>";
                                                                }
                                                                ?>
                                                               
                                                            
                                                        </select>
                                                        <input class="btn btn-small btn bg-orange btn-sm " type="submit" name="submit" id="submit" value="Cari Data"/> </div>
                                                </div>
                                                </form>

                                
                            </div>
                        </div>
                    </div>
                    </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                 

                            <h3 class="box-title m-b-2">Data Calon Mahasiswa Baru</h3>
                            <p class="text-muted m-b-30"> </p>
                            <div class="table-responsive">
                            

                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>No Registrasi</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                          <?php
                                          if ($_POST['id_tahun']!="") {
                                 $no=1; {
                         $q = mysql_query("SELECT * FROM tformulirpendaftaran where id_tahun='$_POST[id_tahun]'") or die(mysql_error());
                        while ($data1 = mysql_fetch_array($q))  {?>  
                                        <tr>
                                            <td><?php echo $no.'.'; ?></td>
                                            <td><?php echo $data1['nama_mahasiswa']; ?></td>
                                            <td><?php echo $data1['no_registrasi']; ?></td>
                                            <td>
                                            <?php if($data1['lulus']=='Y') { ?>
                                            <span class="label label-rouded label-info pull-center">LULUS</span>
                                            <?php } else if ($data1['lulus']=='T') { ?>
                                            <span class="label label-rouded label-danger pull-center">TIDAK LULUS</span>
                                            <?php } else { ?>
                                             <span class="label label-rouded label-primary pull-center">BELUM</span>
                                             <?php } ?>
                                            </td>
                                            <td>
                                              <a href="?page=detail_calonmahasiswa&id_formulir=<?php echo $data1['id_formulir']; ?>">
                                                <button class="btn btn-info btn-circle" title="Detail">
                                              <i class="fa fa-info "></i>  
                                                </button>
                                                         </a>
                                                                    
                                            <a href="proses.php?tipe=Hapus_calonmahasiswa&id_formulir=<?php echo $data1['id_formulir']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data <?php echo $data1['nama_mahasiswa']; ?>?')"> 
                                                <button class="btn btn-danger btn-circle">
                                              <i class="fa fa-trash-o"></i> 
                                            </button>
                                </a>
                      
                                <a href="proses.php?tipe=lulus&id_formulir=<?php echo $data1['id_formulir']; ?>">
                                                <button class="btn btn-info btn-circle" title="Detail">
                                              <i class="fa fa-info "></i>  
                                                </button>
                                                         </a>
                                                                    
                                            <a href="proses.php?tipe=tidak_lulus&id_formulir=<?php echo $data1['id_formulir']; ?>" > 
                                                <button class="btn btn-danger btn-circle">
                                              <i class="fa fa-trash-o"></i> 
                                            </button>

                                            </td>
                                        </tr>
                         <?php $no++; } } } else { ?>
                          <?php
                                 $no=1; {
                         $q = mysql_query("SELECT * FROM tformulirpendaftaran ORDER BY id_formulir DESC ") or die(mysql_error());
                        while ($data1 = mysql_fetch_array($q))  {?>  
                                        <tr>
                                            <td><?php echo $no.'.'; ?></td>
                                            <td><?php echo $data1['nama_mahasiswa']; ?></td>
                                            <td><?php echo $data1['no_registrasi']; ?></td>
                                            <td>
                                            <?php if($data1['lulus']=='Y') { ?>
                                            <span class="label label-rouded label-info pull-center">LULUS</span>
                                            <?php } else if ($data1['lulus']=='T') { ?>
                                            <span class="label label-rouded label-danger pull-center">TIDAK LULUS</span>
                                            <?php } else { ?>
                                             <span class="label label-rouded label-primary pull-center">BELUM</span>
                                             <?php } ?>
                                            </td>
                                            <td>
                                              <a href="?page=detail_calonmahasiswa&id_formulir=<?php echo $data1['id_formulir']; ?>">
                                                <button class="btn btn-info btn-circle" title="Detail">
                                              <i class="fa fa-info "></i>  
                                                </button>
                                                         </a>
                                                                    
                                            <a href="proses.php?tipe=Hapus_calonmahasiswa&id_formulir=<?php echo $data1['id_formulir']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data <?php echo $data1['nama_mahasiswa']; ?>?')"> 
                                                <button class="btn btn-danger btn-circle">
                                              <i class="fa fa-trash-o"></i> 
                                            </button>
                                </a>
               
                                <a href="proses.php?tipe=lulus&id_formulir=<?php echo $data1['id_formulir']; ?>">
                                                <button class="btn btn-success btn-circle" title="Detail">
                                              <i class="fa fa-check "></i>  
                                                </button>
                                                         </a>
                                                                    
                                            <a href="proses.php?tipe=tidak_lulus&id_formulir=<?php echo $data1['id_formulir']; ?>"> 
                                                <button class="btn btn-warning btn-circle">
                                              <i class="fa fa-times"></i> 
                                            </button>
                          
                                            </td>
                                        </tr>
                         <?php $no++; } } }?>
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