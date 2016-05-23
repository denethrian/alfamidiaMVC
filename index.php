<?php

echo "<h1>Caminho</h1><hr/>";
echo "index => autoload<br/>";


//$classe = 'ClienteController';

require_once './model/Cliente.php';
require_once './controller/ClienteController.php';

//$obj = new $classe();
//obj->listar();

//$arr = array(1, "teste 1");
$cli1 = new Cliente();
$cli1->id_cliente = 1;
$cli1->nome = "bah";

$clienteController = new ClienteController;
$clienteController->salvar($cli1);
$clienteController->listar();

