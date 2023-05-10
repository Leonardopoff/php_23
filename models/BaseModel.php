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
        var_dump($this -> $conexaoBancoBM);

    }

}
$baseModel =  new BaseModel($conexaoBanco);
//$baseModel -> conexaoBancoBM;
$BaseModel -> getConexao();



echo " ola Mundo";