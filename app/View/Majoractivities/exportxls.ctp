<?php
//processing form submitted
 
//if (!isset($_POST['btnSubmit'])) exit;
 
//include PHPExcel library
require_once "Classes/PHPExcel/IOFactory.php";
 
//load Excel template file
$objTpl = PHPExcel_IOFactory::load("reports/activities.xls");
$objTpl->setActiveSheetIndex(0);  //set first sheet as active
$i=4;
foreach ($rows as $row):
  
  $objTpl->getActiveSheet()->setCellValue('A'.$i, h($row['Objective']['objective_name']));
  $objTpl->getActiveSheet()->setCellValue('B'.$i, h($row['Measure']['measure_name']));
  $objTpl->getActiveSheet()->setCellValue('C'.$i, h($row['Majoractivity']['activity_name']));
  $objTpl->getActiveSheet()->setCellValue('D'.$i, h($row['Majoractivity']['activity_weight']));
  $objTpl->getActiveSheet()->setCellValue('E'.$i, h($row['Majoractivity']['in_quality']));
  $objTpl->getActiveSheet()->setCellValue('F'.$i, h($row['Majoractivity']['in_quntity']));
  $objTpl->getActiveSheet()->setCellValue('G'.$i, h($row['Majoractivity']['in_time']));
  $objTpl->getActiveSheet()->setCellValue('H'.$i, h($row['Majoractivity']['in_cost']));
  
  //$objTpl->getActiveSheet()->getStyle('D'.$i.':'.'H'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
  //$objTpl->getActiveSheet()->getStyle('G'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
  $objTpl->getActiveSheet()->getStyle('A'.$i.':'.'H'.$i)->getAlignment()->setWrapText(true);
 $objTpl->getActiveSheet()->getStyle('A'.$i.':'.'H'.$i)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_TOP);
 $i++;
 endforeach;
 $objTpl->getActiveSheet()->setCellValue('A'.$i,'prepared by:');
 $objTpl->getActiveSheet()->setCellValue('C'.$i, 'Aproved by:');
 $i++;
 $objTpl->getActiveSheet()->setCellValue('A'.$i,'Signithure:');
 $objTpl->getActiveSheet()->setCellValue('C'.$i, 'Signithure:');
//prepare download
$filename=mt_rand(1,100000).'.xls'; //just some random filename
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$filename.'"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objTpl, 'Excel5');  //downloadable file is in Excel 2003 format (.xls)
$objWriter->save('php://output');  //send it to user, of course you can save it to disk also!
 
exit; //done.. exiting!
?>
