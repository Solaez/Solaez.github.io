<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Productos</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            color: #666;
        }

        input[type="text"],
        select,
        textarea {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box; /* Añadido para incluir padding y border en el ancho total */
        }

        textarea {
            height: 150px;
            resize: vertical;
        }

        input[type="file"] {
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #0056b3;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #004494;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ingresar Productos</h1>
        <form action="guardar_producto.php" method="post" enctype="multipart/form-data">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="categoria">Categoría:</label>
            <select id="categoria" name="categoria" required>
                <option value="">Seleccionar</option>
                <option value="Electrónica">Electrónica</option>
                <option value="Ropa">Ropa</option>
                <option value="Hogar">Hogar</option>
                <option value="Deportes">Deportes</option>
                <option value="Libros">Libros</option>
            </select>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required></textarea>

            <label for="tipo">Tipo:</label>
            <select id="tipo" name="tipo" required>
                <option value="">Seleccionar</option>
                <option value="Nuevo">Nuevo</option>
                <option value="Usado">Usado</option>
            </select>

            <label for="ubicacion">Ubicación:</label>
            <input type="text" id="ubicacion" name="ubicacion" required>

            <label for="precio">Precio Original:</label>
            <input type="text" id="precio" name="precio" required>

            <label for="precio_promocion">Precio Promoción:</label>
            <input type="text" id="precio_promocion" name="precio_promocion">

            <label for="promocion">Promoción:</label>
            <input type="text" id="promocion" name="promocion">

            <label for="imagen_principal">Imagen Principal:</label>
            <input type="file" id="imagen_principal" name="imagen_principal" required>

            <label for="imagen1">Imagen 1:</label>
            <input type="file" id="imagen1" name="imagen1">

            <label for="imagen2">Imagen 2:</label>
            <input type="file" id="imagen2" name="imagen2">

            <label for="imagen3">Imagen 3:</label>
            <input type="file" id="imagen3" name="imagen3">

            <input type="submit" value="Guardar Producto">
        </form>
    </div>
</body>
</html>
