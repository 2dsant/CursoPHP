<?php

class Pessoa
{
    public $nome = "David Santos";
    protected $idade = 23;
    private $senha = 1234;

    public function verDados()
    {
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

class Programador extends Pessoa
{
    public function verDados()
    {
        echo get_class($this) . "<br>";

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

$objeto = new Programador();

// echo $objeto->nome . "<br>";
// echo $objeto->nome . "<br>";
// echo $objeto->senha . "<br>";

$objeto->verDados();
