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
            $v = isset($_GET["valor"])? $_GET["valor"] : 1;
            echo "<h1> Calculando o fatorial de $v </h1>";
            $c = $v;
            $fat = 1;
            do {
                $fat = $fat * $c;        
                $c --;    
            } while($c >= 1);
            echo"<h2>$v != $fat</h2>";
        ?>
        <br>
        <a href="ex21-repeticao-do.php">Voltar</a>
    </div>
</body>
</html>