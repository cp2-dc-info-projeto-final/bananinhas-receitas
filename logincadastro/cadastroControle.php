<?php

   require "cadastro.php";
   session_start();

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senha2 = $_POST["senha2"];

    if ($senha != $senha2) {    
        $erro = "As senhas não coincidem";        
        $_SESSION["erro"] = $erro;
        header("Location: LoginCasdastro.php");
        exit();
    }        
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    
    if (cadastro($nome,$email,$hash)) {
        session_unset();
        header("Location: main.html");
        exit();
    } else {
        $erro = "E-mail indisponível";
        $_SESSION["erro"] = $erro;
        header("Location: LoginCasdastro.php");
        exit();
    }

?>