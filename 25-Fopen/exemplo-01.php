<?php

$file = fopen("log.txt", "a+"); 
//Cria o arquivo log.txt/W+ significa write e se o arquivo não existir cria um por causa do + e reseta o conteudo
//a+ o arquivo continua sendo escrito sem apagar o que já está nele

fwrite($file, date("Y-m-d H:i:s") . "\r\n"); //para escrever no arquivo

fclose($file); //Precisa fechar o arquivo que foi aberto

echo "Arquivo criado com sucesso";