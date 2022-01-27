<?php 
    require "../back/funciones.php";
    require "../back/bbdd.php";
    requerir_sesion();

    $primera_entrada = select_primera_entrada();
    $autor_primera_entrada = select_autor_entrada($primera_entrada['ID']);
    $entradas_tendencia = select_entradas_panel();
?>

<html>
    <head>
        <title>Panel</title>
        <link rel="stylesheet" href="../estilos/lateral.css">
        <link rel="stylesheet" href="../estilos/main.css">
        <link rel="stylesheet" href="../estilos/panel.css">
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
                    <div class="trend">
                        <div class="trend_superior">
                            <div><i class="fas fa-fire"></i></div>
                            <div class="trend_perfil">
                                <p>por <?php echo $autor_primera_entrada['nombre'] . " " . $autor_primera_entrada['apellidos'] ?> </p>
                                <?php echo "<img src='../imagenes_perfil/" . $autor_primera_entrada['ID'] . ".png'>" ?>
                            </div>
                        </div>
                        <div class="trend_separador"></div>
                        <div class="trend_inferior">
                            <?php echo "<a href='entrada.php?e=" . $primera_entrada['ID'] . "'>" ?>
                                <h1><?php echo $primera_entrada['nombre']; ?></h1>
                                <h5><?php echo $primera_entrada['descripcion']; ?></h5>
                            </a>
                        </div>
                    </div>
                    <div class="recientes">
                        <?php
                            while ($row = mysqli_fetch_assoc($entradas_tendencia)) {
                                echo "<a class='enlace_categoria' href='entrada.php?e=" . $row['ID'] . "'>";
                                echo "<div class='entrada'>";
                                echo "<div class='entrada_superior'>";
                                echo "<img src='../imagenes_perfil/" . $row['autor_id'] . ".png'>";
                                echo "</div>";
                                echo "<div class='entrada_separador'></div>";
                                echo "<div class='entrada_inferior'>";
                                echo "<h4>" . $row['nombre'] . "</h4>";
                                echo "</div>";
                                echo "</div>";
                                echo "</a>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> 