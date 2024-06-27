<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: /login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar - Producciones Leon</title>
    <link rel="icon" href="/img/iconos/admin.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/style.css">
    <link rel="stylesheet" href="edit.css">
    <style>
        .alert-success {
            color: #ffffff;
            background-color: #fd5d5d;
            border-color: #6b0000;
            box-shadow: 0px 0px 20px 2px #ff0000;
            border-radius: 30px;
        }
    </style>
</head>
<body>
    
    <div class="produccion">
    <div class="dashboard">
    <div class="greeting">
        <h1>Producciones Leon S.A.S</h1>
    </div><div class='container mt-5'><div class='alert alert-success'>Producto eliminado exitosamente.</div></div>
        
        <div class="container mt-5">
        <a href="../../admin/edit/militar.php" class="btn btn-primary"><img src="https://img.icons8.com/metro/26/undo.png" alt="regresar"></a>
        </div>

    </div>
                <?php
                require '../../php/menu.php';
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
</body>
</html>
<?php require '../../php/NO.php'; ?>
