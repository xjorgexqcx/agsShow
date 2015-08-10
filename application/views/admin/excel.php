<?php
require_once 'librerias/Classes/PHPExcel.php';
$sheet = new PHPExcel();
   
   //activeSheet
$activeSheet = $sheet->getActiveSheet();
//set values
$activeSheet->setCellValue('A1','Codigo');
$activeSheet->setCellValue('B1','Nombres');
$activeSheet->setCellValue('C1','Email');
$activeSheet->setCellValue('D1','Edad');
$activeSheet->setCellValue('E1','Genero');
$activeSheet->setCellValue('F1','Ciudad');
$activeSheet->setCellValue('G1','Pais');
$i=2;
  foreach ($ltaUsuarios->result() as $registro) { 
      $sheet->setActiveSheetIndex(0)->setCellValue('A'.$i, $registro->id);
      $sheet->setActiveSheetIndex(0)->setCellValue('B'.$i, $registro->nombres);
      $sheet->setActiveSheetIndex(0)->setCellValue('C'.$i, $registro->email);
      $sheet->setActiveSheetIndex(0)->setCellValue('D'.$i, $registro->edad);
      $sheet->setActiveSheetIndex(0)->setCellValue('E'.$i, $registro->genero);
      $sheet->setActiveSheetIndex(0)->setCellValue('F'.$i, $registro->ciudad);
      $sheet->setActiveSheetIndex(0)->setCellValue('G'.$i, $registro->idPais);
      $i++;
      
   }
//from documentation set headers
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="reporte.xlsx"');
header('Cache-Control: max-age=0');
//excel 2007 format
$objWriter = PHPExcel_IOFactory::createWriter($sheet,'Excel2007');
$objWriter->save('php://output');
exit;
?>