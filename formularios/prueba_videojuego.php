<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Videojuego</title>
    <?php require "clasevideojuego.php" ?>
</head>

<body>
    <?php
    $videojuego1 = new Videojuego(1, "Spiderman", "7", "Sony");
    echo $videojuego1->titulo;

    /*
        1 - Crear un array con 3 videojuegos
        2 - Recorrer con un foreach el array
        3 - Mostrar los videojuegos en una tabla
    */
    //Crear array 3 videojuegos
    $videojuegos = [];
    for ($i = 0; $i < 3; $i++) {
        array_push($videojuegos, new videojuego($i, "juego " . $i + 1, 18, "Compania generica"));
    }
    //Recorrer con foreach y mostrar en tabla
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Pegi</th>
            <th>Compañia</th>
        </tr>
        <?php
        foreach ($videojuegos as $videojuego) {
            echo "<tr>";
            echo "<td>" . $videojuego->id_videojuego . "</td>";
            echo "<td>" . $videojuego->titulo . "</td>";
            echo "<td>" . $videojuego->pegi . "</td>";
            echo "<td>" . $videojuego->compania . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>