<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 2</title>
    <?php require "function1.php" ?>
    <?php require "function2.php" ?>
    <?php require "function3.php" ?>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: rgb(245, 245, 245);
        }

        caption {
            padding: 8px;
            border: 1px solid #dddddd;
        }

        table.tablaanimales {
            background-color: #c9e9fc;
        }

        tr.tr {
            background-color: rgb(7, 87, 152);
            color: white;
        }

        caption.animales {
            background-color: #3e5f8a;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Ejercicio 1 -->
    <h1>Ejercicio 1</h1>
    <form action="" method="POST">
        <label for="">Introduzca el dinero que desee convertir:</label>
        <input type="number" name="dinero" placeholder="Introduzca el dinero">

        <br><br>

        <label for="convertir">Selecciones su opción de dinero que quiere convertir:</label>
        <input type="radio" name="convertir" id="e" value="e"> Euros
        <input type="radio" name="convertir" id="d" value="d"> Dólares
        <input type="radio" name="convertir" id="y" value="y"> Yenes

        <br><br>

        <label for="convertir1">Selecciones a que quiere convertir su dinero:</label>
        <input type="radio" name="convertir1" id="e" value="e"> Euros
        <input type="radio" name="convertir1" id="d" value="d"> Dólares
        <input type="radio" name="convertir1" id="y" value="y"> Yenes

        <br><br>

        <input type="hidden" name="f" value="ejercicio1">
        <button type="submit">Calcular</button>

        <br><br>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $dinero = $_POST["dinero"];
                $divisaI = $_POST["convertir"];
                $divisaF = $_POST["convertir1"];
                echo cambiarDivisa($dinero, $divisaI, $divisaF);
            }
    ?>

    <hr>

    <!-- Ejercicio 2 -->
    <h1>Ejercicio 2</h1>
    <form action="" method="GET">
        <label for="">Introduzca el número que desee: </label>
        <input type="number" name="numero">
        <select name="function">
            <option value="sumatorio">Sumatorio</option>
            <option value="factorial">Factorial</option>
        </select>

        <br><br>

        <button type="submit">Calcular</button>

        <br><br>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $num = $_GET["numero"];
            if ($num < 0) {
                echo "El número no puede ser negativo";
            } else if (isset($_GET["function"])) {
                if ($_GET["function"] == "sumatorio") {

                    echo sumatorio($num);
                } else if ($_GET["function"] == "factorial") {

                    echo factorial($num);
                }
            }
        }
    ?>

    <hr>

    <!-- Ejercicio 3 -->
    <h1>Ejercicio 3</h1>
    <table class="tablaanimales">
        <caption class="animales">Animales</caption>
        <thead>
            <tr class="tr">
                <th>Especie</th>
                <th>Tipo</th>
                <th>Ejemplares</th>
                <th>Situación</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nombre = array_column($animales, 0);
                $tipo = array_column($animales, 1);
                $ejemplares = array_column($animales, 2);
                $situacion = array_column($animales, 3);
                foreach ($animales as $animal) {
                    list($nombre, $tipo, $ejemplares) = $animal;
                    $situacion = comprobarEstado($ejemplares);
                    echo "<tr>";
                    echo "<td>" . $nombre . "</td>";
                    echo "<td>" . $tipo . "</td>";
                    echo "<td>" . $ejemplares . "</td>";
                    echo "<td>" . $situacion . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

    <br><br>
    
    <form action="" method="POST">
        <label for="">Introduzca el animal que desee:</label>
        <input type="text" name="animal">

        <br><br>
        <input type="hidden" name="f" value="comprobar">
        <button type="submit">Comprobar</button>

        <br><br>
    </form>

    <?php
    /* if($_SERVER["REQUEST_METHOD"] == "POST") {
        $especie = $_POST["especie"];
        foreach($animales as $animal) {
            list($l_especie, $l_clase, $l_cantidad) = $animal;
            if($especie == $l_especie) {
                echo "<h3>El animal $especie está en el array</h3>";
                break;
            }
        }
    } */
    ?>
</body>

</html>