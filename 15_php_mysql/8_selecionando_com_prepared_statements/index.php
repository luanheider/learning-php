<?php
//utilizar prepare junto com cláusula WHERE
$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$table = "itens";
$id = 2;
$sql = "SELECT * FROM $table WHERE id > ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$data = $result->fetch_all();
print_r($data);

$stmt->close();
$conn->close();