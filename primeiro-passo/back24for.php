<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Repetição FOR</title>
</head>
<body>
    <div class="area">
        <?php
            $n = isset($_GET["numero"])? $_GET["numero"]: 1;
            for($c = 1; $c <= 10; $c++){
                $r = $n * $c;
                echo "$n X $c = $r <br>";
            }
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>