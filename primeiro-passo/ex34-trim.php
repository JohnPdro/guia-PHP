<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Funções String</title>
</head>
<body>
    <div class="area">
        <?php
            $nome = "   José da Silva   ";
            echo "$nome <br>";
            echo (strlen($nome)) ."<br>";
            $novo = trim($nome);
            echo($novo) . "<br>";
            echo(strlen($novo));

        ?>
    </div>
</body>
</html>