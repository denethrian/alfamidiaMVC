<?php

interface IDAO {

    public function salvar($obj);

    public function listar();

    public function excluir($id);

    public function atualizar($obj);
}
