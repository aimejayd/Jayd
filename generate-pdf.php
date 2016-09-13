<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
	//Title
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'PDF From mysql',0,1,'C');
	$this->Ln(10);
	//Ensure table header is output
	parent::Header();
}
}

//Connect to database
mysql_connect('localhost','root','');
mysql_select_db('insurance');

$pdf=new PDF();
$pdf->AddPage();
//First table: put all columns automatically
$pdf->Table('SELECT `cons_no`, `clnt_name`,`clnt_phone`,`amount` from tbl_clients order by `cid` ');
$pdf->AddPage();
//Second table: specify 3 columns
$pdf->AddCol('cons_no',40,'','C');
$pdf->AddCol('clnt_name',40,'','C');
$pdf->AddCol('clnt_phone',40,'','C');
$pdf->AddCol('amount',40,'','C');
//$pdf->AddCol('info',40,'','C');
$prop=array('HeaderColor'=>array(255,150,100),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
$pdf->Table('select cons_no, clnt_name,clnt_phone, amount from tbl_clients order by cid ',$prop);

//$pdf->Output("C:\Users\John\Desktop/somename.pdf",'F'); 

header('Content-type: projekter/pdf');
$pdf->Output('projekter'.".pdf", 'D'); 
header('Location: '.projekter.".pdf");
?>
