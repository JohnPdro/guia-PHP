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
         $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
         $cont = substr_count($frase, "PHP");
         print("PHP encontrado $cont vezes");  
        ?>
    </div>
</body>
</html> 