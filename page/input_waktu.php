<?php
if($_GET['id_waktu'] != "") {
 	$value = "Edit";	//modus edit data lama
	$value2= "Edit_waktu";
	$sql = mysql_query("select * from twaktu where id_waktu = '$_GET[id_waktu]'");
    $data = mysql_fetch_array($sql);

} else {
 	$value = "Tambah";	//modus input data baru
	$value2= "Tambah_waktu";
}
?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Waktu</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                            <li><a href="#">Waktu</a></li>
                            <li class="active">Waktu</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                 <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0">Tambah Waktu</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-material form-horizontal" method="post" action="proses.php" enctype="multipart/form-data" data-toggle="validator">
                                    <input type="hidden" class="form-control form-control-line" value="<?php echo $data['id_waktu'] ?> " placeholder="Masukkan Nama Siswa" name="id_waktu"> 
                                        <div class="form-group">
                                         <label class="col-md-12">Hari</label>
                                         <div class="col-md-12">
                                                <input type="text" class="form-control form-control-line" value="<?php echo $data['hari']; ?> " placeholder="Masukkan Nama Siswa" name="hari" required=""> </div>
                                        </div>
                                        <div class="form-group">
                                         <label class="col-md-12">Tangal Ujian Masuk</label>
                                         <div class="col-md-12">
                                                 <div class="example">
                                         <div class="input-group">
                                            <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy" name="tanggal" required="" value="<?php echo $data['tanggal'] ?> "> <span class="input-group-addon"><i class="icon-calender"></i></span> </div>
                                         </div>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                         <label class="col-md-12">Tangal Pembukaan Pendaftaran</label>
                                         <div class="col-md-12">
                                                 <div class="example">
                                         <div class="input-group">
                                            <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy" name="awal" required="" value="<?php echo $data['awal'] ?> "> <span class="input-group-addon"><i class="icon-calender"></i></span> </div>
                                         </div>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                         <label class="col-md-12">Tangal Penutup Pendaftaran</label>
                                         <div class="col-md-12">
                                                 <div class="example">
                                         <div class="input-group">
                                            <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy" name="akhir" required="" value="<?php echo $data['akhir'] ?> "> <span class="input-group-addon"><i class="icon-calender"></i></span> </div>
                                         </div>
                                        </div>
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