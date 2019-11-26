<?php
session_start();
?>

<html>
	<head>
		<link href='email.css' rel='stylesheet' type='text/css' />
	</head>

<body>
	<div id="leftside" ></div>
	<div id="rightside">
		<a href="" ><button id="user_area"><p>Home</p></button></a>
		<a href="usuariopage.php" ><button id="user_area"><p>Área do Usuário</p></button></a>	
			<form  action="altSenha.php" method="POST"> 	
				<div class="form-group">
					<p>Email Atual:</p>
					<input name="email" type="email" id="email" placeholder="Email atual" required>
			</div>
				<div class="form-group">
					<p>Senha Atual:</p>
					<input name="senhaAtual" type="password" id="senha1" placeholder="Senha Atual" required>
				</div>
				<div class="form-group">
					<p>Senha Nova:</p>
					<input name="senhaNova" type="password" id="senha2" placeholder="Senha Nova" required>
				</div>  
					<button type="submit" id="enviar"  >ALTERAR SENHA</button>		
			</form>	
			<label><?php				
			
				echo "MENSAGEM: ".$SESSION['msg'];
			?>

			</label>
	</div>
</body>
</html>