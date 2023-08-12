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

        if ($i < 16) {
            $tipoVoto = "não vota";
        } 
        elseif (($i >= 16 and $i < 18) or ($i > 65)) {
            $tipoVoto = "voto opcional";
        } 
        else {
            $tipoVoto = "voto obrigatorio";
        }
        echo "Para essa idade, $tipoVoto";
        ?>
    </div>
</body>

</html>