<?php

  $sql = "SELECT * FROM tformulirpendaftaran WHERE nisn = '$_SESSION[nisn]' ";  
  $sql2 = mysql_query("SELECT * FROM tberkas WHERE nisn = '$_SESSION[nisn]'");

$query = mysql_query($sql);
$data = mysql_fetch_array($query);
$data2 = mysql_fetch_array($sql2);

?>

<?php if($_SESSION[level]=='admin'){ ?>
<!-- start: Main Menu -->
        <li> <a href="?page=home" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Beranda </span></a> </li>
        <li> <a href="?page=tampil_calonmahasiswa" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Calon Mahasiswa </span></a> </li>
        <li> <a href="?page=tampil_tahun" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Tahun  </span></a> </li>
         <li> <a href="?page=tampil_waktu" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Waktu  </span></a> </li>
         <li> <a href="?page=tampil_provinsi" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Provinsi </span></a> </li>
         <li> <a href="?page=tampil_sekolah" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Sekolah </span></a> </li>
        <li> <a href="?page=tampil_jurusan" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Program Studi </span></a> </li>
        <li> <a href="?page=berkas" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Pengecekan Berkas </span></a> </li>
        <li> <a href="?page=tampil_grafik" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Grafik </span></a> </li>
        <li> <a href="?page=tampil_user" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Manajemen User </span></a> </li>
    
                    


      
		
<!-- end: Main Menu -->

<?php } if($_SESSION[level]=='superadmin'){ ?>
<!-- start: Main Menu -->
	
         <li> <a href="?page=home" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Beranda </span></a> </li>
        <li> <a href="?page=tampil_calonmahasiswa" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Calon Mahasiswa </span></a> </li>
        <li> <a href="?page=tampil_member" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Member </span></a> </li>
        <li> <a href="?page=tampil_user" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Manajemen User </span></a> </li>
        
    
		            
       <!-- end: Main Menu -->

<?php } if($_SESSION[level]=='member'){ ?>
<!-- start: Main Menu -->

       <li> <a href="?page=home" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Beranda </span></a> </li>
        
        <?php if($data['sudah']=='belum'){ ?>
        <?php } else { ?>

        <li> <a href="?page=tampil_berkas_pas_foto" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Berkas </span></a> </li>
        <?php } ?>

        <?php if($data2['ket_pas_foto']=='Y' && $data2['ket_ijazah']=='Y' && $data2['ket_rapor']=='Y' && $data2['ket_akta']=='Y' && $data2['ket_kk']=='Y' && $data2['ket_ktp_orangtua']=='Y' && $data2['ket_listrik']=='Y' && $data2['ket_gaji']=='Y'){ ?>

         <li> <a href="?page=formulir_pendaftaran" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Cetak Kartu Registrasi </span></a> </li>

          <?php } else {} ?>
       
		            
       <!-- end: Main Menu -->
     
<?php } ?>