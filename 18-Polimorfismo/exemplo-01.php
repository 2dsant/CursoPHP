<?php

abstract class Animal
{
    public function falar()
    {
        return "som";
    }

    public function mover()
    {
        return "andar";
    }
}

class Cachorro extends Animal
{
    public function falar()
    {
        return "AuAu";
    }
}

class Gato extends Animal
{
    public function falar()
    {
        return "Miau";
    }
}

class Passaro extends Animal
{
    public function falar()
    {
        return "PiuPiu";
    }

    public function mover(){
        return "Voa e " . parent::mover();
    }
}

$pluto = new Cachorro();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";
echo "<br><br>";

$suzi = new Gato();
echo $suzi->falar() . "<br>";
echo $suzi->mover() . "<br>";
echo "<br><br>";

$suzi = new Passaro();
echo $suzi->falar() . "<br>";
echo $suzi->mover() . "<br>";
