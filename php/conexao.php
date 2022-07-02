<?php
<<<<<<< HEAD
    $host = '127.0.0.1';
    $usuario = 'root';
    $senha = '';
    $banco = "login";

$conexao =  new PDO (mysqli_connect:"HOST=$host;DB=$banco;" $usuario, $senha);
=======
$server= '127.0.0.1';
$usuario = 'root';
$senha = '';
$banco ='login';

$conexao = new PDO("mysqli_connect:host=$servidor;dbname=$banco",$usuario,$senha);

?>
>>>>>>> e86bcc0ef765c846845150ed5acae17adc368298
