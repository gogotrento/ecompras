<?php
$server= '127.0.0.1';
$usuario = 'root';
$senha = '';
$banco ='login';

$conexao = new PDO("mysqli_connect:host=$servidor;dbname=$banco",$usuario,$senha);

?>
