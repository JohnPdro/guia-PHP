<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Switch</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
    <div class="area">
        <?php
            $n = isset($_GET["num"])?$_GET["num"]:0;
            $o = isset($_GET["operacao"])?$_GET["operacao"]:1;
            switch ($o){
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = $n ^ 3;
                    break;
                case 3:
                    $r = sqrt($n); // $n ^ (1/2);
                    break;
            }
            echo " O resultado da operação solicitada foi <span>$r</span>"
        ?>
        <br>

        <a href="ex15-condicional04.php"><input type="submit" value="Voltar"></a>
    </div>
</body>
</html>