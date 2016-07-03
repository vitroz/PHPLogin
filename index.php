<?php

    include('config/config.php');
    include('class/Admin.php');

    if($_SESSION['uid']){ //Valida se o usuario esta logado e tenta acessar a pagina de login.
        header("Location: landingPage.php"); // Page redirecting to home.php 
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
                header("Location: landingPage.php"); // Page redirecting to home.php 
            }else {
                $errorMsgLogin="Usuario ou Senha Incorretos.";
            }
        }
    }

    /*CADASTRAR SENHA COM BASE EM ENCRIPTACAO HASH256 como por exemplo: http://www.xorbin.com/tools/sha256-hash-calculator*/

?>



<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div id="login">
    <h3>Login</h3>
    <form method="post" action="" name="login">
        <label>Usuario ou Senha</label>
        <input type="text" name="usernameEmail" autocomplete="off" />
        <label>Senha</label>
        <input type="password" name="password" autocomplete="off"/>
        <div class="errorMsg"><?php echo $errorMsgLogin; ?></div>
        <input type="submit" class="button" name="loginSubmit" value="Login">
    </form>
</div>

</body>
</html>