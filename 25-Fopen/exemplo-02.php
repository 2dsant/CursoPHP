<?php

require_once("config.php");

$sql = new Sql();

$usuarios = select("SELECT * FROM tb_usuarios ORDER BY deslogin");
print_r($sql);