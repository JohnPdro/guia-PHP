<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Funções Array</title>
</head>
<body>
    <div class="area">
        <?php
           $m = array( array(6,4), array(4,9), array(3,2));
           $m [0] [1] = $m [2] [0];
           print_r($m);
        ?>
    </div>
</body>
</html> 