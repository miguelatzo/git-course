<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bienvenidos sean todos</title>

</head>
<body>
    <p><?php echo $Aaron ?></p>
    <div class="contenedor">
        <?php foreach($objetos as $index => $item) {?>
            <div class="item">
                <p><?php echo $index, ' ', $item['id'], ' : ', $item['nombre'], ', timestamp: ', $item['created_at'] ?></p>
            </div>
        <?php }?>
    </div>
</body>
</html>