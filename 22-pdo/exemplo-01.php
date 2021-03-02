<?php

$conn = new PDO("mysql:dbname=dbphp8;host=localhost", "root", "");

//stmt = statement = demonstração
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC); //retorna as linhas do bd

foreach ($results as $row) {
    foreach ($row as $key => $value) { //key = nome da coluna, value = valor da coluna 
        echo "<strong>" . $key . ":</strong>" . $value . "<br>";
    }
    echo "=====================================<br>";
}
