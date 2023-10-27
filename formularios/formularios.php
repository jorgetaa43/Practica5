<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducción</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Nombre</label>
        <input type="text" name="nombre"><br><br>
        <label for="">Apellido</label>
        <input type="text" name="apellido"><br><br>
        <label for="">Edad</label>
        <input type="number" name="edad"><br><br>
        <input type="submit" value="Enviar">

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellido"];
        $edad = (int) $_POST["edad"];
        echo "<h2>$nombre $apellidos $edad</h2>";
    }
    ?>
    </form>
</body>
</html>