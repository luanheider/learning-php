<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);
//$q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";
// recarregar a página para ativar a query;
$q = "DROP TABLE teste";
$conn->query($q);
$conn->close();