<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("David Santos");
$cad->setEmail("2dsant3@gmail.com");
$cad->setSenha("123456789");

$cad->registrarVenda();
