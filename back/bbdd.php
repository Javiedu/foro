<?php
    function select_entrada($id) {
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

        $query = "SELECT * FROM entrada WHERE ID = '$id'";

        $resultado = mysqli_query($conexion, $query);
        if (mysqli_num_rows($resultado) > 0) {
            while($row = mysqli_fetch_assoc($resultado)) {
                return $row;
            }
        }
    }

    function select_autor_entrada($id) {
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

        $query = "SELECT * FROM entrada WHERE ID = '$id'";

        $resultado = mysqli_query($conexion, $query);
        if (mysqli_num_rows($resultado) > 0) {
            while($row = mysqli_fetch_assoc($resultado)) {
                $id_autor_entrada = $row['autor_id'];
            }
        }
        
        $query = "SELECT * FROM usuario WHERE ID = '$id_autor_entrada'";

        $resultado = mysqli_query($conexion, $query);
        if (mysqli_num_rows($resultado) > 0) {
            while($row = mysqli_fetch_assoc($resultado)) {
                return $row;
            }
        }
    }

    function select_mensajes_entrada($id) {
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

        $query = "SELECT * FROM mensaje WHERE entrada_id = '$id' ORDER BY fecha_de_mensaje";

        $resultado = mysqli_query($conexion, $query);
        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        }
    }

    function select_usuario($id) {
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

        $query = "SELECT * FROM usuario WHERE ID = '$id'";

        $resultado = mysqli_query($conexion, $query);
        if (mysqli_num_rows($resultado) > 0) {
            while($row = mysqli_fetch_assoc($resultado)) {
                $respuesta['ID'] = $row['ID'];
                $respuesta['nombre'] = $row['nombre'];
                $respuesta['apellidos'] = $row['apellidos'];
                $respuesta['profesion'] = $row['profesion'];
    
                return $respuesta;   
            }
        }
    }

    function insert_mensaje($autor_id, $entrada_id, $mensaje) {
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
        
        $id = random_int(111111, 999999);
        $fecha = date('Y-m-d H:i:s', time());

        $query = "INSERT INTO mensaje (ID, mensaje, autor_id, entrada_id, fecha_de_mensaje)
        VALUES ('$id', '$mensaje', '$autor_id', '$entrada_id', '$fecha')";

        mysqli_query($conexion, $query);
    }

    function select_primera_entrada() {
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
        
        $query = "SELECT * FROM entrada ORDER BY fecha_de_publicacion DESC LIMIT 1";

        $resultado = mysqli_query($conexion, $query);
        if (mysqli_num_rows($resultado) > 0) {
            while($row = mysqli_fetch_assoc($resultado)) {
                return $row;
            }
        }
    }

    function select_entradas_panel() {
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
        
        $query = "SELECT * FROM entrada ORDER BY fecha_de_publicacion DESC LIMIT 1, 12";

        $resultado = mysqli_query($conexion, $query);
        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        }
    }

    function select_categorias() {
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
        
        $query = "SELECT * FROM categoria";

        $resultado = mysqli_query($conexion, $query);
        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        }

    }

    function insert_entrada($nombre, $descripcion, $categoria_id, $autor_id) {
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
        
        $id = random_int(111111, 999999);
        $fecha = date('Y-m-d H:i:s', time());

        $query = "INSERT INTO entrada (ID, nombre, descripcion, autor_id, categoria_id, fecha_de_publicacion)
        VALUES ('$id', '$nombre', '$descripcion', '$autor_id', '$categoria_id', '$fecha')";

        mysqli_query($conexion, $query);
    }