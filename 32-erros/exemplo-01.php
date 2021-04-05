<?php

function error_handle($code, $message, $file, $line) 
{

    echo_json_encode(array(
        "code"=>$code,
        "message"=>$message,
        "line"=>$line,
        "file"=>$file
    ));

}

set_error_handler("error_handle");

echo 100/0;