<?php
ini_set("display_errors",0);

// Definisi database
include("includes/defines.php");

// Kumpulan fungsi
include("includes/fungsi.php");

// Koneksi ke database
include("includes/connect.php");

// Membuat session login
cekSession();

//inisiasi untuk action
$tipe = $_REQUEST['tipe'];


// Jurusan

$id_jurusan = $_POST['id_jurusan'];
$nama_jurusan = $_POST['nama_jurusan'];

// Tahun

$id_tahun = $_POST['id_tahun'];
$tahun = $_POST['tahun'];

// waktu

$id_waktu = $_POST['id_waktu'];
$hari = $_POST['hari'];
$tanggal = $_POST['tanggal'];
$awal = $_POST['awal'];
$akhir = $_POST['akhir'];


// Provinsi

$id_provinsi = $_POST['id_provinsi'];
$nama_provinsi = $_POST['nama_provinsi'];

// Kabupaten

$id_kabupaten = $_POST['id_kabupaten'];
$nama_kabupaten = $_POST['nama_kabupaten'];

// Kecamatan

$id_kecamatan = $_POST['id_kecamatan'];
$nama_kecamatan = $_POST['nama_kecamatan'];

// Sekolah

$id_sekolah = $_POST['id_sekolah'];
$nama_sekolah = $_POST['nama_sekolah'];

// User

$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$nisn = $_POST['nisn'];
$nik = $_POST['nik'];
$level = $_POST['level'];
// calonmahasiswa


// registrasi
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$no_registrasi = $_POST['no_registrasi'];
$email = $_POST['email'];

// mengisi formulir

