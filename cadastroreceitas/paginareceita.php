<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
  }

include "../home/links.php"; include "../home/nav.php";

?>
<!DOCTYPE html>

<html lang= "pt-bt">
    <head>
    <link href="paginareceitas.css" rel="Stylesheet" type="text/css">
        <meta charset= "utf-8">
        <title> receitas</title>
    </head>
    <body>
    
        
        
        <div class="container">
    <form id="contact" action="processa.php" method="post">
        <h3>Nome Da Receita</h3>
        <?php
      
            echo $_SESSION['nome'];
          
        ?>
     
    </form>
</div>
<div class="container">
    <form id="contact" action="processa.php" method="post">
        <h3>Descrição</h3>
        <?php
      
            echo $_SESSION['descricao'];
          
        ?>
     
    </form>
</div>
<div class="container">
    <form id="contact" action="processa.php" method="post">
        <h3>Ingredientes</h3>
        <?php
      
            echo $_SESSION['ingredientes'];
          
        ?>
     
    </form>
</div>       <div class="container">
    <form id="contact" action="processa.php" method="post">
        <h3>Modo De Preparo</h3>
        <?php
      
            echo $_SESSION['modpreparo'];
          
        ?>
     
    </form>
</div>
    </body>
</html>


