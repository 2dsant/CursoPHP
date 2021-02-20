<?php

interface Veiculo
{
    public function acelerar($velocidade);
    public function frear($freio);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo
{
    public function acelerar($velocidade)
    {
        echo "O veiculo acelerou até " . $velocidade . " KM/H";
    }

    public function frear($freio)
    {
        echo "O veiculo freiou até " . $freio . " KM/H";
    }

    public function trocarMarcha($marcha)
    {
        echo "O veiculo engatou a marcha " . $marcha;
    }
}

