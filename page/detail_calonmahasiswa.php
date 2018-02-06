
<?php


$sql1 = "SELECT * FROM tformulirpendaftaran left join tjurusan on tjurusan.id_jurusan = tformulirpendaftaran.pilihan1 left join tprovinsi on tprovinsi.id_provinsi = tformulirpendaftaran.id_provinsi  left join tkabupaten on tkabupaten.id_kabupaten = tformulirpendaftaran.id_kabupaten left join tkecamatan on tkecamatan.id_kecamatan = tformulirpendaftaran.id_kecamatan where id_formulir = '$_GET[id_formulir]' ORDER BY id_formulir DESC";  

$sql2 = "SELECT * FROM tformulirpendaftaran left join tjurusan on tjurusan.id_jurusan = tformulirpendaftaran.pilihan2 where id_formulir = '$_GET[id_formulir]' ORDER BY id_formulir DESC";  

$query1 = mysql_query($sql1);
$data = mysql_fetch_array($query1);
$query2 = mysql_query($sql2);
$data2 = mysql_fetch_array($query2);
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
                <!-- /row -->
              <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading"> Info </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <form action="proses.php" method="post" data-toggle="validator">
                                        <div class="form-body">
                                            <h3 class="box-title">Biodata Mahasiswa Baru</h3>
                                            <hr>
                                            <h3 class="box-title">Data Diri</h3>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">NISN</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" value="<?php echo $data['nisn']; ?>" name="nisn" readonly> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">NIK</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" value="<?php echo $data['nik']; ?>" name="nik" readonly> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                           <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Nama Lengkap</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="nama_mahasiswa" value="<?php echo $data['nama_mahasiswa']; ?>" readonly> <div class="help-block with-errors"></div> </div>
                                                </div>
                                               
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Jenis Kelamin</label>
                                                        <select class="form-control" data-placeholder="Pilih Jenis Kelamin" tabindex="1" required="" name="jenis_kelamin">
                                                            <option value=""><?php echo $data['jenis_kelamin']; ?></option>
                                                            
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
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="agama" value="<?php echo $data['agama']; ?>" readonly> <div class="help-block with-errors"></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Tempat Lahir</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="tlahir" value="<?php echo $data['tlahir']; ?>" readonly> <div class="help-block with-errors"></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Tanggal Lahir</label>
                                                        <input type="date" id="date" class="form-control" required="" data-error="Mohon di isi" name="tgllahir" value="<?php echo $data['tgllahir']; ?>" readonly> <div class="help-block with-errors" ></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="textarea" class="control-label">Alamat Rumah</label>
                                                        <textarea id="textarea" class="form-control" required data-error="Mohon di isi"name="alamat" value="<?php echo $data['alamat']; ?>" readonly><?php echo $data['alamat']; ?></textarea> <div class="help-block with-errors"></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Provinsi</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="provinsi" value="<?php echo $data['nama_provinsi']; ?>" readonly> <div class="help-block with-errors"></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Kabupaten/Kota</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="kabupaten" value="<?php echo $data['nama_kabupaten']; ?>" readonly> <div class="help-block with-errors"></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Kecamatan</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="kecamatan" value="<?php echo $data['nama_kecamatan']; ?>" readonly> <div class="help-block with-errors"></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Alamat Email</label>
                                                        <input type="email" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="email" value="<?php echo $data['email']; ?>"> <div class="help-block with-errors"></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Telepon Rumah</label>
                                                        <input type="text" id="firstName" class="form-control"  name="telepon_rumah" value="<?php echo $data['telepon_rumah']; ?>" readonly> <div class="help-block with-errors" ></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Telepon Pribadi</label>
                                                        <input type="text" id="firstName" class="form-control" required=""  name="telepon_pribadi" value="<?php echo $data['telepon_pribadi']; ?>" readonly >  <div class="help-block with-errors"></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Sekolah</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="sekolah" value="<?php echo $data['nama_sekolah']; ?>" readonly> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Jurusan</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="jurusan" value="<?php echo $data['jurusan']; ?>" readonly> <div class="help-block with-errors"></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Tahun Lulus</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="tahun_lulus" value="<?php echo $data['tahun_lulus']; ?>" readonly> <div class="help-block with-errors"></div> </div>
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
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="peringkat1" value="<?php echo $data['peringkat1']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="jml1" value="<?php echo $data['jml1']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="rata1" value="<?php echo $data['rata1']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="mtk1" value="<?php echo $data['mtk1']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="bi1" value="<?php echo $data['bi1']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="bing1" value="<?php echo $data['bing1']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
  
                                        </tr>
                                         <tr>
                                            <td>2</td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="peringkat1" value="<?php echo $data['peringkat2']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="jml1" value="<?php echo $data['jml2']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="rata1" value="<?php echo $data['rata2']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="mtk1" value="<?php echo $data['mtk2']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="bi1" value="<?php echo $data['bi2']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="bing1" value="<?php echo $data['bing2']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
  
                                        </tr>
                                         <tr>
                                            <td>3</td>
                                           <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="peringkat1" value="<?php echo $data['peringkat3']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="jml1" value="<?php echo $data['jml3']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="rata1" value="<?php echo $data['rata3']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="mtk1" value="<?php echo $data['mtk3']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="bi1" value="<?php echo $data['bi3']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="bing1" value="<?php echo $data['bing3']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
  
                                        </tr>
                                         <tr>
                                            <td>4</td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="peringkat1" value="<?php echo $data['peringkat4']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="jml1" value="<?php echo $data['jml4']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="rata1" value="<?php echo $data['rata4']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="mtk1" value="<?php echo $data['mtk4']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="bi1" value="<?php echo $data['bi4']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="bing1" value="<?php echo $data['bing4']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                        </tr>
                                         <tr>
                                            <td>5</td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="peringkat1" value="<?php echo $data['peringkat5']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="jml1" value="<?php echo $data['jml5']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="rata1" value="<?php echo $data['rata5']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="mtk1" value="<?php echo $data['mtk5']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="bi1" value="<?php echo $data['bi5']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="bing1" value="<?php echo $data['bing5']; ?>" readonly> <div class="help-block with-errors"></div> 
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
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="lomba1" value="<?php echo $data['lomba1']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                           <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="skala1" value="<?php echo $data['skala1']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" value="<?php echo $data['jenis1']; ?>" readonly name="jenis1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                           <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" value="<?php echo $data['juara1']; ?>" readonly class="form-control" name="juara1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" value="<?php echo $data['tahune1']; ?>" readonly class="form-control" name="tahune1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                          
  
                                        </tr>

                                      <tr>
                                         
                                           <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="lomba1" value="<?php echo $data['lomba2']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                           <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="skala1" value="<?php echo $data['skala2']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" value="<?php echo $data['jenis2']; ?>" readonly name="jenis1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                           <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" value="<?php echo $data['juara2']; ?>" readonly class="form-control" name="juara1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" value="<?php echo $data['tahune2']; ?>" readonly class="form-control" name="tahune1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                          
  
                                        </tr>

                                      <tr>
                                         
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="lomba1" value="<?php echo $data['lomba3']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                           <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="skala1" value="<?php echo $data['skala3']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" value="<?php echo $data['jenis3']; ?>" readonly name="jenis1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                           <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" value="<?php echo $data['juara3']; ?>" readonly class="form-control" name="juara1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" value="<?php echo $data['tahune3']; ?>" readonly class="form-control" name="tahune1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                          
  
                                        </tr>
                                        <tr>
                                         
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="lomba1" value="<?php echo $data['lomba4']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                           <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" name="skala1" value="<?php echo $data['skala4']; ?>" readonly> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" class="form-control" value="<?php echo $data['jenis4']; ?>" readonly name="jenis1"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                           <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" value="<?php echo $data['juara1']; ?>" readonly class="form-control" name="juara4"> <div class="help-block with-errors"></div> 
                                            </div></td>
                                            <td>
                                                    <div class="form-group">
                                                       
                                                        <input type="text" id="firstName" value="<?php echo $data['tahune4']; ?>" readonly class="form-control" name="tahune1"> <div class="help-block with-errors"></div> 
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
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="nama_ayah" value="<?php echo $data['nama_ayah']; ?>" readonly> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Status Ayah</label>
                                                        <input type="text" id="firstName" class="form-control"  name="status_ayah" value="<?php echo $data['status_ayah']; ?>" readonly> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Hubungan Ayah</label>
                                                        <input type="text" id="firstName" class="form-control"  name="hubungan_ayah" value="<?php echo $data['hubungan_ayah']; ?>" readonly> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Pendidikan Ayah</label>
                                                        <input type="text" id="firstName" class="form-control"  name="pendidikan_ayah" value="<?php echo $data['pendidikan_ayah']; ?>" readonly> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Pekerjaan Ayah</label>
                                                        <input type="text" id="firstName" value="<?php echo $data['pekerjaan_ayah']; ?>" readonly class="form-control"  name="pekerjaan_ayah"> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Pendapatan Ayah</label>
                                                        <input type="text" id="firstName" class="form-control" value="<?php echo $data['pendapat_ayah']; ?>" readonly name="pendapatan_ayah"> <div class="help-block with-errors"></div> </div>
                                                </div>

                                                <div class="col-md-12">
                                                <hr>
                                                
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Nama Ibu</label>
                                                        <input type="text" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="nama_ibu" value="<?php echo $data['nama_ibu']; ?>" readonly> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Status Ibu</label>
                                                        <input type="text" id="firstName" class="form-control"  name="status_ibu" value="<?php echo $data['status_ibu']; ?>" readonly> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Hubungan Ibu</label>
                                                        <input type="text" id="firstName" value="<?php echo $data['hubungan_ibu']; ?>" readonly class="form-control"  name="hubungan_ibu"> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Pendidikan Ibu</label>
                                                        <input type="text" id="firstName" class="form-control"  name="pendidikan_ibu" value="<?php echo $data['pendidikan_ibu']; ?>" readonly> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Pekerjaan Ibu</label>
                                                        <input type="text" id="firstName" value="<?php echo $data['pekerjaan_ibu']; ?>" readonly class="form-control"  name="pekerjaan_ibu"> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Pendapatan Ibu</label>
                                                        <input type="text" id="firstName" class="form-control"  name="pendapatan_ibu" value="<?php echo $data['pendapat_ibu']; ?>" readonly> <div class="help-block with-errors"></div> </div>
                                                </div>
                                               
                                            </div>

                                            <div class="col-md-12">
                                                <hr>
                                                
                                                </div>

                                            <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Nomor Orang Tua / Wali</label>
                                                        <input type="text" id="firstName" class="form-control"  name="nomer_ortu" value="<?php echo $data['nomer_ortu']; ?>" readonly> <div class="help-block with-errors" ></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Jumlah Tanggungan</label>
                                                        <input type="text" id="firstName" class="form-control"  name="jmllh_tanggungan" value="<?php echo $data['jmlh_tanggungan']; ?>" readonly> <div class="help-block with-errors"></div> </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Jumlah Tabungan</label>
                                                        <input type="text" id="firstName" class="form-control" value="<?php echo $data['jmlh_tanggungan']; ?>" readonly name="jmlh_tabungan"> <div class="help-block with-errors"></div> </div>
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
                                                        
                                                      <?php echo $data['nama_jurusan']; ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Pilihan 2</label>
                                                        <div class="radio-list">
                                                          
                                                         <?php echo $data2['nama_jurusan']; ?>  
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
 
 
                                        <div class="form-actions">
                                   
                                        
                                            <a href="index.php?page=tampil_calonmahasiswa"><button type="button" class="btn btn-default">Kembali</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                    </div>
                    </div>

      <!-- /.row -->