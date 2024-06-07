<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$filePath = 'productos.xlsx';

$spreadsheet = IOFactory::load($filePath);
$sheet = $spreadsheet->getActiveSheet();
$highestRow = $sheet->getHighestRow();

// Obtener la lista de categorías para el filtro
$categorias = [];
for ($row = 2; $row <= $highestRow; $row++) {
    $categoria = $sheet->getCell('B' . $row)->getValue();
    if (!in_array($categoria, $categorias)) {
        $categorias[] = $categoria;
    }
}

$productos = [];
$selectedCategoria = '';

if (isset($_GET['categoria'])) {
    $selectedCategoria = $_GET['categoria'];
    for ($row = 2; $row <= $highestRow; $row++) {
        $categoria = $sheet->getCell('B' . $row)->getValue();
        if ($categoria == $selectedCategoria || $selectedCategoria == 'Todas') {
            $productos[] = [
                'ID' => $sheet->getCell('A' . $row)->getValue(),
                'Categoría' =>$categoria,
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
} else {
    for ($row = 2; $row <= $highestRow; $row++) {
        $productos[] = [
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
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listado de Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Listado de Productos</h1>

    <form method="GET" action="listar_productos.php" class="form-inline mb-4">
        <label for="categoria" class="mr-2">Filtrar por Categoría:</label>
        <select name="categoria" id="categoria" class="form-control mr-2">
            <option value="Todas">Todas</option>
            <?php foreach ($categorias as $categoria) : ?>
                <option value="<?php echo $categoria; ?>" <?php echo $selectedCategoria == $categoria ? 'selected' : ''; ?>><?php echo $categoria; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" class="btn btn-primary">Filtrar</button>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Categoría</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Tipo</th>
                <th>Ubicación</th>
                <th>Precio</th>
                <th>Precio Promoción</th>
                <th>Promoción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($productos as $producto) : ?>
            <tr>
                <td><?php echo $producto['ID']; ?></td>
                <td><?php echo $producto['Categoría']; ?></td>
                <td><?php echo $producto['Nombre']; ?></td>
                <td><?php echo $producto['Descripción']; ?></td>
                <td><?php echo $producto['Tipo']; ?></td>
                <td><?php echo $producto['Ubicación']; ?></td>
                <td><?php echo $producto['Precio']; ?></td>
                <td><?php echo $producto['Precio Promoción']; ?></td>
                <td><?php echo $producto['Promoción']; ?></td>
                <td>
                    <a href="editar_producto.php?id=<?php echo $producto['ID']; ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="borrar_producto.php?id=<?php echo $producto['ID']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
