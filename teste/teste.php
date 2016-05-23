<?php

include_once '../model/Cliente.php';

listar();

function listar() {
    $cliente = new Cliente();
    $clientes = $cliente->listar();


    foreach ($clientes as $valor) {


        foreach ($valor as $key => $c) {
            echo "$key -> $c  ";
        }
        echo "<br/>";
    }

    //$_REQUEST['clientes'] = $clientes;
    require_once '../view/ClienteView.php';
}?>
