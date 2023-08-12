<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Estrutura condicional</title>
</head>
<body>
    <div class="area">
        <?php
        $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tera $i anos <br>";
        if($i >= 18){
            $v = "já pode votar";
            $d = "já pode dirigir";
        }
        else{
            $v = "não pode votar";
            $d = "não pode dirigir";
        }
        echo "Com essa idade você $v e também $d";

        ?>
    </div>
</body>

</html>