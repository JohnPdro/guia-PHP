<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>While</title>
</head>
<body>
    <div class="area">
       <?php
        $c = 10;
        while ($c >= 0){
            echo $c . "<br>";
            $c -= 2;
        }
       ?> 
    </div>
</body>
</html>