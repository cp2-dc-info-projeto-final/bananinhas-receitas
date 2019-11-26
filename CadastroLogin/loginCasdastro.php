<?php
        session_start();

       include "../home/nav.php";
       include "../home/links.php";
    ?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
   

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

           <div class="container pt-5">
            <div class="row">
              <div class="col-6-sm mx-auto">
              <div class=""><h2><b>REGISTRAR<b></h2></div>
              </div>
            </div>
              <form action="cadastroControle.php" method="post" class="form-inline-block"> 
              <div class="form-row">
                <div class="col">
                <label for="inputEmail1">Email</label>
                <input type="text" name="nome" id="nome" placeholder="Nome de usuário" required="required" class="form-control mx-sm-3">
                </div>

                <div class="col-sm-12">
                <label>Email</label>
                <input type="email" name="email" id="email" placeholder="Email" required="required" class="form-control mx-sm-3"> 
                </div>

                <div class="col-sm-12">
                <label>Senha</label>            
                <input type="password" name="senha" id="senha" placeholder="Senha" required="required" class="form-control mx-sm-3">
                </div>

                <div class="col-sm-12">
                <label>Confirmar senha</label>
                <input type="password" name="senha2" id="senha2" placeholder="Confirmar senha" required="required" class="form-control mx-sm-3">
                <small id="passwordHelpInline" class="text-muted">
                Deve ter entre 8 e 20 caracteres.
                </small>
                </div>

              </div>              
              <button type="submit" id="enviar">Enviar</button>
              <!--<button>Enviar</button>-->
           </form>
        </div>
          </div>
        </div>

      </div>
    </div>

</body>
</html>
