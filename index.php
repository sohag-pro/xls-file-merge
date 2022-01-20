<?php
/**
 * @author Sohag Hasan <hello@sohag.pro>
 */

require 'vendor/autoload.php';

echo "Script Running" . PHP_EOL;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Name of the file to be read
$inputFileName_1 = './first_file.xls';
$spreadsheet_1   = IOFactory::load( $inputFileName_1 );
$sheet_1         = $spreadsheet_1->getActiveSheet()->toArray();

// Name of the file to be read
$inputFileName_2 = './second_file.xls';
$spreadsheet_2   = IOFactory::load( $inputFileName_2 );
$sheet_2         = $spreadsheet_2->getActiveSheet()->toArray();

// Make the array as key value pairs
$reformat_sheet_2 = [];
foreach ( $sheet_2 as $row ) {
    $reformat_sheet_2[$row[0]] = $row[1];
}

// Merge the two arrays
$combined_sheet = [];
foreach ( $sheet_1 as $value ) {
    $combined_sheet[] = [
        $value[0],
        $value[1],
        $reformat_sheet_2[$value[0]] ?? '',
    ];
}

// Create a new spreadsheet
$spreadsheet = new Spreadsheet();
$sheet       = $spreadsheet->getActiveSheet();

foreach ( $combined_sheet as $row => $data ) {
    foreach ( $data as $column => $value ) {
        $sheet->setCellValueByColumnAndRow( $column+1, $row+1, $value );
    }
}

// Save the spreadsheet
$writer = new Xlsx( $spreadsheet );
$writer->save( 'merged_file.xls' );
echo "Script Ended " . PHP_EOL;

