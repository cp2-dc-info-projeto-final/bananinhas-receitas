<?php
   require "senha.php";
   session_start();

    $senha = $_POST["senha1"]; \\senha antiga
    $senha2 = $_POST["senha2"]; \\senha nova
	
	if (senha == senha2){
		$erro = "As senhas coincidem, escreva uma nova senha";        
        $_SESSION["erro"] = $erro;
        header("Location: senha.php");
        exit();
	}
	
	$sql = "ALTER TABLE cliente
			"


?>