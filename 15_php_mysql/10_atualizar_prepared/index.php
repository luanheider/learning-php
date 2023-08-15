<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);
$id = 5;
$table = "itens";
$nome = "Livro";
$descricao = "Livro PHP com Mysql";
$sql = "UPDATE $table SET nome = ?, descricao = ? WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $nome, $descricao, $id);

$stmt->execute();

if($stmt->error) {
    echo "Erro: ".$stmt->error;
}

$stmt->close();
$conn->close();