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
$sekolah = mysql_query("SELECT id_sekolah,nama_sekolah FROM tsekolah WHERE id_kabupaten='$id_kabupaten' order by nama_sekolah");
echo "<option>-- Pilih sekolah --</option>";
while($k = mysql_fetch_array($sekolah)){
    echo "<option value=\"".$k['id_sekolah']."\">".$k['nama_sekolah']."</option>\n";
}
?>
