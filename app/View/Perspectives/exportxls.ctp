<?php

require_once "Classes/PHPExcel/IOFactory.php";
 
//load Excel template file
$objTpl = PHPExcel_IOFactory::load("reports/perspectives.xls");
$objTpl->setActiveSheetIndex(0);  //set first sheet as active
$i=4;
foreach ($rows as $row):
  
  $objTpl->getActiveSheet()->setCellValue('A'.$i, h($row['Perspective']['perspective_name']));
  $objTpl->getActiveSheet()->setCellValue('B'.$i, h($row['Perspective']['perspective_weight']));
  $objTpl->getActiveSheet()->setCellValue('C'.$i, h($row['Perspective']['perspective_description']));
  
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
