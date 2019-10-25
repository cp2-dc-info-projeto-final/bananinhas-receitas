<?php
   require "senha.php";
   session_start();

    $senha = $_POST["senha1"]; 
    $senha2 = $_POST["senha2"]; 
    
    
/*
    if($senha2 == "" || $senha2 == null){
        echo "<script language='javascript' type='text/javascript'>
        alert('O campo login deve ser preenchido');window.location.href='
        cadastro.html';</script>";
     
        } */
    
	if ($senha == $senha2){
		$erro = "As senhas coincidem, escreva uma nova senha";        
        $_SESSION["erro"] = $erro;
        header("Location: senha.php");
        alert('As senhas coincidem, escreva uma nova senha');
        exit();
	}
    
    else{
        $sql = "UPDATE cliente
            SET = $senha2";
        header("Location: usuarioPage.php");
        alert('Senha alterada com sucesso!');
        exit();
    }
?>