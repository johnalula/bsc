<?php

require_once "Classes/PHPExcel/IOFactory.php";
 
//load Excel template file
$objTpl = PHPExcel_IOFactory::load("reports/perspective.xls");
$objTpl->setActiveSheetIndex(0);  //set first sheet as active
  $objTpl->getActiveSheet()->setCellValue('A9', h($perspective['Perspective']['perspective_name']));
  $objTpl->getActiveSheet()->setCellValue('C10', h($perspective['Perspective']['perspective_weight']));
  $objTpl->getActiveSheet()->setCellValue('C11', h($perspective['Perspective']['perspective_description']));
$i=14;
foreach ($perspective['Objective'] as $objective):
  
  $objTpl->getActiveSheet()->setCellValue('A'.$i, h($objective['objective_name']));
  $objTpl->getActiveSheet()->setCellValue('B'.$i, h($objective['objective_weight']));
  $objTpl->getActiveSheet()->setCellValue('C'.$i, h($objective['objective_description']));
  $objTpl->getActiveSheet()->setCellValue('C'.$i, h($objective['outcome']));
  
  $objTpl->getActiveSheet()->getStyle('A'.$i.':'.'C'.$i)->getAlignment()->setWrapText(true);
 $objTpl->getActiveSheet()->getStyle('A'.$i.':'.'C'.$i)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_TOP);
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
