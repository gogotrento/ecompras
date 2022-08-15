<?php
require('db/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/cadastro.css">
    <script src="../js/React.jsx"></script>
    <script src="https://kit.fontawesome.com/dc9a30c3ce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>

.main-cadastro{
    font-family: Tahoma !important;
    color: white;
    padding: 20px;
    width: 80%;
    height: 30rem;
    background-color: whitesmoke;
    border-radius: 10px;
    background-attachment: fixed;
    background-position: center;
}

 h1{
    color: black;
 }

 input:hover{
    background-color: white;
    border-color: black;
 }

 input:active{
    border-color: black;
 }
 
 .email{
    width: 55vw;
    border-color: white;
    background-color: white;
    color: black;
    background-attachment: fixed;
  }

  .tel{
    width: 55vw;
    border-color: white;
    background-color: white;
    color: black;
    background-attachment: fixed;
  }

  .name{
    width: 55vw;
    border-color: white;
    background-color: white;
    color: black;
    background-attachment: fixed;
  }
  
  .senha{
    width: 55vw;
    border-color: white;
    background-color: white;
    color: black;
    background-attachment: fixed;
  }
  
  .senha2{
      width: 55vw;
      border-color: white;
      background-color: white;
      color: black;
      background-attachment: fixed;
  }
  
  input::placeholder {
    color: black;
  }

  .erro {
    display: block;
    margin-top: 15px;
    color: red;
  }
    
  input.invalido {
    width: 65vw;
    border-color: red;
    background-color: white;
    color: black;
    background-attachment: fixed;
    border: 1px solid red;
    border-radius: 5px;
  }



</style>

</head>

<!DOCTYPE html>
<html lang="pt">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css">
    <script src="https://kit.fontawesome.com/dc9a30c3ce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Quicksand:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100&family=Montserrat:wght@500&family=Open+Sans:wght@300&display=swap');
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>ecompras</title>
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

    <br><br>
    <center>
    <div class="main-cadastro">
    <form method="post">
        <br>
        <h1>Cadastro</h1>
        <img class="name-image" src="https://cdn.pixabay.com/photo/2017/02/25/22/04/user-icon-2098873_960_720.png" height="30rem" width="35vw">
        <input type="text" class="name" name="nome" placeholder="Digite seu nome">
        <span class="erro"></span>

        <img class="email-image" src="https://cdn-icons-png.flaticon.com/512/39/39547.png" height="30rem" width="35vw">
        <input type="email" class="email" name="email" placeholder="Digite seu email">
        <span class="erro"></span>

        <img class="tellphone-image" src="https://cdn-icons-png.flaticon.com/512/126/126341.png" height="30rem" width="35vw">
        <input type="tel" class="tel" name="tel" placeholder="Digite seu número com ddd" data-mask="(00) 0000-0000">
        <span class="erro"></span>

        <img class="password-image" src="https://cdn-icons-png.flaticon.com/512/181/181534.png" height="30rem" width="35vw">
        <input type="password" class="senha" name="senha" placeholder="Digite sua senha">
        <span class="erro"></span>

        <img class="password2-image" src="https://cdn-icons-png.flaticon.com/512/6357/6357126.png" height="30rem" width="35vw">
        <input type="password" class="senha2" name="senha2" placeholder="Digite sua senha novamente">
        <span class="erro"></span>

        <br><button type="submit" name="salvar">Cadastrar</button><br><br>

        <?php


    function clearPost($dado){
        $dado = trim($dado);
        $dado = stripslashes($dado);
        $dado = htmlspecialchars($dado);
        return $dado;
    }

    if (isset($_POST['salvar'])&& isset($_POST['nome'])&& isset($_POST['email'])&& isset($_POST['tel']) && isset($_POST['senha'])){
        
        $nome = clearPost($_POST['nome']);
        $email = clearPost($_POST['email']);
        $tel = $_POST['tel'];
        $senha = $_POST['senha'];
        $senha2 = $_POST['senha2'];


 
    if ($nome=="" || $nome==null){
        echo"<b style='color:red'>Campo nome Inválido!</b>";
        exit();
    }

    if ($email=="" || $email==null){
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
        echo "<b style='color:red'>Campo repetição de senhaInválido!</b>";
        exit();
    }
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
        echo "<b style='color:red'>Permitido apenas letras no nome!</b>";
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

    if(strlen($senha2) > 6){
        echo "<b style='color:red'>A senha precisa ter 6 dígitos!</b>";
        exit();
    }

    if(strlen($senha2) < 6){
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
    </center>
    <br>

    </div>

</body>
</html>