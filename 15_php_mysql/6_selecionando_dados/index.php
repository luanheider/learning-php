<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

//obtendo os dados do banco com mysqli e transformando em array para utilizar

$q = "SELECT * FROM itens";
$result = $conn->query($q);

//lembrar de encerrar conexão
$conn->close();

//obtendo um item
$item = $result->fetch_assoc();
//print_r($item);

//obtendo todos os items
$items = $result->fetch_all();
print_r($items);