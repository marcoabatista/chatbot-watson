<?php

$json = file_get_contents('./data.json');

$json = str_replace("}{%", "},{", $json);     

$json = "[$json]";

header('Content-Type: application/json');

echo $json;
