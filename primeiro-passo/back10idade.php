<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Idade</title>
</head>
<body>
    <div class="area">
        <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
        $ano = isset($_GET["ano"])?$_GET["ano"]:0;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos."
        ?>
        <br>
        <a href="ex10-idade-form.php">Volatr</a>
    </div>
</body>
</html>