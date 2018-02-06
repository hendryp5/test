<?php
ini_set("display_errors",0);
include("includes/defines.php");
include("includes/connect.php");


$username = mysql_real_escape_string(htmlentities($_POST['username']));
$password = mysql_real_escape_string(htmlentities(md5($_POST['password'])));

$sql = mysql_query("select * from login where username = '$username' and aktifasi = 'Y' ");
$i=1;
while ($data = mysql_fetch_array($sql)){
$id_user = $data['id_user'];
$user = $data['username'];
$level = $data['level'];
$pass = $data['password'];
$nisn = $data['nisn'];
$i++;
}

if($username == ""){
echo "<script>
	  alert('Login Gagal');
	  window.location = 'login.php';
	  </script>
	  ";
}

if (($username == $user ) && ($password ==$pass )){
session_start();
	$_SESSION['id_user']=$id_user;
	$_SESSION['username']=$user;
	$_SESSION['level'] = $level;
	$_SESSION['nisn'] = $nisn;
echo "<script>
	  alert('Login sukses');
	  window.location = 'index.php';
	  </script>
	  ";
}
else{
echo "<script>
	  alert('Login Gagal');
	  window.location = 'login.php';
	  </script>
	  ";
}
?>