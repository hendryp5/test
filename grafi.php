<!DOCTYPE html>
<html>
<head>
<title>GRAFIK HASIL KUISIONER DOSEN</title>
<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="highcharts.js"></script>
<script type="text/javascript" src="exporting.js"></script>
</head>



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
  text: 'GRAFIK CALON MAHASISWA'
 },
 subtitle: {
  text: ''
 },
 xAxis: {
  categories: ['Jumlah Calon Mahasiswa'],

  labels: {
   rotation: 0,
   align: 'right',
   style: {
    fontSize: '10px',
    fontFamily: 'Verdana, sans-serif'
   }
  }
 },

  yAxis: {
              title: {
              text: 'Jumlah' 
            }
        },

 legend: {
  enabled: true
 },
 series: [ 

  <?php
  if (isset($_POST['id_sekolah'])) {


            $data = mysql_query("SELECT DISTINCT nama_sekolah, count(tformulirpendaftaran.id_sekolah) as jumlah FROM tformulirpendaftaran LEFT JOIN tsekolah ON tsekolah.id_sekolah = tformulirpendaftaran.id_sekolah where tformulirpendaftaran.id_sekolah = '$_POST[id_sekolah]' ");
             while($r=mysql_fetch_array($data)){

            echo "{ name: '".$r['nama_sekolah']."',data: [".$r['jumlah']."]},";
        }
      } else {
          $query=mysql_query("SELECT distinct (tformulirpendaftaran.id_sekolah), nama_sekolah FROM tformulirpendaftaran left join tsekolah on tsekolah.id_sekolah = tformulirpendaftaran.id_sekolah"); 

        while($r=mysql_fetch_array($query)){
            $nama_sekolah = $r['nama_sekolah'];
            $id_sekolah    = $r['id_sekolah'];
            $data = mysql_fetch_array(mysql_query("SELECT count(tformulirpendaftaran.id_sekolah) as jumlah FROM tformulirpendaftaran LEFT JOIN tsekolah ON tsekolah.id_sekolah = tformulirpendaftaran.id_sekolah where tformulirpendaftaran.id_sekolah='$id_sekolah'"));
                                 $jumlah = $data['jumlah'];

            echo "{ name: '".$nama_sekolah."',data: [".$jumlah."]},";
          }
      }
        ?>
    
        ]
});
</script>



