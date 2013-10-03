<?php
//processing form submitted
 
//if (!isset($_POST['btnSubmit'])) exit;
 
//include PHPExcel library
require_once "Classes/PHPExcel/IOFactory.php";
 
//load Excel template file
$objTpl = PHPExcel_IOFactory::load("reports/objectives.xlsx");
$objTpl->setActiveSheetIndex(0);  //set first sheet as active
$i=4;
foreach ($rows as $row):
  
  $objTpl->getActiveSheet()->setCellValue('A'.$i, h($row['Perspective']['perspective_name']));
  $objTpl->getActiveSheet()->setCellValue('B'.$i, h($row['Objective']['objective_name']));
  $objTpl->getActiveSheet()->setCellValue('C'.$i, h($row['Objective']['objective_weight']));
  $objTpl->getActiveSheet()->setCellValue('D'.$i, h($row['Objective']['outcome']));
  $objTpl->getActiveSheet()->setCellValue('E'.$i, h($row['Objective']['objective_description']));
  
  $objTpl->getActiveSheet()->getStyle('A'.$i.':'.'E'.$i)->getAlignment()->setWrapText(true);
 $objTpl->getActiveSheet()->getStyle('A'.$i.':'.'E'.$i)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_TOP);
 $i++;
 endforeach;
 
$objConditional1 = new PHPExcel_Style_Conditional();
$objConditional1->setConditionType(PHPExcel_Style_Conditional::CONDITION_CELLIS)
                ->setOperatorType(PHPExcel_Style_Conditional::OPERATOR_LESSTHAN)
                ->addCondition('15');
$objConditional1->getStyle()->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_YELLOW);
$objConditional1->getStyle()->getFont()->setItalic(true);
$objConditional1->getStyle()->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE);

$objConditional2 = new PHPExcel_Style_Conditional();
$objConditional2->setConditionType(PHPExcel_Style_Conditional::CONDITION_CELLIS)
                ->setOperatorType(PHPExcel_Style_Conditional::OPERATOR_BETWEEN)
                ->addCondition('15')
                ->addCondition('20');
$objConditional2->getStyle()->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_GREEN);
$objConditional2->getStyle()->getFont()->setBold(true);
$objConditional2->getStyle()->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE);

$objConditional3 = new PHPExcel_Style_Conditional();
$objConditional3->setConditionType(PHPExcel_Style_Conditional::CONDITION_CELLIS)
                ->setOperatorType(PHPExcel_Style_Conditional::OPERATOR_GREATERTHANOREQUAL)
                ->addCondition('20');
$objConditional3->getStyle()->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_RED);
$objConditional3->getStyle()->getFont()->setItalic(true);
$objConditional3->getStyle()->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE);

$conditionalStyles = $objTpl->getActiveSheet()->getStyle('C4')->getConditionalStyles();
array_push($conditionalStyles, $objConditional1);
array_push($conditionalStyles, $objConditional2);
array_push($conditionalStyles, $objConditional3);
$objTpl->getActiveSheet()->getStyle('C4')->setConditionalStyles($conditionalStyles);

$objTpl->getActiveSheet()->duplicateConditionalStyle(
				$objTpl->getActiveSheet()->getStyle('C4')->getConditionalStyles(),
				'C5'.':'.'C'.$i
			  );

//prepare download
$filename=mt_rand(1,100000).'.xlsx'; //just some random filename
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$filename.'"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objTpl, 'Excel5');  //downloadable file is in Excel 2003 format (.xls)
$objWriter->save('php://output');  //send it to user, of course you can save it to disk also!
 
exit; //done.. exiting!
?>
