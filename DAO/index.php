<?php

require_once("config.php");

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);

//retorna um usuário
// $root = new Usuario();
// $root->loadById(3);
//echo $root;

//carrega uma lista de usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("jo");
// echo json_encode($search);

//Carrega um usuário com login e senha
// $usuario = new Usuario();
// $usuario->login("jose", "123456789");

// echo $usuario;

//Criandod um novo usuario
// $aluno = new Usuario("aluno", "@aluno");
// $aluno->insert();
// echo $aluno;

$usuario = new Usuario();

$usuario->loadById(8);
$usuario->update("professor", "pr0f");
echo $usuario;
