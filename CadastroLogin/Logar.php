 <?php
        session_start();
       include "../home/links.php";
    ?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
   

</head>

<body>

<nav class="navbar navbar-expand-lg bg-primary">

  <button class="navbar-toggler mb-2 navbar-dark" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Menu -->

       <div class="row">
       <div class="d-lg-none">
       <a href="#"><img src="../imagens/logo.png"></a>
       </div>
       </div>

  <!-- Menu categorias mobile -->

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

      
      <ul class="navbar-nav ml-auto">

      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-sign-in-alt fa-2x d-lg-none"></i> <span>Entrar</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-search fa-2x d-lg-none"></i> <span>Buscar</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-scroll fa-2x d-lg-none"></i> <span> Catálogo</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-heart fa-2x d-lg-none"></i> <span>Favoritos</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-user fa-2x d-lg-none"></i> <span>Página de usuário</span></a>
      </li>
        </ul>


       



        <div class="container">
        <div class="row">
        
        <div class="col-6">
        <div class="d-none d-lg-block">
        <a href="#"><img src="../imagens/logo.png"></a>
        </div>
        </div>
      
        <div class="d-none d-lg-block" data-toggle="tooltip" title="Pesquisar">
        <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
        </div>

        <div class="d-none d-lg-block" data-toggle="tooltip" title="Catálogo">
        <a class="nav-link" href="#"><i class="fas fa-scroll"></i></a>
        </div> 

        <div class="d-none d-lg-block" data-toggle="tooltip" title="Favoritos">
        <a class="nav-link" href="#"><i class="fas fa-heart"></i></a>
        </div>

        <div class="d-none d-lg-block" data-toggle="tooltip" title="Página de usuário">
        <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
        </div>
         
        <div class="d-none d-lg-block" data-toggle="tooltip" title="Entrar">
        <a class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i></a>
        </div>

        </div>
        </div>
</nav>



  <div class="content">
            <?php
        if(array_key_exists('erro', $_SESSION) == true){
          $erro = $_SESSION["erro"];
          echo "<br><b>$erro</b>";

          } 
            ?> 
		      <div class="content mx-auto">
          <h2><b>LOGIN<b></h2>
          <form action="loginControle.php" method="post"> 
        <div class="form-group">
          <input name="email" type="text" id="email" placeholder="Email">
          <input name="senha" type="password" id="senha" placeholder="Senha">
         </div>         
          <button type="submit" id="logar">Logar</button> 
              <?php
              session_unset();
              ?>
           </form>  
           <form action="login.php" method="post" onsubmit="return false;"> 
           <button id="goright" class="off">Criar</button>
           </form> 
           </div> 
          </div>

        </body>
        </html>