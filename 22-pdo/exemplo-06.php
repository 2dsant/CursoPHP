<?php

//PARA DELETAR UM DADO EM UMA TABELA

$conn = new PDO("mysql:host=localhost;dbname=dbphp8", "root", ""); //Conectar no banco de dados

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

// $conn->rollBack();

$conn->commit();


echo "delete OK";
