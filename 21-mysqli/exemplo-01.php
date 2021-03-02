<?php

$conn =  new mysqli("localhost", "root", "", "dbphp8"); //ip, usuario, senha e banco de dados

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)"); //preparar um comando para enviar ao banco de dados

$stmt->bind_param("ss", $login, $pass); //os tipos de dados das informações (s = string)
$login = "user";
$pass = "1234";
$stmt->execute(); //envia os dados ao banco de dados

$login = "david";
$pass = "454545";
$stmt->execute();
