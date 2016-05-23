<?php

echo "controller<br/>";

require_once './model/Cliente.php';

class ClienteController {

    public function listar() {

        echo "controller => listar()<br/>";
        $obj = new Cliente;
        $clientes = $obj->listar();

        $_REQUEST['clientes'] = $clientes;

        require_once './view/ClienteView.php';
    }

    public function salvar($obj) {
        $cliente = new Cliente;
        $ret = $cliente->salvar($obj);

        $_REQUEST['clientes'] = $cliente->salvar();

        require_once './view/ClienteView.php';
        
        return $ret;
    }

}
