<?php

include "../Home/links.php";

?>

<html lang= "pt-br">
  <head>
    <title> Resultado </title>
    <link rel="stylesheet" href="style3.css" type="text/css">
  </head>

<nav class="navbar navbar-expand-lg bg-primary">

  <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<!-- Menu dropdown -->

       <div class="row">
       <div class="d-lg-none">
       <a href="../logincadastro/home/home.php"><img src="../imagens/logo.png"></a>
       </div>
       
       <div class="d-lg-none">
       <a class="nav-link d-lg-none" href="../logincadastro/userorlogin.php"><i class="fas fa-user d-lg-none"></i></a>
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

      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-scroll fa-2x d-lg-none"></i> <span> Catálogo</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-heart fa-2x d-lg-none"></i> <span>Favoritos</span></a>
      </li>
        </ul>

       



        <div class="container">
        <div class="row">
        
        <div class="col-6">
        <div class="pt-2 d-none d-lg-block">
        <a href="../logincadastro/home/home.php"><img src="../imagens/logo.png"></a>
        </div>
        </div>
      
        <div class="d-none d-lg-block" data-toggle="tooltip" title="Pesquisar">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        <a class="nav-link" href="#"><i class="fas fa-search"></i>
        <i class="fas fa-angle-down"></i></a>
        </button>
        </div>

        <div class="pt-2 d-none d-lg-block" data-toggle="tooltip" title="Página de usuário">
        <a href="../logincadastro/userorlogin.php" class="nav-link" href="#"><i class="fas fa-user"></i></a>
        </div>
         
        <div class="pt-2 d-none d-lg-block" data-toggle="tooltip" title="Entrar">
        <a href="../logincadastro/logincasdastro.php" class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i></a>
        </div>

        </div>
        </div>
</nav>


<body>

  <!-- Modal -->
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
</div>

<div class="container-fluid">
<div class="row equal-height-columns" >

<div class="partelogo d-none d-lg-block col-xl-6 col-lg-6 pt-5">
    <div class="equal-column-content">
    <div class="logolateral w-100" style="height:950px; margin-left:0px;">
    </div>
   </div>
  </div>

  <div class="ladoresult col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 bg-white">

<?php
require "conexao.php";
$conn = getConnection();
$pesquisar = $_POST['pesquisar'];
$sql  = "SELECT idreceitas, nome, descricao, ModPreparo, ingredientes FROM receitas WHERE nome LIKE '%$pesquisar%' LIMIT 10";
$resultado = mysqli_query($conn, $sql);

while($rows_receitas = mysqli_fetch_array($resultado)){
      
	  echo '<div class="container">'.'<form id="contact">';
      echo "<h3>" ."Receita: " ."</h3>"	."<p>" .$rows_receitas['nome'] ."</p>";
      echo "<h3>" ."Descrição: " ."</h3>" ."<p>".$rows_receitas['descricao'] ."</p>";
      echo "<button id='button1'><a href=\"paginareceita.php?id=" . $rows_receitas['idreceitas'] . "\">Escolher receita</a></button><br>";
	echo '</form>'.'</div>';  
	  

    }

?>
</div>
</html>