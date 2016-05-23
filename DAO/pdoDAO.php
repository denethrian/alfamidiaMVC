<?php

class pdoDAO implements IDAO {
    
    const MYSQL_HOST = 'localhost';
    const MYSQL_USER = 'root';
    const MYSQL_PASSWORD = '';
    const MYSQL_DB_NAME = 'loja';

    public function __construct() {
        
    }

    public function atualizar($obj) {
        
    }

    public function excluir($id) {
        
    }

    public function listar() {
        try {

          //  $conn = new PDO('mysql:host=localhost;port=3306; '
          //          . 'dbname=loja' . 'root', '');
            
          $row = array();
          
$conn = new PDO('mysql:host=' . self::MYSQL_HOST . ';dbname=' . self::MYSQL_DB_NAME, self::MYSQL_USER, self::MYSQL_PASSWORD);
            
            $result = $conn->query("SELECT id_cliente, nome FROM clientes");

            if ($result) {
                while ($row[] = $result->fetch(PDO::FETCH_OBJ)) {
                 //  echo $row->id_cliente . " - " . $row->nome . "<br/>";
                }
            }
            
            return $row;
            
        } catch (PDOException $exc) {
            echo "Erro ao listar: " . $exc->getMessage();
        } catch (Exception $exc) {
            echo "Erro ao listar: " . $exc->getMessage();
        } finally {
            $conn = null;
        }
    }

    public function salvar($obj) {
         
               
        try {
          $conn = new PDO('mysql:host=' . self::MYSQL_HOST . ';dbname=' . self::MYSQL_DB_NAME, self::MYSQL_USER, self::MYSQL_PASSWORD);
           // $conn = new PDO('mysql:unix_soquet=/tmp/mysql.sock;host=localhost;port=3306; dbname=loja' , 'root', '');
            //trata objeto $obj
            
           // print_r($obj->cliente);
            $conn->exec("INSERT INTO loja.clientes(nome) VALUES(' . $obj->nome . ')");
        } catch (PDOException $exc) {
            echo "Erro ao inserir cliente:" . $exc->getMessage();
        } finally {
            $conn = null;
        }
    }

//put your code here
}
   
