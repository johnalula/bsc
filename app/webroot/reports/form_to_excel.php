<?php
//processing form submitted
 
if (!isset($_POST['btnSubmit'])) exit;
 
//include PHPExcel library
require_once "../Classes/PHPExcel/IOFactory.php";
 
//load Excel template file
$objTpl = PHPExcel_IOFactory::load("Scorecard_Report.xls");
$objTpl->setActiveSheetIndex(0);  //set first sheet as active
 
$objTpl->getActiveSheet()->setCellValue('H'.'6','Thusday');  //set C1 to current date
$objTpl->getActiveSheet()->getStyle('C2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT); //C1 is right-justified
 
$objTpl->getActiveSheet()->setCellValue('D2', 'Ephrem');
$objTpl->getActiveSheet()->setCellValue('C4', '');
$objTpl->getActiveSheet()->getStyle('C4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT); //C1 is right-justified
$objTpl->getActiveSheet()->getStyle('C4')->getAlignment()->setWrapText(true);  //set wrapped for some long text message

$objTpl->getActiveSheet()->setCellValue('B6', stripslashes($_POST['txtYear']));
$objTpl->getActiveSheet()->setCellValue('E6', stripslashes($_POST['txtPeriod']));

//$objTpl->getActiveSheet()->getColumnDimension('C')->setWidth(40);  //set column C width
//$objTpl->getActiveSheet()->getRowDimension('4')->setRowHeight(120);  //set row 4 height
$objTpl->getActiveSheet()->getStyle('A4:C4')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_TOP); //A4 until C4 is vertically top-aligned
 
//prepare download
$filename=mt_rand(1,100000).'.xls'; //just some random filename
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$filename.'"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objTpl, 'Excel5');  //downloadable file is in Excel 2003 format (.xls)
$objWriter->save('php://output');  //send it to user, of course you can save it to disk also!
 
exit; //done.. exiting!
?>
