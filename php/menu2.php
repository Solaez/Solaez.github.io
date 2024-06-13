<style>
        .seleccion {
            display: flex;
            gap: 10px; /* Espacio entre los enlaces */
        }
        .iconP {
            display: flex;
            align-items: center;
            border: none;
            background: none;
            padding: 10px;
            cursor: pointer;
        }
        .iconP img {
            margin-right: 10px;
            z-index: 99;
        }
        .iconP p {
                width: 120px;
                height: 50px;
                border-radius: 50px 0 0 50px;
                background-color: #161616;
                opacity: 0;
                display: flex;
                justify-content: center;
                position: absolute;
                margin: -26px;
                margin-left: -100px;
                text-align: start;
                transition: opacity .2s, transform .2s;
                transform: translateX(10px);
                align-items: center;
                color: white;
        }
        .iconP:hover p {
                opacity: 1;
                transform: translateX(-10px);
        }
        .iconP:active p {
                opacity: 1;
                transform: translateX(-10px);
        }
        .iconP:hover img {
                filter: invert(1);
                transform: scale(1.1);
        }
    </style>
<div class="seleccion">
        <a href="/admin/"><button class="iconP"><img src="https://img.icons8.com/sf-black-filled/64/home.png" alt="home"><p>Inicio</p></button></a>
        <a href="/admin/chat/"><button class="iconP"><img src="https://img.icons8.com/pastel-glyph/64/talk--v3.png" alt="mensajes"><p>Mensajes</p></button></a>
        <a href=""><button class="iconP"><img src="https://img.icons8.com/ios-glyphs/30/add-ticket--v1.png" alt="nuevo"><p>Nuevo</p></button></a>
        <a href=""><button class="iconP"><img src="https://img.icons8.com/pulsar-line/48/edit-text-file.png" alt="editar"><p>Editar</p></button></a>
        <a href="/login.php"><button class="iconP"><img src="https://img.icons8.com/external-jumpicon-glyph-ayub-irawan/32/external-_30-user-interface-jumpicon-(glyph)-jumpicon-glyph-ayub-irawan.png" alt="salir"><p>Salir</p></button></a>
</div>