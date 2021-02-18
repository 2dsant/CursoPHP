<?php

function soma(int ...$valores):string
{

    return array_sum($valores);

}

var_dump(soma(2,2));
echo "<br>";
echo soma(2,2,3,4,5,9);
echo "<br>";
