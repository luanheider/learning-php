<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

//inserindo dados
//colocar entre aspas simples para o msqli entender que estamos adicionando aquelas propriedades,
// é '' pq está envolta de aspas duplas por conta da query com "";
//quando atualiza a página novamente, ele executa a query e adiciona novamente a mesma coisa;

$table = "itens";
$nome = "Caneta";
$descricao = "Caneta azul";

$q = "INSERT INTO $table (nome, descricao) VALUES ('$nome','$descricao')";
$conn->query($q);
$conn->close();