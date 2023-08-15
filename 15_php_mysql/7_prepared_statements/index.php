<?php
//criar query com placeholders em vez dos valores reais;
//aumentando a performance e segurança da requisição
$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$nome = "Microfone";
$descricao = "Microfone novo fabricado na China";
$table = "itens";

//statement - preparando a query com prepare e adicionando placeholder ?,?
$stmt = $conn->prepare("INSERT INTO $table (nome, descricao) VALUES (?, ?)");

//ligando a query a ser executada do placeholder
$stmt->bind_param("ss", $nome, $descricao); // s = string, i = integer, d = double

//aqui é onde executamos a query
$stmt->execute();
$conn->close();