<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Variaveis de Variaveis</title>
</head>
<body>
    <div class="area">
        <?php
            $x = "abc";
            $$x = "def";
            echo "O conteudo da variavel X é $x";
            echo "<br>A variavel criada recebeu o valor $abc";
        ?>
    </div>
</body>
</html>