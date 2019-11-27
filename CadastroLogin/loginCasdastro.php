<?php
        session_start();
       include "../home/links.php";
    ?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style1.css">
   

</head>

<body>

<nav class="navbar navbar-expand-lg bg-primary">

  <button class="navbar-toggler mb-2 navbar-dark" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Menu -->

       <div class="row mx-auto">
       <div class="d-lg-none col-lg-4 col-md-4">
       <a href="#"><img src="../imagens/logo.png"></a>
       </div>
       </div>

  <!-- Menu categorias mobile -->

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

      
      <ul class="navbar-nav mx-auto">

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

        <div class="d-none d-lg-block " data-toggle="tooltip" title="Catálogo">
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




        <?php
        if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
        ?>
          
           <div class="container mt-5 ">
            <div class="content mx-auto col-xl-6 col-lg-6 col-md-6">
            <div class="row">
              <div class="col-6-sm mx-auto">
              <div class=""><h2><b>REGISTRAR<b></h2></div>
              </div>
            </div>
              <form action="cadastroControle.php" method="post" class="form-inline-block"> 
              <div class="form-row">
             
                <label for="inputEmail1">Nome de usuário</label>
                <input type="text" name="nome" id="nome" placeholder="Nome de usuário" required="required" class="form-control">
             

              
                <label>Email</label>
                <input type="email" name="email" id="email" placeholder="Email" required="required" class="form-control"> 
             

                <label>Senha</label>            
                <input type="password" name="senha" id="senha" placeholder="Senha" required="required" class="form-control">
            

                
                <label>Confirmar senha</label>
                <input type="password" name="senha2" id="senha2" placeholder="Confirmar senha" required="required" class="form-control">
                <small id="passwordHelpInline" class="text-muted">
                Deve ter entre 8 e 20 caracteres.
                </small>
                

              </div>              
              <button type="submit" id="enviar">Enviar</button>
              <!--<button>Enviar</button>-->
           </form>
        </div>
      </div>
      </div>
</body>
</html>
