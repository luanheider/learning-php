<?php 
    $user = [
        "name" => "Luan",
        "age" => 33,
        "position" => "Developer"
    ];

    if($user) {
        $name = $user["name"];
        $age = $user["age"];
        $position = $user["position"];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <div>
            <input type="text" name="name" value="<?=$name?>">
        </div>
        <div>
            <input type="text" name="age" value="<?=$age?>">
        </div>
        <div>
            <input type="text" name="position" value="<?=$position?>">
        </div>
        <input type="submit" value="enviar">
    </form>
</body>
</html>