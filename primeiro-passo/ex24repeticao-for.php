<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Repetição FOR</title>
</head>
<body>
    <div class="area">
        <form method="get" action="back24for.php">
            <label for="numero">Numero:</label>
            <select name="numero" id="numero">
                <?php
                for($c = 1; $c <= 10; $c++){
                    echo "<option>$c</option>";
                }
                ?>
            </select>
            <input type="submit" value="Tabuada">
        </form>
    </div>
</body>
</html>