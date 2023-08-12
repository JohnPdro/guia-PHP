<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Estrutura condicional</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
    <div class="area">
        <?php
        $nota1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 0;

        $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;

        $media = ($nota1 + $nota2) / 2;

        echo "Sua primeira nota foi <span>" . number_format($nota1,1) . "</span> e a segunda nota foi <span>" . number_format($nota2,1) . "</span>,<br> sua média é de <span>" . number_format($media,1) . "</span><br>";

        if ($media < 5) {
            $resultado = "REPROVADO";
        } 
        elseif ($media >= 5 and $media <= 7) {
            $resultado = "RECUPERAÇÃO";
        } 
        elseif ($media > 7 and $media <= 10) {
            $resultado = "APROVADO";
        }
        else{
            $resultado = "VALOR INVÁLIDO";
        }
        echo "Situação do aluno: <span>$resultado</span>";
    
        ?>

        <br>
        
        <a href="ex14-condicional03.php"><input type="button" value="Voltar"></a>
    </div>
</body>

</html>