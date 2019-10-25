<html>
<head>
<link href='email.css' rel='stylesheet' type='text/css' />
</head>

<body>

<div id="leftside" ></div>

<div id="rightside">
	<a href="" ><button id="user_area"><p>Home</p></button></a>
	<a href="usuariopage.php" ><button id="user_area"><p>Área do Usuário</p></button></a>
	<!-- Fazer o sql connection da trocar de email-->
	
	<form  action="altSenha.php" method="post"> 	
		<div class="form-group">
			<p>Senha Atual:</p>
			<input name="senha1" type="password" id="senha1" placeholder="Senha Atual">
		</div>
		<div class="form-group">
			<p>Senha Nova:</p>
			<input name="senha2" type="password" id="senha2" placeholder="Senha Nova">
		</div>  
			<button type="submit" id="enviar">ALTERAR SENHA</button>
			
			<script>
				if(senha != senha2)
					{alert('Senha alterada com sucesso!');}

				
				if(senha == senha2)
					{alert('As senhas coincidem, escreva uma nova senha');}
			</script>
	</form>	
</div>

	

</body>

</html>