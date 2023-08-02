<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="register.php" method="POST">
        <div>
            <input type="text" name="brand" placeholder="marca aqui...">
        </div>
        <div>
            <input type="text" name="price" placeholder="preço aqui...">
        </div>
        <div>
            <input type="checkbox" name="optional[]" value="Película">Película
        </div>
        <div>
            <input type="checkbox" name="optional[]" value="Teto Solar">Teto Solar
        </div>
        <div>
            <input type="checkbox" name="optional[]" value="Blindado">Blindado
        </div>
        <div>
            <input type="submit" value="cadastrar">
        </div>
    </form>
</body>
</html>