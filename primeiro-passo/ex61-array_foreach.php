<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Funções Array</title>
</head>
<body>
    <div class="area">
        <?php
           $v = array("nome" => "Ana", "idade" => 23, "peso" => 65.5);

           foreach($v as $k => $c){
           echo "O campo $k possui o conteudo $c <br>";
           }

        ?>
    </div>
</body>
</html> 