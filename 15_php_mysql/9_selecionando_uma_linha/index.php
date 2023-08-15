<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$item_id = 2;
$table = "itens";
$sql = "SELECT * FROM $table WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $item_id);
$stmt->execute();

$result = $stmt->get_result();
$data = $result->fetch_row();

print_r($data);

$stmt->close();
$conn->close();