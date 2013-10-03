<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

date_default_timezone_set('Europe/London');

/** Include PHPExcel */
require_once '../Classes/PHPExcel.php';


// Read from Excel5 (.xls) template
echo date('H:i:s') , " Load Excel2007 template file" , EOL;
$objReader = PHPExcel_IOFactory::createReader('Excel5');
$objPHPExcel = $objReader->load("Scorecard_Report.xls");

/*
$objPHPExcel->getActiveSheet()->setCellValue('B30',);
$objPHPExcel->getActiveSheet()->getRowDimension(8)->setRowHeight(-1);
$objPHPExcel->getActiveSheet()->getStyle('A8')->getAlignment()->setWrapText(true);
*/

// Export to Excel2007 (.xlsx)
//echo date('H:i:s') , " Write to Excel5 format" , EOL;
//$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
//$objWriter->save(str_replace('.php', '.xlsx', __FILE__));
//echo date('H:i:s') , " File written to " , str_replace('.php', '.xlsx', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;

// Export to Excel5 (.xls)
echo date('H:i:s') , " Write to Excel5 format" , EOL;
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save(str_replace('.php', '.xls', __FILE__));
echo date('H:i:s') , "File written to " , str_replace('.php', '.xls', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;

// Echo memory peak usage
echo date('H:i:s') , " Peak memory usage: " , (memory_get_peak_usage(true) / 1024 / 1024) , " MB" , EOL;

// Echo done
echo date('H:i:s') , " Done writing files" , EOL;
echo 'Files have been created in ' , getcwd() , EOL;
