<?php
//processing form submitted
 
//if (!isset($_POST['btnSubmit'])) exit;
 
//include PHPExcel library
require_once "Classes/PHPExcel/IOFactory.php";
 
//load Excel template file
$objTpl = PHPExcel_IOFactory::load("reports/initiatives.xls");
$objTpl->setActiveSheetIndex(0);  //set first sheet as active
$i=4;
foreach ($rows as $row):
  
  $objTpl->getActiveSheet()->setCellValue('A'.$i, h($row['Initiative']['initiative_name']));
  $objTpl->getActiveSheet()->setCellValue('B'.$i, h($row['Initiative']['initiative_description']));
  $objTpl->getActiveSheet()->setCellValue('C'.$i, h($row['Initiative']['initiative_importance']));
  $objTpl->getActiveSheet()->setCellValue('D'.$i, h($row['Initiative']['deliverable']));
  $objTpl->getActiveSheet()->setCellValue('E'.$i, h($row['Initiative']['budget']));
  $objTpl->getActiveSheet()->setCellValue('F'.$i, h($row['Initiative']['project_owner']));
  $objTpl->getActiveSheet()->setCellValue('G'.$i, h($row['Initiative']['implimenter']));
  $objTpl->getActiveSheet()->setCellValue('H'.$i, h($row['Initiative']['start_date']));
  $objTpl->getActiveSheet()->setCellValue('I'.$i, h($row['Initiative']['end_date']));
  $objTpl->getActiveSheet()->getStyle('A'.$i.':'.'I'.$i)->getAlignment()->setWrapText(true);
 $objTpl->getActiveSheet()->getStyle('A'.$i.':'.'I'.$i)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_TOP);
 $i++;
 endforeach;
//prepare download
$filename=mt_rand(1,100000).'.xls'; //just some random filename
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$filename.'"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objTpl, 'Excel5');  //downloadable file is in Excel 2003 format (.xls)
$objWriter->save('php://output');  //send it to user, of course you can save it to disk also!
 
exit; //done.. exiting!
?>
