<?php

//PARA DELETAR UM DADO EM UMA TABELA

$conn = new PDO("mysql:host=localhost;dbname=dbphp8", "root", ""); //Conectar no banco de dados

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 1;


$stmt->bindParam(":ID", $id);

$stmt->execute();


echo "delete OK";
