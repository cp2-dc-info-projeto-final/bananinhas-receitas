<?php
session_start();
?>
<!DOCTYPE html>

<html lang= "pt-bt">
<head>
    <meta charset= "utf-8">
    <title>Cadastro</title>
</head>
<link href="cadastroreceitas.css" rel="Stylesheet" type="text/css">

<body>
<?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
?>
<div class="container">
    <form id="contact" action="processa.php" method="post">
        <h3>Cadastro de Receitas</h3>

        <input type="text" name="NomeReceita" id="NomeReceita" placeholder="Nome da receita" required="required">
      
       
         <input type="text" name="nome" id="nome" placeholder="ingrediente" required="required">
        <input type="text" name="ModPreparo" id="ModPreparo" placeholder="Modo de Preparoooo" required="required">
        <button type="submit" id="cadastrar">Cadastrar</button>
    </form>
</div>
</body>
</html>
