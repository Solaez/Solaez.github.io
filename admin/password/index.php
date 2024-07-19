
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Productos - Producciones Leon</title>
    <link rel="icon" href="/img/iconos/admin.png">
    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href="/admin/style.css">
</head>
<body>
    
    <div class="produccion">
    <div class="dashboard">
        <div>
            <div class="container">
                <h1>Ingresar Productos Civil</h1>
                <p>Cuentas Guardadas</p>
                <br>
                

                <p><b>Faceboock</b></p> 
                <p>Cuenta :</p>    
                <p>Contraseña :</p>
                <br>
                
                <p><b>Instagram</b></p> 
                <p>Cuenta : ventas@produccionesleon.com</p>    
                <p>Contraseña : Colombia2024?</p>
                <br>

                <p><b>Gmail [ventas]</b></p> 
                <p>Cuenta : produccionesleoncompania@gmail.com
                </p>    
                <p>Contraseña : colombia2024*</p>
                <br>
                
                
                
            </div>
        </div>
        
    </div>
                <?php
                require '../../php/menu2.php';
                ?>
    </div>
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

