<?php
  ini_set("display_errors",0);

// Definisi database
include("includes/defines.php");

// Kumpulan fungsi
include("includes/fungsi.php");

// Koneksi ke database
include("includes/connect.php");



$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$nisn = $_POST['nisn'];
$nik = $_POST['nik'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$no_registrasi = $_POST['no_registrasi'];
$email = $_POST['email'];

      

 { 

$tgl_now = date("m/d/Y");
		$waktu = mysql_query("SELECT * FROM twaktu ");
		$data = mysql_fetch_array($waktu);
		$tgl_exp =  $data['akhir'];
		$tgl_awal = $data['awal'];
		if ($tgl_now > $tgl_exp){
			echo '<script language="javascript">alert("Waktu Pendaftaran Habis"); document.location="index.php";</script>';
		} else if($tgl_now < $tgl_awal){
			echo '<script language="javascript">alert("Waktu Pendaftaran Belum Di Buka"); document.location="index.php";</script>';
		} else {
$simpan=mysql_query ("insert into login (id_user,username,password,level,aktifasi,nisn) value ('','$username','$password','member','N','$nisn')")  or die(mysql_error());
if ($simpan) {
  $masuk=mysql_query ("insert into tformulirpendaftaran (id_formulir,no_registrasi,nama_mahasiswa,nik,nisn,email,sudah) value ('','$no_registrasi','$nama_mahasiswa','$nik','$nisn','$email','belum')")  or die(mysql_error());
 echo "<script>alert('Registrasi Berhasil')</script>";

    echo '<script type="text/javascript">window.location="register.php"</script>';
     }else{
echo "<script>alert('gagal disimpan')</script>";
    echo '<script type="text/javascript">window.location="register.php</script>';
}
}
}


?>