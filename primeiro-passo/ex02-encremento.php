<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Encremento</title>
</head>
<body>
    <div class="area">
        <?php
            /* Esse exercicio pretende demonstrar o uso de operadores de incremento e decremento */
            $atual = $_GET["aa"]; # Essa linha vai pegar o ano na URL
            echo "O ano atual é $atual e o ano anterior é " . --$atual;
        ?>
    </div>
</body>
</html>