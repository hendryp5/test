<?php
if($_GET['id_sekolah'] != "") {
 	$value = "Edit";	//modus edit data lama
	$value2= "Edit_sekolah";
	$sql = mysql_query("SELECT * FROM tsekolah left join tprovinsi on tprovinsi.id_provinsi = tsekolah.id_provinsi left join tkabupaten on tkabupaten.id_kabupaten = tsekolah.id_kabupaten where id_sekolah = '$_GET[id_sekolah]'");
    $data = mysql_fetch_array($sql);

} else {
 	$value = "Tambah";	//modus input data baru
	$value2= "Tambah_sekolah";
}
?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sekolah</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                            <li><a href="#">Sekolah</a></li>
                            <li class="active">Data Sekolah</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                 <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0">Tambah Sekolah</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-material form-horizontal" method="post" action="proses.php" enctype="multipart/form-data" data-toggle="validator">
                                    <input type="hidden" class="form-control form-control-line" value="<?php echo $data['id_sekolah'] ?> " placeholder="Masukkan Nama Siswa" name="id_sekolah"> 
                                        <div class="form-group">
                                         <label class="col-md-12">Nama Sekolah</label>
                                         <div class="col-md-12">
                                                <input type="text" class="form-control form-control-line" value="<?php echo $data['nama_sekolah']; ?> "  name="nama_sekolah" required=""> </div>
                                        </div>
                                        <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Provinsi</label>
                                                         <?php 

                                                         $query = mysql_query("select * from tprovinsi");

                                                       if($_GET['id_sekolah'] != "") {
                                                        echo "<select class='form-control select2' name='id_provinsi' id='id_provinsi'>";
                                                        echo "<option value='$data[id_provinsi]'>$data[nama_provinsi]</option>";
                                                        while($prov=mysql_fetch_array($query)){
                                                            
                                                                 
                                                                echo "<option value=\"$prov[id_provinsi]\">$prov[nama_provinsi]</option>";
                                                                }

                                                        echo "</select>";
                                                       } else {
                                                        ?>
                                                         <select class="form-control select2" name="id_provinsi" id="id_provinsi">

                                                            <option value="">--Pilih Provinsi--</option>
                                                             <?php
                                                            
                                                                $query = mysql_query("select * from tprovinsi");
                                                            
                                                                while($prov=mysql_fetch_array($query)){
                                                            
                                                                 
                                                                echo "<option value=\"$prov[id_provinsi]\">$prov[nama_provinsi]</option>";
                                                                }
                                                                ?>
                                                               
                                                            
                                                        </select> 
                                                        <?php } ?>
                                                        </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Kabupaten/Kota</label>
                                                       
                                                       <?php 
                                                       if($_GET['id_sekolah'] != "") {
                                                        echo "<select class='form-control select2' name='id_kabupaten' id='id_kabupaten'>";
                                                        echo "<option value='$data[id_kabupaten]'>$data[nama_kabupaten]</option>";
                                                        echo "</select>";
                                                      } else {
                                                      ?>
                                                      <select class="form-control select2" name="id_kabupaten" id="id_kabupaten">
                                                            <option value="">--Pilih Kabupaten--</option>
                                                                                                            
                                                        </select> 
                                                        <?php } ?>
                                                        </div>
                                                </div>
                                

										                      
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