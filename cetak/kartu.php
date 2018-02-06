<?php
ini_set("display_errors",0);
// Definisi database
include("../includes/defines.php");
// Kumpulan fungsi
include("../includes/fungsi.php");
// Koneksi ke database
include("../includes/connect.php");
// Membuat session login
cekSession();

require('pdf/fpdf.php');
require('pdf/MC_Table.php');
        
 
 function dateBahasaIndo($tgl_berangkat){


$bulan=array(


                '01'=>'Januari',


                '02'=>'Februari',


                '03'=>'Maret',


                '04'=>'April',


                '05'=>'Mei',


                '06'=>'Juni',


                '07'=>'Juli',


                '08'=>'Agustus',


                '09'=>'September',


                '10'=>'Oktober',


                '11'=>'November',


                '12'=>'Desember',


                                );


$pecah=explode('-',$tgl_berangkat);


$tgl=$pecah[2];


$bln=$pecah[1];


$thn=$pecah[0];


return $tgl.' '.$bulan[$bln].' '.$thn;


}
    $nisn = $_GET['nisn'];
     
    //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
    
    $show = mysql_query("SELECT * FROM tformulirpendaftaran left join tjurusan on tjurusan.id_jurusan = tformulirpendaftaran.pilihan1 left join tprovinsi on tprovinsi.id_provinsi = tformulirpendaftaran.id_provinsi  left join tkabupaten on tkabupaten.id_kabupaten = tformulirpendaftaran.id_kabupaten left join tkecamatan on tkecamatan.id_kecamatan = tformulirpendaftaran.id_kecamatan left join tsekolah on tsekolah.id_sekolah = tformulirpendaftaran.id_sekolah where nisn = '$_GET[nisn]' ") or die(mysql_error());

    $show2 = mysql_query("select * from tberkas where nisn = '$_SESSION[nisn]'");

    $show3 = mysql_query("SELECT * FROM tformulirpendaftaran left join tjurusan on tjurusan.id_jurusan = tformulirpendaftaran.pilihan2 where nisn = '$_SESSION[nisn]'");
    $show4 = mysql_query("select * from twaktu");
    $show5 = mysql_query("select * from ttahun where aktif='Y'");
   

  if(mysql_num_rows($show) == 0){
        
        //jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> beranda.php
        echo '<script>window.history.back()</script>';

    }else{
    
        //jika data ditemukan, maka membuat variabel $data
        $data = mysql_fetch_assoc($show); 
        $data2 = mysql_fetch_assoc($show2);
        $data3 = mysql_fetch_assoc($show3);
        $data4 = mysql_fetch_assoc($show4);
        $data5 = mysql_fetch_assoc($show5);

class PDF extends FPDF
{

}

//Membuat file PDF
$pdf = new PDF('P','mm','A4');
$pdf = new MC_Table();

//Alias total halaman dengan default {nb} (berhubungan dengan PageNo())
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image('../berkas/'.$_SESSION['username'].'/'.$data2['pas_foto'],15,50,50);
$pdf->SetFont('Times','',12);
$pdf->Ln(10);
$pdf->Cell(60);
$pdf->Cell(120,1,'NOMOR PESERTA  : ' .$data['no_registrasi'],0,1,'L');
$pdf->Ln(8);
$pdf->Cell(60);
$pdf->Cell(120,1,'NAMA PESERTA     : ' .$data['nama_mahasiswa'],0,1,'L');
$pdf->Ln(8);
$pdf->Cell(60);
$pdf->Cell(120,1,'JENIS KELAMIN      : ' .$data['jenis_kelamin'],0,1,'L');
$pdf->Ln(8);
$pdf->Cell(60);
$pdf->Cell(120,1,'TEMPAT LAHIR       : ' .$data['tlahir'],0,1,'L');
$pdf->Ln(8);
$pdf->Cell(60);
$pdf->Cell(120,1,'ALAMAT                   : ' .$data['alamat'],0,1,'L');
$pdf->Ln(8);
$pdf->Cell(60);
$pdf->Cell(120,1,'ASAL SEKOLAH      : ' .$data['nama_sekolah'],0,1,'L');
$pdf->Ln(8);
$pdf->Cell(60);
$pdf->Cell(120,1,'PROVINSI                  : ' .$data['nama_provinsi'],0,1,'L');
$pdf->Ln(8);
$pdf->Cell(60);
$pdf->Cell(120,1,'KABUPATEN            : ' .$data['nama_kabupaten'],0,1,'L');
$pdf->Ln(15);
$pdf->Cell(5);
$pdf->Cell(120,1,'PILIHAN PROGRAM STUDI',0,1,'L');
$pdf->Ln(5);
$pdf->Cell(5);
$pdf->Cell(40,1,'1. ' .$data['nama_jurusan'],0,0,'L');
$pdf->Cell(40);
$pdf->Cell(120,1,'2. ' .$data3['nama_jurusan'],0,1,'L');

$pdf->Ln(10);
$pdf->Cell(5);
$pdf->Cell(120,1,'UJIAN MASUK : ',0,1,'L');
$pdf->Ln(5);
$pdf->Cell(5);
$pdf->Cell(120,1,'HARI                          : ' .$data4['hari'],0,1,'L');
$pdf->Ln(5);
$pdf->Cell(5);
$pdf->Cell(120,1,'TANGGAL                 : ' .$data4['tanggal'],0,1,'L');
$pdf->Ln(5);
$pdf->Cell(5);
$pdf->Cell(120,1,'WAKTU                      : 08.00 s/d selesai',0,1,'L');
$pdf->Ln(5);
$pdf->Cell(5);
$pdf->Cell(120,1,'TEMPAT                    : Kampus Politeknik Negeri Tanah Laut' ,0,1,'L');
$pdf->Ln(3);
$pdf->Cell(5);
$pdf->MultiCell(180,5,'MATERI                     : Matematika, Bahasa Inggris, Bahasa Indonesia, IPA Terpadu (Fisika dan Kimia)',0,'J');

$pdf->Ln(10);
$pdf->Cell(5);
$pdf->Cell(40,1,'HARUS DIBAWA PADA SAAT UJIAN',0,1,'L');
$pdf->Cell(100);
$pdf->Cell(120,1,'PAKAIAN YANG DIGUNAKAN',0,1,'L');
$pdf->Ln(5);
$pdf->Cell(5);
$pdf->Cell(40,1,'1. Kartu tanda peserta (kartu ini)',0,0,'L');
$pdf->Cell(55);
$pdf->Cell(120,1,'1. Celana / Rok Hitam Kain',0,1,'L');
$pdf->Ln(5);
$pdf->Cell(5);
$pdf->Cell(40,1,'2. Pulpen Hitam',0,0,'L');
$pdf->Cell(55);
$pdf->Cell(120,1,'2. Kemeja Putih',0,1,'L');
$pdf->Ln(5);
$pdf->Cell(100);
$pdf->Cell(120,1,'3. Bersepatu Hitam',0,0,'L');
$pdf->Ln(10);
$pdf->Cell(70);
$pdf->Cell(120,1,'PERNYATAAN',0,1,'L');
$pdf->Ln(3);
$pdf->Cell(5);
$pdf->MultiCell(180,5,'Saya menyatakan bahwa data yang saya isikan dalam formulir pendaftran UMPN Politeknik Negeri Tanah Laut '.$data5['tahun'].' adalah benar dan saya bersedia menerima ketentuan di Perguruan Tinggi dan Program Studi yang saya pilih. Saya bersedia menerima sanksi pembatalan penerimaan di Politeknik Negeri Tanah Laut apabila melanggar pernyataan ini.',0,'J');
$pdf->Ln(30);
$pdf->Cell(120);
$pdf->Cell(120,1,'('.$data['nama_mahasiswa'].')',0,1,'L');





$pdf->Ln(5);
$pdf->Ln(5);



$pdf->Output();
}
?>