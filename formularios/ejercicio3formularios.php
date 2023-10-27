<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 Formularios</title>
</head>
<body>
<form action="" method="POST">
    <label for="">Número 1: </label>
        <input type="text" name="numero1"><br><br>
        <label for="">Número 2: </label>
        <input type="text" name="numero2"><br><br>
        <label for="">Número 3: </label>
        <input type="text" name="numero3"><br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero1 = (int) $_POST["numero1"];
            $numero2 = (int) $_POST["numero2"];
            $numero3 = (int) $_POST["numero3"];
            if($numero1 > $numero2 && $numero1 > $numero3) {
                echo "<h2>$numero1 es el mayor</h2>";
            } else if ($numero2 > $numero1 && $numero2 > $numero3) {
                echo "<h2>$numero2 es el mayor</h2>";
            } else if ($numero3 > $numero1 && $numero3 > $numero2) {
                echo "<h2>$numero3 es el mayor</h2>";
            } else if($numero1 == $numero2 && $numero1 == $numero3 && $numero2 == $numero3){
                echo "<h2>Todos los números son iguales</h2>";
            } else if((($numero1 == $numero2) && ($numero3 < $numero1 && $numero3 < $numero2))) {
                echo "<h2>$numero1 es el mayor</h2>";
            } else if((($numero1 == $numero3) && ($numero2 < $numero1 && $numero2 < $numero3))) {
                echo "<h2>$numero1 es el mayor</h2>";
            } else if((($numero2 == $numero3) && ($numero1 < $numero2 && $numero1 < $numero3))) {
                echo "<h2>$numero2 es el mayor</h2>";
            }
        }
    ?>
</body>
</html>