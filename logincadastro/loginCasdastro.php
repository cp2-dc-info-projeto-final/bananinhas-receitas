<?php
        session_start();
    ?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login e Cadastro</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
          <form action="cadastroControle.php" method="post"> 
            <div class="form-group">
              <input type="text" name="nome" id="nome" placeholder="Nome de usuário" required="required">
              <input type="email" name="email" id="email" placeholder="Email" required="required">
              <input type="text" name="tel" id="tel" placeholder="Telefone" required="required">
              <input type="Date" name="dataNasc" id="dataNasc" placeholder="Data de nascimento" required="required">
              <input type="password" name="senha" id="senha" placeholder="Senha" required="required">
              <input type="password" name="senha2" id="senha2" placeholder="Confirmar senha" required="required">
              </div>
              <div class="radion">
                <input type="radio" name="sexo"  id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>

                <input type="radio" name="sexo" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>

                <input type="radio" name="sexo" id="outro" value="outro" required>
                <label for="outro">Outro</label>
              </div>
              
              <button type="submit" id="enviar">Enviar</button>
              <!--<button>Enviar</button>-->
           </form>
          <button id="goleft" class="off">Já tenho</button>
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
