<?php
    $value = "Upload";  //modus input data baru
    $value2= "Ganti_Rapor";
    
    $sql = mysql_query("select * from tberkas where nisn = '$_SESSION[nisn]'");
    $data = mysql_fetch_array($sql);
    
    $sql2 = mysql_query("select * from tberkas where nisn = '$_SESSION[nisn]'");
    $data2 = mysql_fetch_array($sql2);
?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Berkas</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                            <li><a href="#">Berkas</a></li>
                            <li class="active">Berkasr</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
               <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="m-b-0 box-title">Berkas-berkas</h3>
                             <?php getBerkas(); ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal" action="proses.php" method="post" enctype="multipart/form-data">
                             <input type="hidden" id="id_berkas" name="id_berkas" class="form-control" value="<?php  echo $data['id_berkas']; ?>" >
              <input type="hidden" id="id_pengguna" name="nisn" class="form-control" value="<?php  echo $_SESSION['nisn']; ?>" >
              <input type="hidden" id="username" name="username" class="form-control" value="<?php  echo $_SESSION['username']; ?>" >

              <?php if($data['rapor']!='') { ?>
              <div>
                            <?php $hoy = substr($data['rapor'], -3); if($hoy=='pdf') { ?>
                                <a href="berkas/<?php echo $_SESSION['username']; ?>/<?php echo $data['rapor']; ?>"><img src="img/pdf.png" style="width: 150px"></a>
                            <?php } else { ?> 
                                <img src="berkas/<?php echo $_SESSION['username']; ?>/<?php echo $data['rapor']; ?>" style="width: 180px">
                            <?php } ?>
                             <div class="form-group">
                            <label class="control-label">Pilih Berkas</label>
                           <input type="file" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="berkas"> <div class="help-block with-errors"></div> </div>

                           <input name="tipe" type="hidden" id="hiddenField" value="Ganti_Rapor" />
                            <button type="submit" class="btn btn-block btn-success" name="btnSimpan">Upload</button>
                            <?php } else { ?>
                             <div class="form-group">
                            <label class="control-label">Pilih Berkas</label>
                           <input type="file" id="firstName" class="form-control" required="" data-error="Mohon di isi" name="berkas"> <div class="help-block with-errors"></div> </div>

                           <input name="tipe" type="hidden" id="hiddenField" value="<?php echo $value2?>" />
                            <button type="submit" class="btn btn-block btn-success" name="btnSimpan">Upload</button>

                            <?php } ?>
                            </div><br>
                           
                         </form>
                        </div>
                    </div>
                </div>
               
                    </div>
                    </div>

      <!-- /.row -->