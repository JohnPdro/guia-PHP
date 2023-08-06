<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Calcular Raiz Quadrada</title>
</head>
<body>
    <div class="area">
        <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz de $valor é igual a " . number_format($rq,2);
        ?>
        <br>
        <a href="ex09-dados-form.php">Voltar</a>
    </div>
</body>
</html>