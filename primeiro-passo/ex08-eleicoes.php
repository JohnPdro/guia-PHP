<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Eleições</title>
</head>
<body>
    <div class="area">
        <?php
        $ano = $_GET["an"];
        $idade = 2023 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos.";
        echo "<br> E dessa forma o voto é " . (($idade >= 18 && $idade < 65)?"OBRIGATORIO":"NÃO OBRIGATORIO");
        ?>
    </div>
</body>
</html>