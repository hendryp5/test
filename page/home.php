<?php

  $sql = "SELECT * FROM tformulirpendaftaran WHERE nisn = '$_SESSION[nisn]' ";  
  $sql1 = "SELECT * FROM tjurusan  "; 
  $sql2 = "SELECT * FROM ttahun where aktif = 'Y' "; 


$query = mysql_query($sql);
$data = mysql_fetch_array($query);
$data2 = mysql_query($sql1);
$data4 = mysql_query($sql1);
$query2 = mysql_query($sql2);
$data5 = mysql_fetch_array($query2);


?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Beranda</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                 
                        <ol class="breadcrumb">
                            <li><a href="#">Beranda</a></li>

                            <li class="active">Beranda</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <?php if($_SESSION[level]=='member'){ ?>
                <?php if($data['sudah']=='belum'){ ?>
                 <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading"> Info </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <form action="proses.php" method="post" data-toggle="validator">
                                    <input type="hidden" class="form-control form-control-line" value="<?php echo $data5[id_tahun] ?> " placeholder="Masukkan Nama Siswa" name="id_tahun"> 
                                        <div class="form-body">
                                            <h3 class="box-title">Biodata Mahasiswa Baru</h3>
                                            <hr>
                                            <h3 class="box-title">Data Diri</h3>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">NISN</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" value="<?php echo $_SESSION[nisn]; ?>" name="nisn" > <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">NIK</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" value="<?php echo $data['nik']; ?>" name="nik"> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                           <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Nama Lengkap</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="nama_mahasiswa" value="<?php echo $data['nama_mahasiswa']; ?>"> <div class="help-block with-errors"></div> </div>
                                                </div>
                                               
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Jenis Kelamin</label>
                                                        <select class="form-control" data-placeholder="Pilih Jenis Kelamin" tabindex="1" required="" name="jenis_kelamin">
                                                            <option value="">Pilih Jenis Kelamin</option>
                                                            <option value="Laki-laki">Laki-laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Siswa Ekselarasi</label>
                                                        <div class="radio-list">
                                                            <label class="radio-inline p-0">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="siswa_ekselarasi" id="radio1" value="ya" required="">
                                                                    <label for="radio1">YA</label>
                                                                </div>
                                                            </label>
                                                            <label class="radio-inline">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="siswa_ekselarasi" id="radio2" value="tidak" required="">
                                                                    <label for="radio2">Tidak </label>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Agama</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="agama"> <div class="help-block with-errors"></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Tempat Lahir</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="tlahir"> <div class="help-block with-errors"></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Tanggal Lahir</label>
                                                        <input type="date" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="tgllahir"> <div class="help-block with-errors"></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="textarea" class="control-label">Alamat Rumah</label>
                                                        <textarea id="textarea" class="form-control" required data-error="Mohon di isi" name="alamat"></textarea> <div class="help-block with-errors"></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Provinsi</label>
                                                         <select class="form-control select2" name="id_provinsi" id="id_provinsi" required="">
                                                            <option value="">--Pilih Provinsi--</option>
                                                             <?php
                                                            
                                                                $query = mysql_query("select * from tprovinsi");
                                                            
                                                                while($prov=mysql_fetch_array($query)){
                                                            
                                                                 
                                                                echo "<option value=\"$prov[id_provinsi]\">$prov[nama_provinsi]</option>";
                                                                }
                                                                ?>
                                                               
                                                            
                                                        </select> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Kabupaten/Kota</label>
                                                       <select class="form-control select2" name="id_kabupaten" id="id_kabupaten" required="">
                                                            <option value="">--Pilih Kabupaten--</option>

                                                            <?php
                                                            
                                                                $query2 = mysql_query("select * from tkabupaten");
                                                            
                                                                while($prov=mysql_fetch_array($query2)){
                                                            
                                                                 
                                                                echo "<option value=\"$prov[id_kabupaten]\">$prov[nama_kabupaten]</option>";
                                                                }
                                                                ?>
                                                        
                                                    
                                                        </select> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Kecamatan</label>
                                                       <select class="form-control select2" name="id_kecamatan" id="id_kecamatan" required="">
                                                            <option value="">--Pilih Kecamatan--</option>
                                                            
                                                        </select> </div>
                                                </div>

                                                <div class="col-md-12">
                                                
                                                    <div class="form-group">
                                                        <label class="control-label">Alamat Email</label>
                                                        <input type="email" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="email" value="<?php echo $data['email']; ?>"> <div class="help-block with-errors"></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Telepon Rumah</label>
                                                        <input type="text" id="firstName" class="form-control"  name="telepon_rumah"> <div class="help-block with-errors"></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Telepon Pribadi</label>
                                                        <input type="text" id="firstName" class="form-control" required=""  name="telepon_pribadi"> <div class="help-block with-errors"></div> </div>
                                                </div>

                                               <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Sekolah</label>
                                                       <select class="form-control select2" name="id_sekolah" id="id_sekolah">
                                                            <option value="">--Pilih Sekolah--</option>
                                                            
                                                        </select> </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Jurusan</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="jurusan"> <div class="help-block with-errors"></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Tahun Lulus</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="tahun_lulus"> <div class="help-block with-errors"></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                <hr>
                                                <h3 class="box-title"><b>Data Rapor</b> </h3>
                                                <hr>
                                                </div>

                                                <div class="col-md-12">
                                 
                                    <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Semester</th>
                                            <th>Peringkat</th>
                                            <th>Jumlah Siswa</th>
                                            <th>Nilai Rata- Rata Seluruh Pelajaran</th>
                                            <th>Matematika</th>
                                            <th>Bahasa Indonesia</th>
                                            <th>Bahasa Inggris</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                         
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="peringkat1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="jml1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="rata1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="mtk1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="bi1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="bing1"> <div class="help-block with-errors"></div> 
                                            </div></td>
  
                                        </tr>
                                         <tr>
                                            <td>2</td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="peringkat2"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="jml2"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="rata2"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="mtk2"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="bi2"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="bing2"> <div class="help-block with-errors"></div> 
                                            </div></td>
  
                                        </tr>
                                         <tr>
                                            <td>3</td>
                                           <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="peringkat3"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="jml3"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="rata3"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="mtk3"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="bi3"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="bing3"> <div class="help-block with-errors"></div> 
                                            </div></td>
  
                                        </tr>
                                         <tr>
                                            <td>4</td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control"  name="peringkat4"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control"  name="jml4"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control"  name="rata4"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control"  name="mtk4"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control"  name="bi4"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control"  name="bing4"> <div class="help-block with-errors"></div> 
                                            </div></td>
  
                                        </tr>
                                         <tr>
                                            <td>5</td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control"  name="peringkat5"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control"  name="jml5"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control"  name="rata5"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="mtk5"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="bi5"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control"  name="bing5"> <div class="help-block with-errors"></div> 
                                            </div></td>
  
                                        </tr>
                                         
                                        
                                   
                                    </tbody>
                                </table>
                                <h5 class="box-title">*) Khusus untuk siswa akselarasi diisi hanya sampai semester 3</h5>
                            
                                </div>

                                                <div class="col-md-12">
                                                <hr>
                                                <h3 class="box-title"><b>Data Prestasi Extrakulikuler</b> </h3>
                                                <hr>
                                                </div>

                                                 <div class="col-md-12">
                                 
                                    <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Lomba, Kejuaraan, Dll</th>
                                            <th>Skala (Kab/kota, Provinsi/Nasional)</th>
                                            <th>Jenis (Olah Raga, Seni, Olimpiade, Dll)</th>
                                            <th>Juara</th>
                                            <th>Tahun</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                         
                                       <tr>
                                         
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="lomba1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                           <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="skala1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="jenis1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                           <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="juara1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="tahune1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                          
  
                                        </tr>

                                      <tr>
                                         
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="lomba2"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                           <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="skala2"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="jenis2"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                           <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="juara2"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="tahune2"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                          
  
                                        </tr>

                                      <tr>
                                         
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="lomba3"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                           <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="skala3"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="jenis3"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                           <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="juara3"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="tahune3"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                          
  
                                        </tr>
                                        <tr>
                                         
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="lomba3"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                           <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="skala3"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="jenis3"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                           <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="juara3"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="tahune3"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                          
  
                                        </tr>
                                 
                                         
                                        
                                   
                                    </tbody>
                                </table>
                            
                                </div>

                                                <div class="col-md-12">
                                                <hr>
                                                <h3 class="box-title"><b>Data Keluarga</b> </h3>
                                                <hr>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Nama Ayah</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="nama_ayah"> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Status Ayah</label>
                                                        <input type="text" id="firstName" class="form-control"  name="status_ayah"> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Hubungan Ayah</label>
                                                        <input type="text" id="firstName" class="form-control"  name="hubungan_ayah"> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Pendidikan Ayah</label>
                                                        <input type="text" id="firstName" class="form-control"  name="pendidikan_ayah"> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Pekerjaan Ayah</label>
                                                        <input type="text" id="firstName" class="form-control"  name="pekerjaan_ayah"> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Pendapatan Ayah</label>
                                                        <input type="text" id="firstName" class="form-control"  name="pendapatan_ayah"> <div class="help-block with-errors"></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                <hr>
                                                
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Nama Ibu</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="nama_ibu"> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Status Ibu</label>
                                                        <input type="text" id="firstName" class="form-control"  name="status_ibu"> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Hubungan Ibu</label>
                                                        <input type="text" id="firstName" class="form-control"  name="hubungan_ibu"> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Pendidikan Ibu</label>
                                                        <input type="text" id="firstName" class="form-control"  name="pendidikan_ibu"> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Pekerjaan Ibu</label>
                                                        <input type="text" id="firstName" class="form-control"  name="pekerjaan_ibu"> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Pendapatan Ibu</label>
                                                        <input type="text" id="firstName" class="form-control"  name="pendapatan_ibu"> <div class="help-block with-errors"></div> </div>
                                                </div>
                                               
                                            </div>

                                            <div class="col-md-12">
                                                <hr>
                                                
                                                </div>

                                            <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Nomor Orang Tua / Wali</label>
                                                        <input type="text" id="firstName" class="form-control"  name="nomer_ortu"> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Jumlah Tanggungan</label>
                                                        <input type="text" id="firstName" class="form-control"  name="jmllh_tanggungan"> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Jumlah Tabungan</label>
                                                        <input type="text" id="firstName" class="form-control"  name="jmlh_tabungan"> <div class="help-block with-errors"></div> </div>
                                                </div>

                                            <div class="col-md-12">
                                                <hr>
                                                <h3 class="box-title"><b>Pilihan Politeknik</b> </h3>
                                                <hr>
                                                </div>

                                            <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Pilihan 1</label>
                                                        <div class="radio-list">
                                                        
                                                           <?php
                                                         
                                                          while ($data5 = mysql_fetch_array($data4))  { ?>  
                                                            <label class="radio-inline p-0">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="pilihan1" id="radio1" value="<?php echo $data5['id_jurusan']; ?>" required="">
                                                                    <label for="radio1"><?php echo $data5['nama_jurusan']; ?></label>
                                                                </div>
                                                            </label>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Pilihan 2</label>
                                                        <div class="radio-list">
                                                          <?php
                                                         
                                                          while ($data3 = mysql_fetch_array($data2))  { ?>  
                                                            <label class="radio-inline p-0">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="pilihan2" id="radio1" value="<?php echo $data3['id_jurusan']; ?>" required="">
                                                                    <label for="radio1"><?php echo $data3['nama_jurusan']; ?></label>
                                                                </div>
                                                            </label>
                                                            <?php } ?>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
 
                                        <div class="form-actions">
                                        <input class="btn btn-block btn-primary btn-rounded" type="hidden" name="tipe" value="Tambah_formulir"> 
                                            <button type="submit" class="btn btn-success" name="btnSimpan"> <i class="fa fa-check"></i> Save</button>
                                            <button type="button" class="btn btn-default">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <?php } else { ?>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                        <div class="panel panel-info block4">
                            <div class="panel-heading"> Info
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>Selamat Datang di Aplikasi Pendafatran Mahasiswa Baru Jalur Mandiri Online....</p>
                                </div>
                            </div>
                        </div>
                        <hr> </div>
                        <?php if($data['lulus']=='Y'){ ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                        <div class="panel panel-info block4">
                            <div class="panel-heading"> Pengumuman
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>Selamat Anda Telah Lulus dalam TES </p>
                                </div>
                            </div>
                        </div>
                        <hr> </div>
                        <?php } else if($data['lulus']=='T') { ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                        <div class="panel panel-info block4">
                            <div class="panel-heading"> Pengumuman
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p> Anda Tidak Lulus dalam TES </p>
                                </div>
                            </div>
                        </div>
                        <hr> </div>
                        <?php } else {} ?>

                 <?php   } ?>
                <!-- /row -->
                <?php } ?>
                 <?php if($_SESSION[level]!='member'){ ?>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                        <div class="panel panel-info block4">
                            <div class="panel-heading"> Info Panel
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>Selamat Datang di Aplikasi Pendafatran Mahasiswa Baru Jalur Mandiri Online....</p>
                                </div>
                            </div>
                        </div>
                        <hr> </div>
                <?php } ?>
                    </div>
                    </div>
                    </div>