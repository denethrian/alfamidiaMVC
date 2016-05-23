<?php

include_once 'IDAO.php';

class textDAO implements IDAO {

    const PATH = 'database';
    const FILE = '/clientes.txt';

    private $arquivo = self::PATH . self::FILE;

    private function criaDiretorio() {
        try {
            if (file_exists(self::PATH)) {
                return true;
            } else {
                if (mkdir(self::PATH, 0777)) {
                    return true;
                } else {

                    return false;
                }
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    private function criarArquivo() {

        try {
            if ($this->criaDiretorio()) {
                if (is_file($this->arquivo)) {
                    return true;
                } else {
                    if (fopen($this->arquivo, 'a+')) {
                        return $this->arquivo;
                    } else {
                        return false;
                    }
                }
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        } finally {
            fclose($this->arquivo);
        }
    }

    public function atualizar($obj) {
        
    }

    public function excluir($id) {
        
    }

    public function listar() {
        try {
            if (file_exists($this->arquivo)) {
                $json = file_get_contents($this->arquivo);
               // if (count(file($this->arquivo)) == 1) {
               //     $json = '{"clientes": ' . file_get_contents($this->arquivo) . '}';
               // } else {
               //     $json = '{"clientes":[' . file_get_contents($this->arquivo) . ']}';
               // }
                $obj = json_decode($json);
                print_r($json);

                return $obj;
            } else {
                return false;
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvar($obj) {
        try {
            if ($this->criarArquivo()) {
               // var_dump($obj);
                $string = json_encode($obj);
                
                $f = fopen($this->arquivo, 'a+');
                $w = fwrite($f, $string);
                fclose($f);
            } else {
                throw new Exception("Problema ao salvar!\n");
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
