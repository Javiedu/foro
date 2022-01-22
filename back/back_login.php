<?php
    if (isset($_POST['validar'])) {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        echo $usuario;
        echo $password;
    }