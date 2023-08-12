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
           $nome = "Joao";
           $novo = str_pad($nome,30," ", STR_PAD_RIGHT);
           print("Meu carro $novo é lindo!");

        ?>
    </div>
</body>
</html> 