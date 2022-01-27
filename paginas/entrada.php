<?php 
    require "../back/funciones.php";
    require "../back/bbdd.php";
    requerir_sesion();

    if (isset($_POST['validar'])) {
        insert_mensaje($_SESSION['ID'], $_GET['e'], $_POST['area_mensaje']);
    }

    if (isset($_GET['e'])) {
        $e = $_GET['e'];
    }

    $entrada = select_entrada($e);
    $autor_entrada = select_autor_entrada($e);
    $mensajes = select_mensajes_entrada($e);
?>

<html>
    <head>
        <title><?php echo $entrada['nombre']; ?></title>
        <link rel="stylesheet" href="../estilos/lateral.css">
        <link rel="stylesheet" href="../estilos/main.css">
        <link rel="stylesheet" href="../estilos/entrada.css">
        <script src="https://kit.fontawesome.com/d065ecc10d.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700;900&display=swap" rel="stylesheet">
        <script src="../js/textare.js"></script>
    </head>
    <body>
        <?php require "lateral.php"; ?>
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
                            <h1><?php echo $entrada['nombre']; ?></h1>
                            <h5><?php echo $entrada['descripcion']; ?></h5>
                        </div>
                        <div class="autor">
                            <h4>por <?php echo $autor_entrada['nombre'] . " " . $autor_entrada['apellidos'] ?></h4>
                            <?php echo "<img src='../imagenes_perfil/" . $autor_entrada['ID'] . ".png'>" ?>
                        </div>
                    </div>
                    <div class="mensajes">
                        <?php
                            if ($mensajes != NULL) {
                                while($row = mysqli_fetch_assoc($mensajes)) {
                                    $autor_mensaje = select_usuario($row['autor_id']);
                                    echo "<div class='mensaje'>";
                                    echo "<div class='mensaje_texto'><p>" . $row['mensaje'] . "</p></div>";
                                    echo "<div class='mensaje_autor'>";
                                    echo "<div class='mensaje_autor_datos'>";
                                    echo "<h6>" . $autor_mensaje['nombre'] . " " . $autor_mensaje['apellidos'] . "</h6>";
                                    echo "<h6>" . $autor_mensaje['profesion'] . "</h6>";
                                    echo "</div>";
                                    echo "<div class='mensaje_autor_imagen'><img src='../imagenes_perfil/" . $autor_mensaje['ID'] . ".png'></div>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                            }
                        ?>
                        <form <?php echo "action='entrada.php?e=" . $_GET['e'] . "' "; ?> method="post">
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