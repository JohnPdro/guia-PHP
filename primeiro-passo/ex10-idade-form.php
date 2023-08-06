<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Calculando Idade</title>
</head>
<body>
    <div class="area">
        <form action="back10idade.php">
            Nome: <input type="text" name="nome"><br>
            Ano de Nascimento: <input type="number" name="ano"> <br>
            <fieldset><legend>Sexo</legend>
                <input type="radio" name="sexo" id="masc" value="Homem" checked>
                <label for="masc">Masculino</label><br>
                <input type="radio" name="sexo" id="fem" value="Mulher">
                <label for="fem">Feminino</label>
            </fieldset>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>