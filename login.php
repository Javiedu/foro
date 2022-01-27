<html>
    <head>
        <title>Signa</title>
        <link rel="stylesheet" href="estilos/login.css">
        <script src="https://kit.fontawesome.com/d065ecc10d.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="main">
            <div class="logo" ><i class="fas fa-signature"></i></div>
            <form action="back/back_login.php" method="post">
                <div>
                <p>Usuario</p>
                <input class="campos" type="text" name="usuario" id="usuario">
                </div>
                <div>
                <p>Contraseña</p>
                <input class="campos" type="password" name="password" id="password">
                </div>
                <input class="boton" type="submit" name="validar" value="Iniciar Sesion">
            </form>
        </div>
    </body>
</html>