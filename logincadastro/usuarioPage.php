<?php
session_start();
include "../Home/links.php";
?>

<html>
<html lang= "pt-br">
    <head>
    <link href="user1.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
        <title> Página do usuário</title>
    </head>


<nav class="navbar navbar-expand-lg bg-primary">

  <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<!-- Menu dropdown -->

       <div class="row">
       <div class="d-lg-none">
       <a href="home/home.php"><img src="../imagens/logo.png"></a>
       </div>
       
       <div class="d-lg-none">
       <a class="nav-link d-lg-none" href="../logincadastro/usuarioPage.php"><i class="fas fa-user d-lg-none"></i></a>
      </div>

       <div class="d-lg-none">
        <a class="nav-link d-lg-none" href="../logincadastro/logincasdastro.php"><i class="fas fa-sign-in-alt d-lg-none"></i></a>
       </div>
       </div>

  <!-- Menu categorias mobile -->

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">


      <ul class="navbar-nav mx-auto">

      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="../cadastroreceitas/buscain.php"><i class="fas fa-search fa-2x d-lg-none"></i> <span>Pesquisa por ingrediente</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="../cadastroreceitas/formpesquisa.php"><i class="fas fa-search fa-2x d-lg-none"></i> <span>Pesquisa por nome</span></a>
      </li>

        </ul>

       



        <div class="container">
        <div class="row">
        
        <div class="col-6">
        <div class="pt-2 d-none d-lg-block">
        <a href="home/home.php"><img src="../imagens/logo.png"></a>
        </div>
        </div>
      
        <div class="d-none d-lg-block" data-toggle="tooltip" title="Pesquisar">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        <a class="nav-link" href="#"><i class="fas fa-search"></i>
        <i class="fas fa-angle-down"></i></a>
        </button>
        </div>

        <div class="pt-2 d-none d-lg-block" data-toggle="tooltip" title="Página de usuário">
        <a href="../logincadastro/usuarioPage.php" class="nav-link" href="#"><i class="fas fa-user"></i></a>
        </div>
         
        <div class="pt-2 d-none d-lg-block" data-toggle="tooltip" title="Sair">
        <a href="../logincadastro/logincasdastro.php" class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i></a>
        </div>

        </div>
        </div>
</nav>

<body class="bg-primary">

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Pesquisar por:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <button type="button" class="btn btn-primary btn-lg"><a class="nav-link" href="../cadastroreceitas/formpesquisa.php">Nome de receita</a></button>
        <button type="button" class="btn btn-primary btn-lg"><a class="nav-link" href="../cadastroreceitas/buscain.php">Ingrediente chave</a></button>
      </div>
    </div>
  </div>
</div>
       

<div class="logo d-none d-lg-block col-xl-12 col-lg-12 text-center">
  <img src="../Imagens/bananalogo3.png"> 
</div>       

     
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-primary text-white text-center">
		<?php
		
			$conexao = mysqli_connect('localhost', 'root', '', 'bananaSQL');
			$email = $_SESSION['email'];
			$sql = "SELECT nome,id FROM cliente WHERE email = '$email' ";
			$date = mysqli_query($conexao, $sql);
			$result = mysqli_fetch_array($date);
			 
			echo "Seja bem vindo, ".$result['nome']. "!"; 
		?>
		<button type="button" class="btn btn-dark ml-5"><a href="loginCasdastro.php"><i class="fas fa-sign-out-alt"></i> Encerrar sessão</a></button>
	    </div>


       <div class="container-fluid col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-primary text-white text-center pt-5">
		<ul class="list-inline">
			<li class="list-inline-item pr-2"><a href="email.php"><i class="fas fa-envelope"></i> Alterar Email</a></li>
			<li class="list-inline-item pr-2"><a href="senha.php"><i class="fas fa-key"></i> Alterar Senha</a></li>
			<li class="list-inline-item pr-2"><a href="..\cadastroreceitas\cadastroreceitas.php"><i class="fas fa-cash-register"></i> Cadastrar Receitas</a></li>
		</ul>
	   </div>

     <div class=""
	    
</body>
</html>