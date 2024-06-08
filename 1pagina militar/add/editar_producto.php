<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

if (isset($_GET['id'])) {
    $idToEdit = $_GET['id'];
    $filePath = 'productos.xlsx';

    $spreadsheet = IOFactory::load($filePath);
    $sheet = $spreadsheet->getActiveSheet();
    $highestRow = $sheet->getHighestRow();

    // Buscar el producto por ID
    for ($row = 2; $row <= $highestRow; $row++) {
        if ($sheet->getCell('A' . $row)->getValue() == $idToEdit) {
            $producto = [
                'ID' => $sheet->getCell('A' . $row)->getValue(),
                'Categoría' => $sheet->getCell('B' . $row)->getValue(),
                'Nombre' => $sheet->getCell('C' . $row)->getValue(),
                'Descripción' => $sheet->getCell('H' . $row)->getValue(),
                'Tipo' => $sheet->getCell('I' . $row)->getValue(),
                'Ubicación' => $sheet->getCell('J' . $row)->getValue(),
                'Precio' => $sheet->getCell('K' . $row)->getValue(),
                'Precio Promoción' => $sheet->getCell('L' . $row)->getValue(),
                'Promoción' => $sheet->getCell('M' . $row)->getValue(),
            ];
            break;
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Guardar los cambios en el archivo Excel
        $sheet->getCell('B' . $row)->setValue($_POST['categoria']);
        $sheet->getCell('C' . $row)->setValue($_POST['nombre']);
        $sheet->getCell('H' . $row)->setValue($_POST['descripcion']);
        $sheet->getCell('I' . $row)->setValue($_POST['tipo']);
        $sheet->getCell('J' . $row)->setValue($_POST['ubicacion']);
        $sheet->getCell('K' . $row)->setValue($_POST['precio']);
        $sheet->getCell('L' . $row)->setValue($_POST['precio_promocion']);
        $sheet->getCell('M' . $row)->setValue($_POST['promocion']);
        
        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save($filePath);

        header('Location: listar_productos.php');
        exit;
    }
} else {
    echo "ID de producto no especificado.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Editar Producto</h1>

    <?php if (!empty($producto)) : ?>
        <form action="editar_producto.php?id=<?php echo $producto['ID']; ?>" method="post">
            <div class="form-group">
                <label for="categoria">Categoría:</label>
                <input type="text" name="categoria" id="categoria" class="form-control" value="<?php echo htmlspecialchars($producto['Categoría']); ?>" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre"
                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo htmlspecialchars($producto['Nombre']); ?>" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion" class="form-control" rows="3"><?php echo htmlspecialchars($producto['Descripción']); ?></textarea>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="text" name="tipo" id="tipo" class="form-control" value="<?php echo htmlspecialchars($producto['Tipo']); ?>" required>
            </div>
            <div class="form-group">
                <label for="ubicacion">Ubicación:</label>
                <input type="text" name="ubicacion" id="ubicacion" class="form-control" value="<?php echo htmlspecialchars($producto['Ubicación']); ?>" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" step="0.01" name="precio" id="precio" class="form-control" value="<?php echo htmlspecialchars($producto['Precio']); ?>" required>
            </div>
            <div class="form-group">
                <label for="precio_promocion">Precio Promoción:</label>
                <input type="number" step="0.01" name="precio_promocion" id="precio_promocion" class="form-control" value="<?php echo htmlspecialchars($producto['Precio Promoción']); ?>">
            </div>
            <div class="form-group">
                <label for="promocion">Promoción:</label>
                <input type="text" name="promocion" id="promocion" class="form-control" value="<?php echo htmlspecialchars($producto['Promoción']); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    <?php else: ?>
        <p>No se encontró el producto a editar.</p>
    <?php endif; ?>
</div>
</body>
</html>
