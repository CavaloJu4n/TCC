<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'financa';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Teste de conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
} else {
    echo ("Conexão bem-sucedida!");
}

// Exemplo de consulta SQL
$sql = "SELECT * FROM financa";

$resultado = $conexao->query($sql);
var_dump($resultado);

?>
