<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$id = 6;
$table = "itens";
$sql = "DELETE FROM $table WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

$stmt->execute();

$stmt->close();
$conn->close();