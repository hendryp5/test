<?php
    $value = "Simpan";  //modus input data baru
    $value2= "Pengecekan_Berkas";
    
    $sql = mysql_query("select * from tberkas left join login on login.nisn = tberkas.nisn where tberkas.nisn = '$_GET[nisn]'");
    $data = mysql_fetch_array($sql);
    
    $sql2 = mysql_query("select * from tberkas where nisn = '$_GET[nisn]'");
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
             
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <form id="sign_up" action="proses.php" method="post">
                            <input name="nisn" type="hidden" value="<?php echo $_GET['nisn']; ?>">
          <br>
          <ul class="list-unstyled list-inline example-wrap">

       
       <li>
            
                                    <button type="button" class="btn btn-direction btn-bottom btn-primary" >Pas Foto</button><br><br>
                                    <a href="berkas/<?php echo $data['username'];?>/<?php echo $data['pas_foto']; ?>" data-sub-html="Demo Description">
                                    <?php $hoy = substr($data['pas_foto'], -3); if($hoy=='pdf') { ?>
                    <img class="img-responsive thumbnail" src="img/pdf.png" style="width: 180px; height: 230px">
                                    <?php } else { ?> 
                                        <img class="img-responsive thumbnail" src="berkas/<?php echo $data['username']; ?>/<?php echo $data['pas_foto']; ?>" style="width: 180px; height: 230px">
                                   <?php } ?>
                                    </a>
                                    <br>
                          
                                          <div class="form-group">
                  <div class="col-lg-12 col-sm-9">
                    <div class="input-group">
                      <div>
                        <div class="radio-custom radio-primary">
                          <input name="group2" type="radio" id="radio_15" value="Y" <?php if($data['ket_pas_foto']=="Y") { ?> checked <?php } else { ?> <?php } ?>>
                                        <label for="radio_15">SESUAI</label>
                        </div>
                      </div>
                      <div>
                        <div class="radio-custom radio-primary">
                          <input name="group2" type="radio" id="radio_9" value="T" <?php if($data['ket_pas_foto']=="T") { ?> checked <?php } else { ?> <?php } ?>>
                                        <label for="radio_9">TIDAK SESUAI</label>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>

 
                                    
            </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <li>
            
                                    <button type="button" class="btn btn-direction btn-bottom btn-primary" >Ijazah</button><br><br>
                                    <a href="berkas/<?php echo $data['username'];?>/<?php echo $data['ijazah']; ?>" data-sub-html="Demo Description">
                                    <?php $hoy = substr($data['ijazah'], -3); if($hoy=='pdf') { ?>
                    <img class="img-responsive thumbnail" src="img/pdf.png" style="width: 180px; height: 230px">
                                    <?php } else { ?> 
                                        <img class="img-responsive thumbnail" src="berkas/<?php echo $data['username']; ?>/<?php echo $data['ijazah']; ?>" style="width: 180px; height: 230px">
                                   <?php } ?>
                                    </a>
                                    <br>
                          
                                          <div class="form-group">
                  <div class="col-lg-12 col-sm-9">
                    <div class="input-group">
                      <div>
                        <div class="radio-custom radio-primary">
                          <input name="group3" type="radio" id="radio_15" value="Y" <?php if($data['ket_ijazah']=="Y") { ?> checked <?php } else { ?> <?php } ?>>
                                        <label for="radio_15">SESUAI</label>
                        </div>
                      </div>
                      <div>
                        <div class="radio-custom radio-primary">
                          <input name="group3" type="radio" id="radio_9" value="T" <?php if($data['ket_ijazah']=="T") { ?> checked <?php } else { ?> <?php } ?>>
                                        <label for="radio_9">TIDAK SESUAI</label>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>

 
                                    
            </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <li>
            
                                    <button type="button" class="btn btn-direction btn-bottom btn-primary" >Rapor</button><br><br>
                                    <a href="berkas/<?php echo $data['username'];?>/<?php echo $data['rapor']; ?>" data-sub-html="Demo Description">
                                    <?php $hoy = substr($data['rapor'], -3); if($hoy=='pdf') { ?>
                    <img class="img-responsive thumbnail" src="img/pdf.png" style="width: 180px; height: 230px">
                                    <?php } else { ?> 
                                        <img class="img-responsive thumbnail" src="berkas/<?php echo $data['username']; ?>/<?php echo $data['rapor']; ?>" style="width: 180px; height: 230px">
                                   <?php } ?>
                                    </a>
                                    <br>
                          
                                          <div class="form-group">
                  <div class="col-lg-12 col-sm-9">
                    <div class="input-group">
                      <div>
                        <div class="radio-custom radio-primary">
                          <input name="group4" type="radio" id="radio_15" value="Y" <?php if($data['ket_rapor']=="Y") { ?> checked <?php } else { ?> <?php } ?>>
                                        <label for="radio_15">SESUAI</label>
                        </div>
                      </div>
                      <div>
                        <div class="radio-custom radio-primary">
                          <input name="group4" type="radio" id="radio_9" value="T" <?php if($data['ket_rapor']=="T") { ?> checked <?php } else { ?> <?php } ?>>
                                        <label for="radio_9">TIDAK SESUAI</label>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>

 
                                    
            </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <li>
            
                                    <button type="button" class="btn btn-direction btn-bottom btn-primary" >Akta Kelahiran</button><br><br>
                                    <a href="berkas/<?php echo $data['username'];?>/<?php echo $data['akta']; ?>" data-sub-html="Demo Description">
                                    <?php $hoy = substr($data['akta'], -3); if($hoy=='pdf') { ?>
                    <img class="img-responsive thumbnail" src="img/pdf.png" style="width: 180px; height: 230px">
                                    <?php } else { ?> 
                                        <img class="img-responsive thumbnail" src="berkas/<?php echo $data['username']; ?>/<?php echo $data['akta']; ?>" style="width: 180px; height: 230px">
                                   <?php } ?>
                                    </a>
                                    <br>
                          
                                          <div class="form-group">
                  <div class="col-lg-12 col-sm-9">
                    <div class="input-group">
                      <div>
                        <div class="radio-custom radio-primary">
                          <input name="group5" type="radio" id="radio_15" value="Y" <?php if($data['ket_akta']=="Y") { ?> checked <?php } else { ?> <?php } ?>>
                                        <label for="radio_15">SESUAI</label>
                        </div>
                      </div>
                      <div>
                        <div class="radio-custom radio-primary">
                          <input name="group5" type="radio" id="radio_9" value="T" <?php if($data['ket_akta']=="T") { ?> checked <?php } else { ?> <?php } ?>>
                                        <label for="radio_9">TIDAK SESUAI</label>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>

 
                                    
            </li>
