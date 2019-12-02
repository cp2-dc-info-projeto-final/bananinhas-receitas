<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
  }

include "../home/links.php"; include "../home/nav.php";

?>
<!DOCTYPE html>

<html lang= "pt-bt">
    <head>
<<<<<<< HEAD
    <link href="paginareceitas.css" rel="Stylesheet" type="text/css">
=======
    <link href="paginareceita.css" rel="Stylesheet" type="text/css">
>>>>>>> b1ec0010b9025ebfadf6f901a9ab7a2b6435c829
        <meta charset= "utf-8">
        <title> receitas</title>
    </head>
    <body>
<<<<<<< HEAD
    
        
        
=======
   
       
       
>>>>>>> b1ec0010b9025ebfadf6f901a9ab7a2b6435c829
        <div class="container">
    <form id="contact" action="processa.php" method="post">
        <h3>Nome Da Receita</h3>
        <?php
<<<<<<< HEAD
      
            echo $_SESSION['nome'];
          
=======
     
            echo $_SESSION['nome'];
         
>>>>>>> b1ec0010b9025ebfadf6f901a9ab7a2b6435c829
        ?>
     
    </form>
</div>
<div class="container">
    <form id="contact" action="processa.php" method="post">
        <h3>Descrição</h3>
        <?php
<<<<<<< HEAD
      
            echo $_SESSION['descricao'];
          
=======
     
            echo $_SESSION['descricao'];
         
>>>>>>> b1ec0010b9025ebfadf6f901a9ab7a2b6435c829
        ?>
     
    </form>
</div>
<div class="container">
    <form id="contact" action="processa.php" method="post">
        <h3>Ingredientes</h3>
        <?php
<<<<<<< HEAD
      
            echo $_SESSION['ingredientes'];
          
=======
     
            echo $_SESSION['ingredientes'];
         
>>>>>>> b1ec0010b9025ebfadf6f901a9ab7a2b6435c829
        ?>
     
    </form>
</div>       <div class="container">
    <form id="contact" action="processa.php" method="post">
        <h3>Modo De Preparo</h3>
        <?php
<<<<<<< HEAD
      
            echo $_SESSION['modpreparo'];
          
=======
     
            echo $_SESSION['modpreparo'];
         
>>>>>>> b1ec0010b9025ebfadf6f901a9ab7a2b6435c829
        ?>
     
    </form>
</div>
    </body>
</html>
<<<<<<< HEAD


=======
>>>>>>> b1ec0010b9025ebfadf6f901a9ab7a2b6435c829
