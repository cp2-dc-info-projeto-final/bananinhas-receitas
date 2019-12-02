<?php
session_start();
include "../home/links.php"; include "../home/nav.php";
?>

<!DOCTYPE html>

<html lang= "pt-br">
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

        <input type="text" name="nome" id="nome" placeholder="Nome da receita" required="required">
        <input type="text" name="descricao" id="descricao" placeholder="descrição" required="required">
        <input type="text" name="ingredientes" id="ingredientes" placeholder="ingredientes" required="required">
        <textarea name="ModPreparo" id="ModPreparo" placeholder="Modo de Preparo" required="required" rows="5" cols="33"></textarea>
        <button type="submit" id="cadastrar">Cadastrar</button>
    </form>
</div>
</body>
</html>
