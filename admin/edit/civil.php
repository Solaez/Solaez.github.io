<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Producciones Leon</title>
    <link rel="icon" href="/img/iconos/admin.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/style.css">
    <link rel="stylesheet" href="edit.css">
    
    
</head>
<body>
    
    <div class="produccion">
    <div class="dashboard">
    <div class="greeting">
            <h1>Listado de Productos Civil</h1>
        </div>
                <?php
                require '../../1pagina civil/add/productos.php';
                ?>
        </div>
                <?php
                require '../../php/menu2.php';
                ?>
        </div>
                <?php
                require '../../admin/loading.php';
                ?>
<script>
    function previewImage(event, previewId) {
        const input = event.target;
        const reader = new FileReader();
        const imagePreview = document.getElementById(previewId);

        reader.onload = function() {
            imagePreview.src = reader.result;
        }

        reader.readAsDataURL(input.files[0]);
    }
</script>
<script>
        // script.js

    document.querySelector('.search-bar input').addEventListener('input', function(e) {
        const query = e.target.value.toLowerCase();
        document.querySelectorAll('.game-item').forEach(item => {
            const gameName = item.querySelector('p').textContent.toLowerCase();
            if (gameName.includes(query)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });

    </script>
    <?php require '../../php/NO.php'; ?>

</body>
</html>
