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
            $p = "Leite";
            $pr = 4.5;

            echo "O $p custa R$ " . number_format($pr,2) . "<br>";
            
            printf("O %s custa R$ %.2f", $p, $pr); 
        ?>
    </div>
</body>
</html>