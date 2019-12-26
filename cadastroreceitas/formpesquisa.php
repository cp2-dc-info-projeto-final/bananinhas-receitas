<?php 

  include "menu.php";


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
