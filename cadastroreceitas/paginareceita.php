<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
  }
?>
<!DOCTYPE html>

<html lang= "pt-bt">
    <head>
        <meta charset= "utf-8">
        <title>Pagina de receitas</title>
    </head>
    <body>
    
        <?php
            echo $_SESSION['id']
        ?>
        <a name="Nome"></a>
        <a name="descrição"></a>
        <a name="Ingredientes"></a>
        <a name="mododepreparo"></a>
        <div>

        </div>
    </body>
</html>