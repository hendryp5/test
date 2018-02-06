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

$id_kabupaten = $_GET['id_kabupaten'];
$nama_kec = mysql_query("SELECT id_kecamatan,nama_kecamatan FROM tkecamatan WHERE id_kabupaten='$id_kabupaten' order by nama_kecamatan");
echo "<option>-- Pilih Kecamatan --</option>";
while($k = mysql_fetch_array($nama_kec)){
    echo "<option value=\"".$k['id_kecamatan']."\">".$k['nama_kecamatan']."</option>\n";
}
?>
