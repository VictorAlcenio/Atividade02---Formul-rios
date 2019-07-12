<!DOCTYPE html>

<html>
<head>
    <title> Refeições e Bebidas favoritas</title>
</head>

<body>
    <form action="sel_vinho.php" method="POST">
        <strong> Digite seu nome:</strong>
        <input TYPE="text" size="45" name="name" /> <br />
        <strong>Selecione seu tipo de vinho favorito:</strong> <br />
        <input type="radio" name="cor" value="branco" />Branco
        <input type="radio" name="cor" value="ros&eacute;" />Rosé
        <input type="radio" name="cor" value="tinto" />Tinto <br />
        <strong> Digite sua refeição favorita:</strong>
        <input type="text" size="45" name="comida" /><br />
        <input type="submit" value="Submeter este formulário" />
    </form>
</body>
</html>
