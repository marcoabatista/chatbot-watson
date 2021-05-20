<?php

$json = file_get_contents("php://input");

$file = fopen('./data.json','a');        
        
fwrite($file, $json);

fclose($file);