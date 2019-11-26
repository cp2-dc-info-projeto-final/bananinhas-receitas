<?php

    require "login.php";

    $email = $_POST["email"];
    $senha = $_POST["senha"];
	
	
    if (login($email, $senha))
    {	session_start();
		$_SESSION['email'] = $email;
		$_SESSION['id'] = $id;
        $_SESSION["nome"] = $row["nome"];
        header("Location: usuarioPage.php");
        exit();
    } else {
        $erro = "Login ou senha incorreta";
        $_SESSION["erro"] = $erro;
        header("Location: loginCasdastro.php");
        exit();
    }

?>