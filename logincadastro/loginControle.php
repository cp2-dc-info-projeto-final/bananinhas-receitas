<?php

    require "login.php";

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    session_start();
    if (login($email, $senha))
    {
        session_unset();
        $_SESSION["nome"] = $row["nome"];
        header("Location: main.html");
        exit();
    } else {
        $erro = "Login ou senha incorreta";
        $_SESSION["erro"] = $erro;
        header("Location: loginCasdastro.php");
        exit();
    }

?>