<?php
   require "email.php";
   session_start();
	$conexao = mysql_connect('localhost', 'root', '', 'bananaSQL');


    $email = $_POST["email"];
	$email2 = mysqli_query($conexao, "SELECT email FROM cliente");
	$senha = $_POST["senha"]; 
	$rash = mysqli_query($conexao, "SELECT senha FROM cliente");


    if($email1 == "" || $email1 == null){
        $msg = "Insira um novo email válido";
        }
		
/*
	if(password_verify($senha, $hash)== false;){
		$msg = "Digite a Senha corretamente";
	}	
*/  
	if ($email == $email2){
		$msg = "Digite um email novo";        
	}
	if($email != $email2 && password_verify($senha, $hash)){
        $sql = "UPDATE cliente
            SET email = $email";			
		msg('Senha alterada com sucesso!');
        header("Location: usuarioPage.php");        
        exit();
    }

?>