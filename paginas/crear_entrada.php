<?php 
    require "../back/funciones.php";
    require "../back/bbdd.php";
    requerir_sesion();

    $categorias = select_categorias();

    if (isset($_POST['validar'])) {
        insert_entrada($_POST['nombre'], $_POST['area_mensaje'], $_POST['categoria'], $_SESSION['ID']);
    }
?>

<html>
    <head>
        <title>Crear Entrada</title>
        <link rel="stylesheet" href="../estilos/lateral.css">
        <link rel="stylesheet" href="../estilos/main.css">
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
                    <form method="post">
                        <p>Nombre</p>
                        <input type="text" name="nombre" id="nombre">
                        <p>Descripcion</p>
                        <textarea name="area_mensaje" id="area_mensaje" rows="5" placeholder="¿Que estas pensando?" maxlength="600"></textarea>
                        <p>Categoria</p>
                        <select name="categoria" id="categoria">
                            <?php 
                                while($row = mysqli_fetch_assoc($categorias)) {
                                    echo "<option value='" . $row['ID'] . "'>" . $row['nombre'] . "</option>";
                                }
                            ?>
                        </select>
                        <div class="boton_formulario">
                            <button name="validar" type="submit"><i class="fas fa-location-arrow"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html> 