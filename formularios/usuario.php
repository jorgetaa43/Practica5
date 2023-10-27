<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <?php require "../funcionUsuario.php" ?>
    <?php require "base_datos_usuario.php" ?>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_usuario = depurar($_POST["usuario"]);
        $temp_nombre = depurar($_POST["nombre"]);
        $temp_apellidos = depurar($_POST["apellidos"]);
        $temp_fecha_nacimiento = depurar($_POST["fecha_nacimiento"]);
        

        if (strlen($temp_usuario) == 0) {
            $error_usuario = "Este campo es obligatorio";
        } else {
            $regex = "/^[a-zA-Z_][a-zA-Z0-9_]{3,7}$/";
            if (!preg_match($regex, $temp_usuario)) {
                $error_usuario = "El usuario debe contener de 4 a 8 carácteres o 
                    números de barrabaja.";
            } else {
                $usuario = $temp_usuario;
            }
        }

        if (strlen($temp_nombre) == 0) {
            $error_nombre = "Este campo es obligatorio";
        } else {
            $regex1 = "/^[a-zA-Z ]*[a-zA-Z]+$/";
            if (!preg_match($regex1, $temp_nombre)) {
                $error_nombre = "El nombre solo puede tener carácteres de la a a la z.";
            } else {
                if (strlen($temp_nombre) >= 20 || strlen($temp_nombre) <= 2) {
                    $error_nombre = "EL nombre debe tener entre 2 y 20 carácteres.";
                } else {
                    $nombre = $temp_nombre;
                }
            }
        }

        if (strlen($temp_apellidos) == 0) {
            $error_apellidos = "Este campo es obligatorio";
        } else {
            $regex2 = "/^[a-zA-Z ]*[a-zA-Z]+$/";
            if (!preg_match($regex2, $temp_apellidos)) {
                $error_apellidos = "Los apellidos solo pueden tener carácteres de la a a la z.";
            } else {
                if (strlen($temp_apellidos) >= 40 || strlen($temp_apellidos) <= 2) {
                    $error_apellidos = "Los apellidos deben tener entre 2 y 40 carácteres.";
                } else {
                    $apellidos = $temp_apellidos;
                }
            }
        }

        if (strlen($temp_fecha_nacimiento) == 0) {
            $error_fecha_nacimiento = "Este campo es obligatorio";
        } else {
            $fecha_actual = date("Y-m-d");
            list($anio_actual, $mes_actual, $dia_actual) = explode("-", $fecha_actual);
            list( $anio_nacimiento, $mes_nacimiento,  $dia_nacimiento) = explode("-", $temp_fecha_nacimiento);
            
            if($anio_actual - $anio_nacimiento < 18) {
                $error_fecha_nacimiento = "Eres menor de edad y no puedes entrar a esta página";
            } else if($anio_actual - $anio_nacimiento == 18) {
                if($mes_actual - $mes_nacimiento < 0) {
                    $error_fecha_nacimiento = "Eres menor de edad y no puedes entrar a esta página";
                } else if($mes_actual - $mes_nacimiento == 0) {
                    if($dia_actual - $dia_nacimiento < 0) {
                        $error_fecha_nacimiento = "Eres menor de edad y no puedes entrar a esta página";
                    } else {
                        $fecha_nacimiento = $temp_fecha_nacimiento;
                    }
                } else if($mes_actual - $mes_nacimiento > 0) {
                    $fecha_nacimiento = $temp_fecha_nacimiento;
                }
            } else if($anio_actual - $anio_nacimiento > 18) {
                $fecha_nacimiento = $temp_fecha_nacimiento;
            }
        }

    }
    ?>
    <form action="" method="post">
        <label for=""> Usuario: </label>
        <input type="text" name="usuario">
        <?php
        if (isset($error_usuario)) {
            echo $error_usuario;
        }
        ?>
        <br><br>
        <label for="">Nombre: </label>
        <input type="text" name="nombre">
        <?php
        if (isset($error_nombre)) {
            echo $error_nombre;
        }
        ?>
        <br><br>
        <label for="">Apellidos: </label>
        <input type="text" name="apellidos">
        <?php
        if (isset($error_apellidos)) {
            echo $error_apellidos;
        }
        ?>
        <br><br>
        <label for="">Fecha de nacimiento: </label>
        <input type="date" name="fecha_nacimiento">
        <?php
        if (isset($error_fecha_nacimiento)) {
            echo $error_fecha_nacimiento;
        }
        ?>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($usuario) && isset($nombre) && isset($apellidos) && isset($fecha_nacimiento)) {
        echo "<h3>Usuario: " . $usuario . "</h3>";
        echo "<h3>Nombre: " . $nombre . "</h3>";
        echo "<h3>Apellidos: " . $apellidos . "</h3>";
        echo "<h3>Fecha de nacimiento: " . $fecha_nacimiento . "</h3>";

        $sql = "INSERT INTO usuarios(usuario, nombre, apellidos, fecha_nacimiento)
            Values('$usuario', '$nombre', '$apellidos', '$fecha_nacimiento')";
        $conexion->query($sql);
    }
    ?>
</body>

</html>