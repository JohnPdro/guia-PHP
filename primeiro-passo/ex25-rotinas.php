<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Rotina</title>
</head>
<body>
    <div class="area">
        <?php
        function soma ($a, $b){
            $s = $a + $b;
            echo "<p>A soma vale $s</p>"; 
        }
        
        soma(2,4);
        soma(8,10);
        $x = 9;
        $y = 15;
        soma($x, $y);    
        ?>
    </div>
</body>
</html>