<?php

require('fpdf17/library/tcpdf.php');

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'twinkris');
mysqli_set_charset($con, "utf8");
 
function DateThai($strDate){
	$strYear = date("Y",strtotime($strDate))+543;
	$strMonth= date("n",strtotime($strDate));
	$strDay= date("j",strtotime($strDate));
	$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
	$strMonthThai=$strMonthCut[$strMonth];
	return "$strDay $strMonthThai $strYear";
}
function TimeThai($strTime){
	$strHour= date("H",strtotime($strTime));
	$strMinute= date("i",strtotime($strTime));
	$strSeconds= date("s",strtotime($strTime));
	return "$strHour:$strMinute";
}
date_default_timezone_set("Asia/Bangkok");
$strDate = date("Y/n/j");
$strTime = date("H:i:s");

class PDF extends TCPDF {
	public function Footer(){
		$this->Cell(190,0,'','T',1,'',true);
		$this->SetY(-15);
		$this->SetFont('thsarabun','',14);
		$this->SetX(100);
		$this->Cell(0,10,' '.$this->getAliasNumPage()." / " .$this->getAliasNbPages() ,0,0);
	}
}


$pdf = new PDF('P','mm','A4',true,'UTF-8',false); //use new class

$pdf->getNumPages();

$pdf->setPrintHeader(false);

$pdf->SetAutoPageBreak(true,15);

$pdf->AddPage();

	$pdf->Cell(0,10, $pdf->Image("../images/logo.png", $pdf->GetX(50), $pdf->GetY(50),50), 0,1, 'L');
$pdf->SetFont('thsarabunb','',16);	
	$pdf->Cell(0,0,'โรงน้ำปลาอับดุลรามัน จังหวัดปัตตานี',0,1,'C');
	$pdf->Cell(0,5,'รายชื่อลูกค้า',0,1,'C');
	$pdf->Cell(0,10,'',0,1);

	$pdf->SetFont('thsarabunb','',14);

	$pdf->Cell(0,5,'วันที่พิมพ์ '. DateThai($strDate) .' เวลา '. TimeThai($strTime) .' น.',0,1,'R');
	$pdf->SetFont('thsarabunb','',11);
	$html = "
		<table>
			<tr>
				<th>ลำดับ</th>
				<th>ชื่อ-นามสกุล</th>
				<th>รหัสลูกค้า</th>
				<th>เพศ</th>
				<th>เบอร์โทรศัพท์</th>
				<th>อีเมล์</th>
			</tr>
		</table>
		<style>
			table{
				border-collapse:collapse;
				padding:5px;
				background-color:#DCDCDC;
				text-align: center;
			}
			th, td{
				border:0px solid black;
			}
		</style>
	";
	$pdf->WriteHTMLCell(190,0,'','',$html,0,1,'',true);
	
$pdf->SetFont('thsarabun','',9);
$query=mysqli_query($con,"select * from customer");
$i=1;
while($data=mysqli_fetch_array($query)){
	$html = "
		<table>
		<tr>
			<td>". $i . "</td>
			<td>". $data['c_name'] ." ". $data['c_surename'] . "</td>
			<td>" . $data['c_id'] . "</td>
			<td>". $data['c_gender'] ."</td>
			<td>". $data['c_phone'] ."</td>
			<td>". $data['c_email'] ."</td>
		</tr>
		</table>
		<style>
			table{
				padding:5px;
			}
			td{
				border:0px solid black;
			}
		</style>
	";
	$pdf->WriteHTMLCell(190,0,'','',$html,0,1,'',true);
	$i++;
}



$pdf->Output();
