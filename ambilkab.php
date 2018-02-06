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

$id_provinsi = $_GET['id_provinsi'];
$nama_kab = mysql_query("SELECT id_kabupaten,nama_kabupaten FROM tkabupaten WHERE id_provinsi='$id_provinsi' order by nama_kabupaten");
echo "<option>-- Pilih Kabupaten/Kota --</option>";
while($k = mysql_fetch_array($nama_kab)){
    echo "<option value=\"".$k['id_kabupaten']."\">".$k['nama_kabupaten']."</option>\n";
}
?>
