<?php
//processing form submitted
 
//if (!isset($_POST['btnSubmit'])) exit;
 
//include PHPExcel library
require_once "Classes/PHPExcel/IOFactory.php";
 
//load Excel template file
$objTpl = PHPExcel_IOFactory::load("reports/objective.xls");
$objTpl->setActiveSheetIndex(0);  //set first sheet as active
$objTpl->getActiveSheet()->setCellValue('A9', h($objective['Objective']['objective_name']));
  $objTpl->getActiveSheet()->setCellValue('C10', h($objective['Perspective']['perspective_name']));
  $objTpl->getActiveSheet()->setCellValue('C11', h($objective['Objective']['objective_weight']));
  $objTpl->getActiveSheet()->setCellValue('C13', h($objective['Objective']['outcome']));
  $objTpl->getActiveSheet()->setCellValue('C12', h($objective['Objective']['objective_description']));
$i=23;
foreach ($objective['Measure'] as $measure):
  
  $objTpl->getActiveSheet()->setCellValue('A'.$i, h($measure['measure_name']));
  $objTpl->getActiveSheet()->setCellValue('C'.$i, h($measure['measure_weight']));
  $objTpl->getActiveSheet()->setCellValue('D'.$i, h($measure['formula']));
  $objTpl->getActiveSheet()->setCellValue('G'.$i, h($measure['unit_id']));
  $objTpl->getActiveSheet()->setCellValue('E'.$i, h($measure['description']));
  
  $objTpl->getActiveSheet()->getStyle('A'.$i.':'.'E'.$i)->getAlignment()->setWrapText(true);
 $objTpl->getActiveSheet()->getStyle('A'.$i.':'.'E'.$i)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_TOP);
 $i++;
 endforeach;
$k=16;
foreach ($objective['Theme'] as $theme):
  
  $objTpl->getActiveSheet()->setCellValue('A'.$k, h($theme['stategic_theme']));
  $objTpl->getActiveSheet()->setCellValue('D'.$k, h($theme['description']));
  $objTpl->getActiveSheet()->setCellValue('H'.$k, h($theme['result']));
  
  
  $objTpl->getActiveSheet()->getStyle('A'.$k.':'.'D'.$k)->getAlignment()->setWrapText(true);
 $objTpl->getActiveSheet()->getStyle('A'.$k.':'.'D'.$k)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_TOP);
 $k++;
 endforeach;
 
$j=31;
foreach ($objective['Initiative'] as $initiative):
  
  $objTpl->getActiveSheet()->setCellValue('A'.$j, h($initiative['initiative_name']));
  $objTpl->getActiveSheet()->setCellValue('C'.$j, h($initiative['initiative_importance']));
  $objTpl->getActiveSheet()->setCellValue('D'.$j, h($initiative['deliverable']));
  $objTpl->getActiveSheet()->setCellValue('F'.$j, h($initiative['initiative_description']));
  $objTpl->getActiveSheet()->setCellValue('I'.$j, h($initiative['start_date']));
  $objTpl->getActiveSheet()->setCellValue('J'.$j, h($initiative['end_date']));
  $objTpl->getActiveSheet()->setCellValue('K'.$j, h($initiative['budget']));
  
  $objTpl->getActiveSheet()->getStyle('A'.$j.':'.'E'.$j)->getAlignment()->setWrapText(true);
 $objTpl->getActiveSheet()->getStyle('A'.$j.':'.'E'.$j)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_TOP);
 $j++;
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
