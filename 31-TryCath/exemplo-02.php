<?php

function tratanome($name)
{

    if(!$name) {
        throw new Exception("Nenhum nome foi definido", 1);
    }

    echo ucfirst($name)."<br>";

}

try {
    
    tratanome("Joao");
    tratanome("");

} catch (Exception $e) {
    
    echo $e->getMessage();

} finally {

    echo "Executou o try";

}