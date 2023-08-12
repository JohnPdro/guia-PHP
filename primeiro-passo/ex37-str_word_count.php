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
            $frase = "Eu vou estudar PHP agora";
            $cont = str_word_count($frase, 0);
            echo $cont;
        ?>
    </div>
</body>
</html> 