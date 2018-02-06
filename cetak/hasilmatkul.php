<?php
include '../koneksi.php';

require('pdf/fpdf.php');
require('pdf/MC_TABLE2.php');
        
 
 $format = array(
                    'Sun' => 'Minggu',
                    'Mon' => 'Senin',
                    'Tue' => 'Selasa',
                    'Wed' => 'Rabu',
                    'Thu' => 'Kamis',
                    'Fri' => 'Jumat',
                    'Sat' => 'Sabtu',
                    'Jan' => 'Januari',
                    'Feb' => 'Februari',
                    'Mar' => 'Maret',
                    'Apr' => 'April',
                    'May' => 'Mei',
                    'Jun' => 'Juni',
                    'Jul' => 'Juli',
                    'Aug' => 'Agustus',
                    'Sep' => 'September',
                    'Oct' => 'Oktober',
                    'Nov' => 'November',
                    'Dec' => 'Desember'
                    );
    $tgl_spt = date("d M Y");
    $tgl_spt=strtr($tgl_spt,$format);

    $nik = $_GET['nik'];
    $kodematkul = $_GET['kodematkul'];
    $id_kelas = $_GET['id_kelas'];
    $tahun_ajaran = $_GET['tahun_ajaran'];
     
    //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
    
    //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
    $show = mysql_query("SELECT *, tdosen.nama_dosen, tkelas.namakelas, thkusionermat.balasan, thkusionermat.evaluasi, tmatkul.nama_m_kuliah from thkusionermat left join tdosen on tdosen.nik = thkusionermat.nik left join tkelas on tkelas.id_kelas=thkusionermat.id_kelas left join tmatkul on tmatkul.kodematkul = thkusionermat.kodematkul where thkusionermat.nik = '$_GET[nik]' and thkusionermat.id_kelas = '$_GET[id_kelas]' and thkusionermat.tahun_ajaran = '$_GET[tahun_ajaran]' and thkusionermat.kodematkul= '$_GET[kodematkul]' ") or die(mysql_error());
   

  if(mysql_num_rows($show) == 0){
        
        //jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> beranda.php
        echo '<script>window.history.back()</script>';

    }else{
    
        //jika data ditemukan, maka membuat variabel $data
        $data = mysql_fetch_assoc($show); //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
         
    

class PDF extends FPDF
{

}

//Membuat file PDF
$pdf = new PDF('P','mm','A4');
$pdf = new MC_Table();

//Alias total halaman dengan default {nb} (berhubungan dengan PageNo())
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',14);
$pdf->Cell(190,1,'HASIL KUISIONER DOSEN TAHUN AJARAN '.$_GET['tahun_ajaran'],0,1,'C');
$pdf->Ln(3);
$pdf->SetFont('Times','',12);
$pdf->Ln(3);
$pdf->Cell(6);
$pdf->Cell(12,1,'Nama                        : ' .$data['nama_dosen'],0,1,'L');
$pdf->Ln(3);
$pdf->Cell(6);
$pdf->Cell(12,1,'Nama Mata Kuliah   : ' .$data['nama_m_kuliah'],0,1,'L');
$pdf->Ln(3);
$pdf->Cell(6);   
$pdf->Cell(12,1,'Kelas                         : ' .$data['namakelas'],0,1,'L');
$pdf->Ln(5);

$pdf->SetWidths(array(10,165));
  $pdf->Ln();
  $pdf->Cell(6);
  $pdf->SetFont('Times','B',10);
    $pdf->Row(array(
                array("NO",'C'),
                array("Kritik dan Saran",'C')
    ));

   
    $p = mysql_query("SELECT DISTINCT thkusionermat.kritik , thkusionermat.nik FROM thkusionermat where thkusionermat.nik = '$_GET[nik]' and thkusionermat.id_kelas = '$_GET[id_kelas]' and thkusionermat.tahun_ajaran = '$_GET[tahun_ajaran]' and thkusionermat.kodematkul = '$_GET[kodematkul]' ") or die(mysql_error());
                          $no = 0;
     while ($s= mysql_fetch_array($p))   

    { 
     $no++;   
    $pdf->Cell(6);
    $pdf->SetFont('Times','',10);
    $pdf->Row(array(
                array($no,'C'),
                array($s['kritik'],'L' )
    ));
}

$pdf->SetWidths(array(175));
  $pdf->Cell(6);
  $pdf->SetFont('Times','B',12);
    $pdf->Row(array(
                array("Evaluasi Ketua Program Studi",'C'),

    ));
    $pdf->Cell(6);

    $pdf->SetFont('Times','',11);
    $pdf->Row(array(
                array($data['evaluasi']."\n\n\n",'L'),

    ));

$pdf->SetWidths(array(175));
  $pdf->Cell(6);
  $pdf->SetFont('Times','B',12);
    $pdf->Row(array(
                array("Tanggapan Dosen",'C'),

    ));

    $pdf->Cell(6);

    $pdf->SetFont('Times','',11);
    $pdf->Row(array(
                array($data['balasan']."\n\n\n",'L'),

    ));



$pdf->Output();
}
?>