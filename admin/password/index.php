<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: /login.php");
    exit();
}
?>
<?php
include 'config.php';

// Insertar datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cuenta = $_POST['cuenta'];
    $contrasena = $_POST['contrasena'];
    $link = $_POST['link'];

    $sql = "INSERT INTO cuentas (cuenta, contrasena, link) VALUES ('$cuenta', '$contrasena', '$link')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../../admin/password/index.php");
        exit; // Asegúrate de terminar la ejecución del script después de la redirección
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Recuperar datos
$sql = "SELECT id, cuenta, contrasena, link FROM cuentas";
$result = $conn->query($sql);

$cuentas = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $cuentas[] = $row;
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar cuentas - Producciones Leon</title>
    <link rel="icon" href="/img/iconos/admin.png">
    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href="/admin/style.css">
    <style>
        .dashboard.enter {
            opacity: 1;
            transform: scale(1);
            height: 550px;
            max-height: 550px;
            width: 800px;
            max-width: 800px;
            overflow: overlay;
            
        }
        .contrasenas {
            display: flex;
            flex-wrap: wrap;
        }
        .contrasenas div {
            background-color: #2c2c2c;
            margin: 10px;
            width: 355px;
            height: 190px;
            padding: 0px 12px;
            border-radius: 10px;
            overflow: overlay;
            transition: transform .5s, box-shadow 1s;
        }
        .contrasenas div:hover {
            box-shadow: 0 10px 10px black;
            transform: translateY(-20px);
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
            padding: 5px;
        }
        .hover:hover{
            background: rebeccapurple;
            border-radius: 50px;
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
                
                <h1>Cuentas guardadas</h1>
                <br>
                <div class="contrasenas">

                    <?php foreach ($cuentas as $cuenta): ?>
                        <div>
                            <p><b><?php echo htmlspecialchars($cuenta['link']); ?></b></p>
                            <p class="cuenta hover">Cuenta: <?php echo htmlspecialchars($cuenta['cuenta']); ?></p>    
                            <p class="contrasena hover">Contraseña: <?php echo htmlspecialchars($cuenta['contrasena']); ?></p> <!-- La contraseña está oculta por seguridad -->
                            <a href="editar.php?id=<?php echo $cuenta['id']; ?>"><button class="boton">Editar</button></a>
                        </div>
                    <?php endforeach; ?>
                    
                </div>
                
    <h2>Agregar Nueva Cuenta</h2>
    <form method="post" action="">
        <div><p>Nombre:</p> <input class="input" type="text" name="link" required></div><br>
        <div><p>Cuenta:</p> <input class="input" type="text" name="cuenta" required></div><br>
        <div><p>Contraseña:</p> <input class="input" type="password" name="contrasena" required></div><br>
        <input class="boton" type="submit" value="Agregar">
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

<!-- <?php require '../../php/NO.php'; ?> -->
