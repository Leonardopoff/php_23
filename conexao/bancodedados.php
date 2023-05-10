<?php
// Variaveis para conexao com o banco.
$hostname = "localhost";
$username = "aluno";
$password = "qwe123!";
$port= 3306;
$database = 'aluno';

try {
    $conexaoBanco = mysqli_connect(
        $hostname,
        $username,
        $password,
        $database,
        $port
    );

    echo "Conectou!!!";
} catch (Exception $error ){
    echo "ERRO codigo: {$error->getCode()} <br> mensagem: {$error->getMessage()}";
    // echo "ERRO codigo: " . $error->getCode() . " <br> mensagem: " . $error->getMessage();
    // echo "ERRO: {$error}";
    $conexaoBanco = null;
}