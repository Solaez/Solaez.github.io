<?php
require '../../phpConexion/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

if (isset($_GET['id'])) {
    $idToEdit = $_GET['id'];
    $filePath = '../../1pagina militar/add/productos.xlsx';

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
                'Imagen Principal' => $sheet->getCell('D' . $row)->getValue(),
                'Imagen 1' => $sheet->getCell('E' . $row)->getValue(),
                'Imagen 2' => $sheet->getCell('F' . $row)->getValue(),
                'Imagen 3' => $sheet->getCell('G' . $row)->getValue(),
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
        $uploadDir = '../../1pagina militar/add/imagenesProductos/';
        
        $imagenPrincipal = $_FILES['imagen_principal']['name'] ? basename($_FILES['imagen_principal']['name']) : null;
        $imagen1 = $_FILES['imagen1']['name'] ? basename($_FILES['imagen1']['name']) : null;
        $imagen2 = $_FILES['imagen2']['name'] ? basename($_FILES['imagen2']['name']) : null;
        $imagen3 = $_FILES['imagen3']['name'] ? basename($_FILES['imagen3']['name']) : null;

        if ($imagenPrincipal) {
            $uploadFile1 = $uploadDir . $imagenPrincipal;
            move_uploaded_file($_FILES['imagen_principal']['tmp_name'], $uploadFile1);
            $sheet->getCell('D' . $row)->setValue("imagenesProductos/" . $imagenPrincipal);
        }

        if ($imagen1) {
            $uploadFile2 = $uploadDir . $imagen1;
            move_uploaded_file($_FILES['imagen1']['tmp_name'], $uploadFile2);
            $sheet->getCell('E' . $row)->setValue("imagenesProductos/" . $imagen1);
        }

        if ($imagen2) {
            $uploadFile3 = $uploadDir . $imagen2;
            move_uploaded_file($_FILES['imagen2']['tmp_name'], $uploadFile3);
            $sheet->getCell('F' . $row)->setValue("imagenesProductos/" . $imagen2);
        }

        if ($imagen3) {
            $uploadFile4 = $uploadDir . $imagen3;
            move_uploaded_file($_FILES['imagen3']['tmp_name'], $uploadFile4);
            $sheet->getCell('G' . $row)->setValue("imagenesProductos/" . $imagen3);
        }

        // Guardar los cambios en las demás celdas
        $sheet->getCell('B' . $row)->setValue($_POST['categoria']);
        $sheet->getCell('C' . $row)->setValue($_POST['nombre']);
        $sheet->getCell('H' . $row)->setValue($_POST['descripcion']);
        $sheet->getCell('I' . $row)->setValue($_POST['tipo']);
        $sheet->getCell('J' . $row)->setValue($_POST['ubicacion']);
        $sheet->getCell('K' . $row)->setValue("$ " . $_POST['precio']);
        $sheet->getCell('L' . $row)->setValue("$ " . $_POST['precio_promocion']);
        $sheet->getCell('M' . $row)->setValue($_POST['promocion']);

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save($filePath);

        header('Location: ../../admin/edit/index.php');
        exit;
    }
} else {
    echo "ID de producto no especificado.";
    exit;
}
?>

