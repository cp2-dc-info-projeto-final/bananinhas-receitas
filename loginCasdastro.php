<?php
        session_start();
    ?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login e Cadastro</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

</head>

<body>
    <div id="back">
        <div class="backright"></div>
        <div class="backleft"></div>
    </div>
    <div id="slidebox">
        <div class="toplayer">
            <div class="left">
                <div class="content">

        <?php
        if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
        ?>

                    <h2><b>REGISTRAR<b></h2>
          <form action="cadastro.php" method="post"> 
            <div class="form-group">
              <input type="text" name="nome" id="nome" placeholder="Nome de usuário">
              <input type="text" name="email" id="email" placeholder="Email">
              <input type="text" name="telefone" id="telefone" placeholder="Telefone">
              <input type="Date" name="dataNascimento" id="dataNascimento" placeholder="Data de nascimento">
              <input type="password" name="senha" id="senha" placeholder="Senha">
              <input type="password" name="senha2" id="senha2" placeholder="Confirmar senha">
              </div>
              <div class="form-group">
                <label>
                    <input type="radio" name="sexo" value="masculino"> Masculino
                </label>
                <label>
                    <input type="radio" name="sexo" value="feminino"> Feminino
                </label>
                <label>
                    <input type="radio" name="sexo" value="outro"> Outro
                </label>
              </div>
              <div class="form-group"></div>
              <div class="form-group"></div>
              <button id="goleft" class="off">Já tenho</button>
              <input type="submit" id="enviar" value="Enviar">
              <!--<button>Enviar</button>-->
           </form>
          
          </div>
        </div>
      
      <div class="right">
        <div class="content">
            <?php
        if(array_key_exists('erro', $_SESSION) == true){
          $erro = $_SESSION["erro"];
          echo "<br><b>$erro</b>";

          } 
            ?> 
          <h2><b>LOGIN<b></h2>
          <form action="login.php" method="post"> 
        <div class="form-group">
          <input type="text" id="email" placeholder="Email">
          <input type="password" id="senha" placeholder="Senha">
         </div>         
          <input type="submit" id="logar" value="Logar"> 
              <?php
              session_unset();
              ?>
           </form>  
           <form action="login.php" method="post" onsubmit="return false;"> 
              <button id="goright" class="off">Criar</button>
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
