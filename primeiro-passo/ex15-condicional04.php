<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Switch</title>
</head>
<body>
    <div class="area">
        <form action="back15switch.php" method="get">
            <label for="num">Numero:</label>
            <input type="number" name="num" id="num">
            <br>
            <fieldset><legend>Operação</legend>
                <input type="radio" name="operacao" id="dobro" value="1" checked>
                <label for="dobro">Dobro</label>
                <input type="radio" name="operacao" id="cubo" value="2">
                <label for="cubo">Cubo</label>
                <input type="radio" name="operacao" id="raiz" value="3">
                <label for="raiz">Raiz Quadrada</label>
            </fieldset>
            <input type="submit" value="Calcular">
        </form>
    </div>
</body>
</html>