<?php

//Dados para o banco Dados
$servidor = 'localhost';
$user = 'root';
$password = '';
$banco = 'portfolio';

date_default_timezone_set('America/Sao_Paulo');

try {
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8","$user","$password");
    
} catch (Exception $e) {
    echo "Não foi possível conectar ao banco de dados! <br><br>" . $e;
}
?>