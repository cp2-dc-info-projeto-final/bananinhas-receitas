<?php
   require "senha.php";
   session_start();
	$conexao = mysql_connect('localhost', 'root', '', 'bananaSQL');


    $senha1 = $_POST["senha1"]; 
    $senha2 = $_POST["senha2"]; 
	$senha = mysqli_query($conexao, "SELECT senha FROM cliente");


    if($senha2 == "" || $senha2 == null){
        $msg = "Insira uma nova senha válida";
        }
		

	if($senha != $senha1){
		$msg = "Digite a Senha Atual corretamente";
	}	
    
	if ($senha == $senha2){
		$msg = "As senhas coincidem, escreva uma nova senha";        
	}
	if($senha != $senha2  && $senha == $senha1 && $senha2 != null){
        $sql = "UPDATE cliente
            SET senha = $senha2";			
		msg('Senha alterada com sucesso!');
        header("Location: usuarioPage.php");        
        exit();
    }

?>