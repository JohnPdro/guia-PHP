<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Operadores</title>
</head>
<body>
    <div class="area">
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $m = ($n1 + $n2) / 2;
            echo "A soma vale " . ($n1 + $n2);
            echo "<br> A subtração vale " . ($n1 - $n2);
            echo "<br> A multiplicação vale " . ($n1 * $n2);
            echo "<br> A divisão vale " . ($n1 / $n2);
            echo "<br> O modulo vale " . ($n1 % $n2);
            echo "<br> A média vale $m";
        ?>
    </div>
</body>
</html>