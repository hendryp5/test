<?php
ini_set("display_errors",0);

// Definisi database
include("includes/defines.php");

// Kumpulan fungsi
include("includes/fungsi.php");

// Koneksi ke database
include("includes/connect.php");

$tipe = $_REQUEST['tipe'];

// Membuat session login
cekSession();


$email = $_GET['email'];

switch ($tipe){   
     case 'Aktivasi':
	//Edit User
	if ($email !="" ){
	      
					
					$query ="update login set aktifasi='Y' where id_user = '$_GET[id_user]'";
					$alert = "Aktivasi Bershasil";
					$url = "index.php?page=tampil_member";
					
					
					date_default_timezone_set('Asia/Jakarta'); // setting time zone;
					$message = "PMBJM <br><br>";
					$message .= " Akun anda sudah aktif silahkan login  <br><br>";
					
					require_once('class.phpmailer.php');
					$mail             = new PHPMailer();
					$body             = "Konfirmasi Registrasi,<br>$message; <br><br>Catatan : <br>Pesan Ini Tidak Perlu Dibalas"; //isi dari email
					$mail->IsSMTP(); // mengirimkan sinyal ke class PHPMail untuk menggunakan SMTP
					$mail->SMTPDebug  = 1;                     // mengaktifkan debug mode (untuk ujicoba)
										   // 1 = Error dan pesan
										   // 2 = Pesan saja
					$mail->SMTPAuth   = true;                  // aktifkan autentikasi SMTP
					$mail->SMTPSecure = "ssl";                 // jenis kemananan
					$mail->Host       = "smtp.gmail.com";      // masukkan GMAIL sebagai smtp server
					$mail->Port       = "465";                   // masukkan port yang digunakan oleh SMTP Gmail
					$mail->Username   = "ayumasykurinnisa@gmail.com";  // GMAIL username
					$mail->Password   = "Sitirosidah14";            // GMAIL password
					$mail->SetFrom('ayumasykurinnisa@gmail.com', 'Ayatul Ahkam'); // masukkan alamat pengririm dan nama pengirim jika alamat email tidak sama, maka yang digunakan alamat email untuk username
					$mail->Subject    = "Konfirmasi Registrasi";//masukkan subject
					$mail->MsgHTML($body);//masukkan isi dari email
					
					$address = "$email"; //masukkan penerima
					$mail->AddAddress($address, "$email"); //masukkan penerima
					$mail->Send();
		}
	       
	       $url2 = "index.php?page=tampil_member";

	break;
}

if($tipe!=''){
      // Menjalankan/mengeksekusi perintah SQL di atas
     mysql_query($query);
     mysql_query($query2);
     mysql_query($query3);
	  
	echo "<script>
			window.alert('$alert');
			window.location = '$url';
		</script>";
} else {
     echo "<script>
     window.alert('Registrasi Gagal');
     window.location = '$url';
     </script>";
}
?>