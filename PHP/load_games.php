<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$inputFileName = 'juegos.xlsx';
$spreadsheet = IOFactory::load($inputFileName);
$worksheet = $spreadsheet->getActiveSheet();
$gamesData = [];

foreach ($worksheet->getRowIterator(2) as $row) {
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(false); // Iterar todas las celdas

    $game = [];
    foreach ($cellIterator as $cell) {
        $game[] = $cell->getValue();
    }
    $gamesData[] = [
        'title' => $game[0],
        'description' => $game[1],
        'price' => $game[2],
        'image' => $game[3],
        'link_base' => $game[4],
        'link_dlc' => $game[5],
        'link_update' => $game[6],
        'link_online' => $game[7],
        'min_requirements' => $game[8],
        'rec_requirements' => $game[9]
    ];
}

header('Content-Type: application/json');
echo json_encode($gamesData);
?>
