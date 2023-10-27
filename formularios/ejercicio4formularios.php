<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 Formularios</title>
</head>

<body>
    <?php

    function precioSinIVA(int|float $precio, string $IVA): float {
        switch ($IVA) {
            case "General":
                $precio = $precio - ($precio * 0.21);
                break;
            case "Reducido":
                $precio = $precio - ($precio * 0.1);
                break;
            case "Superreducido":
                $precio = $precio - ($precio * 0.04);
                break;
            case "Sin IVA":
                $precio;
        }
        return $precio;
    }

    function calcularIRPF(int|float $salario) {
       
        $tramo1 = 12450 * 0.81;
        $tramo2 = (20200 - 12450) * 0.76;
        $tramo3 = (35200 - 20200) * 0.7;
        $tramo4 = (60000 - 35200) * 0.63;
        $tramo5 = (300000 - 60000) * 0.55;
        $salarioFinal = match(true) {
            $salario <= 12450 => 12450 * 0.81,
            $salario > 12450 && $salario <= 20200 => $tramo1 + (($salario - 12450) * 0.76),
            $salario > 20200 && $salario <= 35200 => $tramo1 + $tramo2 + ($salario - 20200) * 0.7,
            $salario > 35200 && $salario <= 60000 => $tramo1 + $tramo2 + $tramo3 + ($salario - 35200) * 0.63,
            $salario > 60000 && $salario <= 300000 => $tramo1 + $tramo2 + $tramo3 + $tramo4 + ($salario - 60000) * 0.55,
            $salario > 300000 => $tramo1 + $tramo2 + $tramo3 + $tramo4 + $tramo5 + ($salario - 300000) * 0.53
        };
        return $salarioFinal;

    }
    ?>
    <h1>Precio sin iva</h1>
    <form action="" method="get">
        <label for="">Introduzca su sueldo: </label>
        <input type="text" name="sueldo"><br><br>
        <label for="">Introduzca el tipo de IVA: </label>
        <select name="tipoIVA">
            <option value="General">General</option>
            <option value="Reducido">Reducido</option>
            <option value="Superreduido">Superreducido</option>
            <option value="SinIVA">Sin IVA</option>
        </select>
        <br><br>
        <input type="hidden" name="f" value="iva">
        <input type="submit" value="Enviar">
    </form>
    <br><br>
    <h1>Calcular irpf</h1>
    <form method="get">
        <label for="">Introduzca su salario: </label>
        <input type="text" name="salario"><br><br>
        <input type="hidden" name="f" value="irpf">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["f"])) {
            if ($_GET["f"] == "iva") {
                $sueldo = (float) $_GET["sueldo"];
                $tipoIVA = $_GET["tipoIVA"];
                echo "<br>";
                echo precioSinIVA($sueldo, $tipoIVA);
            }
            if($_GET["f"] == "irpf") {
                $salario = (float) $_GET["salario"];
                echo "<br>";
                echo calcularIRPF($salario);
            }
        }
    }

    ?>
</body>

</html>