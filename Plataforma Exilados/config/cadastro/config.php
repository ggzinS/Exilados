<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'senha-super66';
$dbName = 'formulario-cadastro';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($conexao->connect_errno){
    echo "Erro.";
}else{
    echo "Conexão efetuada sucessivamente.";
}