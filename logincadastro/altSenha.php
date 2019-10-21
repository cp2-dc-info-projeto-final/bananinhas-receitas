<?php
   require "senha.php";
   session_start();

    $senha = $_POST["senha1"]; 
    $senha2 = $_POST["senha2"]; 
	
	if (senha == senha2){
		$erro = "As senhas coincidem, escreva uma nova senha";        
        $_SESSION["erro"] = $erro;
        header("Location: senha.php");
        exit();
	}
    
    if(senha != senha2){
    $senha = $_POST["senha2"];
    $sql = "UPDATE cliente
            SET = $senha";
    }
?>