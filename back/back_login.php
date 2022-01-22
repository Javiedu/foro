<?php
    $bd_servidor = "localhost";
    $bd = "signa";
    $bd_usuario = "root";
    $bd_password = "";

    $conexion = mysqli_connect(
        $bd_servidor,
        $bd_usuario,
        $bd_password,
        $bd
    );

    if (isset($_POST['validar'])) {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        
        $query = "SELECT * FROM usuario WHERE nickname='$usuario' AND password='$password'";
        $resultado = mysqli_query($conexion, $query);


        if (mysqli_num_rows($resultado) > 0) {
            while($row = mysqli_fetch_assoc($resultado)) {
                session_start();
                $_SESSION["ID"] = $row['ID'];
                $_SESSION["nick"] = $row['nickname'];
                $_SESSION["nombre"] = $row['nombre'];
                $_SESSION["apellidos"] = $row['apellidos'];
                $_SESSION["profesion"] = $row['profesion'];
                header("Location: ../paginas/panel.php");
            }
        } else {
            header("Location: ../login.php");
        }
    }