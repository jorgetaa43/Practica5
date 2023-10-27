<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 Formularios</title>
</head>
<body>
<form action="" method="POST">
    <label for="">Número 1: </label>
        <input type="text" name="numero1"><br><br>
        <label for="">Número 2: </label>
        <input type="text" name="numero2"><br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero1 = (int) $_POST["numero1"];
            $numero2 = (int) $_POST["numero2"];
            if($numero1 > $numero2) {
                echo "<h2>$numero1 es mayor que $numero2</h2>";
            } else if ($numero2 > $numero1) {
                echo "<h2>$numero2 es mayor que $numero1</h2>";
            } else {
                echo "<h2>Ambos número son iguales</h2>";
            }
        }
    ?>
</body>
</html>