<?php
require '../../phpConexion/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

function cargarProductos($categoriaSeleccionada = null) {
    $filePath = 'productos.xlsx';

    $spreadsheet = IOFactory::load($filePath);
    $sheet = $spreadsheet->getActiveSheet();
    $highestRow = $sheet->getHighestRow();

    $categorias = [];
    $productos = [];

    for ($row = 2; $row <= $highestRow; $row++) {
        $categoria = $sheet->getCell('B' . $row)->getValue();
        if (!in_array($categoria, $categorias)) {
            $categorias[] = $categoria;
        }

        if ($categoriaSeleccionada === null || $categoria == $categoriaSeleccionada || $categoriaSeleccionada == 'Todas') {
            $productos[] = [
                'ID' => $sheet->getCell('A' . $row)->getValue(),
                'Categoría' => $categoria,
                'Nombre' => $sheet->getCell('C' . $row)->getValue(),
                'Descripción' => $sheet->getCell('H' . $row)->getValue(),
                'Tipo' => $sheet->getCell('I' . $row)->getValue(),
                'Ubicación' => $sheet->getCell('J' . $row)->getValue(),
                'Precio' => $sheet->getCell('K' . $row)->getValue(),
                'Precio Promoción' => $sheet->getCell('L' . $row)->getValue(),
                'Promoción' => $sheet->getCell('M' . $row)->getValue(),
            ];
        }
    }

    return ['categorias' => $categorias, 'productos' => $productos];
}
?>
