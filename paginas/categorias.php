<?php 
    require "../back/funciones.php";
    require "../back/bbdd.php";
    requerir_sesion();

    $categorias = select_categorias();
?>

<html>
    <head>
        <title><?php echo $_SESSION["ID"]; ?></title>
        <link rel="stylesheet" href="../estilos/lateral.css">
        <link rel="stylesheet" href="../estilos/main.css">
        <link rel="stylesheet" href="../estilos/categorias.css">
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
                    <?php
                        while($row = mysqli_fetch_assoc($categorias)) {
                            echo "<div class='categoria'><h2>" . $row['nombre'] . "</h2></div>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html> 