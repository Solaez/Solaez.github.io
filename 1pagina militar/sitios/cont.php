<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Producciones Leon</title>
    <link rel="icon" href="/1pagina militar/img/iconos/LOGO hd.png">
    <!--Setilos-->
    <link rel="stylesheet" href="/1pagina militar/css/header-bar.css">
    <link rel="stylesheet" href="/1pagina militar/css/nav-slider.css">
    <link rel="stylesheet" href="/1pagina militar/css/section.css">
    <link rel="stylesheet" href="/1pagina militar/css/article.css">
    <link rel="stylesheet" href="/1pagina militar/css/footer.css">
    <link rel="stylesheet" href="/1pagina militar/css/article-maps.css">
    <link rel="stylesheet" href="/1pagina militar/css/whatsapp.css">
    <link rel="stylesheet" href="/css/chat.css">
    <!--fin-->
</head>
<body>
  
    <!--Header Barra de navegación-->
    <?php require '../../1pagina militar/src/header.php'; ?>

    <!--Contacto-->
    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>PRODUCCIONES<br>LEON</h2>
            </section>
            <section class="info_items">
                <p><img src="/1pagina militar/img/iconos/gmail.png" alt=""><span class="fa fa-envelope"></span> Soldado.leon@hotmail.com</p>
                <p><img src="/1pagina militar/img/iconos/telefono.png" alt=""><span class="fa fa-mobile"></span> (604) 431-0355</p>
                <p><img src="/1pagina militar/img/iconos/whatsapp.png" alt=""><span class="fa fa-mobile"></span> 313 892 17 18</p>
                <p><img src="/1pagina militar/img/iconos/direccion.png" alt=""><span class="fa fa-mobile"></span> Calle 49 # 35 - 52</p>
            </section>
        </section>

        <form id="form" class="form_contact">
            <h2>Envia un mensaje</h2>
            <div>
                <label >Nombres</label>
                <input type="text" name="Nombre" >

                <label >Telefono / Celular</label>
                <input type="number" name="Telefono" >

                <label >Correo electronico</label>
                <input type="email" name="Gmail"  >

                <label for="motivo">Motivo de contacto</label>
                  <select id="motivo" name="Contacto">
                      <option value="consulta">Consulta</option>
                      <option value="comentario">Comentario</option>
                      <option value="solicitud">Solicitud</option>
                  </select>


                <label >Mensaje</label>
                <textarea id="mensaje" name="Mensaje" ></textarea>
                

              <button class="enviar" type="submit" id="button" value="Send Email">Enviar Mensaje</button>
            </div>
        </form>
    </section>

    <!--Mensajes-->
    <?php require '../../1pagina militar/src/help.php'; ?>

    <!--Whatsapp-->
    <?php require '../../1pagina militar/src/whatsapp.php'; ?>
    
    <!--footer-->
    <?php require '../../1pagina militar/src/footer.php'; ?>



<!--Scripts-->
<script src="/js/chat.js"></script>
<script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script> 
<script type="text/javascript">
  emailjs.init('SB25-PCBEpOU3FwK2')
</script>
<script>
  const btn = document.getElementById('button');

  document.getElementById('form').addEventListener('submit', function(event) {
    // Detener el envío del formulario
    event.preventDefault();

    // Verificar si todos los campos están llenos
    if (validarCampos()) {
      btn.value = 'Enviando...';

      const serviceID = 'default_service';
      const templateID = 'template_ypbfvyl';

      emailjs.sendForm(serviceID, templateID, this)
        .then(() => {
          btn.value = 'Send Email';
          alert('Correo enviado con éxito!');
        }, (err) => {
          btn.value = 'Send Email';
          alert(JSON.stringify(err));
        });
    } else {
      alert('Por favor, complete todos los campos.');
    }
  });

  function validarCampos() {
    // Obtener todos los campos del formulario
    const campos = document.getElementById('form').querySelectorAll('input, textarea, select');
    
    // Verificar si algún campo está vacío
    for (let campo of campos) {
      if (!campo.value.trim()) {
        return false; // Al menos un campo está vacío
      }
    }
    
    return true; // Todos los campos están llenos
  }
</script>
<!------------------------------------------------------------------------------------->
<script src="/1pagina militar/js/header-bar.js"></script>
<script src="/1pagina militar/js/article.js"></script>
<script src="/1pagina militar/js/whatsapp.js"></script>
<!--Fin-->
</body>
</html>

<!--cursor-->
<div class="cursor-container">
  <div class="cursor"></div>
  <link rel="stylesheet" href="/1pagina militar/css/cursor.css">
  <script src="/1pagina militar/js/cursor.js"></script>