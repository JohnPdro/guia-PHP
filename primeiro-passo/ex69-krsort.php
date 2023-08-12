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
           $v = array(2=>"A", 5=>"J", 1=>"M", 8=>"X", 6=>"K");
           print_r($v);
           krsort($v);
           print_r($v);
        ?>
    </div>
</body>
</html> 