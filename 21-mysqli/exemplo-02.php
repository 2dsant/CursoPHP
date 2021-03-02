<?php

$conn =  new mysqli("localhost", "root", "", "dbphp8");

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_assoc()) //Retorna um dado se ele existir na linha do bd
{
    array_push($data, $row); //se achar inclua no array $data
}

echo json_encode($data);
