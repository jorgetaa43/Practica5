<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require "base_datos_usuario.php"?>
    <link rel="stylesheet" type="text/css" href="CSS/listado_usuarios.css">
</head>
<body>
<div class="container">
        <br>
        <h2>Listado de usuarios</h2><br><br>
        <table class="tablita">
        <caption class="usuarios">Usuarios</caption>
            <thead>
                <tr class="tr">
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Fecha de nacimiento</th>
                </tr>
            </thead>
            <tbody>

            <?php
                $sql = "SELECT * FROM usuarios";
                $resultado = $conexion -> query($sql);

                while($fila = $resultado -> fetch_assoc()) {
                    echo "<tr class='usuarios'>";
                    echo "<td>".$fila["usuario"]. "</td>";
                    echo "<td>".$fila["nombre"]. "</td>";
                    echo "<td>".$fila["apellidos"]. "</td>";
                    echo "<td>".$fila["fecha_nacimiento"]. "</td>";
                    echo "</tr>";
                }
            ?>

            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>