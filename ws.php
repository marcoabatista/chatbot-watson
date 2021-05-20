<?php

$json = file_get_contents("php://input");

$reg = json_decode($json, true);
$ret = array();

$ret['resultado'] = "";

if ($reg['tipo_consulta'] == "telefone") {
  $nome = "";
  $numero = "";

  if ($reg['unidade'] == 101) {
    $nome = "Iago Ourique Padilha";
    $numero = "47 99999-1111";
  }
  if ($reg['unidade'] == 102) {
    $nome = "Maísa Belém Cangueiro";
    $numero = "47 99999-2222";
  }
  if ($reg['unidade'] == 103) {
    $nome = "Éder Balsemão Matos";
    $numero = "47 99999-3333";
  }
  if ($reg['unidade'] == 201) {
    $nome = "Jacira Rego Freixo";
    $numero = "47 99999-4444";
  }
  if ($reg['unidade'] == 202) {
    $nome = "Áurea Godinho Saraiva";
    $numero = "47 99999-5555";
  }
  if ($reg['unidade'] == 203) {
    $nome = "Eusébio Castro Quinteiro";
    $numero = "47 99999-6666";
  }
  if ($reg['unidade'] == 301) {
    $nome = "Marvin Rico Meneses";
    $numero = "47 99999-7777";
  }
  if ($reg['unidade'] == 302) {
    $nome = "Micael Xavier Xisto";
    $numero = "47 99999-8888";
  }
  if ($reg['unidade'] == 303) {
    $nome = "Matias Pinheiro Figueira";
    $numero = "47 99999-9999";
  }
  if ($reg['unidade'] == 401) {
    $nome = "Pedro Aquino Vilaça";
    $numero = "47 99999-0401";
  }
  if ($reg['unidade'] == 402) {
    $nome = "Apolo Aranha Infante";
    $numero = "47 99999-0402";
  }
  if ($reg['unidade'] == 403) {
    $nome = "Bruna Freiria Paulos";
    $numero = "47 99999-0403";
  }

  if ((!empty($nome)) and ( !empty($numero))) {
    $ret['resultado'] = "O telefone do apartamento " . $reg['unidade'] . " é $numero. Se precisar, o proprietário cadastrado é $nome.";
  } else {
    $ret['resultado'] = "Não encontrei o cadastro do apartamento " . $reg['unidade'] . ".";
  }
}

header('Content-Type: application/json');
echo json_encode($ret);
