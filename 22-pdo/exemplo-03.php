<?php

//PARA INSERIR UM DADO EM UMA TABELA

$conn = new PDO("mysql:host=localhost;dbname=dbphp8", "root", ""); //Conectar no banco de dados

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "luana";
$password = "85858";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();


echo "alterado OK";
