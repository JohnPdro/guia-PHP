<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Repetição DO</title>
</head>
<body>
    <div class="area">
        <?php
            $c = 10;
            do{
                echo $c . "<br>";
                $c--;
            }while($c >= 1);
        ?>
    </div>
</body>
</html>