$siswa_ekselarasi = $_POST['siswa_ekselarasi'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$tlahir = $_POST['tlahir'];
$tgllahir = $_POST['tgllahir'];
$alamat = $_POST['alamat'];
$telepon_rumah - $_POST['telepon_rumah'];
$telepon_pribadi = $_POST['telepon_pribadi'];
$jurusan = $_POST['jurusan'];
$tahun_lulus = $_POST['tahun_lulus'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$pilihan1 = $_POST['pilihan1'];
$pilihan2 = $_POST['pilihan2'];
$peringkat1 = $_POST['peringkat1'];
$peringkat2 = $_POST['peringkat2'];
$peringkat3 = $_POST['peringkat3'];
$peringkat4 = $_POST['peringkat4'];
$peringkat5 = $_POST['peringkat5'];
$jml1 = $_POST['jml1'];
$jml2 = $_POST['jml2'];
$jml3 = $_POST['jml3'];
$jml4 = $_POST['jml4'];
$jml5 = $_POST['jml5'];
$rata1 = $_POST['rata1'];
$rata2 = $_POST['rata2'];
$rata3 = $_POST['rata3'];
$rata4 = $_POST['rata4'];
$rata5 = $_POST['rata5'];
$mtk1 = $_POST['mtk1'];
$mtk2 = $_POST['mtk2'];
$mtk3 = $_POST['mtk3'];
$mtk4 = $_POST['mtk4'];
$mtk5 = $_POST['mtk5'];
$bi1 = $_POST['bi1'];
$bi2 = $_POST['bi2'];
$bi3 = $_POST['bi3'];
$bi4 = $_POST['bi4'];
$bi5 = $_POST['bi5'];
$bing1 = $_POST['bing1'];
$bing2 = $_POST['bi2ng'];
$bing3 = $_POST['bing3'];
$bing4 = $_POST['bing4'];
$bing5 = $_POST['bing5'];
$lomba1 = $_POST['lomba1'];
$lomba2 = $_POST['lomba2'];
$lomba3 = $_POST['lomba3'];
$lomba4 = $_POST['lomba4'];
$skala1 = $_POST['skala1'];
$skala2 = $_POST['skala2'];
$skala3 = $_POST['skala3'];
$skala4 = $_POST['skala4'];
$juara1 = $_POST['juara1'];
$juara2 = $_POST['juara2'];
$juara3 = $_POST['juara3'];
$juara4 = $_POST['juara4'];
$tahune1 = $_POST['tahune1'];
$tahune2 = $_POST['tahune2'];
$tahune3 = $_POST['tahune3'];
$tahune4 = $_POST['tahune4'];
$status_ayah = $_POST['status_ayah'];
$hubungan_ayah = $_POST['hubungan_ayah'];
$pendidikan_ayah = $_POST['pendidikan_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$pendapatan_ayah = $_POST['pendapatan_ayah'];
$status_ibu = $_POST['status_ibu'];
$hubungan_ibu = $_POST['hubungan_ibu'];
$pendidikan_ibu = $_POST['pendidikan_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$pendapatan_ibu = $_POST['pendapatan_ibu'];
$nomer_ortu = $_POST['nomer_ortu'];
$jmlh_tanggungan = $_POST['jmlh_tanggungan'];
$jmlh_tabungan = $_POST['jmlh_tabungan'];



//berkas
$nama_file=$_POST['nama_file'];
$deskripsi=$_POST['deskripsi'];

$file_max_weight = 500000; //limit the maximum size of file allowed (20Mb)
$ok_ext = array('jpg','png','gif','jpeg','pdf'); // allow only these types of files
$file_ext = array('jpg','png','gif','jpeg'); // allow only these types of files
$destination = 'berkas/'.$username.'/'; // where our files will be stored
$file = $_FILES['berkas'];
$filename = explode(".", $file["name"]); 
$file_name = $file['name']; // file original name
$file_name_no_ext = isset($filename[0]) ? $filename[0] : null; // File name without the extension
$file_extension = $filename[count($filename)-1];
$file_weight = $file['size'];
$file_type = $file['type'];

$group1=$_POST['group1'];
$group2=$_POST['group2'];
$group3=$_POST['group3'];
$group4=$_POST['group4'];
$group5=$_POST['group5'];
$group6=$_POST['group6'];
$group7=$_POST['group7'];
$group8=$_POST['group8'];
$group9=$_POST['group9'];


switch ($tipe){     
    
    case 'Tambah_member':

	 	$query ="insert into login (id_user,username,password,level,aktifasi,nisn) value ('','$username','$password','member','N','$nisn')";
	 	$query3 ="insert into tformulirpendaftaran (id_formulir,no_registrasi,nama_mahasiswa,nik,nisn,email,sudah) value ('','$no_registrasi','$nama_mahasiswa','$nik','$nisn','$email','belum')";
		$url = "login.php"; 
		$alert = "Registrasi Berhasil";
	
	break;

	case 'Aktif_member':
	
	 	$query ="update login set aktifasi='Y' where id_user = '$_GET[id_user]'";
		$url = "index.php?page=tampil_member";
		$alert = "Edit Data Berhasil";  
	break;

	case 'Hapus_member':

		$query = "delete from login where id_user='$_GET[id_user]'";
		$url = "index.php?page=tampil_member";
		$alert = "Hapus Data Berhasil";
	break;

	case 'Tambah_provinsi':
	//Edit Siswa
	 	$query ="insert into tprovinsi (id_provinsi,nama_provinsi) value ('','$nama_provinsi')";
		$url = "index.php?page=tampil_provinsi"; 
		$alert = "Tambah Data Berhasil";
	
	break;

	case 'Edit_provinsi':
	
	 	$query ="update tprovinsi set nama_provinsi='$nama_provinsi' where id_provinsi = '$id_provinsi'";
		$url = "index.php?page=tampil_provinsi";
		$alert = "Edit Data Berhasil";  
	break;

	case 'Hapus_provinsi':

		$query = "delete from tprovinsi where id_provinsi='$_GET[id_provinsi]'";
		$url = "index.php?page=tampil_provinsi";
		$alert = "Hapus Data Berhasil";
	break;

	case 'Tambah_kabupaten':
	//Edit Siswa
	 	$query ="insert into tkabupaten (id_kabupaten,nama_kabupaten,id_provinsi) value ('','$nama_kabupaten','$id_provinsi')";
		$url = "index.php?page=tampil_kabupaten&id_provinsi=$id_provinsi"; 
		$alert = "Tambah Data Berhasil";
	
	break;

	case 'Edit_kabupaten':
	
	 	$query ="update tkabupaten set nama_kabupaten='$nama_kabupaten' where id_kabupaten = '$id_kabupaten'";
		$url = "index.php?page=tampil_kabupaten&id_provinsi=$id_provinsi";
		$alert = "Edit Data Berhasil";  
	break;

	case 'Hapus_kabupaten':
		$id_provinsi1= $_GET['id_provinsi'];
		$query = "delete from tkabupaten where id_kabupaten='$_GET[id_kabupaten]'";
		$url = "index.php?page=tampil_kabupaten&id_provinsi=$id_provinsi1";
		$alert = "Hapus Data Berhasil";
	break;

	case 'Tambah_kecamatan':
	//Edit Siswa
	 	$query ="insert into tkecamatan (id_kecamatan,nama_kecamatan,id_kabupaten) value ('','$nama_kecamatan','$id_kabupaten')";
		$url = "index.php?page=tampil_kecamatan&id_kabupaten=$id_kabupaten"; 
		$alert = "Tambah Data Berhasil";
	
	break;

	case 'Edit_kecamatan':
	
	 	$query ="update tkecamatan set nama_kecamatan='$nama_kecamatan' where id_kecamatan = '$id_kecamatan'";
		$url = "index.php?page=tampil_kecamatan&id_kabupaten=$id_kabupaten";
		$alert = "Edit Data Berhasil";  
	break;

	case 'Hapus_kecamatan':
		$id_kabupaten1= $_GET['id_kabupaten'];
		$query = "delete from tkecamatan where id_kecamatan='$_GET[id_kecamatan]'";
		$url = "index.php?page=tampil_kecamatan&id_kabupaten=$id_kabupaten1";
		$alert = "Hapus Data Berhasil";
	break;

	case 'Tambah_sekolah':
	//Edit Siswa
	 	$query ="insert into tsekolah (id_sekolah,nama_sekolah,id_provinsi,id_kabupaten) value ('','$nama_sekolah','$id_provinsi','$id_kabupaten')";
		$url = "index.php?page=tampil_sekolah"; 
		$alert = "Tambah Data Berhasil";
	
	break;

	case 'Edit_sekolah':
	
	 	$query ="update tsekolah set nama_sekolah='$nama_sekolah', id_provinsi='$id_provinsi', id_kabupaten='$id_kabupaten' where id_sekolah = '$id_sekolah'";
		$url = "index.php?page=tampil_sekolah";
		$alert = "Edit Data Berhasil";  
	break;

	case 'Hapus_sekolah':
		$query = "delete from tsekolah where id_sekolah='$_GET[id_sekolah]'";
		$url = "index.php?page=tampil_sekolah";
		$alert = "Hapus Data Berhasil";
	break;

	case 'Tambah_formulir':
	
	 	$query ="update tformulirpendaftaran set nama_mahasiswa='$nama_mahasiswa', siswa_ekselarasi='$siswa_ekselarasi' ,jenis_kelamin='$jenis_kelamin' ,agama='$agama', tlahir='$tlahir', tgllahir='$tgllahir', alamat='$alamat', id_provinsi='$id_provinsi', id_kabupaten='$id_kabupaten', id_kecamatan='$id_kecamatan', email='$email',telepon_rumah='$telepon_rumah', telepon_pribadi='$telepon_pribadi', id_sekolah='$id_sekolah', jurusan='$jurusan', tahun_lulus='$tahun_lulus', peringkat1='$peringkat1', peringkat2='$peringkat2',peringkat3='$peringkat3', peringkat4='$peringkat4',peringkat5='$peringkat5', jml1='$jml1',jml2='$jml2',jml3='$jml3', jml4='$jml4', jml5='$jml5', rata1='$rata1', rata2='$rata2', rata3='$rata3',rata4='$rata4',rata5='$rata5',mtk1='$mtk1',mtk2='$mtk2',mtk3='$mtk3',mtk4='$mtk4',mtk5='$mtk5',bi1='$bi1',bi2='$bi2',bi3='$bi3',bi4='$bi4',bi5='$bi5',bing1='$bing1',bing2='$bing2',bing3='$bing3',bing4='$bing4',bing5='$bing5',lomba1='$lomba1',lomba2='$lomba2',lomba3='$lomba3',lomba4='$lomba4',skala1='$skala1',skala2='$skala2',skala3='$skala3',skala4='$skala4',juara1='$juara1',juara2='$juara2',juara2='$juara2',juara3='$juara3',juara4='$juara4',tahune1='$tahune1',tahune2='$tahune2',tahune3='$tahune3',tahune4='$tahune4', nama_ayah='$nama_ayah',status_ayah='$status_ayah',hubungan_ayah='$hubungan_ayah',pendidikan_ayah='$pendidikan_ayah',pekerjaan_ayah='$pekerjaan_ayah',pendapat_ayah='$pendapatan_ayah', nama_ibu='$nama_ibu',status_ibu='$status_ibu',hubungan_ibu='$hubungan_ibu',pendidikan_ibu='$pendidikan_ibu',pekerjaan_ibu='$pekerjaan_ibu',pendapat_ibu='$pendapatan_ibu',nomer_ortu='$nomer_ortu',jmlh_tanggungan='$jmlh_tanggungan',jmlh_tabungan='$jmlh_tabungan', pilihan1='$pilihan1', pilihan2='$pilihan2', sudah='sudah',id_tahun = '$id_tahun'  where nisn = '$nisn'";
		$url = "index.php?page=home";
		$alert = "Pengisian Berhasil";  
	break;
     
     case 'Tambah_Pas_foto':
	//Edit User
	if($file['error'] == 0 )
		    {
			// check if the extension is accepted
			if( in_array($file_extension, $ok_ext)):
			
			    // check if the size is not beyond expected size
			    if( $file_weight <= $file_max_weight ):
			    
				    $fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;
				    // and move it to the destination folder
				    mkdir('berkas/'.$username);
				    fopen('berkas/'.$username.'/index.html','w');
				    
				    if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ):					  
					$query ="Insert into tberkas(id_berkas,nisn,pas_foto)value('$id_berkas','$nisn','$fileNewName')";
					$url = "index.php?page=tampil_berkas";
					$alert = "Upload Berhasil";
					 
				   else:
					 $url = "index.php?page=tampil_berkas_pas_foto";
                                         $alert = "Upload Gagal";
				    endif;
				    
			    else:
			        $url = "index.php?page=tampil_berkas_pas_foto";
			       $alert = "File Terlalu Besar !!! Max 500 kb";
			    endif;
			    
			else:
			     $url = "index.php?page=tampil_berkas_pas_foto";
			      $alert = "File Tidak Didukung !!! Harus jpg, png, gif, pdf";
			endif;
		    }
	break;

	

	case 'Ganti_Pas_foto':
	//Edit User
	$qr=mysql_query("select * from tberkas left join login on login.nisn = tberkas.nisn where tberkas.nisn = '$nisn'");
	  $dt=mysql_fetch_array($qr);
	  $c=$dt['username'];
	  $glama=$dt['pas_foto'];
	  $destination = 'berkas/'.$c.'/'; // where our files will be stored
	  
	if( $file['error'] == 0 )
		    {
			// check if the extension is accepted
			if( in_array($file_extension, $ok_ext)):
			
			    // check if the size is not beyond expected size
			    if( $file_weight <= $file_max_weight ):
			    
				    $fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;
				    // and move it to the destination folder
				    
				    if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ):					  
					$query ="Update tberkas set pas_foto='$fileNewName' where nisn = '$nisn'";
					unlink($destination.$glama);
					$url = "index.php?page=tampil_berkas_pas_foto";
					$alert = "Update Berhasil";
					 
				   else:
					 $url = "index.php?page=tampil_berkas_pas_foto";
                                         $alert = "Update Gagal";
				    endif;
				    
			    else:
			        $url = "index.php?page=tampil_berkas_pas_foto";
			       $alert = "File Terlalu Besar !!! Max 500 kb";
			    endif;
			    
			else:
			     $url = "index.php?page=tampil_berkas_pas_foto";
			      $alert = "File Tidak Didukung !!! Harus jpg, png, gif, pdf";
			endif;
		    }
	break;

	case 'Ganti_Ijazah':
	//Edit User
	$qr=mysql_query("select * from tberkas left join login on login.nisn = tberkas.nisn where tberkas.nisn = '$nisn'");
	  $dt=mysql_fetch_array($qr);
	  $c=$dt['username'];
	  $glama=$dt['ijazah'];
	  $destination = 'berkas/'.$c.'/'; // where our files will be stored
	  
	if( $file['error'] == 0 )
		    {
			// check if the extension is accepted
			if( in_array($file_extension, $ok_ext)):
			
			    // check if the size is not beyond expected size
			    if( $file_weight <= $file_max_weight ):
			    
				    $fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;
				    // and move it to the destination folder
				    
				    if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ):					  
					$query ="Update tberkas set ijazah='$fileNewName' where nisn = '$nisn'";
					unlink($destination.$glama);
					$url = "index.php?page=tampil_berkas_ijazah";
					$alert = "Update Berhasil";
					 
				   else:
					 $url = "index.php?page=tampil_berkas_ijazah";
                                         $alert = "Update Gagal";
				    endif;
				    
			    else:
			        $url = "index.php?page=tampil_berkas_ijazah";
			       $alert = "File Terlalu Besar !!! Max 500 kb";
			    endif;
			    
			else:
			     $url = "index.php?page=tampil_berkas_ijazah";
			      $alert = "File Tidak Didukung !!! Harus jpg, png, gif, pdf";
			endif;
		    }
	break;

	case 'Ganti_Rapor':
	//Edit User
	$qr=mysql_query("select * from tberkas left join login on login.nisn = tberkas.nisn where tberkas.nisn = '$nisn'");
	  $dt=mysql_fetch_array($qr);
	  $c=$dt['username'];
	  $glama=$dt['rapor'];
	  $destination = 'berkas/'.$c.'/'; // where our files will be stored
	  
	if( $file['error'] == 0 )
		    {
			// check if the extension is accepted
			if( in_array($file_extension, $ok_ext)):
			
			    // check if the size is not beyond expected size
			    if( $file_weight <= $file_max_weight ):
			    
				    $fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;
				    // and move it to the destination folder
				    
				    if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ):					  
					$query ="Update tberkas set rapor='$fileNewName' where nisn = '$nisn'";
					unlink($destination.$glama);
					$url = "index.php?page=tampil_berkas_rapor";
					$alert = "Update Berhasil";
					 
				   else:
					 $url = "index.php?page=tampil_berkas_rapor";
                                         $alert = "Update Gagal";
				    endif;
				    
			    else:
			        $url = "index.php?page=tampil_berkas_rapor";
			       $alert = "File Terlalu Besar !!! Max 500 kb";
			    endif;
			    
			else:
			     $url = "index.php?page=tampil_berkas_rapor";
			      $alert = "File Tidak Didukung !!! Harus jpg, png, gif, pdf";
			endif;
		    }
	break;

	case 'Ganti_Akta':
	//Edit User
	$qr=mysql_query("select * from tberkas left join login on login.nisn = tberkas.nisn where tberkas.nisn = '$nisn'");
	  $dt=mysql_fetch_array($qr);
	  $c=$dt['username'];
	  $glama=$dt['akta'];
	  $destination = 'berkas/'.$c.'/'; // where our files will be stored
	  
	if( $file['error'] == 0 )
		    {
			// check if the extension is accepted
			if( in_array($file_extension, $ok_ext)):
			
			    // check if the size is not beyond expected size
			    if( $file_weight <= $file_max_weight ):
			    
				    $fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;
				    // and move it to the destination folder
				    
				    if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ):					  
					$query ="Update tberkas set akta='$fileNewName' where nisn = '$nisn'";
					unlink($destination.$glama);
					$url = "index.php?page=tampil_berkas_akta";
					$alert = "Update Berhasil";
					 
				   else:
					 $url = "index.php?page=tampil_berkas_akta";
                                         $alert = "Update Gagal";
				    endif;
				    
			    else:
			        $url = "index.php?page=tampil_berkas_akta";
			       $alert = "File Terlalu Besar !!! Max 500 kb";
			    endif;
			    
			else:
			     $url = "index.php?page=tampil_berkas_akta";
			      $alert = "File Tidak Didukung !!! Harus jpg, png, gif, pdf";
			endif;
		    }
	break;

	case 'Ganti_kk':
	//Edit User
	$qr=mysql_query("select * from tberkas left join login on login.nisn = tberkas.nisn where tberkas.nisn = '$nisn'");
	  $dt=mysql_fetch_array($qr);
	  $c=$dt['username'];
	  $glama=$dt['kk'];
	  $destination = 'berkas/'.$c.'/'; // where our files will be stored
	  
	if( $file['error'] == 0 )
		    {
			// check if the extension is accepted
			if( in_array($file_extension, $ok_ext)):
			
			    // check if the size is not beyond expected size
			    if( $file_weight <= $file_max_weight ):
			    
				    $fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;
				    // and move it to the destination folder
				    
				    if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ):					  
					$query ="Update tberkas set kk='$fileNewName' where nisn = '$nisn'";
					unlink($destination.$glama);
					$url = "index.php?page=tampil_berkas_kk";
					$alert = "Update Berhasil";
					 
				   else:
					 $url = "index.php?page=tampil_berkas_kk";
                                         $alert = "Update Gagal";
				    endif;
				    
			    else:
			        $url = "index.php?page=tampil_berkas_kk";
			       $alert = "File Terlalu Besar !!! Max 500 kb";
			    endif;
			    
			else:
			     $url = "index.php?page=tampil_berkas_kk";
			      $alert = "File Tidak Didukung !!! Harus jpg, png, gif, pdf";
			endif;
		    }
	break;

	case 'Ganti_ktp_orangtua':
	//Edit User
	$qr=mysql_query("select * from tberkas left join login on login.nisn = tberkas.nisn where tberkas.nisn = '$nisn'");
	  $dt=mysql_fetch_array($qr);
	  $c=$dt['username'];
	  $glama=$dt['ktp_orangtua'];
	  $destination = 'berkas/'.$c.'/'; // where our files will be stored
	  
	if( $file['error'] == 0 )
		    {
			// check if the extension is accepted
			if( in_array($file_extension, $ok_ext)):
			
			    // check if the size is not beyond expected size
			    if( $file_weight <= $file_max_weight ):
			    
				    $fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;
				    // and move it to the destination folder
				    
				    if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ):					  
					$query ="Update tberkas set ktp_orangtua='$fileNewName' where nisn = '$nisn'";
					unlink($destination.$glama);
					$url = "index.php?page=tampil_berkas_ktp_orangtua";
					$alert = "Update Berhasil";
					 
				   else:
					 $url = "index.php?page=tampil_berkas_ktp_orangtua";
                                         $alert = "Update Gagal";
				    endif;
				    
			    else:
			        $url = "index.php?page=tampil_berkas_ktp_orangtua";
			       $alert = "File Terlalu Besar !!! Max 500 kb";
			    endif;
			    
			else:
			     $url = "index.php?page=tampil_berkas_ktp_orangtua";
			      $alert = "File Tidak Didukung !!! Harus jpg, png, gif, pdf";
			endif;
		    }
	break;

	case 'Ganti_listrik':
	//Edit User
	$qr=mysql_query("select * from tberkas left join login on login.nisn = tberkas.nisn where tberkas.nisn = '$nisn'");
	  $dt=mysql_fetch_array($qr);
	  $c=$dt['username'];
	  $glama=$dt['listrik'];
	  $destination = 'berkas/'.$c.'/'; // where our files will be stored
	  
	if( $file['error'] == 0 )
		    {
			// check if the extension is accepted
			if( in_array($file_extension, $ok_ext)):
			
			    // check if the size is not beyond expected size
			    if( $file_weight <= $file_max_weight ):
			    
				    $fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;
				    // and move it to the destination folder
				    
				    if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ):					  
					$query ="Update tberkas set listrik='$fileNewName' where nisn = '$nisn'";
					unlink($destination.$glama);
					$url = "index.php?page=tampil_berkas_slip_listrik";
					$alert = "Update Berhasil";
					 
				   else:
					 $url = "index.php?page=tampil_berkas_slip_listrik";
                                         $alert = "Update Gagal";
				    endif;
				    
			    else:
			        $url = "index.php?page=tampil_berkas_slip_listrik";
			       $alert = "File Terlalu Besar !!! Max 500 kb";
			    endif;
			    
			else:
			     $url = "index.php?page=tampil_berkas_slip_listrik";
			      $alert = "File Tidak Didukung !!! Harus jpg, png, gif, pdf";
			endif;
		    }
	break;

	case 'Ganti_gaji':
	//Edit User
	$qr=mysql_query("select * from tberkas left join login on login.nisn = tberkas.nisn where tberkas.nisn = '$nisn'");
	  $dt=mysql_fetch_array($qr);
	  $c=$dt['username'];
	  $glama=$dt['gaji'];
	  $destination = 'berkas/'.$c.'/'; // where our files will be stored
	  
	if( $file['error'] == 0 )
		    {
			// check if the extension is accepted
			if( in_array($file_extension, $ok_ext)):
			
			    // check if the size is not beyond expected size
			    if( $file_weight <= $file_max_weight ):
			    
				    $fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;
				    // and move it to the destination folder
				    
				    if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ):					  
					$query ="Update tberkas set gaji='$fileNewName' where nisn = '$nisn'";
					unlink($destination.$glama);
					$url = "index.php?page=tampil_berkas_gaji";
					$alert = "Update Berhasil";
					 
				   else:
					 $url = "index.php?page=tampil_berkas_gaji";
                                         $alert = "Update Gagal";
				    endif;
				    
			    else:
			        $url = "index.php?page=tampil_berkas_gaji";
			       $alert = "File Terlalu Besar !!! Max 500 kb";
			    endif;
			    
			else:
			     $url = "index.php?page=tampil_berkas_gaji";
			      $alert = "File Tidak Didukung !!! Harus jpg, png, gif, pdf";
			endif;
		    }
	break;

	case 'Ganti_skm':
	//Edit User
	$qr=mysql_query("select * from tberkas left join login on login.nisn = tberkas.nisn where tberkas.nisn = '$nisn'");
	  $dt=mysql_fetch_array($qr);
	  $c=$dt['username'];
	  $glama=$dt['skm'];
	  $destination = 'berkas/'.$c.'/'; // where our files will be stored
	  
	if( $file['error'] == 0 )
		    {
			// check if the extension is accepted
			if( in_array($file_extension, $ok_ext)):
			
			    // check if the size is not beyond expected size
			    if( $file_weight <= $file_max_weight ):
			    
				    $fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;
				    // and move it to the destination folder
				    
				    if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ):					  
					$query ="Update tberkas set skm='$fileNewName' where nisn = '$nisn'";
					unlink($destination.$glama);
					$url = "index.php?page=tampil_berkas_skm";
					$alert = "Update Berhasil";
					 
				   else:
					 $url = "index.php?page=tampil_berkas_skm";
                                         $alert = "Update Gagal";
				    endif;
				    
			    else:
			        $url = "index.php?page=tampil_berkas_skm";
			       $alert = "File Terlalu Besar !!! Max 500 kb";
			    endif;
			    
			else:
			     $url = "index.php?page=tampil_berkas_skm";
			      $alert = "File Tidak Didukung !!! Harus jpg, png, gif, pdf";
			endif;
		    }
	break;

	case 'Ganti_kip':
	//Edit User
	$qr=mysql_query("select * from tberkas left join login on login.nisn = tberkas.nisn where tberkas.nisn = '$nisn'");
	  $dt=mysql_fetch_array($qr);
	  $c=$dt['username'];
	  $glama=$dt['kip'];
	  $destination = 'berkas/'.$c.'/'; // where our files will be stored
	  
	if( $file['error'] == 0 )
		    {
			// check if the extension is accepted
			if( in_array($file_extension, $ok_ext)):
			
			    // check if the size is not beyond expected size
			    if( $file_weight <= $file_max_weight ):
			    
				    $fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;
				    // and move it to the destination folder
				    
				    if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ):					  
					$query ="Update tberkas set kip='$fileNewName' where nisn = '$nisn'";
					unlink($destination.$glama);
					$url = "index.php?page=tampil_berkas_kip";
					$alert = "Update Berhasil";
					 
				   else:
					 $url = "index.php?page=tampil_berkas_kip";
                                         $alert = "Update Gagal";
				    endif;
				    
			    else:
			        $url = "index.php?page=tampil_berkas_kip";
			       $alert = "File Terlalu Besar !!! Max 500 kb";
			    endif;
			    
			else:
			     $url = "index.php?page=tampil_berkas_kip";
			      $alert = "File Tidak Didukung !!! Harus jpg, png, gif, pdf";
			endif;
		    }
	break;

	case 'Ganti_sertifikat':
	//Edit User
	$qr=mysql_query("select * from tberkas left join login on login.nisn = tberkas.nisn where tberkas.nisn = '$nisn'");
	  $dt=mysql_fetch_array($qr);
	  $c=$dt['username'];
	  $glama=$dt['sertifikat'];
	  $destination = 'berkas/'.$c.'/'; // where our files will be stored
	  
	if( $file['error'] == 0 )
		    {
			// check if the extension is accepted
			if( in_array($file_extension, $ok_ext)):
			
			    // check if the size is not beyond expected size
			    if( $file_weight <= $file_max_weight ):
			    
				    $fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;
				    // and move it to the destination folder
				    
				    if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ):					  
					$query ="Update tberkas set sertifikat='$fileNewName' where nisn = '$nisn'";
					unlink($destination.$glama);
					$url = "index.php?page=tampil_berkas_sertifikat";
					$alert = "Update Berhasil";
					 
				   else:
					 $url = "index.php?page=tampil_berkas_sertifikat";
                                         $alert = "Update Gagal";
				    endif;
				    
			    else:
			        $url = "index.php?page=tampil_berkas_sertifikat";
			       $alert = "File Terlalu Besar !!! Max 500 kb";
			    endif;
			    
			else:
			     $url = "index.php?page=tampil_berkas_sertifikat";
			      $alert = "File Tidak Didukung !!! Harus jpg, png, gif, pdf";
			endif;
		    }
	break;

	case 'Pengecekan_Berkas':
	//cek syarat sesuai/tidak
	
	
	$query ="update tberkas set ket_pas_foto='$group2', ket_ijazah='$group3' , ket_rapor='$group4', ket_akta='$group5', ket_kk='$group6', ket_ktp_orangtua='$group7', ket_listrik='$group8', ket_gaji='$group9' where nisn = '$nisn'";
	
	
		$url = "index.php?page=berkas";
		$alert = "Simpan Data Berhasil"; 
	break;	


	case 'Tambah_Jurusan':
	
	 	$query ="insert into tjurusan (id_jurusan,nama_jurusan) value ('','$nama_jurusan')";
		$url = "index.php?page=tampil_jurusan"; 
		$alert = "Tambah Data Berhasil";
	break;

     case 'Hapus_Jurusan':
	
		$query = "delete from tjurusan where id_jurusan='$_GET[id_jurusan]'";
		$url = "index.php?page=tampil_jurusan";
		$alert = "Hapus Data Berhasil";
	break;

	case 'Edit_Jurusan':
	
	$query = "update tjurusan set id_jurusan='$id_jurusan', nama_jurusan='$nama_jurusan' where id_jurusan = '$id_jurusan'";
	$url = "index.php?page=tampil_jurusan";
	 $alert = "Data Sudah Diubah";
  	break;

  	case 'Tambah_tahun':
	
	 	$query ="insert into ttahun (id_tahun,tahun,aktif) value ('','$tahun','T')";
		$url = "index.php?page=tampil_tahun"; 
		$alert = "Tambah Data Berhasil";
	break;

     case 'Hapus_tahun':
	
		$query = "delete from ttahun where id_tahun='$_GET[id_tahun]'";
		$url = "index.php?page=tampil_tahun";
		$alert = "Hapus Data Berhasil";
	break;

	case 'Edit_tahun':
	
	$query = "update ttahun set id_tahun='$id_tahun', tahun='$tahun' where id_tahun = '$id_tahun'";
	$url = "index.php?page=tampil_tahun";
	 $alert = "Data Sudah Diubah";
  	break;

  	case 'Tambah_waktu':
	
	 	$query ="insert into twaktu (id_waktu,hari,tanggal,awal,akhir) value ('','$hari','$tanggal','$awal','$akhir')";
		$url = "index.php?page=tampil_waktu"; 
		$alert = "Tambah Data Berhasil";
	break;

     case 'Hapus_waktu':
	
		$query = "delete from twaktu where id_waktu='$_GET[id_waktu]'";
		$url = "index.php?page=tampil_waktu";
		$alert = "Hapus Data Berhasil";
	break;

	case 'Edit_waktu':
	
	$query = "update twaktu set id_waktu='$id_waktu', hari='$hari', tanggal='$tanggal', awal='$awal', akhir='$akhir' where id_waktu = '$id_waktu'";
	$url = "index.php?page=tampil_waktu";
	 $alert = "Data Sudah Diubah";
  	break;

  	case 'Aktivasi_tahun_y':

  	 if ($_GET['id_tahun'] != ""){
	       $cek="SELECT * FROM ttahun WHERE aktif='Y' ";
	       $result = mysql_query($cek);
	       if(mysql_num_rows($result) > 0)
	       {
		    $url = "index.php?page=tampil_tahun";
		    $alert = "Tahun ada yang aktif";
	       }
	       else {
	
	 	$query ="update ttahun set aktif='Y' where id_tahun = '$_GET[id_tahun]'";
		$url = "index.php?page=tampil_tahun";
		$alert = "Edit Data Berhasil";  }}
	break;

	case 'Aktivasi_tahun_t':
	
	 	$query ="update ttahun set aktif='T' where id_tahun = '$_GET[id_tahun]'";
		$url = "index.php?page=tampil_tahun";
		$alert = "Edit Data Berhasil";  
	break;

	case 'lulus':
	
	 	$query ="update tformulirpendaftaran set lulus='Y' where id_formulir = '$_GET[id_formulir]'";
		$url = "index.php?page=tampil_calonmahasiswa";
		$alert = "Edit Data Berhasil";  
	break;

	case 'tidak_lulus':
	
	 	$query ="update tformulirpendaftaran set lulus='T' where id_formulir = '$_GET[id_formulir]'";
		$url = "index.php?page=tampil_calonmahasiswa";
		$alert = "Edit Data Berhasil";  
	break;

	case 'Tambah_User':

	 	$query ="insert into login (id_user,username,password,level) value ('','$username','$password','$level')";
		$url = "index.php?page=tampil_user"; 
		$alert = "Tambah Data Berhasil";
	
	break;

	case 'Hapus_User':

		$query = "delete from login where id_user='$_GET[id_user]'";
		$url = "index.php?page=tampil_user";
		$alert = "Hapus Data Berhasil";
	break;

	
     }


// Menjalankan/mengeksekusi perintah SQL di atas
mysql_query($query);
mysql_query($query2);
mysql_query($query3);

if($tipe != ""){
	echo "<script>
			window.alert('$alert');
			window.location = '$url';
		</script>";
}

//untuk Membuat Log atau History


?>