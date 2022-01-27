<?php
    $GLOBALS['bd_servidor'] = "localhost";
    $GLOBALS['bd'] = "signa";
    $GLOBALS['bd_usuario'] = "root";
    $GLOBALS['bd_password'] = "";

    function select_entrada($id) {
        $conexion = mysqli_connect(
            $GLOBALS['bd_servidor'],
            $GLOBALS['bd_usuario'],
            $GLOBALS['bd_password'],
            $GLOBALS['bd']
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
        $conexion = mysqli_connect(
            $GLOBALS['bd_servidor'],
            $GLOBALS['bd_usuario'],
            $GLOBALS['bd_password'],
            $GLOBALS['bd']
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
        $conexion = mysqli_connect(
            $GLOBALS['bd_servidor'],
            $GLOBALS['bd_usuario'],
            $GLOBALS['bd_password'],
            $GLOBALS['bd']
        );

        $query = "SELECT * FROM mensaje WHERE entrada_id = '$id' ORDER BY fecha_de_mensaje";

        $resultado = mysqli_query($conexion, $query);
        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        }
    }

    function select_usuario($id) {
        $conexion = mysqli_connect(
            $GLOBALS['bd_servidor'],
            $GLOBALS['bd_usuario'],
            $GLOBALS['bd_password'],
            $GLOBALS['bd']
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
        $conexion = mysqli_connect(
            $GLOBALS['bd_servidor'],
            $GLOBALS['bd_usuario'],
            $GLOBALS['bd_password'],
            $GLOBALS['bd']
        );
        
        $id = random_int(111111, 999999);
        $fecha = date('Y-m-d H:i:s', time());

        $query = "INSERT INTO mensaje (ID, mensaje, autor_id, entrada_id, fecha_de_mensaje)
        VALUES ('$id', '$mensaje', '$autor_id', '$entrada_id', '$fecha')";

        mysqli_query($conexion, $query);
    }

    function select_primera_entrada() {
        $conexion = mysqli_connect(
            $GLOBALS['bd_servidor'],
            $GLOBALS['bd_usuario'],
            $GLOBALS['bd_password'],
            $GLOBALS['bd']
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
        $conexion = mysqli_connect(
            $GLOBALS['bd_servidor'],
            $GLOBALS['bd_usuario'],
            $GLOBALS['bd_password'],
            $GLOBALS['bd']
        );
        
        $query = "SELECT * FROM entrada ORDER BY fecha_de_publicacion DESC LIMIT 1, 12";

        $resultado = mysqli_query($conexion, $query);
        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        }
    }

    function select_categorias() {
        $conexion = mysqli_connect(
            $GLOBALS['bd_servidor'],
            $GLOBALS['bd_usuario'],
            $GLOBALS['bd_password'],
            $GLOBALS['bd']
        );
        
        $query = "SELECT * FROM categoria";

        $resultado = mysqli_query($conexion, $query);
        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        }

    }

    function insert_entrada($nombre, $descripcion, $categoria_id, $autor_id) {
        $conexion = mysqli_connect(
            $GLOBALS['bd_servidor'],
            $GLOBALS['bd_usuario'],
            $GLOBALS['bd_password'],
            $GLOBALS['bd']
        );
        
        $id = random_int(111111, 999999);
        $fecha = date('Y-m-d H:i:s', time());

        $query = "INSERT INTO entrada (ID, nombre, descripcion, autor_id, categoria_id, fecha_de_publicacion)
        VALUES ('$id', '$nombre', '$descripcion', '$autor_id', '$categoria_id', '$fecha')";

        mysqli_query($conexion, $query);
    }

    function select_entradas_categoria($id) {
        $conexion = mysqli_connect(
            $GLOBALS['bd_servidor'],
            $GLOBALS['bd_usuario'],
            $GLOBALS['bd_password'],
            $GLOBALS['bd']
        );
        
        $query = "SELECT * FROM entrada WHERE categoria_id = '$id'";

        $resultado = mysqli_query($conexion, $query);
        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        }

    }

    function select_nombre_categoria($id) {
        $conexion = mysqli_connect(
            $GLOBALS['bd_servidor'],
            $GLOBALS['bd_usuario'],
            $GLOBALS['bd_password'],
            $GLOBALS['bd']
        );
        
        $query = "SELECT * FROM categoria WHERE ID = '$id'";

        $resultado = mysqli_query($conexion, $query);
        if (mysqli_num_rows($resultado) > 0) {
            while($row = mysqli_fetch_assoc($resultado)) {
                return $row['nombre'];
            }
        }
    }

    function paginacion_select_entradas($pag) {
        $conexion = mysqli_connect(
            $GLOBALS['bd_servidor'],
            $GLOBALS['bd_usuario'],
            $GLOBALS['bd_password'],
            $GLOBALS['bd']
        );
        
        $inicio = 6 * $pag;
        $ultima = $inicio + 6;

        $query = "SELECT * FROM entrada LIMIT " . $inicio . ", " . $ultima;

        $resultado = mysqli_query($conexion, $query);
        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        }
    }

    function pagina_siguiente($pag) {
        $conexion = mysqli_connect(
            $GLOBALS['bd_servidor'],
            $GLOBALS['bd_usuario'],
            $GLOBALS['bd_password'],
            $GLOBALS['bd']
        );
        $pag = $pag + 1;
        $inicio = 6 * $pag;
        $ultima = $inicio + 6;

        $query = "SELECT * FROM entrada LIMIT " . $inicio . ", " . $ultima;

        $resultado = mysqli_query($conexion, $query);
        if (mysqli_num_rows($resultado) > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }