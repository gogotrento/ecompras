<!DOCTYPE html>
<html lang="pt">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/reset.css">
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
                        <li><a class="dropdown-item" href="#">Cadastre-se</a></li>
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
<body>
    <section class="box-login">
        <form action="" method="post">
            <div class="email">
                <div class="logo">
                    <h1>Ecompras</h1>
                </div>
            <div class="email">
                <label>E-mail</label>
                    <input type="text" class="input-email">
            </div>
            <div class="senha">
                <label>Senha</label>
                <input type="password" class="senha">
            </div>
            
            <div class="button">
                <button type="submit">Entrar</button>
            </div>
        </form>
    </section>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="../js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
