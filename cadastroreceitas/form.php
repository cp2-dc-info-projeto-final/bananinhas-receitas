<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="UTF-8">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="http://127.0.0.1/edsa-testt/stylee.css">
<title>PesquisaBOX</title>

 </head>
 <body>
    <form method="POST" action="pesquisar.php">
  <div class="buscar-caixa">
 
   <input type="text" name="pesquisar" class="buscar-txt" placeholder="Buscar..."/>
   <a class="buscar-btn">
    <i class="fas fa-search"></i>

   </a>
  </div>
  </form>
 </body>
</html>