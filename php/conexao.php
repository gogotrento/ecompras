<?php
    $host = '127.0.0.1';
    $usuario = 'root';
    $senha = '';
    $banco = "login";

$conexao =  new PDO (mysqli_connect:"HOST=$host;DB=$banco;" $usuario, $senha);
