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
   <meta charset="utf-8">
          <title> Pesquisa </title>
     </head>
 <body>
<<<<<<< HEAD
 

=======

   <h5 class="nav_handle">Menu</h5>
   <nav class="navigation" data-navigation-handle=".nav_handle">
   	<a href="#">One</a>
   	<a href="#">Two</a>
   	<a href="#">Three</a>
   </nav>

<a href="http://127.0.0.1/edsa-bananinhas-receitas/logincadastro/home/home.html">
<img src="../Imagens/logo.png" alt="" width="180" height="92" border="0">
</a>
>>>>>>> b1ec0010b9025ebfadf6f901a9ab7a2b6435c829

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
