<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
  }

include "../home/links.php"; include "../home/nav.php";

?>
<!DOCTYPE html>

<html lang= "pt-br">
    <head>
    <link href="paginareceitas.css" rel="Stylesheet" type="text/css">
    <meta charset="UTF-8">
        <title> receitas</title>
    </head>
    <body>
    
        
        
<div class="container">
    <form id="contact" action="processa.php" method="post">
        <h3>Nome Da Receita</h3>
			<?php  echo "<p>" .$_SESSION['nome'] ."</p>"; ?>
		<h3>Descrição</h3>
			<?php  echo "<p>" .$_SESSION['descricao'] ."</p>"; ?>
		<h3>Ingredientes</h3>
			<?php  echo "<p>" .$_SESSION['ingredientes'] ."</p>"; ?>
		<h3>Modo De Preparo</h3>
			<?php  echo "<p>" .$_SESSION['modpreparo'] ."</p>";   ?>
     
    </form>
</div>

    </body>
</html>