<div class="container mt-5">
    <?php if (!empty($producto)) : ?>
        <form action="../../admin/edit/editar.php?id=<?php echo $producto['ID']; ?>" method="post" enctype="multipart/form-data">
            <div class="imagenes">
                <div class="imagenesPequeñas">
                    <div>
                        <label class="custum-file-upload2" for="imagen1">
                            <div class="icon">
                                <img id="imagePreview1" src="<?php echo $producto['Imagen 1'] ? '../../1pagina militar/add/' . $producto['Imagen 1'] : 'https://img.icons8.com/external-dashed-line-kawalan-studio/96/external-upload-document-user-interface-dashed-line-kawalan-studio.png'; ?>" alt="">
                            </div>
                            <div class="text">
                                <span>Seleccione la imagen 1</span>
                            </div>
                            <input type="file" id="imagen1" name="imagen1" onchange="previewImage(event, 'imagePreview1')" >
                        </label>
                    </div>
                    <div>
                        <label class="custum-file-upload2" for="imagen2">
                            <div class="icon">
                                <img id="imagePreview2" src="<?php echo $producto['Imagen 2'] ? '../../1pagina militar/add/' . $producto['Imagen 2'] : 'https://img.icons8.com/external-dashed-line-kawalan-studio/96/external-upload-document-user-interface-dashed-line-kawalan-studio.png'; ?>" alt="">
                            </div>
                            <div class="text">
                                <span>Seleccione la imagen 2</span>
                            </div>
                            <input type="file" id="imagen2" name="imagen2" onchange="previewImage(event, 'imagePreview2')">
                        </label>
                    </div>
                    <div>
                        <label class="custum-file-upload2" for="imagen3">
                            <div class="icon">
                                <img id="imagePreview3" src="<?php echo $producto['Imagen 3'] ? '../../1pagina militar/add/' . $producto['Imagen 3'] : 'https://img.icons8.com/external-dashed-line-kawalan-studio/96/external-upload-document-user-interface-dashed-line-kawalan-studio.png'; ?>" alt="">
                            </div>
                            <div class="text">
                                <span>Seleccione la imagen 3</span>
                            </div>
                            <input type="file" id="imagen3" name="imagen3" onchange="previewImage(event, 'imagePreview3')">
                        </label>
                    </div>
                </div>
                <label class="custum-file-upload" for="imagen_principal">
                    <div class="icon">
                        <img id="imagePreview" src="<?php echo $producto['Imagen Principal'] ? '../../1pagina militar/add/' . $producto['Imagen Principal'] : 'https://img.icons8.com/external-dashed-line-kawalan-studio/96/external-upload-document-user-interface-dashed-line-kawalan-studio.png'; ?>" alt="">
                    </div>
                    <div class="text">
                        <span>Seleccione Imagen Principal</span>
                    </div>
                    <input type="file" id="imagen_principal" name="imagen_principal" onchange="previewImage(event, 'imagePreview')" style="display: none;">
                </label>
                <div class="marcoDerecha">
                    <div class="form-group">
                        <input placeholder="Nombre" class="input" type="text" name="nombre" id="nombre" value="<?php echo htmlspecialchars($producto['Nombre']); ?>" required>
                    </div>
                    <div class="form-group">
                        <input placeholder="Tipo" class="input" type="text" name="tipo" id="tipo" value="<?php echo htmlspecialchars($producto['Tipo']); ?>" required>
                    </div>
                    <div class="form-group">
                        <input placeholder="Ubicación" class="input" type="text" name="ubicacion" id="ubicacion" value="<?php echo htmlspecialchars($producto['Ubicación']); ?>" required>
                    </div>
                    <div class="form-group">
                    <input placeholder="Precio" class="input" type="text" step="0.01" name="precio" id="precio" value="<?php echo htmlspecialchars($producto['Precio']); ?>" required>
                    </div>
                    <div class="form-group">
                        <input placeholder="Precio Promoción" class="input" type="text" step="0.01" name="precio_promocion" id="precio_promocion" value="<?php echo htmlspecialchars($producto['Precio Promoción']); ?>">
                    </div>
                    <div class="form-group">
                        <input placeholder="Categoría" class="input" type="text" name="categoria" id="categoria" value="<?php echo htmlspecialchars($producto['Categoría']); ?>" required>
                    </div>
                    <div class="form-group">
                        <input placeholder="Estado" class="input" type="text" name="promocion" id="promocion" value="<?php echo htmlspecialchars($producto['Promoción']); ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <textarea placeholder="Descripción" class="input" name="descripcion" id="descripcion" rows="3" required><?php echo htmlspecialchars($producto['Descripción']); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    <?php else: ?>
        <p>No se encontró el producto a editar.</p>
    <?php endif; ?>
</div>

<script>
    function previewImage(event, previewId) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById(previewId);
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }

    // Set existing images if available
    document.getElementById('imagen_principal').addEventListener('change', function(event) {
        previewImage(event, 'imagePreview');
    });

    document.getElementById('imagen1').addEventListener('change', function(event) {
        previewImage(event, 'imagePreview1');
    });

    document.getElementById('imagen2').addEventListener('change', function(event) {
        previewImage(event, 'imagePreview2');
    });

    document.getElementById('imagen3').addEventListener('change', function(event) {
        previewImage(event, 'imagePreview3');
    });
</script>
