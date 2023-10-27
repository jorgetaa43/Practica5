<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <!-- 
        1ª Paso: Comprobar valores obligatorios
        2ª Paso: Comprobar formato de los datos
        3ª Paso: Comprobar la validez de los datos 
    -->
    <?php
    function depurar(string $entrada): string {
        $salidad = htmlspecialchars($entrada);
        $salidad = trim($salidad);
        return $salidad;
    }

     if($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_campo1 = depurar($_POST["campo1"]);

        /*if(strlen($temp_campo1) > 0) {
            if(is_numeric($temp_campo1)) {
                $temp_campo1 = (float) $temp_campo1;
                if($temp_campo1 >= 0) {
                    $campo1 = $temp_campo1;
                } else {
                    $error_campo1 = "El número debe ser mayor que cero";
                }
            } else {
                $error_campo1 = "Debes introducir un número";
            }
        } else {
            $error_campo1 = "Este campo es obligatorio";
        } */
        
        
        if(!strlen($temp_campo1) > 0) {
            $error_campo1 = "Este campo es obligatorio";
        } else {
            if(!filter_var($temp_campo1, FILTER_VALIDATE_INT) === false) {
                $error_campo1 = "Debes introducir un número";
            } else {
                $temp_campo1 = (int) $temp_campo1;
                if($temp_campo1 < 0) {
                    $error_campo1 = "El número debe ser mayor que cero";
                } else {
                    $campo1 = $temp_campo1;
                }
            }
        }
    }
    ?>
    <form action="" method="post">
        <label for="">Campo 1:</label>
        <input type="text" name="campo1">
        <?php
        if(isset($error_campo1)) {
            echo $error_campo1;
        }
        ?>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if(isset($campo1)) {
        echo "<h3>$campo1</h3>";
    }
    ?>
    
</body>
</html>