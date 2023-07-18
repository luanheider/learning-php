<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data do curso em video</h1>

    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia ". date("d/M/Y");
        echo "Hora atual: ". date("G:i:s");
    ?>
</body>
</html>