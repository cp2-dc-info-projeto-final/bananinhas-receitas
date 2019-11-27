<?php
if (session_status() == false) {
    session_start();
    echo"bla bla bla";
}
?> 
<html lang="pt-BR" dir="ltr">
      <head>
    
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
          <link rel="stylesheet" type="text/css" href="style.css">
   
          <title> Pesquisa </title>
     </head>
 <body>
 
<div class="j1">
<ul class="nav">
<li><a href="#">Home</a></li>
<li><a href="#">Pesquisa</a></li>
<li><a href="#">CadastroReceitas</a></li>
<li><a href="#">Sobre</a></li>
</ul>
</div>


<a href="http://127.0.0.1/edsa-bananinhas-receitas/logincadastro/home/home.html">
<img src="../Imagens/logo.png" alt="" width="180" height="92" border="0">
</a>

    <form method="POST" action="pesquisa.php" >
	

	
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