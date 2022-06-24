<?php
define('HOST', '127.0.0.1');
define('usuario', 'root');
define('senha', '');
define('DB', 'login');

$conexao = mysqli_connect('HOST', 'usuario', 'senha', 'DB') or die('Não foi possivel conectar');
