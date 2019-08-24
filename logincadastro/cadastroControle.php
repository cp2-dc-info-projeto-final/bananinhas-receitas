<?php

   require "cadastro.php";
   session_start();

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $dataNasc = $_POST["dataNasc"];
    $senha = $_POST["senha"];
    $senha2 = $_POST["senha2"];
    $sexo = $_POST["sexo"];

    if ($senha != $senha2) {    
        $erro = "As senhas não coincidem";        
        $_SESSION["erro"] = $erro;
        header("Location: LoginCasdastro.php");
        exit();
    }        
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    
    if (cadastro($nome,$email,$tel,$dataNasc,$hash,$sexo)) {
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