<?php

//PARA INSERIR UM DADO EM UMA TABELA

$conn = new PDO("mysql:host=localhost;dbname=dbphp8", "root", ""); //Conectar no banco de dados

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "jose";
$password = "123456789";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->execute();


echo "inserido OK";
