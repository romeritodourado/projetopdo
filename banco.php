<?php
try{
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo_projeto","root","root");

}
catch(\PDOException $e){
    die("Ops! Não foi possível estabelecer conexão com Banco de Dados!");
}