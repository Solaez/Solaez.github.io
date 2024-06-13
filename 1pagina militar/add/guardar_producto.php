<?php
session_start();
require '../../phpConexion/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];
    $tipo = $_POST['tipo'];
    $ubicacion = $_POST['ubicacion'];
    $precio = $_POST['precio'];
    $precio_promocion = $_POST['precio_promocion'];
    $promocion = $_POST['promocion'];
     
    // Crear la carpeta imagenesProductos si no existe
    $uploadsDir = 'imagenesProductos';
    if (!is_dir($uploadsDir)) {
        mkdir($uploadsDir, 0777, true);
    }

    // Guardar las imágenes subidas
    $imagen_principal = $uploadsDir . '/' . basename($_FILES['imagen_principal']['name']);
    move_uploaded_file($_FILES['imagen_principal']['tmp_name'], $imagen_principal);

    $imagen1 = !empty($_FILES['imagen1']['name']) ? $uploadsDir . '/' . basename($_FILES['imagen1']['name']) : '';
    if ($imagen1) {
        move_uploaded_file($_FILES['imagen1']['tmp_name'], $imagen1);
    }

    $imagen2 = !empty($_FILES['imagen2']['name']) ? $uploadsDir . '/' . basename($_FILES['imagen2']['name']) : '';
    if ($imagen2) {
        move_uploaded_file($_FILES['imagen2']['tmp_name'], $imagen2);
    }

    $imagen3 = !empty($_FILES['imagen3']['name']) ? $uploadsDir . '/' . basename($_FILES['imagen3']['name']) : '';
    if ($imagen3) {
        move_uploaded_file($_FILES['imagen3']['tmp_name'], $imagen3);
    }

    // Cargar el archivo Excel existente o crear uno nuevo si no existe
    $filePath = 'productos.xlsx';
    $spreadsheet = new Spreadsheet();
    if (file_exists($filePath)) {
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($filePath);
    } else {
        $sheet = $spreadsheet->getActiveSheet();
        // Definir encabezados
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Categoría');
        $sheet->setCellValue('C1', 'Nombre');
        $sheet->setCellValue('D1', 'Imagen Principal');
        $sheet->setCellValue('E1', 'Imagen 1');
        $sheet->setCellValue('F1', 'Imagen 2');
        $sheet->setCellValue('G1', 'Imagen 3');
        $sheet->setCellValue('H1', 'Descripción');
        $sheet->setCellValue('I1', 'Tipo');
        $sheet->setCellValue('J1', 'Ubicación');
        $sheet->setCellValue('K1', 'Precio Original');
        $sheet->setCellValue('L1', 'Precio Promoción');
        $sheet->setCellValue('M1', 'Promoción');
    }

    $sheet = $spreadsheet->getActiveSheet();

    // Verificar si el ID ya existe
    $highestRow = $sheet->getHighestRow();
    $idExists = false;
    for ($row = 2; $row <= $highestRow; $row++) {
        if ($sheet->getCell('A' . $row)->getValue() == $id) {
            $idExists = true;
            break;
        }
    }

    if ($idExists) {
        echo "Error: El ID del producto ya existe.";
    } else {
        // Encontrar la siguiente fila vacía
        $row = $sheet->getHighestRow() + 1;

    // Insertar los datos del producto
    $sheet->setCellValue('A' . $row, $id);
    $sheet->setCellValue('B' . $row, $categoria);
    $sheet->setCellValue('C' . $row, $nombre);
    $sheet->setCellValue('D' . $row, $imagen_principal);
    $sheet->setCellValue('E' . $row, $imagen1);
    $sheet->setCellValue('F' . $row, $imagen2);
    $sheet->setCellValue('G' . $row, $imagen3);
    $sheet->setCellValue('H' . $row, $descripcion);
    $sheet->setCellValue('I' . $row, $tipo);
    $sheet->setCellValue('J' . $row, $ubicacion);
    $sheet->setCellValue('K' . $row, $precio);
    $sheet->setCellValue('L' . $row, $precio_promocion);
    $sheet->setCellValue('M' . $row, $promocion);

        // Guardar el archivo Excel
        $writer = new Xlsx($spreadsheet);
        $writer->save($filePath);
        

        // echo "Producto guardado exitosamente.";
        // Mostrar la alerta y redirigir
        echo "<script>alert('Producto guardado exitosamente.'); window.location.href = '/admin/new/index.php';</script>";
        exit;

    }
}
?>
