<?php
require '../../phpConexion/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

// Ruta del archivo Excel
$inputFileName = 'productos.xlsx';

// Cargar el archivo Excel
$spreadsheet = IOFactory::load($inputFileName);
$worksheet = $spreadsheet->getActiveSheet();

// Obtener los datos del formulario
$id = $_POST['id'];
$categoria = $_POST['categoria'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$tipo = $_POST['tipo'];
$ubicacion = $_POST['ubicacion'];
$precio = $_POST['precio'];
$precio_promocion = $_POST['precio_promocion'];

// Procesar las imágenes
$targetDir = "imagenesProductos/";
$imageNames = [];

$files = ['imagen_principal', 'imagen1', 'imagen2', 'imagen3'];
foreach ($files as $fileInput) {
    if (!empty($_FILES[$fileInput]['name'])) {
        $targetFile = $targetDir . basename($_FILES[$fileInput]['name']);
        if (move_uploaded_file($_FILES[$fileInput]['tmp_name'], $targetFile)) {
            $imageNames[$fileInput] = basename($_FILES[$fileInput]['name']);
        } else {
            echo "Error al subir " . $_FILES[$fileInput]['name'];
            exit;
        }
    }
}

// Buscar el producto por ID y actualizar los detalles
foreach ($worksheet->getRowIterator() as $row) {
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(false); // Loop through all cells, even if it is not set
    $cells = iterator_to_array($cellIterator);

    if ($cells[0]->getValue() == $id) {
        $cells[1]->setValue($categoria);
        $cells[2]->setValue($nombre);
        $cells[3]->setValue($imageNames['imagen_principal'] ?? $cells[8]->getValue());
        $cells[4]->setValue($imageNames['imagen1'] ?? $cells[9]->getValue());
        $cells[5]->setValue($imageNames['imagen2'] ?? $cells[10]->getValue());
        $cells[6]->setValue($imageNames['imagen3'] ?? $cells[11]->getValue());
        $cells[7]->setValue($descripcion);
        $cells[8]->setValue($tipo);
        $cells[9]->setValue($ubicacion);
        $cells[10]->setValue($precio);
        $cells[11]->setValue($precio_promocion);
        break;
    }
}

// Guardar el archivo Excel actualizado
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save($inputFileName);

// Redirigir al listado de productos
header("Location: listar_productos.php");
exit;
?>
