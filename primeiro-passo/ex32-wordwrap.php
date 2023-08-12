<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Função String</title>
</head>
<body>
    <div class="area">
        <?php
            $t = "Aqui temos um texto gigante criado pelo PHP que vai mostrar o funcionamento da funcao worwarp";  
            $r = wordwrap($t, 5, "<br/>n", true);
            echo $r;     
        ?>
    </div>
</body>
</html>