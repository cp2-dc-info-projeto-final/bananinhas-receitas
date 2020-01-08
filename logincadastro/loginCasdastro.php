<?php
        session_start();
        include "../Home/links.php";
    ?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login e Cadastro</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style2.css" media="screen" />
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



    <div id="back">
        <div class="backright"></div>
        <div class="backleft"></div>
    </div>
    <div id="slidebox">
        <div class="toplayer">
            <div class="left">

        <?php
        if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
        ?>
      
      <div class="content2 row justify-content-center">
                    <h2 class="text-primary"><b>REGISTRAR<b></h2>
          <form action="cadastroControle.php" method="post"> 
            <div class="form-group text-center">
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome de usuário" required="required">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
              <input type="text" class="form-control" name="tel" id="tel" placeholder="Telefone" required="required">
              <input type="Date" class="form-control" name="dataNasc" id="datanasc" placeholder="Data de nascimento" required="required">
              <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required="required">
              <input type="password" class="form-control" name="senha2" id="senha2" placeholder="Confirmar senha" required="required">
              </div>
              <div class="radion">
                <input type="radio" name="sexo"  id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>

                <input type="radio" name="sexo" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>

                <input type="radio" name="sexo" id="outro" value="outro" required>
                <label for="outro">Outro</label>
              </div>
              
              <button class="btn btn-primary" type="submit" id="enviar">Enviar</button>
              <!--<button>Enviar</button>-->
           </form class="text-center">
          <button id="goleft" class="btn btn-outline-primary mt-1">Já tenho</button>
        </div>
    </div>
      
      <div class="right">
            <?php
        if(array_key_exists('erro', $_SESSION) == true){
          $erro = $_SESSION["erro"];
          echo "<br><b>$erro</b>";

          } 
            ?> 
    
          <div class="content row justify-content-center">
          <h2 class="text-primary"><b>LOGIN<b></h2>
          <form class="text-center" action="loginControle.php" method="post"> 
        <div class="form-group mt-0">
          <input name="email" class="form-control" type="text" id="email" placeholder="Email">
          <input name="senha" class="form-control" type="password" id="senha" placeholder="Senha">
         </div>         
          <button class="btn btn-primary" type="submit" id="logar">Logar</button> 
              <?php
              session_unset();
              ?>
           </form>  
           <form class="text-center" action="login.php" method="post" onsubmit="return false;"> 
           <button class="btn btn-outline-primary mt-1" id="goright">Criar</button>
           </form>  
          </div>  
      </div>
    </div>
</div>


<script>
  $(document).ready(function(){
       $('#goright').on('click', function(){
    $('#slidebox').animate({
      'marginLeft' : '0'
    });
    
    $('.toplayer').animate({
      'marginLeft' : '100%'
    });
    });
  
  $('#goleft').on('click',function(){
    $('#slidebox').animate({
      'marginLeft' : '50%'
    });
    
    $('.toplayer').animate({
      'marginLeft' : '0'
    });
  });
 });
  
</script>     


</body>
</html>