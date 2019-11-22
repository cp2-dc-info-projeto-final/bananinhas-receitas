<?php
   require "senha.php";
   session_start();
	$conexao = mysql_connect('localhost', 'root', '', 'bananaSQL');
	
	$query = "SELECT id FROM cliente WHERE email = '$_POST['email']' AND senha = '$_POST['senha']'";
	$resultados = mysql_fetch_array($query);
	$_SESSION['id'] = $resultados['id'];
	$id = $_SESSION['id'];
	
    $senha1 = $_POST["senhaAtual"]; 
    $senha2 = $_POST["senhaNova"]; 


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
            SET senha = '$senha2' where id = $id; ";			
		$msg=('Senha alterada com sucesso!');
        header("Location: usuarioPage.php");
		exit();
    }

?>