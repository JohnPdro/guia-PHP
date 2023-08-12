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
        <form method="get" action="back18while.php">
            <?php

            $c = 1;
            while ($c <= 5) {

                echo "<label for='valor$c'>Valor $c:</label>
            <input type='number' name='valor$c' id='valor$c' max='100' min='0' value='0'><br>";

                $c++;
            }
            ?>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>