<?php
include 'config.php';

// Verificar si se pasó un ID
if (!isset($_GET['id'])) {
    die("ID no especificado");
}

$id = intval($_GET['id']);

// Recuperar los datos de la cuenta para el ID especificado
$sql = "SELECT * FROM cuentas WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows != 1) {
    die("Cuenta no encontrada");
}

$cuenta = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cuenta_actualizada = $_POST['cuenta'];
    $link_actualizado = $_POST['link'];
    $contrasena_actualizada = $_POST['contrasena'];

    // $contrasena_hash = empty($contrasena_actualizada) ? $cuenta['contrasena'] : password_hash($contrasena_actualizada, PASSWORD_DEFAULT);

    $sql_update = "UPDATE cuentas SET cuenta='$cuenta_actualizada', contrasena='$contrasena_actualizada', link='$link_actualizado' WHERE id=$id";

    if ($conn->query($sql_update) === TRUE) {
        header("Location: ../../admin/password/index.php");
        exit; // Asegúrate de terminar la ejecución del script después de la redirección
    } else {
        echo "Error: " . $sql_update . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar cuentas - Producciones Leon</title>
    <link rel="icon" href="/img/iconos/admin.png">
    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href="/admin/style.css">
    <style>
        .dashboard.enter {
            opacity: 1;
            transform: scale(1);
            height: 500px;
            max-height: 500px;
            width: 700px;
            max-width: 700px;
            overflow: overlay;
            
        }
        .contrasenas {
            display: flex;
            flex-wrap: wrap;
        }
        .contrasenas div {
            background-color: #2c2c2c;
            margin: 10px;
            width: 300px;
            height: 152px;
            padding: 0px 12px;
            border-radius: 10px;
            overflow: overlay;
        }
        .input {
            margin: 30px;
            background: none;
            border: none;
            outline: none;
            max-width: 190px;
            padding: 10px 20px;
            font-size: 16px;
            box-shadow: inset 2px 5px 10px rgb(5, 5, 5);
            color: #fff;
        }
        form div {
            display: flex;
            flex-direction: row;
            align-items: center;
            height: 35px;
        }
        .boton {
            cursor: pointer;
            padding: 12.5px 30px;
            border: 0;
            border-radius: 15px;
            background-color: #414040;
            color: #ffffff;
            font-weight: Bold;
            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            
        }

        .boton:hover {
            background-color: #6fc5ff;
            box-shadow: 0 0 20px #006ff9;
            transform: scale(1.1);
        }

        .boton:active {
            background-color: #3d94cf;
            transition: all 0.25s;
            -webkit-transition: all 0.25s;
            box-shadow: none;
            transform: scale(0.98);
        }
        .hover {
            cursor: pointer;
        }

        .fade-in-out {
            animation: fadeInOut 1s ease-in-out;
        }

        @keyframes fadeInOut {
            0% { opacity: 0; }
            50% { opacity: 1; }
            100% { opacity: 0; }
        }
    </style>
</head>
<body>
    
<div class="produccion">
    <div class="dashboard">
        <div>
            <div class="container">
                
            <h2>Editar Cuenta</h2>
    <form method="post" action="">
        Nombre:       <input class="input" type="text" name="link" value="<?php echo htmlspecialchars($cuenta['link']); ?>" required><br>
        Cuenta:     <input class="input" type="text" name="cuenta" value="<?php echo htmlspecialchars($cuenta['cuenta']); ?>" required><br>
        Contraseña: <input class="input" type="text" name="contrasena" value="<?php echo htmlspecialchars($cuenta['contrasena']); ?>" required><br>
        <input class="boton" type="submit" value="Actualizar">
        <a href="/admin/password/index.php"><button class="boton" >Volver</button></a>
    </form>
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
        document.addEventListener('DOMContentLoaded', (event) => {
            const cuentaElements = document.querySelectorAll('.cuenta');
            const contrasenaElements = document.querySelectorAll('.contrasena');
            const hoverText = 'Copiar';
            const clickedText = 'Copiado';

            const addListeners = (element, originalText) => {
                element.addEventListener('click', () => {
                    navigator.clipboard.writeText(originalText.replace(/^(Cuenta|Contraseña): /, '')).then(() => {
                        element.classList.add('fade-in-out');
                        element.innerText = clickedText;
                        setTimeout(() => {
                            if (element.innerText === clickedText) {
                                element.innerText = originalText;
                                element.classList.remove('fade-in-out');
                            }
                        }, 600); // 60000 ms = 1 minuto
                    }).catch(err => {
                        console.error('Error al copiar el texto: ', err);
                    });
                });

                element.addEventListener('mouseenter', () => {
                    if (element.innerText !== clickedText) {
                        element.classList.add('fade-in-out');
                        element.innerText = hoverText;
                        setTimeout(() => element.classList.remove('fade-in-out'), 1000); // Remueve la clase después de la animación
                    }
                });

                element.addEventListener('mouseleave', () => {
                    if (element.innerText !== clickedText) {
                        element.classList.add('fade-in-out');
                        element.innerText = originalText;
                        setTimeout(() => element.classList.remove('fade-in-out'), 1000); // Remueve la clase después de la animación
                    }
                });
            };

            cuentaElements.forEach(cuentaElement => {
                const originalText = cuentaElement.innerText;
                addListeners(cuentaElement, originalText);
            });

            contrasenaElements.forEach(contrasenaElement => {
                const originalText = contrasenaElement.innerText;
                addListeners(contrasenaElement, originalText);
            });
        });
</script>

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
