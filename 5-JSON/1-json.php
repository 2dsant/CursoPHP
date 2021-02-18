<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Joao',
    'idade' => 20
));

array_push ($pessoas, array (
    'nome' => 'David',
    'idade' => 20
));

echo json_encode($pessoas);


