<?php
session_start();
?>

<html>
<head>
	<link href='userpage.css' rel='stylesheet' type='text/css'>
</head>

<body>

<header>	
	<div id="img_banana">
		<img align="center" src="Imagens\bananalogo.png" />
	</div>
	
	<div class ="logado">
		
		<?php
		
			$conexao = mysqli_connect('localhost', 'root', '', 'bananaSQL');
			$email = $_SESSION['email'];
			$sql = "SELECT nome,id FROM cliente WHERE email = '$email' ";
			$date = mysqli_query($conexao, $sql);
			$result = mysqli_fetch_array($date);
			
			echo "SEJA BEM VINDO ".$result['nome']."!".$result['id']; 
		?> 

	</div>
	

</header>


	<nav class="menu">
		<ul>
			<li><a href="home\home.html">Home</a></li>
			<li><a href="email.php">Alterar Email</a></li>
			<li><a href="senha.php">Alterar Senha</a></li>
			<li><a href="">Cadastrar Receitas</a></li>
			<li><a href="">Cadastrar Ingredientes</a></li>
			<li><a href="">Minhas Receitas</a></li>
			<li><a href="">Meus Ingredientes</a></li>
		</ul>
	</nav>

<div class="divbx"><a src="hh.php">
	<a src="hh.php">
	<div id="div1">
		<p class="bof">Gosta de Cozinhar?</p>
		<p class="bof">Cadastre suas Receitas!</p>
		<p class="bof">Mostre seu Talento ao Mundo!</p>
	</div>
	</a>
	
	<a src="hh.php">
	<div id="div2">
		<a href="senha.php" ><img id="ft1" src="Imagens\cozinhaimg.jpg" /></a>
	</div>
	</a>
	
	
	<div id="div2">
		<p class="bof"></p>
		<img src="" />
	</div></a>
</div>




</body>

</html>