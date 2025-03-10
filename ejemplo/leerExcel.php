<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$inputFileName = 'productos.xlsx';

try {
    $spreadsheet = IOFactory::load($inputFileName);
    $sheet = $spreadsheet->getActiveSheet();
    $products = [];
    $highestRow = $sheet->getHighestDataRow(); // Obtiene la última fila con datos
    $highestColumn = $sheet->getHighestDataColumn(); // Obtiene la última columna con datos

    // Itera sobre las filas del Excel
    for ($row = 2; $row <= $highestRow; $row++) {
        $id = $sheet->getCell('A' . $row)->getValue();
        $name = $sheet->getCell('B' . $row)->getValue();
        $products[] = ['id' => $id, 'name' => $name];
    }
} catch (Exception $e) {
    die('Error cargando el archivo: ' . $e->getMessage());
}
?>
