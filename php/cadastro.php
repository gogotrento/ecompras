<?php
require('db/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="../css/reset.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Quicksand:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
    </style>
    <title>ecompras</title>
    <script src="../js/React.jsx"></script>
    <script src="https://kit.fontawesome.com/dc9a30c3ce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<header>
    <div class="menu">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="../html/index.html">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ir as compras</a>
            </li>
            <li class="nav-itemdrop">
                <div class="dropdown">
                    <a href="" data-bs-toggle="dropdown" class="nav-link dropdown-toggle">Login</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">Já tenho conta</a></li>
                        <li><a class="dropdown-item" href="cadastro.php">Cadastre-se</a></li>
                        <li><a class="dropdown-item" href="#">Esquece a senha?</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-itemdrop">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Suporte</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Falar conosco</a></li>
                        <li><a class="dropdown-item" href="#">Contatos</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</header>

<?php

?>

<body>
    <div class="container">
        <div class="row">
            <form method="post"></form>    
            <h1 class="titulo-form">
                Ecompras
            </h1>

            <div class="form-group">
                <label class="col-md-3"></label>
                <div class="col-md-6 offset-md-3">
                    <input type="text" id="nome" placeholder="Insira seu nome completo" class="form-control" required>
                </div>
            </div>
        
            <div class="form-group">
            <label class="col-md-3" for="email"></label>  
            <div class="col-md-6 offset-md-3">
            <input id="email" name="email" type="email" placeholder="Insira seu email" class="form-control">
                
            </div>
            </div>

            <div class="form-group">
            <label class="col-md-3" for="celular"></label>  
            <div class="col-md-6 offset-md-3">
            <input id="celular" name="celular" type="int" placeholder="Numero do celular" class="form-control">
                
            </div>
            </div>
            <div class="form-group">
            <label class="col-md-3" for="senha"></label>
            <div class="col-md-6 offset-md-3">
                <input id="senha" name="senha" type="password" placeholder="Insira sua senha" class="form-control">
                
            </div>
            </div>

            <div class="form-group">
            <label class="col-md-3" for="senha2"></label>
            <div class="col-md-6 offset-md-3">
                <input id="senha2" name="senha2" type="password" placeholder="Confirme sua senha" class="form-control">
                
            </div>
            </div>

            <div class="form-group">
            <label class="col-md-3" for="button-cadastro"></label>
            <div class="row text-center col-md-6 offset-md-3 mt-2">
                <button id="button-cadastro" name="button-cadastro" class="btn btn-success" type="submit">Cadastre-se</button>
               <a href="../php/login.php"> <button id="button-login" name="button-login" class="btn btn-inverse">Já tenho uma conta</button></a>
                </div>
            </form>
        </div>
    </div>

        <?php


    function clearPost($dado){
        $dado = trim($dado);
        $dado = stripslashes($dado);
        $dado = htmlspecialchars($dado);
        return $dado;
    }

    if (isset($_POST['salvar'])&& isset($_POST['nome'])&& isset($_POST['email'])&& isset($_POST['celular']) && isset($_POST['senha'])){
        
        $nome = clearPost($_POST['nome']);
        $email = clearPost($_POST['email']);
        $celular = $_POST['celular'];
        $senha = $_POST['senha'];
        $senha2 = $_POST['senha2'];


 
    if ($nome==""){
        echo"<b style='color:red'>Campo nome Inválido!</b>";
        exit();
    }

    if ($email==""){
        echo "<b style='color:red'>Campo email Inválido!</b>";
        exit();
    }

    if ($tel=="" || $tel==null){
        echo "<b style='color:red'>Campo email Inválido!</b>";
        exit();
    }

    if ($senha=="" || $senha==null){
        echo "<b style='color:red'>Campo senha Inválido!</b>";
        exit();
    }

    if ($senha2=="" || $senha2==null){
        echo "<b style='color:red'>Repita a senha corretamente!</b>";
        exit();
    }
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
        echo "<b style='color:red'>Permitido apenas letras no nome!</b>";
        exit(); 
    }

    if (!preg_match("A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z",$celular)) {
        echo "<b style='color:red'>Insira seu numero corretamente</b>";
        exit(); 
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<b style='color:red'>Formato de email inválido!</b>";
        exit();
    }

    if(strlen($tel) > 11){
        echo "<b style='color:red'>Número de telefone inválido!</b>";
        exit();
    }

    if(strlen($tel) < 10 ){
        echo "<b style='color:red'>Número de telefone inválido!</b>";
        exit();
    }

    if(strlen($senha) < 6){
        echo "<b style='color:red'>A senha precisa ter 6 dígitos!</b>";
        exit();
    }

    if(strlen($senha) > 6){
        echo "<b style='color:red'>A senha precisa ter 6 dígitos!</b>";
        exit();
    }
        
    if($senha !== $senha2){
        echo "<b style='color:red'>As senhas não considem!</b>";
        exit();
    }

    $sql = $conexao->prepare("INSERT INTO usuarios VALUES (null,?,?,?,?)");
    $sql->execute(array($nome,$email,$tel,$senha));

    echo "<b style='color:green'>Usuário cadastrado com sucesso!</b>";

 }
    ?>

    </form> 
    </div>
</body>
</html>
