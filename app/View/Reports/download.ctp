<?php
//processing form submitted
 
//if (!isset($_POST['btnSubmit'])) exit;
 
//include PHPExcel library
require_once "Classes/PHPExcel/IOFactory.php";
 
//load Excel template file
$objTpl = PHPExcel_IOFactory::load("reports/byoffice.xls");
$objTpl->setActiveSheetIndex(0);  //set first sheet as active
$i=8;
$objTpl->getActiveSheet()->setCellValue('A1',  h($datas[0]['f']['frequency_name'])." report of  offoce of ".h($datas[0]['pr']['period_name']));
$objTpl->getActiveSheet()->setCellValue('C2', h($datas[0]['of']['office_name']));
$objTpl->getActiveSheet()->setCellValue('C3', h($datas[0]['t']['year']));
$objTpl->getActiveSheet()->setCellValue('C4', h($datas[0]['f']['frequency_name']));
$objTpl->getActiveSheet()->setCellValue('C5', h($datas[0]['pr']['period_name']));
foreach ($datas as $row):
  
  $objTpl->getActiveSheet()->setCellValue('A'.$i, h($row['p']['perspective_name']));
  $objTpl->getActiveSheet()->setCellValue('B'.$i, h($row['o']['objective_name']));
  $objTpl->getActiveSheet()->setCellValue('C'.$i, h($row['m']['measure_name']));
  $objTpl->getActiveSheet()->setCellValue('D'.$i, h($row['u']['name']));
  $objTpl->getActiveSheet()->setCellValue('E'.$i, h($row['t']['baseline']));
  $objTpl->getActiveSheet()->setCellValue('F'.$i, h($row['t']['target']));
  $objTpl->getActiveSheet()->setCellValue('G'.$i, h($row['t']['actual_value']));
  $objTpl->getActiveSheet()->setCellValue('H'.$i, h((($row['t']['actual_value']-$row['t']['baseline'])*100)/($row['t']['target']-$row['t']['baseline'])));
 
  $objTpl->getActiveSheet()->getStyle('E'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
  $objTpl->getActiveSheet()->getStyle('G'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
  $objTpl->getActiveSheet()->getStyle('A'.$i.':'.'H'.$i)->getAlignment()->setWrapText(true);
 $objTpl->getActiveSheet()->getStyle('A'.$i.':'.'H'.$i)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_TOP);
 $i++;
 endforeach;
//prepare download
$objConditional1 = new PHPExcel_Style_Conditional();
$objConditional1->setConditionType(PHPExcel_Style_Conditional::CONDITION_CELLIS)
                ->setOperatorType(PHPExcel_Style_Conditional::OPERATOR_BETWEEN)
                ->addCondition('50')
                ->addCondition('69');
$objConditional1->getStyle()->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objConditional1->getStyle()->getFill()->getStartColor()->setARGB(PHPExcel_Style_Color::COLOR_DARKYELLOW);


$objConditional2 = new PHPExcel_Style_Conditional();
$objConditional2->setConditionType(PHPExcel_Style_Conditional::CONDITION_CELLIS)
                ->setOperatorType(PHPExcel_Style_Conditional::OPERATOR_LESSTHAN)
                ->addCondition('50');
$objConditional2->getStyle()->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objConditional2->getStyle()->getFill()->getStartColor()->setARGB(PHPExcel_Style_Color::COLOR_DARKRED);
//$objConditional2->getStyle()->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_RED);
//$objConditional2->getStyle()->getFont()->setItalic(true);
//$objConditional2->getStyle()->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE);

$objConditional3 = new PHPExcel_Style_Conditional();
$objConditional3->setConditionType(PHPExcel_Style_Conditional::CONDITION_CELLIS)
                ->setOperatorType(PHPExcel_Style_Conditional::OPERATOR_GREATERTHANOREQUAL)
                ->addCondition('70');
//$objConditional3->getStyle()->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_GREEN);
$objConditional3->getStyle()->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objConditional3->getStyle()->getFill()->getStartColor()->setARGB(PHPExcel_Style_Color::COLOR_DARKGREEN);
$objConditional3->getStyle()->getFont()->setItalic(true);
//$objConditional3->getStyle()->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE);

$conditionalStyles = $objTpl->getActiveSheet()->getStyle('H8')->getConditionalStyles();
array_push($conditionalStyles, $objConditional1);
array_push($conditionalStyles, $objConditional2);
array_push($conditionalStyles, $objConditional3);
$objTpl->getActiveSheet()->getStyle('H8')->setConditionalStyles($conditionalStyles);
$objTpl->getActiveSheet()->duplicateConditionalStyle(
				$objTpl->getActiveSheet()->getStyle('H8')->getConditionalStyles(),
				'H8:H'.$i
			  );
$filename=mt_rand(1,100000).'.xls'; //just some random filename
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$filename.'"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objTpl, 'Excel5');  //downloadable file is in Excel 2003 format (.xls)
$objWriter->save('php://output');  //send it to user, of course you can save it to disk also!
 
exit; //done.. exiting!
?>
