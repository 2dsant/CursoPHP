<?php

$link = "https://opgg-static.akamaized.net/logo/20210327145204.3099256fc4624c7e81a3fcd0f23f5af0.png";

$content = file_get_contents($link);
$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen("basename", "w+");

fwrite($file, $content);

fclose($file);
?>

<img src="<?=$basename?>">