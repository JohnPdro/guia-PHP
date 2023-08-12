<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Repetição DO</title>
</head>
<body>
    <div class="area">
        <?php
            $numero = isset($_GET["numero"])? $_GET["numero"] : 0;
            $cont = 0;    

            do {
                echo "$cont X $numero = " . $cont * $numero . "<br>";
                $cont ++;            
            }while ($cont <= 10);
        ?>
    </div>
</body>
</html>