<?php
ini_set("display_errors",0);
// Definisi database
include("../../includes/defines.php");
// Kumpulan fungsi
include("../../includes/fungsi.php");
// Koneksi ke database
include("../../includes/connect.php");
// Membuat session login
cekSession();




class MC_TABLE extends FPDF
{
var $widths;
var $aligns;

function Header()
{
    $show5 = mysql_query("select * from ttahun where aktif='Y'"); 
$data5 = mysql_fetch_array($show5);
    // Logo
    $this->Image('politala.png',10,4,30);
    
    // Arial bold 12
    $this->SetFont('Times','B',20);
    
    // Geser Ke Kanan 35mm
    $this->Cell(20);
    
    // Judul
    $this->Cell(0,5,'KARTU TANDA PESERTA',0,2,'C');
    $this->Ln(6);
    $this->Cell(40);
    $this->Cell(0,5,'UMPN POLITEKNIK NEGERI TANAH LAUT'.$data5['tahun'],0,1,'C');
    
     $this->Ln(8);
    // Garis Bawah Double
    $this->Cell(190,1,'','B',2,'L');
    $this->Cell(190,1,'','B',2,'L');
    
    // Line break 5mm
    $this->Ln(4);
}

// Page footer
function Footer()
{
    // Posisi 15 cm dari bawah
    $this->SetY(-15);
    
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    
    // Page number
  }


function SetWidths($w)
{
    //Set the array of column widths
    $this->widths=$w;
}

function SetAligns($a)
{
    //Set the array of column alignments
    $this->aligns=$a;
}

function Row($data)
{
    //Calculate the height of the row
    $nb=0;
    for($i=0;$i<count($data);$i++)
        $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i][0]));
    $h=5*$nb;
    //Issue a page break first if needed
    $this->CheckPageBreak($h);
    //Draw the cells of the row
    for($i=0;$i<count($data);$i++)
    {
        $w=$this->widths[$i];
        $a=isset($data[$i][1]) ? $data[$i][1] : 'L';
        //Save the current position
        $x=$this->GetX();
        $y=$this->GetY();
        //Draw the border
        $this->Rect($x,$y,$w,$h);
        //Print the text
        $this->MultiCell($w,5,$data[$i][0],0,$a);
        //Put the position to the right of the cell
        $this->SetXY($x+$w,$y);
    }
    //Go to the next line
    $this->Ln($h);
}

function CheckPageBreak($h)
{
    //If the height h would cause an overflow, add a new page immediately
    if($this->GetY()+$h>$this->PageBreakTrigger)
        $this->AddPage($this->CurOrientation);
}

function NbLines($w,$txt)
{
    //Computes the number of lines a MultiCell of width w will take
    $cw=&$this->CurrentFont['cw'];
    if($w==0)
        $w=$this->w-$this->rMargin-$this->x;
    $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
    $s=str_replace("\r",'',$txt);
    $nb=strlen($s);
    if($nb>0 and $s[$nb-1]=="\n")
        $nb--;
    $sep=-1;
    $i=0;
    $j=0;
    $l=0;
    $nl=1;
    while($i<$nb)
    {
        $c=$s[$i];
        if($c=="\n")
        {
            $i++;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
            continue;
        }
        if($c==' ')
            $sep=$i;
        $l+=$cw[$c];
        if($l>$wmax)
        {
            if($sep==-1)
            {
                if($i==$j)
                    $i++;
            }
            else
                $i=$sep+1;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
        }
        else
            $i++;
    }
    return $nl;
}
}
/*
$pdf->Row(array(
                array($no,'C'),
                array($item['tahun'],'C'),
                array(substr($item['judul'],0,40)),
                array(value_array($kategoriArray, $item['idkategoriresearch'], 'nama')),
                array('Ketua','C'),
                array($item['abstraksi']!=''?"ADA":'-','C'),
                array($item['full']!=''?"ADA":'-','C'),
                array($item['proposal']!=''?"ADA":'-','C'),
                array($item['lap_kemajuan']!=''?"ADA":'-','C'),
                array($item['bukti_kontrak']!=''?"ADA":'-','C'),
                array($item['lap_akhir']!=''?"ADA":'-','C'),
                array($item['bukti_publikasi']!=''?"ADA":'-','C')
             ));
*/
?>
