<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if (isset($_GET['id'])) {
    $idToDelete = $_GET['id'];
    $filePath = 'productos.xlsx';

    $spreadsheet = IOFactory::load($filePath);
    $sheet = $spreadsheet->getActiveSheet();
    $highestRow = $sheet->getHighestRow();

    // Buscar la fila con el ID a eliminar
    $rowToDelete = null;
    for ($row = 2; $row <= $highestRow; $row++) {
        if ($sheet->getCell('A' . $row)->getValue() == $idToDelete) {
            $rowToDelete = $row;
            break;
        }
    }

    if ($rowToDelete !== null) {
        // Eliminar la fila
        $sheet->removeRow($rowToDelete);

        // Guardar el archivo Excel
        $writer = new Xlsx($spreadsheet);
        $writer->save($filePath);

        echo "<div class='container mt-5'><div class='alert alert-success'>Producto eliminado exitosamente.</div></div>";
    } else {
        echo "<div class='container mt-5'><div class='alert alert-danger'>Producto no encontrado.</div></div>";
    }
} else {
    echo "<div class='container mt-5'><div class='alert alert-warning'>ID de producto no proporcionado.</div></div>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <a href="listar_productos.php" class="btn btn-primary">Volver al listado de productos</a>
    </div>
</body>
</html>
