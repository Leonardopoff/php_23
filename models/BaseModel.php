<?php

// CRUD----->> Creat,Read,Update, Delete.

require_once '../conexao/bancodedados.php'; // vai carregar uma vez
// require vai carregar novamente

//include '../conexao/bancodedados.php'; vai carregar sempre que executado
//include_once '../conexao/bancodedados.php'; vai carregar uma vez

abstract class BaseModel {
    public $conexaoBancoBM;
    
    public function __construct( $conexaoBancoParam = null) {
        // uses database php_lab
        $this->$conexaoBancoBM = $conexaoBancoParam;
    }


    public function getConexao (){
        return($this -> $conexaoBancoBM);
    }

    public function Create ($nomeTabela, $dados = (), $campos ())
    {
        $sql =  "INSERT INTO '{$nomeTabela}' '{$campos}' VALUES ({$dados}})"; 
    
        $id = $this -> conexaoBancoBM ->execute_query($sql)->insert_id;

        return $id ?? 0;
    }

}


echo " ola Mundo";