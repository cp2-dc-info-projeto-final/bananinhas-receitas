<?php

   require "cadastro.php";


    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $datanasc = $_POST["dataNasc"];
    $senha = $_POST["senha"];
    $senha2 = $_POST["senha2"];
    $sexo = $_POST["sexo"];
	
	$id = mysqli_fetch_array($result);

    if ($senha != $senha2) {    
        $erro = "As senhas não coincidem";        
        $_SESSION["erro"] = $erro;
        header("Location: LoginCasdastro.php");
        exit();
    }        
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    
    if (cadastro($nome,$email,$tel,$datanasc,$hash,$sexo)) {
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
        header("Location: usuarioPage.php");
        exit();
    } else {
        $erro = "E-mail indisponível";
        $_SESSION["erro"] = $erro;
        header("Location: LoginCasdastro.php");
        exit();
    }

?>