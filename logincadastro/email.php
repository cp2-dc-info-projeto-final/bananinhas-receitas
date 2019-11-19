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
	<form  action="altEmail.php" method="POST"> 	
		<div class="form-group">
			<p>Email Novo:</p>
			<input name="email" type="email" id="email" placeholder="Email novo">
		</div>
		<div class="form-group">
			<p>Senha:</p>
			<input name="senha" type="password" id="senha" placeholder="Senha">
		</div>  
			<button type="submit" id="enviar">Alterar Email</button>
	</form>	
</div>

	
	<!-- <div class="form-group"> 
		<input name="senha" type="password" id="senha" placeholder="Senha">
	</div>
-->

</body>

</html>