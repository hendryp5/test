<?php
if($_GET['id_kecamatan'] != "") {
 	$value = "Edit";	//modus edit data lama
	$value2= "Edit_kecamatan";
	$sql = mysql_query("select * from tkecamatan where id_kecamatan = '$_GET[id_kecamatan]'");
    $data = mysql_fetch_array($sql);

} else {
 	$value = "Tambah";	//modus input data baru
	$value2= "Tambah_kecamatan";
}
?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Kecamatan</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                            <li><a href="#">Kecamatan</a></li>
                            <li class="active">Data Kecamatan</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                 <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0">Tambah Kecamatan</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-material form-horizontal" method="post" action="proses.php" enctype="multipart/form-data" data-toggle="validator">
                                    <input type="hidden" class="form-control form-control-line" value="<?php echo $_GET['id_kabupaten'] ?> "  name="id_kabupaten"> 
                                    <input type="hidden" class="form-control form-control-line" value="<?php echo $data['id_kecamatan'] ?> " placeholder="Masukkan Nama Siswa" name="id_kecamatan"> 
                                        <div class="form-group">
                                         <label class="col-md-12">Nama Kecamatan</label>
                                         <div class="col-md-12">
                                                <input type="text" class="form-control form-control-line" value="<?php echo $data['nama_kecamatan']; ?> "  name="nama_kecamatan" required=""> </div>
                                        </div>
                                
                                       


										<div class="form-group">
                                            <div class="col-sm-12">
                                            <input class="btn btn-block btn-primary btn-rounded" type="hidden" name="tipe" value="<?php echo $value2; ?>"> 
                                              <button class="btn btn-block btn-primary btn-rounded" type="submit" name="btnSimpan" > <?php echo $value; ?></button> 
                                              <br>
                                             <a href="?page=tampil_provinsi"> <button class="btn btn-block btn-default btn-rounded" type="button" > Kembali </button> </a>
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