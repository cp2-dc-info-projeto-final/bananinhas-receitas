<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
  }
?>
<?php
//index.php
include("../home/nav.php");
include ("../home/links.php");
?>

<!DOCTYPE html>
<html lang= "pt-bt">
    <head>
        <meta charset= "utf-8">
        <title>Pagina de receitas</title>
    </head>
    <body>
    
        <?php

            echo $_SESSION['id'];          
            echo $_SESSION['nome'];
            echo $_SESSION['descricao'];
            echo $_SESSION['modpreparo'];
            echo $_SESSION['ingredientes']
        ?>
        <div>

        </div>
    </body>
</html>