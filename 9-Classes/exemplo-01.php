<?php

class Pessoa {

    public $nome;


    public function falar() {

        return "O meu nome é " . $this->nome;

    }

}

$david = new Pessoa();
$david->nome = "David Santos";
echo $david->falar();