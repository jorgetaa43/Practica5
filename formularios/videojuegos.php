<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
    <?php require "base_datos_videojuegos.php" ?>
    <?php require "../funcionUsuario.php" ?>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/videojuegos.css">
</head>
<body>
    <?php

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $temp_id = depurar($_POST["id"]);
            $temp_titulo = depurar($_POST["titulo"]);
            $temp_compania = depurar($_POST["compania"]);
            
            if(isset($_POST["pegi"])) {
                $temp_pegi = depurar($_POST["pegi"]);
            } else {
                $temp_pegi = "";
            }
            

            /* Validación id */
            if(strlen($temp_id) == 0) {
                $error_id = "Este campo es obligatorio.";
            } else {
                if(strlen($temp_id) > 8) {
                    $error_id = "Error, el id tiene que tener máximo 8 carácteres.";
                } else {
                    if(filter_var($temp_id, FILTER_VALIDATE_INT) === false) {
                        $error_id = "Error, el id tiene que estar compuesto por número enteros.";
                    } else {
                        $id = $temp_id;
                    }
                }
            }

            /* Validación título */
            if(strlen($temp_titulo) == 0) {
                $error_titulo = "Este campo es obligatorio.";
            } else {
                if(strlen($temp_titulo) > 100) {
                    $error_titulo = "Error, el título tiene que tener menos de 101 carácteres.";
                } else {
                    $titulo = $temp_titulo;
                }
            }

            /* Validación pegi */
            if(strlen($temp_pegi) == 0) {
                $error_pegi = "Este campo es obligatorio.";
            } else {
                if(strlen($temp_pegi) > 2) {
                    $error_pegi = "Error, el pegi tiene que tener menos de 3 carácteres";
                } else {
                    $pegi = $temp_pegi;
                }
            }

            /* Validación compañía */
            if(strlen($temp_compania) == 0) {
                $error_compania = "Este campo es obligatorio.";
            } else {
                if(strlen($temp_compania) > 50) {
                    $error_compania = "Error, la compañia tiene que tener menos de 51 carácteres.";
                } else {
                    $compania = $temp_compania;
                }
            }
        }

    ?>
    <div class="container mt-3">
        <h1 class="h1">Videojuegos</h1>
        
        <form action="" method="post">
            <label for="" class="form-label">Id: </label>
            <input type="text" class="form-control" name="id" placeholder="Introduzca el id">
            <?php
                if (isset($error_id)) {
                    echo $error_id;
                }
            ?>

            <br>

            <label for="" class="form-label">Título</label>
            <input type="text" class="form-control" name="titulo" placeholder="Introduzca el título">
            <?php
                if (isset($error_titulo)) {
                    echo $error_titulo;
                }
            ?>

            <br>

            <label for="">Pegi: </label>
            
            <select name="pegi" class="form-select">
                <option value="1" selected disabled hidden>-- Elija el pegi --</option>
                <option value="3">3</option>
                <option value="7">7</option>
                <option value="12">12</option>
                <option value="16">16</option>
                <option value="18">18</option>
            </select>
            <?php
                if (isset($error_pegi)) {
                    echo $error_pegi;
                }
            ?>

            <br>

            <label for="" class="form-label">Compañía: </label>
            <input type="text" class="form-control" name="compania" placeholder="Introduzca la compañía">
            <?php
                if (isset($error_compania)) {
                    echo $error_compania;
                }
            ?>

            <br>

            <div id="button">
                <input type="submit" class="btn btn-primary" id="boton" value="Enviar">
            </div>
        </form>
    </div>

    <?php

        if (isset($id) && isset($titulo) && isset($pegi) && isset($compania)) {
            echo "<h3>Id: " . $id . "</h3>";
            echo "<h3>Título: " . $titulo . "</h3>";
            echo "<h3>Pegi: " . $pegi . "</h3>";
            echo "<h3>Compañia: " . $compania . "</h3>";

            $sql = "INSERT INTO videojuegos(id_videojuego, titulo, pegi, compania)
                Values('$id', '$titulo', '$pegi', '$compania')";
            $conexion->query($sql);
        }

    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>