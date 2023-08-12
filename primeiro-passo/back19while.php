<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>While</title>
</head>
<body>
    <div class="area">
        <?php
            $i = isset($_GET["inicio"])? $_GET["inicio"] : 0;
            $f = isset($_GET["final"])? $_GET["final"] : 0;
            $inc = isset($_GET["incremento"])? $_GET["incremento"] : 0;

            if ($i > $f){
                while ($i >= $f){
                    echo $i . "<br>";
                    $i -= $inc;
                } 
            }
            else{
                while ($i <= $f){
                    echo $i . "<br>";
                    $i += $inc;
                }
            }
        ?>
    </div>
</body>
</html>