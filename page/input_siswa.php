<?php
if($_GET['id_siswa'] != "") {
 	$value = "Edit";	//modus edit data lama
	$value2= "Edit_Siswa";
	$sql = mysql_query("select * from tsiswa left join tkelas on tkelas.id_kelas = tsiswa.id_kelas
			   where tsiswa.id_siswa = '$_GET[id_siswa]'");
    $data = mysql_fetch_array($sql);

} else {
 	$value = "Tambah";	//modus input data baru
	$value2= "Tambah_Siswa";
}
?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Siswa</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                            <li><a href="#">Siswa</a></li>
                            <li class="active">Data Siswa</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                 <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0">Tambah Siswa</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-material form-horizontal" method="post" action="proses.php" enctype="multipart/form-data" >
                                    <input type="hidden" class="form-control form-control-line" value="<?php echo $data['id_siswa'] ?> " placeholder="Masukkan Nama Siswa" name="id_siswa"> 
                                        <div class="form-group">
                                         <label class="col-md-12">Nama Siswa</label>
                                         <div class="col-md-12">
                                                <input type="text" class="form-control form-control-line" value="<?php echo $data['nama_siswa']; ?> " placeholder="Masukkan Nama Siswa" name="nama_siswa"> </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="col-md-12">Alamat</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control" rows="5" name="alamat"><?php echo $data['alamat'] ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-12">Jenis Kelamin</label>
                                            <div class="col-sm-12">
                                                <select class="form-control" name="jenis_kelamin">
                                                	<option value="">--Pilih Jenis Kelamin--</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                         <label class="col-md-12">Asal Sekolah</label>
                                         <div class="col-md-12">
                                                <input type="text" class="form-control form-control-line" value="<?php echo $data['sekolah']; ?> "  name="sekolah"> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-12">Kelas di Sekolah</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control form-control-line" value="<?php echo $data['kelas_sk']; ?> "  name="kelas_sk"> </div>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-sm-12">Kelas di Bimbel</label>
                                            <div class="col-sm-12">
                                                 <select class="form-control select2" name="id_kelas">
					                                    <option value="CT">Connecticut</option>
					                                    <option value="DE">Delaware</option>
					                                   
                                                  </select>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                         <label class="col-md-12">Semester</label>
                                         <div class="col-md-12">
                                                <input type="text" class="form-control form-control-line" value="<?php echo $data['semester']; ?> " placeholder="Masukkan Semeseter" name="semester"> </div>
                                        </div>

										<div class="form-group">
                                            <div class="col-sm-12">
                                            <input class="btn btn-block btn-primary btn-rounded" type="hidden" name="tipe" value="<?php echo $value2; ?>"> 
                                              <button class="btn btn-block btn-primary btn-rounded" type="submit" name="btnSimpan" > <?php echo $value; ?></button> 
                                            </div>
                                        </div>                                     

                                      
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              </div>