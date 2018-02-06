<?php
include '../koneksi.php';

require('pdf/fpdf.php');
require('pdf/MC_Table.php');
        
 
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

    $nim = $_GET['nim'];
    $id_kelas = $_GET['id_kelas'];
     
    //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
    
    //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
    $update = mysql_query("UPDATE tmahasiswa SET sudah = 'ya' where nim = '$_GET[nim]' and id_kelas = '$_GET[id_kelas]'  ");
    $show = mysql_query("select * from tmahasiswa left join tkelas on tmahasiswa.id_kelas = tkelas.id_kelas where nim = '$_GET[nim]' and tmahasiswa.id_kelas = '$_GET[id_kelas]' ") or die(mysql_error());
   

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
$pdf->SetFont('Times','B',12);
$pdf->Cell(190,1,'FORM PENGAMBILAN',0,1,'C');
$pdf->Ln(3);
$pdf->SetFont('Times','B',12);
$pdf->Cell(190,2,'KARTU HASIL STUDI (KHS)',0,3,'C');

$pdf->SetFont('Times','',12);
$pdf->Ln(10);
$pdf->Cell(15);
$pdf->Cell(120,1,'Saya yang bertanda tangan di bawah ini :',0,1,'L');
$pdf->Ln(10);
$pdf->Cell(25);
$pdf->Cell(120,1,'Nama                             : ' .$data['nama_mahasiswa'],0,1,'L');
$pdf->Ln(8);
$pdf->Cell(25);
$pdf->Cell(120,1,'NIM                               : ' .$data['nim'],0,1,'L');
$pdf->Ln(8);
$pdf->Cell(25);
$pdf->Cell(120,1,'Kelas                              : ' .$data['namakelas'],0,1,'L');
$pdf->Ln(5);

$pdf->Ln(1);
$pdf->SetFont('Times','',12);
$pdf->Cell(15);
$pdf->MultiCell(160,5,'Telah mengisi kuisioner dosen dan mata kuliah. Surat ini sebagai syarat pengambilan Kartu Hasil Studi (KHS).',0,'J');

$pdf->Ln(30);
$pdf->Cell(110);
$pdf->Cell(115,1,'Pelaihari, '.$tgl_spt.'',0,1,'L');



$pdf->SetFont('Times','B',12);
$pdf->Ln(18);
$pdf->Cell(110);
$pdf->Cell(115,5,$data['nama_mahasiswa'],0,1,'L');
$pdf->SetFont('Times','B',12);
$pdf->Cell(110);
$pdf->Cell(115,5,'NIM '. $data['nim'],0,1,'L');


$pdf->Ln(5);
$pdf->Ln(5);



$pdf->Output();
}
?>