</ul>
 <br>
          <ul class="list-unstyled list-inline example-wrap">
            <li>
            
                                    <button type="button" class="btn btn-direction btn-bottom btn-primary" >Kartu Keluarga</button><br><br>
                                    <a href="berkas/<?php echo $data['username'];?>/<?php echo $data['kk']; ?>" data-sub-html="Demo Description">
                                    <?php $hoy = substr($data['kk'], -3); if($hoy=='pdf') { ?>
                    <img class="img-responsive thumbnail" src="img/pdf.png" style="width: 180px; height: 230px">
                                    <?php } else { ?> 
                                        <img class="img-responsive thumbnail" src="berkas/<?php echo $data['username']; ?>/<?php echo $data['kk']; ?>" style="width: 180px; height: 230px">
                                   <?php } ?>
                                    </a>
                                    <br>
                          
                                          <div class="form-group">
                  <div class="col-lg-12 col-sm-9">
                    <div class="input-group">
                      <div>
                        <div class="radio-custom radio-primary">
                          <input name="group6" type="radio" id="radio_15" value="Y" <?php if($data['ket_kk']=="Y") { ?> checked <?php } else { ?> <?php } ?>>
                                        <label for="radio_15">SESUAI</label>
                        </div>
                      </div>
                      <div>
                        <div class="radio-custom radio-primary">
                          <input name="group6" type="radio" id="radio_9" value="T" <?php if($data['ket_kk']=="T") { ?> checked <?php } else { ?> <?php } ?>>
                                        <label for="radio_9">TIDAK SESUAI</label>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>

 
                                    
            </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

            <li>
            
                                    <button type="button" class="btn btn-direction btn-bottom btn-primary" >KTP Orangtua</button><br><br>
                                    <a href="berkas/<?php echo $data['username'];?>/<?php echo $data['ktp_orangtua']; ?>" data-sub-html="Demo Description">
                                    <?php $hoy = substr($data['ktp_orangtua'], -3); if($hoy=='pdf') { ?>
                    <img class="img-responsive thumbnail" src="img/pdf.png" style="width: 180px; height: 230px">
                                    <?php } else { ?> 
                                        <img class="img-responsive thumbnail" src="berkas/<?php echo $data['username']; ?>/<?php echo $data['ktp_orangtua']; ?>" style="width: 180px; height: 230px">
                                   <?php } ?>
                                    </a>
                                    <br>
                          
                                          <div class="form-group">
                  <div class="col-lg-12 col-sm-9">
                    <div class="input-group">
                      <div>
                        <div class="radio-custom radio-primary">
                          <input name="group7" type="radio" id="radio_15" value="Y" <?php if($data['ket_ktp_orangtua']=="Y") { ?> checked <?php } else { ?> <?php } ?>>
                                        <label for="radio_15">SESUAI</label>
                        </div>
                      </div>
                      <div>
                        <div class="radio-custom radio-primary">
                          <input name="group7" type="radio" id="radio_9" value="T" <?php if($data['ket_ktp_orangtua']=="T") { ?> checked <?php } else { ?> <?php } ?>>
                                        <label for="radio_9">TIDAK SESUAI</label>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>

 
                                    
            </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <li>
            
                                    <button type="button" class="btn btn-direction btn-bottom btn-primary" >Slip Listrik</button><br><br>
                                    <a href="berkas/<?php echo $data['username'];?>/<?php echo $data['listrik']; ?>" data-sub-html="Demo Description">
                                    <?php $hoy = substr($data['listrik'], -3); if($hoy=='pdf') { ?>
                    <img class="img-responsive thumbnail" src="img/pdf.png" style="width: 180px; height: 230px">
                                    <?php } else { ?> 
                                        <img class="img-responsive thumbnail" src="berkas/<?php echo $data['username']; ?>/<?php echo $data['listrik']; ?>" style="width: 180px; height: 230px">
                                   <?php } ?>
                                    </a>
                                    <br>
                          
                                          <div class="form-group">
                  <div class="col-lg-12 col-sm-9">
                    <div class="input-group">
                      <div>
                        <div class="radio-custom radio-primary">
                          <input name="group8" type="radio" id="radio_15" value="Y" <?php if($data['ket_listrik']=="Y") { ?> checked <?php } else { ?> <?php } ?>>
                                        <label for="radio_15">SESUAI</label>
                        </div>
                      </div>
                      <div>
                        <div class="radio-custom radio-primary">
                          <input name="group8" type="radio" id="radio_9" value="T" <?php if($data['ket_listrik']=="T") { ?> checked <?php } else { ?> <?php } ?>>
                                        <label for="radio_9">TIDAK SESUAI</label>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>

 
                                    
            </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <li>
            
                                    <button type="button" class="btn btn-direction btn-bottom btn-primary" >Slip Gaji</button><br><br>
                                    <a href="berkas/<?php echo $data['username'];?>/<?php echo $data['gaji']; ?>" data-sub-html="Demo Description">
                                    <?php $hoy = substr($data['gaji'], -3); if($hoy=='pdf') { ?>
                    <img class="img-responsive thumbnail" src="img/pdf.png" style="width: 180px; height: 230px">
                                    <?php } else { ?> 
                                        <img class="img-responsive thumbnail" src="berkas/<?php echo $data['username']; ?>/<?php echo $data['gaji']; ?>" style="width: 180px; height: 230px">
                                   <?php } ?>
                                    </a>
                                    <br>
                          
                                          <div class="form-group">
                  <div class="col-lg-12 col-sm-9">
                    <div class="input-group">
                      <div>
                        <div class="radio-custom radio-primary">
                          <input name="group9" type="radio" id="radio_15" value="Y" <?php if($data['ket_gaji']=="Y") { ?> checked <?php } else { ?> <?php } ?>>
                                        <label for="radio_15">SESUAI</label>
                        </div>
                      </div>
                      <div>
                        <div class="radio-custom radio-primary">
                          <input name="group9" type="radio" id="radio_9" value="T" <?php if($data['ket_gaji']=="T") { ?> checked <?php } else { ?> <?php } ?>>
                                        <label for="radio_9">TIDAK SESUAI</label>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>

 
                                    
            </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            </ul>
        
      <input name="tipe" type="hidden" id="hiddenField" value="<?php echo $value2?>" />
                                <input class="btn btn-primary" name="btnSimpan" type="submit" value="<?php echo $value?>">&nbsp&nbsp&nbsp
                                <a class="btn btn-danger" href="?page=berkas">Kembali</a>
      </form>
                        </div>
                    </div>
                </div>
               
                    </div>
                    </div>

      <!-- /.row -->