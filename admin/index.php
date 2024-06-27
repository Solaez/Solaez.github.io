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
    <title>Admin - Producciones Leon</title>
    <link rel="icon" href="/img/iconos/admin.png">
    <link rel="stylesheet" href="style.css">
    <style>
        .dashboard {
            background: rgb(14 14 14 / 85%);
            backdrop-filter: blur(15px);
            padding: 20px;
            border-radius: 15px;
            min-width: 800px;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            min-height: 600px;
        }
        .seleccionbtn {
            margin-bottom: 20px;
        }
        .seleccionbtn button {
            margin-right: 10px;
            padding: 10px 20px;
            cursor: pointer;
        }
        #militaropcion, #civilopcion {
            display: none;
            animation: fadeIn 0.5s ease forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateX(100px); }
            to { opacity: 1; transform: translateX(0); }
        }
    </style>
</head>
<body>
    <div class="produccion">
        <div class="dashboard">
            <div class="greeting">
                <h1>Producciones Leon S.A.S</h1>
            </div>
            <div class="seleccionbtn">
                <h1 class="titulo2">Seleccione La clase a trabajar</h1>
                <h5 class="subtitulo">Seleccione una para que le aparezca las funciones u botones</h5>
                <button class="militar">Productos Militar</button>
                <button class="civil">Productos Civil</button>
                
            </div>
        </div>
        <div id="militaropcion">
            <?php require '../php/menu.php'; ?>
        </div>
        <div id="civilopcion">
            <?php require '../php/menu2.php'; ?>
        </div>
    </div>

    <?php require 'loading.php'; ?>

    <script>
        document.querySelector('.militar').addEventListener('click', function() {
            const militarOp = document.getElementById('militaropcion');
            const civilOp = document.getElementById('civilopcion');
            militarOp.style.display = 'block';
            civilOp.style.display = 'none';
        });

        document.querySelector('.civil').addEventListener('click', function() {
            const militarOp = document.getElementById('militaropcion');
            const civilOp = document.getElementById('civilopcion');
            civilOp.style.display = 'block';
            militarOp.style.display = 'none';
        });
    </script>
    <?php require '../php/NO.php'; ?>
</body>
</html>
