<?php
   session_start();
   
	$email = $_SESSION['email'];
	$conexao = mysqli_connect('localhost', 'root', '', 'bananaSQL');		
	
	$sql = "SELECT * FROM cliente WHERE email = '$email' ";
	$date = mysqli_query($conexao, $sql);
	$result = mysqli_fetch_array($date);
	 
	$id = $result['id']; //id do BD
	$hash = $result['senha']; //hash do BD
	$senha = $_POST["senhaAtual"]; //senha atual
    $senha2 = $_POST["senhaNova"]; //senha nova
	$email2 = $_POST['email'];	//email fornecido pelo usuário
    
	$msg = "";
	
		

if($email2 == $email){//checkar se os email fornecido é igual o da sessão
    if($senha2 == "" || $senha2 == null){
		echo "Insira uma nova senha válida";
	}
		else{
			if(!password_verify($senha, $hash)){
				echo "Digite a Senha Atual corretamente";
			}
				else{
					if($senha == $senha2){
						echo "As senhas coincidem, escreva uma nova senha";
					}
						else{
							$hash2 = password_hash($senha2, PASSWORD_DEFAULT);	
							$alt = "UPDATE cliente SET senha = '$hash2' WHERE email = '$email' ";
							mysqli_query($conexao, $alt);
							$_SESSION['senha'] = $hash2;
							echo 'Senha alterada com sucesso!';
							header("Location: usuarioPage.php");
							exit();
						}
							
				}
		}        	
		
	
}
else{ $msg .= 'Insira o email da conta'; }
$SESSION['msg'] = $msg;


?>