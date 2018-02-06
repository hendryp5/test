<?php
function getMenu() {
	include("menu.php");
}
function getPage($page){
	if ($page != ""){
		include("page/".$page.".php");
	}
	else{
		include("page/home.php");
	}
}
function cekSession() {
	session_start();
	$user = $_SESSION['username'];
	if  ($user ==""){
	echo "<script>
		window.location = 'login.php';
		</script>";
	}	
}
function getBerkas() {
	include("berkaspendaftaran.php");
}
?>