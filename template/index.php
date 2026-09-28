<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TLOPHP</title>
        <link rel="stylesheet" href="template/styles.css">
    </head>
    <body>
        <div class="tablero">
            <?php foreach ($tablero1 as $fila): ?>
                <?php foreach ($fila as $codigo): ?>
                    <div class="tile tile-<?php echo $tipos[$codigo] ?? 'desconocido' ?>"></div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </body>
</html>