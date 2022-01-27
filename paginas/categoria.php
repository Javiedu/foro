<?php 
    require "../back/funciones.php";
    require "../back/bbdd.php";
    requerir_sesion();

    $nombre_categoria = select_nombre_categoria($_GET['cat']);
    $entradas = select_entradas_categoria($_GET['cat']);

?>

<html>
    <head>
        <title><?php echo $nombre_categoria ?></title>
        <link rel="stylesheet" href="../estilos/lateral.css">
        <link rel="stylesheet" href="../estilos/main.css">
        <link rel="stylesheet" href="../estilos/categoria.css">
        <script src="https://kit.fontawesome.com/d065ecc10d.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700;900&display=swap" rel="stylesheet">
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
                    <h1><?php echo $nombre_categoria ?></h1>
                    <div class="entradas_categoria">
                        <?php
                            if ($entradas != NULL) {
                                while($row = mysqli_fetch_assoc($entradas)) {
                                    $autor_entrada = select_usuario($row['autor_id']);
                                    echo "<a href='entrada.php?e=" . $row['ID'] . "'>";
                                    echo "<div class='mensaje'>";
                                    echo "<div class='mensaje_texto'><p>" . $row['nombre'] . "</p></div>";
                                    echo "<div class='mensaje_autor'>";
                                    echo "<div class='mensaje_autor_datos'>";
                                    echo "<h6>" . $autor_entrada['nombre'] . " " . $autor_entrada['apellidos'] . "</h6>";
                                    echo "<h6>" . $autor_entrada['profesion'] . "</h6>";
                                    echo "</div>";
                                    echo "<div class='mensaje_autor_imagen'><img src='../imagenes_perfil/" . $autor_entrada['ID'] . ".png'></div>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</a>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> 