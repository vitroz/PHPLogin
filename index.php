<?php

include('config/config.php');
include('class/Admin.php');

    if($_SESSION['uid']){ //Valida se o usuario esta logado e tenta acessar a pagina de login.
        header("Location: clientes.php"); // Page redirecting to home.php 
    }
    $userClass = new Admin();

    $errorMsgReg='';
    $errorMsgLogin='';
    /* Login Form */
    if (!empty($_POST['loginSubmit'])){
        $usernameEmail=$_POST['usernameEmail'];
        $password=$_POST['password'];
        if(strlen(trim($usernameEmail))>1 && strlen(trim($password))>1 ) {
            $uid=$userClass->userLogin($usernameEmail,$password);
            if($uid){
                header("Location: clientes.php"); // Page redirecting to home.php 
            }else {
                $errorMsgLogin="Usuário ou Senha Incorretos.";
            }
        }
    }

    /*CADASTRAR SENHA COM BASE EM ENCRIPTACAO HASH256 como por exemplo: http://www.xorbin.com/tools/sha256-hash-calculator*/

    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
  
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="nome_autor" >
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    <meta property="og:locale" content="pt-BR">
    <meta name="language" content="portuguese">      
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
    <link type="text/css" rel="stylesheet" href="css/site.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/sites.min.css"  media="screen,projection"/>
    <script src="https://use.fontawesome.com/33857c03c4.js"></script>
</head>
<body>
    <header>
        <div class="navbar scrollspy navbar-fixed" id="home">
            
           <nav role="navigation" > 
              <div class="nav-wrapper container"> 
                  <a id="logo-container" href="#!" class="brand-logo"  title="">Logo</a>
                  
              </div>
          </nav>
          
      </header> 
      <main>

        <section class="section">
               
                <div class="container" style="width:40%">
                <br><br><br>
                    
                    <form method="post" action="" name="login">
                        <label class="flow-text"><i class="material-icons prefix grey-text">account_circle</i> Usuário</label>
                        <input type="text" name="usernameEmail" autocomplete="off" class="validate black-text" />
                        <label class="flow-text"><i class="material-icons prefix grey-text">vpn_key</i> Senha</label>
                        <input type="password" name="password" autocomplete="off" class="validate black-text"/>
                        <p class="errorMsg red-text flow-text" style="font-size:14px;"><?php echo $errorMsgLogin; ?></p>
                        <button type="submit" class="btn waves-effect waves-light right green" name="loginSubmit" value="Login"> <i class="material-icons right">input</i> Entrar</button>
                    </form>

                </div>
        </section>

                <?php include 'footer.php'; 

