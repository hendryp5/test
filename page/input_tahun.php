<?php
if($_GET['id_tahun'] != "") {
 	$value = "Edit";	//modus edit data lama
	$value2= "Edit_tahun";
	$sql = mysql_query("select * from ttahun where id_tahun = '$_GET[id_tahun]'");
    $data = mysql_fetch_array($sql);

} else {
 	$value = "Tambah";	//modus input data baru
	$value2= "Tambah_tahun";
}
?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Tahun</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                            <li><a href="#">Tahun</a></li>
                            <li class="active">Tahun</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                 <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0">Tambah Tahun</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-material form-horizontal" method="post" action="proses.php" enctype="multipart/form-data" data-toggle="validator">
                                    <input type="hidden" class="form-control form-control-line" value="<?php echo $data['id_tahun'] ?> " placeholder="Masukkan Nama Siswa" name="id_tahun"> 
                                        <div class="form-group">
                                         <label class="col-md-12">Tahun</label>
                                         <div class="col-md-12">
                                                <input type="text" class="form-control form-control-line" value="<?php echo $data['tahun']; ?> " placeholder="Masukkan Nama Siswa" name="tahun" required=""> </div>
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