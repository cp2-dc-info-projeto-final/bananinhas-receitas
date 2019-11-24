<?php
	session_start();
	$email = $_SESSION['email'];
	$conexao = mysqli_connect('localhost', 'root', '', 'bananaSQL');		
	
	$sql = "SELECT id,senha FROM cliente WHERE email = '$email' ";
	$date = mysqli_query($conexao, $sql);
	$resultados = mysqli_fetch_array($date);



    $email1 = $_POST["email"];
	$email2 = $_POST["email2"];
	$senha = $_POST["senha"]; 
	$hash = $resultados['senha'];
	
if($email == $email1){
    if($email1 == "" || $email1 == null){
        $msg = "Insira um novo email válido";
        }
		

	if(!password_verify($senha, $hash)){
		$msg = "Digite a Senha corretamente";
	}	

	if ($email1 == $email2){
		$msg = "Digite um email novo";        
	}
	if($email1 != $email2 && password_verify($senha, $hash)){
        $sql = "UPDATE cliente
            SET email = '$email2' where email = '$email' ";	
		mysqli_query($conexao, $sql);
		$_SESSION['email'] = $email2;		
		$msg = 'Email alterado com sucesso!';
        header("Location: usuarioPage.php");        
        exit();
    }
}
else{
	$msg = 'Insira o email da sessão';
}
?>