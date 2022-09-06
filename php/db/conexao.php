<?php

$servidor="localhost";
$usuario="root";
$senha="";
$banco="login";

$conexao = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);

?>