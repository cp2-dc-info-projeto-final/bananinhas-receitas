<?php
if (session_status() == false) {
    session_start();
    echo"bla bla bla";
}
?> 
<html>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">

 <body>
    <form method="POST" action="buscainrows.php">
	
	<div id="nomebusca"><p>___Busca por Ingredientes___</p></div>
	
  <div class="buscar-caixa">
 
   <input type="text" name="pesquisar" class="buscar-txt" placeholder="Buscar..."/>
   <button type="submit">
   <a class="buscar-btn">
    <i class="fas fa-search"></i>

   </a>
  </div>
  </form>
 </body>
</html>