<?php

$images = scandir("images");
$data = array();

foreach($images as $img)
{
    if(!in_array($img, array(".", "..")))
    {
        $filename = "images" . DIRECTORY_SEPARATOR . $img;
        $info = pathinfo($filename);
        $info["size"] = filesize($filename); //tamanho do arquivo
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename)); //ultima modificação
        $info["url"] = "http://localhost:8080/24-DIR/" . str_replace("\\", "/", $filename);

        array_push($data, $info);
    }

}
echo json_encode($data, JSON_UNESCAPED_SLASHES);