<?php
require_once 'tarifas.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripción en talleres</title>
</head>
<body>
    <form action="procesar.php" method="POST">
    <label>Nombre:
        <input type="text" name="nombre" required>
    </label>

    <label>Taller:
        <select name="taller">
            <?php
            foreach ($tarifas as $taller => $precio) {
                echo "<option value='$taller'>$taller - "
                    . number_format($precio, 2, ',', '.') 
                    . "€/sesion</option>";
            }
            ?>
        </select>
    </label>

    <label>Número de sesiones:
        <input type="number" name="sesiones"
               min="1" max="10" required>
    </label>

    <button type="submit">Calcular importe</button>
</form>
</body>
</html>