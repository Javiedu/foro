<?php 
    require "../back/funciones.php";
    requerir_sesion();
?>

<html>
    <head>
        <title>Entrada</title>
        <link rel="stylesheet" href="../estilos/lateral.css">
        <link rel="stylesheet" href="../estilos/entrada.css">
        <link rel="stylesheet" href="../estilos/textarea.css">
        <script src="https://kit.fontawesome.com/d065ecc10d.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700;900&display=swap" rel="stylesheet">
        <script src="../js/textare.js"></script>
    </head>
    <body>
        <div class="lateral">
            <div class="main_iconos">
                <div class="logo"><a href="#"><i class="fas fa-signature"></i></a></div>
                <div class="div_paginas"><a href="#"><i class="fas fa-clock paginas"></i></a></div>
                <div class="div_paginas"><a href="#"><i class="fas fa-fire paginas"></i></a></div>
                <div class="div_paginas"><a href="#"><i class="fas fa-folder paginas"></i></a></div>
            </div>
            <div class="main_opciones">
                <div class="caja_opciones">
                    <div class="div_opciones"><a href="#"><i class="fas fa-cog opciones"></i></a></div>
                    <div class="div_opciones"><a href="#"><i class="fas fa-sign-out-alt opciones"></i></a></div>
                </div>
            </div>
        </div>
        <div class="principal">
            <div class="superior">
                <div class="perfil">
                    <p><?php echo $_SESSION["nombre"] . " " . $_SESSION["apellidos"] ?></p>
                    <?php echo "<img src='../imagenes_perfil/" . $_SESSION["ID"] . ".png'>" ?>
                </div>
            </div>
            <div class="panel">
                <div class="panel_interior">
                    <div class="cabecera">
                        <div class="titulo_entrada">
                            <h1>¿Que es mejor FlexBox o CSS Grid?</h1>
                            <h5>Entra y da tu opinion de que es mejor, FlexBox o CSS Grid</h5>
                        </div>
                        <div class="autor">
                            <h4>por Marcos Correa Perez</h4>
                            <img src="../imagenes/perfil2.png">
                        </div>
                    </div>
                    <div class="mensajes">
                        <div class="mensaje">
                            <div class="mensaje_texto"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare convallis ultricies. Quisque ut lectus a lorem tempus maximus. Phasellus eget massa at elit consequat malesuada in in tellus. Ut tristique eget neque ut porttitor. Aliquam id augue vestibulum, volutpat ligula ac, pharetra nisl. Quisque quis eleifend velit, non sagittis enim. Etiam pellentesque purus vitae varius suscipit. Curabitur maximus quam ut ligula elementum, vel dictum urna blandit. Vestibulum faucibus enim ac libero euismod imperdiet. Pellentesque mattis sapien mi, quis ultricies sem pretium eget. Etiam consectetur pellentesque justo, non commodo nisi scelerisque vel. Nam ac ex ac leo blandit faucibus. Donec nisl erat, ornare a neque et, pellentesque pellentesque erat. Vestibulum accumsan ipsum ut purus convallis dictum.</p></div>
                            <div class="mensaje_autor">
                                <div class="mensaje_autor_datos">
                                    <h6>Jesus Antonio Valdivia</h6>
                                    <h6>Desarrollador FrontEnd</h6>
                                </div>
                                <div class="mensaje_autor_imagen"><img src="../imagenes/perfil4.png"></div>
                            </div>
                        </div>
                        <form action="" method="post">
                            <textarea name="area_mensaje" id="area_mensaje" rows="5" placeholder="¿Que estas pensando?" maxlength="600"></textarea>
                            <div class="boton_formulario">
                                <button name="validar" type="submit"><i class="fas fa-location-arrow"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> 